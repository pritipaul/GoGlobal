<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>GoGlobal!</title>
    <link rel="icon" type="image/x-icon" href="./images/windowicon.png">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  
</head>
<!----------------------------------------------------- body ------------------------------------------->
<body class="main-layout inner_page">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div>
    <!-- end loader -->
    <div id="mySidepanel" class="sidepanel">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a class="active" href="#"><img src="./images/iconlogo.png" alt="" width="100px" height="100px"></a>
        <?php
        if (isset($_SESSION['logdin']) && $_SESSION['logdin'] == true) {?>
            <a herf="">Welcome <?php echo $_SESSION["user_name"] ?></a>
            <a href="./logout.php"><i class="fa fa-user" aria-hidden="true">
                    Logout</i></a>
        <?php
            }
        else {?>
            <a href="./contact.php"><i class="fa fa-user" aria-hidden="true">
                    Login</i></a>
        <?php
        }
        ?>
        <a class="active" href="index.php">Home</a>
        <a href="./index.php#topic">Forum Topics</a>
        <a href="./index.php#about">About Us</a>
        <a href="./index.php#group">Group Details</a>
        <a href="./index.php#feedback">Feedback</a>
    </div>
    <!--------------------------------------------- Start header --------------------------------------->
    <header>
        <!-- header inner -->
        <div class="head-top">
            <div class="container-fluid">
                <div class="row d_flex">
                    <div class="col-sm-3">
                        <!-- -------------------------------Start logo -------------------------------->
                        <div class="logo">
                            <img src="./images/iconlogo.png" alt="" width="150px" height="150px">
                        </div>
                        <!-- ------------------------------ End logo -------------------------------->
                    </div>
                    <div class="col-sm-5">
                    </div>
                    <div class="col-sm-4">
                        <ul class="email text_align_right">
                            <?php
                         if (isset($_SESSION['logdin']) && $_SESSION['logdin']==true) {?>
                            <li class="d_none" data-target="#exampleModal"><a href="./logout.php"><i class="fa fa-user"
                                        aria-hidden="true"> Logout</i></a></li>

                            <?php
                         }
                         else {?>
                            <li class="d_none" data-target="#exampleModal"><a href="./contact.php"><i class="fa fa-user"
                                        aria-hidden="true"> Login</i></a></li>
                            <?php
                         }
                         ?>
                            <!-- -------------------------------Start Search -------------------------------->

                            <li class="d_none" data-toggle="modal" data-target="#exampleModal"> <a
                                    href="Javascript:void(0)"><i class="fa fa-search" style="cursor: pointer;"
                                        aria-hidden="true"></i></a> </li>
                            <li>

                                <!--search up Modal -->
                                <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- ------------------------------- End Search -------------------------------->
                                <button class="openbtn" onclick="openNav()"><img src="images/menu_btn.png"></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--------------------------------------------- end header ------------------------------------>
    <!---------------------------------------- Start Sign-in form ----------------------------------------->
    <div class="contact">
        <div class="container">
            <div class="container2" id="container">
                <div class="form-container  sign-up-container">
                    <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                        <div class="header">Sign Up</div>
                        <div class="button-input-group">
                            <div class="group input-group">
                                <input type="text" name="user_name" placeholder="Name" required>
                            </div>
                            <div class="group input-group">
                                <input type="email" name="user_email" placeholder="Username" required>
                            </div>
                            <div class="group input-group">
                                <input type="password" name="user_password" placeholder="Password" required
                                    pattern=".{8,}">
                            </div>
                            <div class="alert-text signup__alert">
                                <span class="help__text">At least 8 character</span>
                            </div>
                            <div class="group button-group">
                                <button class="signup-btn" name="signup">Sign Up</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!------------------------------ end Sign-in form ----------------------------->
                <!------------------------------ Sign-in form start ----------------------------->
                <div class="form-container  sign-in-container">
                    <form action="./login.php" method="post">
                        <div class="header">Sign In</div>
                        <div class="button-input-group">
                            <div class="group input-group">
                                <input type="email" name="loginemail" placeholder="Username" required>
                            </div>
                            <div class="group input-group">
                                <input type="password" name="loginpassword" placeholder="Password" required
                                    pattern=".{8,}">
                            </div>
                            <div class="alert-text signup__alert">
                                <span class="help__text">At least 8 character</span>
                            </div>
                            <div class="group button-group">
                                <button class="signin-btn" name="signin">Sign In</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!------------------------------ end Sign-in form ----------------------------->
                <div class="overlay-container">
                    <div class="overlay">
                        <div class="overlay-panel overlay-left">
                            <div class="logo">
                                <img src="./images/iconlogo.png" alt="" width="150px" height="150px">
                            </div>
                            <h1>Welcome Back Go Global User !</h1>
                            <p>You can Sign In with your credentials</p>

                            <div class="group button-group">
                                <button class="ghost" id="signIn">Sign in</button>
                            </div>
                        </div>
                        <div class="overlay-panel overlay-right">
                            <div class="logo">
                                <img src="./images/iconlogo.png" alt="" width="150px" height="150px">
                            </div>
                            <h1>Hello New GoGlobal ! User</h1>
                            <p>Now you can enter your personal details and start your discussion journey with us !!!</p>

                            <div class="group button-group">
                                <button class="ghost" id="signUp">Sign up</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------------------------------------------- End Sign --------------------------------------------->
    <!-------------------------------------------------------- footer ---------------------------------->
    <footer>
        <div class="footer">
            <div class="container">

                <div class="copyright text_align_center ">
                    <div class="container ">
                        <div class="row ">
                            <div class="col-md-12 ">
                                <p>© 2023 Go Global! Online Forum Site</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div id="particles-js"></div>


    <!------------------------------------------------ end footer -------------------------------------->
    <!---------------------------------------------- Javascript files------------------------------------>
    <script src=" js/jquery.min.js "></script>
    <script src=" js/bootstrap.bundle.min.js "></script>
    <script src=" js/jquery-3.0.0.min.js "></script>
    <script src=" js/custom.js "></script>

    <script>
    const signUpButton = document.getElementById("signUp");
    const signInButton = document.getElementById("signIn");
    const container = document.getElementById("container");

    signUpButton.addEventListener("click", () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener("click", () => {
        container.classList.remove("right-panel-active");
    });
    </script>
    <!-------------------------------------------end Javascript files------------------------------------>
</body>

</html>


<!---------------------------------------------- start Sign-up php ------------------------------------>
<?php
include "./server.php";
if (isset($_POST['signup'])) {  
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $hash = password_hash($user_password, PASSWORD_DEFAULT);

  $sql = "INSERT INTO `forum` . `user` (`user_name`, `user_email`, `user_password`) VALUES ('$user_name', '$user_email', '$hash')";

  if ($con->query($sql) != TRUE) {
      echo " Sothimg Problem are there !";
  }
} 
?>
<!---------------------------------------------- end Sign-up php ------------------------------------>