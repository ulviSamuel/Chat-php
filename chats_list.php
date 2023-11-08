<html>
    <head>
        <link rel="stylesheet" href="css/chat_list_style.css">
        <meta charset="ISO-8859-1">
        <?php session_start(); ?>
    </head>

    <body>
        <h1 id="title">Messages</h1>
        <?php
            require_once("variabili_conn.php");
            $idUser = $_SESSION['idUser'];
            $sql    = "SELECT DISTINCT tl.username, tl.id FROM tmessaggi tm JOIN tlogin tl ON (tm.idUser = $idUser AND tl.id = tm.idDest) OR (tm.idDest = $idUser AND tl.id = tm.idUser) ORDER BY tl.username";
            $res    = mysqli_query($con, $sql);
            if(mysqli_num_rows($res) > 0)
            {
                while($row = mysqli_fetch_assoc($res))
                {
                    echo "<div class='tile'>";
                    $idDest        = $row['id'];
                    $usernameDest  = $row['username'];
                    echo "<a id='tile_link' href='show_chat.php?idDest=$idDest'>";
                    echo "<h2 class='tile_username'>$usernameDest</h2>";
                    echo "</a>";
                    echo "</div>";
                }
            }
        ?>
    </body>
</html>