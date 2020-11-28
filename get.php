
<?php include("menu.php");?>
<html>
<head><title>Vremenska prognoza od <?php echo $_GET['q']; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<!--<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>-->
</head>
	<style>
	 h1, h2, h3, h4, h5, h6 {
	font-family: "Comic Sans MS", cursive, sans-serif;
	}
	</style>

<body>

<?php
	error_reporting(0);
	$get = json_decode(file_get_contents('http://ip-api.com/json/'),true);


	date_default_timezone_set($get['timezone']);
	$city = $_GET['q'];
	$string = "http://api.openweathermap.org/data/2.5/weather?q=".$city."&units=metric&appid=fd7e6b189c2892ddcbce2439cb59f643";
	$data = json_decode(file_get_contents($string),true);
	
	$temp = $data['main']['temp'];
	
	$icon = $data['weather'][0]['icon'];

	$visibility = $data['visibility'];
	$visibilitykm = $visibility / 1000;
	$country =  "<h1><b>".$data['name'].",".$data['sys']['country']."</h1></b>";
	
	$logo = "<center><img src='http://openweathermap.org/img/w/".$icon.".png'></center>";
	$desc = "<b><p>".$data['weather'][0]['description']."</p></b>";
	
	$temperature =  "<b>Temp:".$temp."°C</b><br>";
	$clouds = "<b>Naoblaka:".$data['clouds']['all']."%</b><br>";
	$humidity = "<b>Vlažnost:".$data['main']['humidity']."%</b><br>";
	$windspeed = "<b>Brzina vjetra:".$data['wind']['speed']."m/s</b><br>";
	$pressure = "<b>Tlak:".$data['main']['pressure']."hpa</b><br>";
	$visibility =  "<b>Vidljivost:".$visibilitykm."Km</b><br>";
	$sunrise = "<b>Izlazak sunca:".date('h:i A', $data['sys']['sunrise'])."</b><br>";
	$sunset = "<b>Zalazak sunca:".date('h:i A', $data['sys']['sunset'])."</b>";
 
?>
<script>
function goBack() {
  window.history.back();
}
</script>
<input style="width: 100px; margin: 20 450 ;" type="submit" onclick="goBack()" value="Natrag">
		<div>
			<?php 
				echo "<center>".$country."<center>";
				echo $logo; 
				echo "<center><h2>".$desc."</h1></center>";
			?>
				
		</div>
	
		<div>
			<div >
				<h1 >
					<?php echo "<center>".$temperature."<center>"; ?>
					<?php echo"<center>". $clouds."<center>"; ?>
					<?php echo "<center>".$humidity."<center>"; ?>
					<?php echo "<center>".$windspeed."<center>"; ?>
					<?php echo "<center>".$pressure."<center>"; ?>
					<?php echo "<center>".$visibility."<center>"; ?>
					<?php echo "<center>".$sunrise."<center>";?>
					<?php echo "<center>".$sunset."<center>";?>
				</h1>
			</div>
		</div>
		



	</body>
</html>

<?php include("footer.php");?>