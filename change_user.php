<?php

include("config.php");


if(isset($_POST['update'])){
    $id =$_POST['id'];
    $fname =$_POST['firstname'];
    $lname = $_POST['lastname'];
    $username = $_POST['username'];
    $pr_image = $_POST['pr_image'];
    $email = $_POST['email'];
    $type_of_user = $_POST['type_of_user'];

   

    mysqli_query($con, "UPDATE users SET firstname='$fname', lastname='$lname', username = '$username',pr_image = '$pr_image', email='$email',type_of_user = '$type_of_user' where id=$id");

    $_SESSION['message'] = " <div class=success-msg_change>
    <i class=fa fa-check></i>
    Korisniku su uspješno promijenjeni podaci.
    </div>";
    header('location: dashboard.php?menu=6.php');

}

if(isset($_GET['del'])){
    $id= $_GET['del'];
    mysqli_query($con, "DELETE from users where id=$id");

    $_SESSION['message'] = " <div class=error-msg_change>
    <i class=fa fa-check></i>
    Korisniku uspješno pobrisan.
    </div>";

    header('location: dashboard.php?menu=6.php');


}

$results = mysqli_query($con, "SELECT * FROM users"); 







?>

