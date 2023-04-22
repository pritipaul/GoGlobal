<?php
    session_start();
?>
<!DOCTYPE html>
<?php
		include "./server.php";
        $id1 = $_GET['catagory_id'];
		$selectquery = "SELECT * FROM `forum` . `category` where catagory_id = $id1";
		$query = mysqli_query($con,$selectquery);
		$row = mysqli_fetch_array($query);
		?>
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
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <style>
    body {
        color: white;
    }

    p {
        text-align: justify;
        text-justify: inter-word;
    }

    .alert p {
        color: rgb(2, 17, 2);
    }

    .alert {
        padding: 50px;
    }

    .container {
        width: 850px;
    }

    .user {
        display: flex;
        flex-direction: column;
        margin: 20px;
    }

    .title_d {
        width: 800px;
        display: block;
        margin: auto;
    }

    .title_d h2 {
        margin: 20px;
    }

    .heading {
        display: flex;
        justify-content: center;
        align-content: center;
        margin: 20px;
    }

    .list {
        margin-left: 30px;
    }

    .list h4 a {
        color: white;
    }

    hr {
        color: black;
    }

    .list .headingpart a:hover {
        color: #73c0f7;
    }

    .user i {
        margin: 5px;
    }

    .list .span {
        color: rgb(194, 209, 204);
        font-size: 12px;
        margin-top: -15px;
        display: flex;
    }

    #request {
        width: 850px;
        display: block;
        margin: auto;

    }

    .headingpart a {
        font-size: 20px;
        color: rgb(108, 226, 185);
        font-weight: bold;
        margin: 3px;
    }

    .headingalert {
        display: flex;
        justify-content: center;
        align-content: center;
        margin: auto;
        padding: 6px;
        border-radius: 20px;
    }

    .listhead {
        display: flex;
    }

    .searchbox {
        width: 80%;
    }

    footer {
        display: flex;
        justify-content: center;
        align-content: center;
    }

    @media only screen and (max-width: 1020px) and (min-width: 0px) {
        .headingalert {
            font-size: 10px;
        }

        body {
            background-color: red;
        }

        /* .copyright {
            width: 500px;
        } */

        #request {
            width: 600px;
        }
    }

    @media only screen and (max-width: 800px) and (min-width: 0px) {

        .list p,
        .headingpart {
            width: 350px;
        }

        .title_d {
            width: 400px;
        }

        .container {
            width: 400px;
        }

        .copyright {
            width: 300px;
        }

        #request {
            width: 400px;
        }
    }

    @media only screen and (max-width: 580px) and (min-width: 450px) {
        .alert {
            width: 280px;
        }

        #request {
            width: 400px;
        }

        .copyright {
            width: 200px;
        }
    }

    @media only screen and (max-width: 450px) and (min-width: 0px) {
        .alert {
            width: 280px;
        }

        .list p,
        .headingpart {
            width: 150px;
        }

        .title_d {
            width: 300px;
        }

        .container {
            width: 300px;
        }

        #request {
            width: 250px;
        }

        .copyright {
            width: 200px;
        }
    }

    @media only screen and (max-width: 280px) and (min-width: 0px) {
        .container {
            padding: 10px;
            width: 250px;
        }

        #request {
            width: 200px;
        }

        .copyright {
            width: 200px;
        }
    }
    </style>
</head>

<!-- body -->

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
        <a href="./index.php#topic">Forum Topics</a>
        <a href="./index.php#about">About Us</a>
        <a href="./index.php#group">Group Details</a>
        <a href="./index.php#feedback">Feedback</a>
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
    <!-- about -->
    <div id="about" class="about">
        <div class="container">
            <div class="alert alert-warning" role="alert">
                <h1 class="alert-heading">Welcome To <?php echo $row['category_name'];  ?> Forum</h1>
                <p><?php echo $row['category_long_des'];  ?></p>
                <hr>
                <p class="mb-0 text-danger">Welcome to our forum! In order to maintain a safe and welcoming environment,
                    we ask that
                    all members refrain from engaging in mischievous activities and refrain from using slang or
                    inappropriate language.</p>
            </div>
        </div>
        <?php
        if (isset($_SESSION['logdin']) && $_SESSION['logdin']==true) {
        echo  '<div class="col-md-10 offset-md-1" id="start">
                <h2 class="heading">Start Discussion</h2>
                <form id="request" class="main_form" action="'. $_SERVER["REQUEST_URI"] . '" method="post"
                    onsubmit="return validateForm()" name="myForm">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" class="contactus" placeholder="Enter the Title*" name="queston_title">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="contactus" placeholder="Enter the Description*" name="question_des">
                        </div>
                        <div class="col-md-12">
                            <input type="hidden" class="contactus" name="question_user" value = "'. $_SESSION["user_id"].'">
                        </div>
                        <div class="col-md-12">
                            <button name="subbutton" class="send_btn" id="signupbtn" type="submit"
                                value="Submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>';
}
else {?>
        <div class="col-md-10 offset-md-1" id="start">
            <h2 class="heading">Start Discussion</h2>
            <div class="headingalert alert-danger text-danger col-8" role="alert" style="height: 40px;">
                You are not Signed In to our page. Please Sign In first and Start Discussion !!!
            </div>
        </div>
        <?php
}
     ?>

        <div class="title_d">
            <h2>Discussion</h2>
            <?php
                include "./server.php";
                $id1 = $_GET['catagory_id'];
                $selectquery = "SELECT * FROM `forum` . `question` where question_cat_id = $id1";
                $query = mysqli_query($con,$selectquery);
                while ($row = mysqli_fetch_array($query)) {
                    $question_user = $row['question_user'];
                    $sql2 = "SELECT * FROM `forum` . `user` where user_id  = $question_user";
                    $query2 = mysqli_query($con,$sql2);
                    $row2 = mysqli_fetch_array($query2);
		?>
            <div class="user">
                <div class="listhead">
                    <i class="fa fa-user text-danger" style='font-size:25px;color:white' aria-hidden="true"></i>
                    <div class="headingpart"><a
                            href="./singleforum.php?question_id=<?php  echo $row['question_id']; ?>"><?php echo $row['queston_title'];  ?></a>
                    </div>
                </div>
                <div class="list">
                    <p><?php echo $row['question_des'];  ?></p>
                    <div class="span">
                        <div class="text-warning"><?php echo $row2['user_name']; ?> , </div>
                        <div class="text-warning"><?php echo $row['datetime'];?></div>
                    </div>
                </div>
            </div>

            <?php
                }
                ?>
            <!-- end about -->
            <!-- footer -->
            <footer>
                <div class="copyright text_align_center ">
                    <p>© 2023 Go Global! Online Forum Site</a></p>
                </div>
            </footer>
            <!-- end footer -->
            <!-- Javascript files-->
            <script src="js/jquery.min.js "></script>
            <script src="js/bootstrap.bundle.min.js "></script>
            <script src="js/jquery-3.0.0.min.js "></script>
            <script src="js/custom.js "></script>
            <script>
            function validateForm() {
                let x = document.forms["myForm"]["queston_title"].value;
                let y = document.forms["myForm"]["question_des"].value;
                if (x == "") {
                    alert("Title must be filled out");
                    return false;
                }
                if (y == "") {
                    alert("Description must be filled out");
                    return false;
                }
            }
            </script>
</body>

</html>

<?php
    // $noresult == TRUE;
    include "./server.php";

  if (isset($_POST['subbutton'])) {  
    $queston_title = $_POST['queston_title'];
    $question_des = $_POST['question_des'];
    $question_user = $_POST['question_user'];

    $sql = "INSERT INTO `forum` . `question` (`queston_title`, `question_des`, `question_cat_id`, `question_user`) VALUES ('$queston_title ', '$question_des', '$id1', '$question_user')";

    if ($con->query($sql) != TRUE) {
        ?>
<script>
alert("You are successfully submit your feedback !");
</script>
<?php
    }
    
} 
?>