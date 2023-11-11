<html>

    <head>
        <meta charset="ISO-8859-1">
        <link rel="stylesheet" href="css/show_chat_style.css">
        <?php session_start(); ?>
    </head>

    <body>

        

        <?php
            require_once("variabili_conn.php");
            $idUser = $_SESSION['idUser'];
            $idDest = $_GET['idDest'];
            $sql = "SELECT tm.idUser, tm.messaggio, tm.dataIns FROM tmessaggi tm WHERE (tm.idUser = $idUser AND tm.idDest = $idDest) OR (tm.idUser = $idDest AND tm.idDest = $idUser) ORDER BY tm.dataIns";
            $res = mysqli_query($con, $sql);
            if(mysqli_num_rows($res) > 0)
            {
                while($row = mysqli_fetch_assoc($res))
                {
                    $idMit = $row['idUser'];
                    $mess  = $row['messaggio'];
                    $data  = $row['dataIns'];
                    if($idMit == $idUser)
                        echo "<div class='mit_to_dest'>";
                    else
                        echo "<div class='dest_to_mit'>";
                    echo "<p class='message'>$mess</p>";
                    echo "<span class='data'>$data</p>";
                    echo "</div>";
                }
            }
        ?>

        <p id="space"></p>

        <div id="mess_send_container">
            <textarea id="message_area"></textarea>
            <button id="icon_button">
                <img src="img/send-message.png" alt="Send Icon">
            </button>
        </div>
    </body>

</html>