<?php
    // $noresult == TRUE;
    include "./server.php";

  if (isset($_POST['feedbackbutton'])) {  
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `forum` . `feedback` (`fname`, `lname`, `message`) VALUES ('$fname', '$lname', '$message')";

    if ($con->query($sql) != TRUE) {
        ?>
        <script>alert("You are successfully submit your feedback !");</script>
        <?php
        include "./index.php";
    }
    else {
        ?>
        <script>alert("You are successfully submit your feedback !");</script>
        <?php
        include "./index.php";
    }
} 
?>