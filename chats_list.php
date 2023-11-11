<html>
    <head>
        <link rel="stylesheet" href="css/chat_list_style.css">
        <meta charset="ISO-8859-1">
        <?php session_start(); ?>
    </head>

    <body>
        <div id="big_container">
            <div id="mess_container">
                <h1 id="title_chats">Chats</h1>
                <?php
                    require_once("variabili_conn.php");
                    $idUser = $_SESSION['idUser'];
                    $sql    = "SELECT DISTINCT tl.username, tl.id FROM tmessaggi tm JOIN tlogin tl ON (tm.idUser = $idUser AND tl.id = tm.idDest) OR (tm.idDest = $idUser AND tl.id = tm.idUser) ORDER BY tl.username";
                    $res    = mysqli_query($con, $sql);
                    $count  = 0;
                    if(mysqli_num_rows($res) > 0)
                    {
                        while($row = mysqli_fetch_assoc($res))
                        {
                            if($count == 0)
                                echo "<div class='start_tile'>";
                            else
                            {
                                if($count == mysqli_num_rows($res) - 1)
                                    echo "<div class='end_tile'>";
                                else
                                    echo "<div class='tile'>";
                            }
                            $idDest        = $row['id'];
                            $usernameDest  = $row['username'];
                            echo "<a id='tile_link' href='show_chat.php?idDest=$idDest'>";
                            echo "<img class='tile_profile' src='img/blank-profile-picture-973460_640.png' alt='Blank Profile Picture'>";
                            echo "<h2 class='tile_username'>$usernameDest</h2>";
                            echo "</a>";
                            echo "</div>";
                            $count++;
                        }
                    }
                ?>
            </div>

            <div id="new_chat_container">
                <h1 id="title_new_chat">New Chat</h1>
                <select name="users" size="1" id="users_list">
                    <?php
                        $sql = "SELECT tl.id, tl.username FROM tlogin tl WHERE tl.id != $idUser ORDER BY username ASC";
                        $res = mysqli_query($con, $sql);
                        if(mysqli_num_rows($res) > 0)
                        {
                            while($row = mysqli_fetch_assoc($res))
                            {
                                $idDest        = $row['id'];
                                $usernameDest  = $row['username'];
                                echo "<option value='$idDest'>$usernameDest</option>";
                            }
                        }
                        mysqli_close($con);
                    ?>
                </select>
                <a href="chat.php">
                    <button id="new_chat_btn">Open New Chat</button>
                </a>
            </div>
        </div>
    </body>
</html>