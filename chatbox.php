<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZyChats</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/reglog.css">
    <link rel="stylesheet" href="assets/css/extra.css">
</head>
<body class="body2">

    <?php

        session_start();

        if(!isset($_SESSION['auth'])){
            header('login.php');
        }

    ?>

    <header>
        <div class="cbtitleall">
            <div class="cblogo"><a href="chatbox.php">ZyChats</a></div>
            <div class="cbtitle">Server Chatroom</div>
            <div class="logoutbutton"><a href="login.php">Log out</a></div>
        </div>
    </header>

    <main>
        <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="row pt-2" id="messages">
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </main>

    <footer>
        <div class="messageholder">
            <input type="text" placeholder="Type Something" id="message" name="message">
        </div>
    </footer>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/message.js"></script>
</body>
</html>