<?php
include "./server.php";
if (isset($_POST['signin'])) {  
    $loginemail = $_POST['loginemail'];
    $loginpassword = $_POST['loginpassword'];

    $selectquery = "SELECT * FROM `forum` . `user` where user_email = '$loginemail'";
	$query = mysqli_query($con,$selectquery);

    if (mysqli_num_rows($query)==1) {
        $row = mysqli_fetch_array($query);
        if (password_verify($loginpassword, $row['user_password'])) {
            session_start();
            $_SESSION['logdin'] = true;
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['user_name'] = $row["user_name"];
            ?>
            <script>alert("You are successfully Logged in to our page !");</script>
            <?php
                include "./index.php";
        }
        else {
            echo "Unable to Login You are not Sign up in this page";
        }
    }
} 
?>