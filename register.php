<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/reglog.css">
    <link rel="stylesheet" href="assets/css/extra.css">
    <title>ZyChats - Sign Up</title>
</head>
<body class="body">

    <div id="loader">
        <div><img src="assets/img/loading.gif" alt="Loading"></div>
    </div>

    <main>
    <div class="centered">
        <div class="backg">
            <div class="topper"><a href="register.php">ZyChats</a></div>

                <div class="regtitle">Sign up to chat with our server users!</div>

                <form id="registration">

                        <div class="infocontainer">
                            <label for="name"></label>
                            <input class="holder" type="text" placeholder="Name (must have 6 character)" name="name" id="name">
                        </div>

                        <div id="errinp" class="inpmarg red err hddn"><p>* Invalid Input</p></div>

                        <br>
                        <div class="infocontainer">
                            <label for="usn"></label>
                            <input class="holder" type="text" placeholder="Email (must have 5 character)" name="usn" id="usn">
                        </div>

                        <div id="errinp2" class="inpmarg2 red err hddn"><p>* Invalid Input</p></div>
                        
                        <br>
                        <div class="infocontainer">
                            <label for="pwd"></label>
                            <input class="holder" type="password" placeholder="Password (must have 6 character)" name="pwd" id="pwd">
                        </div>

                        <div id="errinp3" class="inpmarg3 red err hddn"><p>* Invalid Input</p></div>

                        <div class="showpwd">
                            <input class="cbox" type="checkbox" id="showpwd">
                        </div>

                    <br>

                    <div class="alr">
                        Already have an account? <a id="haveacc" href="login.php">Log In</a>
                    </div>

                    <div class="actbt">
                        <button type="button" class="register regs">Sign Up</button>
                    </div>

                </form>

        </div>
    </div>

    </main>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/register.js"></script>
</body>
</html>