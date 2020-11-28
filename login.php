<?php 

include("config.php");
include("menu.php");
echo '

<!doctype html>
<html>
    <head>
    <link rel="stylesheet" href="style.css">

  </head>';

echo'
<br>
<div class="container">
    <form method="post" action="">
        <div id="div_login">
            <h1>Login</h1>
            <div>
                <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Korisničko ime" />
            </div>
            <div>
                <input type="password" class="textbox" id="txt_pwd" name="txt_pwd" placeholder="Lozinka"/>
            </div>
            <div style="margin-top:1px">
                <input type="submit" value="Unesi" name="but_submit" />
            </div>
        </div>
    </form>
</div><br>';

if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "select *  from users where username='".$uname."' and password='".md5($password)."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = mysqli_num_rows($result);

        if($count > 0){
          // da li je uname glavni ili user valid ko kod prof?
           // $_SESSION['user']['valid'] = 'true';
           // $_SESSION['user']['id'] = $row['id'];
            $_SESSION['user']['firstname'] = $row['firstname'];
            $_SESSION['user']['lastname'] = $row['lastname'];
            $_SESSION['user']['type_of_user'] = $row['type_of_user'];
            $_SESSION['message'] = '<p>Dobrodošli, ' . $_SESSION['user']['firstname'] . ' ' . $_SESSION['user']['lastname'] . '</p>';
            header('Location: dashboard.php');
        }else{
            echo "<h3 style='text-align:center'>Krivo korisničko ime ili lozinka</h1>";
        }

    }

}

include('footer.php');
    
