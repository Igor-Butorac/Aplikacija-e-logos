<?php 

include("config.php");
echo'

<header id="header-image"></header>';

  if (empty($_SESSION['user']['type_of_user']))
  
  {
	echo '
	
	<ul id="ul_menu">
		<!--<li class="li_menu"><a href="index.php?menu=1">Početna</a></li>-->
		<li class="li_menu"><a href="index.php?menu=2">O aplikaciji</a></li>
		<li class="li_menu"><a href="index.php?menu=3">Kontakt</a></li>
		<li class="li_menu"><a href="index.php?menu=7">Wheater API</a></li>
		<li class="li_menu"><a href="index.php?menu=8">Chuck Norris API</a></li>
		<li class="li_menu"><a href="index.php?menu=6">Login</a></li>';
  }
  
		else if($_SESSION['user']['type_of_user']==1)
		{
			echo '
			<ul id="ul_menu">
			<!--<li class="li_menu"><a href="index.php?menu=1">Početna</a></li>-->
			<li class="li_menu"><a href="index.php?menu=2">O aplikaciji</a></li>
			<li class="li_menu"><a href="index.php?menu=3">Kontakt</a></li>
			<li class="li_menu"><a href="index.php?menu=4">Registriraj korisnika</a></li>
			<li class="li_menu"><a href="index.php?menu=5">Unesi klijenta</a></li>
			<li class="li_menu"><a href="dashboard.php?menu=6">Admin ploča</a></li>
			<li class="li_menu"><a href="client_dashboard.php?menu=7">Klijent ploča</a></li>
			<li class="li_menu"><a href="index.php?menu=8">Wheater API</a></li>
			<li class="li_menu"><a href="index.php?menu=9">Chuck Norris API</a></li>

			<li class="li_menu"><a href="logout.php">Logout</a></li>';

		}

		else if($_SESSION['user']['type_of_user']==2) {
			echo '
			<ul id="ul_menu">
			<!--<li class="li_menu"><a href="index.php?menu=1">Početna</a></li>-->
			<li class="li_menu"><a href="index.php?menu=2">O aplikaciji</a></li>
			<li class="li_menu"><a href="index.php?menu=3">Kontakt</a></li>
			<li class="li_menu"><a href="index.php?menu=5">Unesi klijenta</a></li>
			<li class="li_menu"><a href="client_dashboard.php?menu=7">Klijent ploča</a></li>
			<li class="li_menu"><a href="index.php?menu=8">Wheater API</a></li>
			<li class="li_menu"><a href="index.php?menu=9">Chuck Norris API</a></li>
			<li class="li_menu"><a href="logout.php">Logout</a></li>';
		}	

		else if($_SESSION['user']['type_of_user']==3) {
			echo '
			<ul id="ul_menu">
			<!--<li class="li_menu"><a href="index.php?menu=1">Početna</a></li>-->
			<li class="li_menu"><a href="index.php?menu=2">O aplikaciji</a></li>
			<li class="li_menu"><a href="index.php?menu=3">Kontakt</a></li>
			<li class="li_menu"><a href="index.php?menu=8">Wheater API</a></li>
			<li class="li_menu"><a href="index.php?menu=9">Chuck Norris API</a></li>
			<li class="li_menu"><a href="logout.php">Logout</a></li>';
		}	

echo 
	'</ul>';
	
	
?>