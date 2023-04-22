<?php
error_reporting(0);
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
    <style>
    /* text-align: justify; 
     text-justify: inter-word; */
    #wrapper {
        width: 100%;
        max-width: 100%;
        position: relative;
    }

    #carousel {
        overflow: auto;
        scroll-behavior: smooth;
        scrollbar-width: none;
    }

    #carousel::-webkit-scrollbar {
        height: 0;
    }

    #prev,
    #next {
        display: flex;
        justify-content: center;
        align-content: center;
        background: white;
        border: none;
        padding: 8px;
        border-radius: 50%;
        outline: 0;
        cursor: pointer;
        position: absolute;
    }

    #prev {
        top: 50%;
        left: 0;
        transform: translate(50%, -50%);
        display: none;
    }

    #next {
        top: 50%;
        right: 0;
        transform: translate(-50%, -50%);
    }

    #content {
        display: grid;
        grid-gap: 16px;
        grid-auto-flow: column;
        margin: auto;
        box-sizing: border-box;
    }

    .card-title {
        color: black;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card-text {
        color: black;
        font-size: 13px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: justify; 
     text-justify: inter-word;
    }

    #button {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 25px;
    }

    .card-img-top {
        height: 200px;
    }

    .searchbox {
        width: 80%;
    }
    .about_img img{
        margin-top:50px
    }
    </style>
</head>
<!------------------------------------------------ body -------------------------------------------->

<body class="main-layout">
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
        <a href="#topic">Forum Topics</a>
        <a href="#about">About Us</a>
        <a href="#group">Group Details</a>
        <a href="#feedback">Feedback</a>
    </div>
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="head-top">
            <div class="container-fluid">
                <div class="row d_flex">
                    <div class="col-sm-3">
                        <div class="logo">
                            <img src="./images/iconlogo.png" alt="" width="150px" height="150px">
                        </div>
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
                            <!-- Button trigger modal -->
                            <li class="d_none" data-toggle="modal" data-target="#exampleModal"> <a
                                    href="Javascript:void(0)"><i class="fa fa-search" style="cursor: pointer;"
                                        aria-hidden="true"></i></a> </li>
                            <li>
                                <!--search up Modal -->
                                <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <form class="container">
                                                    <input id="search" class="searchbox" type="search"
                                                        placeholder="Search Here" name="search">
                                                    <button type="button" class="btn btn-primary">Search</button>
                                                    <ul class="drop"></ul>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <button class="openbtn" onclick="openNav()"><img src="images/menu_btn.png"></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    <?php
        if (isset($_SESSION['logdin']) && $_SESSION['logdin'] == true) {?>
    <!-- start slider section -->
    <div id="top_section" class=" banner_main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container-fluid">
                                    <div class="carousel-caption relative">
                                        <div class="row d_flex">
                                            <div class="col-md-6">
                                                <div class="con_img">
                                                    <figure><img class="img_responsive" src="./images/pic2.gif" ;
                                                            alt="#" /></figure>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bluid">
                                                    <h1>Go Global !<br></h1>
                                                    <p>Go Global ! is a platform where millions of developers as well as
                                                        technocrats can reach out to the tech community with their
                                                        queries, and new approaches in technologies.Technology is best
                                                        when it brings people together. So go smart, Go Global!
                                                    </p>
                                                    <!-- <a class="read_more" href="./contact.php">Login</a> -->
                                                    <p>Welcome <?php echo $_SESSION["user_name"]; ?> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container-fluid">
                                    <div class="carousel-caption relative">
                                        <div class="row d_flex">
                                            <div class="col-md-6">
                                                <div class="con_img">
                                                    <figure><img class="img_responsive" src="./images/pic2.gif"
                                                            alt="#" /></figure>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bluid">
                                                    <h1>Internet Forum</h1>
                                                    <p>An online community, also called an internet community or web
                                                        community, is a community whose members interact with each other
                                                        primarily via the Internet. Members of the community usually
                                                        share common interests.For Techies it is very important to reach
                                                        out for their queries, hence a community of tech genies would
                                                        serve the purpose.
                                                    </p>
                                                    <!-- <a class="read_more" href="./contact.php">Login</a> -->
                                                    <p>Welcome <?php echo $_SESSION["user_name"]; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container-fluid">
                                    <div class="carousel-caption relative">
                                        <div class="row d_flex">
                                            <div class="col-md-6">
                                                <div class="con_img">
                                                    <figure><img class="img_responsive" src="./images/pic2.gif"
                                                            alt="#" /></figure>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bluid">
                                                    <h1>Need help?</h1>
                                                    <p>You have come to the right place at the right time. Reach out to the Go Global community!
                                                    </p>
                                                    <!-- <a class="read_more" href="Javascript:void(0)">Read More </a><a
                                                        class="read_more" href="Javascript:void(0)">Get A Quote </a> -->
                                                    <p>Welcome <?php echo $_SESSION["user_name"]; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div>
                        <?php
                            }
                            else {?>
                        <!-- start slider section -->
                        <div id="top_section" class=" banner_main">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div class="container-fluid">
                                                        <div class="carousel-caption relative">
                                                            <div class="row d_flex">
                                                                <div class="col-md-6">
                                                                    <div class="con_img">
                                                                        <figure><img class="img_responsive"
                                                                                src="./images/pic2.gif" ; alt="#" />
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="bluid">
                                                                        <h1>Go Global !<br></h1>
                                                                        <p>Go Global ! is a platform where millions of
                                                                            developers as well as
                                                                            technocrats can reach out to the tech
                                                                            community with their queries, and new
                                                                            approaches in technologies.Technology is
                                                                            best when it brings people together. So go
                                                                            smart, Go Global!
                                                                        </p>
                                                                        <a class="read_more"
                                                                            href="./contact.php">Login</a>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container-fluid">
                                                        <div class="carousel-caption relative">
                                                            <div class="row d_flex">
                                                                <div class="col-md-6">
                                                                    <div class="con_img">
                                                                        <figure><img class="img_responsive"
                                                                                src="./images//pic2.gif" alt="#" />
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="bluid">
                                                                        <h1>Internet Forum</h1>
                                                                        <p>An online community, also called an internet
                                                                            community or web community, is a community
                                                                            whose members interact with each other
                                                                            primarily via the Internet. Members of the
                                                                            community usually share common interests.For
                                                                            Techies it is very important to reach out
                                                                            for their queries, hence a community of tech
                                                                            genies would serve the purpose.
                                                                        </p>
                                                                        <a class="read_more"
                                                                            href="./contact.php">Login</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container-fluid">
                                                        <div class="carousel-caption relative">
                                                            <div class="row d_flex">
                                                                <div class="col-md-6">
                                                                    <div class="con_img">
                                                                        <figure><img class="img_responsive"
                                                                                src="./images/pic2.gif" alt="#" />
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="bluid">

                                                                        <h1>Need help?</h1>
                                                                        <p>You have come to the right place at the right time. Reach out to the Go Global community!
                                                                        </p>
                                                                        <a class="read_more"
                                                                            href="./contact.php">Login</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                            }
                            ?>
                                            <a class="carousel-control-prev" href="#myCarousel" role="button"
                                                data-slide="prev">
                                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#myCarousel" role="button"
                                                data-slide="next">
                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end slider section -->
                        <!-- wallet -->
                        <div class="wallet" id="topic">
                            <div class="titlepage text_align_center">
                                <h2>Forum Topics</h2>
                            </div>
                            <div id="wrapper">
                                <div id="carousel">
                                    <div id="content">
                                        <?php
                    include "./server.php";
                    $selectquery = "SELECT * FROM `forum` . `category`";
                    $query = mysqli_query($con,$selectquery); 
                    while ($row = mysqli_fetch_array($query)) { echo'

                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="./images/'. $row['catagory_img'] .'"
                            alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title">'. $row['category_name'].'</h2>
                            <p class="card-text">'.$row['category_short_des'].'</p>
                            <a href="./forampage.php?catagory_id='. $row['catagory_id'].'" id="button"
                                class="btn btn-primary">Visit Forum</a>
                        </div>
                    </div>';
                }
                ?>
                                    </div>
                                </div>
                                <button id="prev">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="none" d="M0 0h24v24H0V0z" />
                                        <path d="M15.61 7.41L14.2 6l-6 6 6 6 1.41-1.41L11.03 12l4.58-4.59z" />
                                    </svg>
                                </button>
                                <button id="next">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="none" d="M0 0h24v24H0V0z" />
                                        <path d="M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- end wallet -->
                        <!---------------------------------------- start about --------------------------------------->
                        <div id="about" class="about">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="about_border">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="titlepage text_align_left">
                                                        <h2>Our Motto</h2>
                                                    </div>
                                                    <div class="about_text">
                                                        <p>It is a community for developers from all over the globe to
                                                            communicate and interact with others regarding their errors
                                                            and queries. Come join our for society, read, comment, ask,
                                                            and help the developer community grow. </p>
                                                        <!-- <a class="read_more" href="about.html">Read More</a> -->
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="about_img">
                                                        <figure><img class="img_responsive_about"
                                                                src="images/iconlogo.png" width="400px" alt="#" />
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!----------------------------------------------- end about ----------------------------------------->

                      


                        <div class="works">
                        </div>

                        <!-----------------------------------------------start feedback --------------------------------------->
                        <div class="contact" id="feedback">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="titlepage text_align_center">
                                            <h2>Feedback</h2>
                                        </div>
                                    </div>
                                    <div class=" col-md-10 offset-md-1">
                                        <form id="request" class="main_form" onsubmit="return validateForm()"
                                            name="myForm" action="./feedback.php" method="post">
                                            <div class="row">
                                                <div class="col-md-6 ">
                                                    <input class="contactus" placeholder="Full Name *" type="text"
                                                        name="fname">
                                                </div>
                                                <div class="col-md-6">
                                                    <input class="contactus" placeholder="Email *" type="email"
                                                        name="lname">
                                                </div>
                                                <div class="col-md-12">
                                                    <textarea class="textarea" placeholder="Message *" type="type"
                                                        name="message" Message="Name"></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <button class="send_btn" name="feedbackbutton" type="submit"
                                                        value="Submit">Send</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--------------------------------- end feedback ------------------------------------------------------>


                        <!-- footer -->
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
                        <!-- end footer -->
                        <!-- Javascript files-->
                        <script src="js/jquery.min.js "></script>
                        <script src="js/bootstrap.bundle.min.js "></script>
                        <script src="js/jquery-3.0.0.min.js "></script>
                        <script src="js/custom.js "></script>
                        <script>
                        const gap = 16;

                        const carousel = document.getElementById("carousel"),
                            content = document.getElementById("content"),
                            next = document.getElementById("next"),
                            prev = document.getElementById("prev");

                        next.addEventListener("click", (e) => {
                            carousel.scrollBy(width + gap, 0);
                            if (carousel.scrollWidth !== 0) {
                                prev.style.display = "flex";
                            }
                            if (content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
                                next.style.display = "none";
                            }
                        });
                        prev.addEventListener("click", (e) => {
                            carousel.scrollBy(-(width + gap), 0);
                            if (carousel.scrollLeft - width - gap <= 0) {
                                prev.style.display = "none";
                            }
                            if (!content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
                                next.style.display = "flex";
                            }
                        });

                        let width = carousel.offsetWidth;
                        window.addEventListener("resize", (e) => (width = carousel.offsetWidth));
                        </script>

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

                        <script>
                        function validateForm() {
                            let x = document.forms["myForm"]["fname"].value;
                            let y = document.forms["myForm"]["lname"].value;
                            let z = document.forms["myForm"]["message"].value;
                            if (x == "") {
                                alert("Name must be filled out");
                                return false;
                            }
                            if (y == "") {
                                alert("Email must be filled out");
                                return false;
                            }
                            if (z == "") {
                                alert("Message must be filled out");
                                return false;
                            }
                        }
                        </script>
</body>

</html>