<html>
    <head>
        <link rel="stylesheet" href="css/index_style.css">
        <meta charset="ISO-8859-1">
        <?php session_start(); ?>
    </head>

    <body>
        <div id="login_container">
            <h2 id="login_header">Sign In</h2>
            <form id="login_form" method="post" action="index.php">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <input id="login_btn" type="submit" name="login" value="Sign In">
            </form>
        </div>

        <?php
            if(isset($_POST['username']))
            {
                $username = $_POST['username'];
                if(isset($_POST['password']))
                {
                    $password = $_POST['password'];
                    $con = mysqli_connect("localhost", "root", "", "chat");
                    $sql = "SELECT * FROM tLogin tl WHERE tl.username = '$username' AND tl.password = '$password'";
                    $res = mysqli_query($con, $sql);
                    if(mysqli_num_rows($res) == 1)
                    {
                        $row = mysqli_fetch_assoc($res);
                        $_SESSION['idUser'] = $row['id'];
                        header("Location: chats_list.php");
                        mysqli_close($con);
                        exit;
                    }
                    else
                    {
                        echo "<p id='no_log_text'>Incorrect username or password.<p>";
                        mysqli_close($con);
                    }
                }
            }
        ?>
    </body>
</html>