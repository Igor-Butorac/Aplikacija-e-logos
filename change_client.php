<?php
include("config.php");
$results = mysqli_query($con, "SELECT * FROM clients"); 

if(isset($_POST['update'])){
    $id =$_POST['id'];
    $fname =$_POST['firstname'];
    $lname = $_POST['lastname'];
    $age = $_POST['age'];
    $in_therapy = $_POST['in_therapy'];
    $comment = $_POST['comment'];
    $email = $_POST['email'];
    $tel_number=$_POST['tel_number'];
    $date = $_POST['date'];
    $time = $_POST['time'];

   

    mysqli_query($con, "UPDATE clients 
    SET 
    firstname='$fname', 
    lastname='$lname', 
    age = '$age',
    in_therapy = '$in_therapy',
    comment = '$comment',
    email='$email',
    tel_number = '$tel_number',
    date = '$date',
    time = '$time' 
    where id=$id");

    $_SESSION['message'] = " <div class=success-msg_change>
    <i class=fa fa-check></i>
    Klijentu su uspješno promijenjeni podaci.
    </div>";
    header('location: client_dashboard.php?menu=7.php');

}

if(isset($_GET['del'])){
    $id= $_GET['del'];
    mysqli_query($con, "DELETE from clients where id=$id");

    $_SESSION['message'] = " <div class=error-msg_change>
    <i class=fa fa-check></i>
    Klijent uspješno pobrisan.
    </div>";

    header('location: client_dashboard.php?menu=7.php');


}
?>