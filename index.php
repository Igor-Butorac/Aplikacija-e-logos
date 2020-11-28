<?php
include("config.php");

//Clear cache and check filesize again
echo'
<!doctype html>
<html>
    <head><link rel="stylesheet" href="style.css"></head>

<body>';

include("menu.php");

if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
if (!isset($menu)) { $menu = 1; }

if(!isset($_SESSION['user'])){
    header('Location: login.php');
}


else if ($menu == 2) { include("about.php");}
else if ($menu == 3) { include("contact.php");}
else if ($menu == 4) { include("register.php");}
else if ($menu == 5) { include("register_client.php");}
else if ($menu == 6) { include("dashboard.php");}
else if ($menu == 7) { include("client_dashboard.php");}
else if ($menu == 8) { include("wheater_API.php");}
else if ($menu == 9) { include("chuck_norris_jokes.php");}


?>

</body>
</html><br>

<?php include('footer.php');?>