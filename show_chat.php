<html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/show_chat_style.css">
        <?php session_start(); ?>
        <!--<meta http-equiv="refresh" content="60">-->
    </head>

    <body>
        <a href="chats_list.php">
            <img id="back_icon" src="img/icons8-back-50.png" alt="Back Icon">
        </a>

        <img id="profile" src="img/blank-profile-picture-973460_640.png" alt="Profile">

        <p id="space_start"></p>

        <?php
            require_once("variabili_conn.php");
            $idUser = $_SESSION['idUser'];
            $idDest = $_GET['idDest'];
            if(isset($_POST['message']))
            {
                $mess = $_POST['message'];
                $data = date("Y-m-d H:i:s");
                echo $mess;
                $sql  = "INSERT INTO tmessaggi (idUser, messaggio, idDest, dataIns) VALUES ($idUser, '$mess', $idDest, '$data')";
                mysqli_query($con, $sql);
            }
        ?>

        <?php
            $sql = "SELECT tm.idUser, tm.messaggio, tm.dataIns FROM tmessaggi tm WHERE (tm.idUser = $idUser AND tm.idDest = $idDest) OR (tm.idUser = $idDest AND tm.idDest = $idUser) ORDER BY tm.dataIns";
            $res = mysqli_query($con, $sql);
            if(mysqli_num_rows($res) > 0)
            {
                while($row = mysqli_fetch_assoc($res))
                {
                    $idMit = $row['idUser'];
                    $mess  = $row['messaggio'];
                    $data  = substr($row['dataIns'], 0, 10);
                    $ora   = substr($row['dataIns'], 11);
                    $data  = date("d-m-Y", strtotime($row['dataIns']));
                    if($idMit == $idUser)
                        echo "<div class='dest_to_mit'>";
                    else
                        echo "<div class='mit_to_dest'>";
                    echo "<p class='message'>$mess</p>";
                    echo "<span class='data'>Messaggio scritto in data $data alle ore $ora</p>";
                    echo "</div>";
                }
            }
            echo "<script>idDest = $idDest;</script>";
        ?>

        <p id="space_end"></p>

        <div id="mess_send_container">
            <textarea id="message_area"></textarea>

            <form id="new_mess_form" action="show_chat.php" method="post">
                <input id="mess_in" type="hidden" name="message">
            </form>

            <button id="icon_button" onclick="setForm()">
                <img src="img/send-message.png" alt="Send Icon">
            </button>
        </div>

        <script>
            function setForm()
            {
                mess = document.getElementById("message_area").value;
                form = document.getElementById("new_mess_form");
                form.elements["message"].value = mess;
                form.action = "show_chat.php?idDest=" + idDest;
                form.submit();
            }
        </script>
    </body>

</html>