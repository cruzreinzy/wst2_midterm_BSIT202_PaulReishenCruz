<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/extra.css">
    <link rel="stylesheet" href="assets/css/reglog.css">
    <title>ZyChats - Log In</title>
</head>
<body class="body">

    <div id="loader2">
        <div><img src="assets/img/loading.gif" alt="Loading"></div>
    </div> 

    <div class="centered">
        <div class="backgg">
            <div class="topper"><a href="register.php">ZyChats</a></div>

                <form id="login">

                        <br>

                        <div class="infocontainer">
                            <label for="logusn"></label>
                            <input class="holder" type="text" placeholder="Username" name="logusn" id="logusn">
                        </div>

                        <div id="errinp" class="inpmarg4 red err hddn"><p>* Invalid Username</p></div>
                        
                        <br>
                        <div class="infocontainer">
                            <label for="logpwd"></label>
                            <input class="holder" type="password" placeholder="Password" name="logpwd" id="logpwd">
                        </div>

                        <div id="errinp" class="inpmarg5 red err hddn"><p>* Invalid Password</p></div>

                        <div class="showlogpwd">
                            <input class="cbox2" type="checkbox" id="showlogpwd">
                        </div>

                    <br>

                    <div class="alr">
                        Don't have an account? <a id="noacc" href="register.php">Sign up</a>
                    </div>

                    <div class="actbt">
                        <button type="button" class="register logs logins">Log In</button>
                    </div>

                </form>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/login.js"></script>
</body>
</html>