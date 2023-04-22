<?php
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);

if (!$con) {
    echo("Error Connection" . mysqli_connect_error());
}
// echo ("Sucessfully Connect");

// id20151110_goglobal2023-username
// id20151110_forum - db name
// PuchuGubluforum@2023 - password

?>