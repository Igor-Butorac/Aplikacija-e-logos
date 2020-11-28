<!DOCTYPE html>

	<html>
	<head>
		<title>Kontakt forma</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
	</head>


	<h1>Gdje smo</h1>

	<div >

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.6250510890227!2d15.984817915568039!3d45.778704079106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d6740c9b5a4b%3A0x51fa0d0d44e3cdb7!2sUl.%20Ivana%20%C5%A0ibla%2020%2C%2010000%2C%20Zagreb!5e0!3m2!1shr!2shr!4v1593409666837!5m2!1shr!2shr" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" width="100%" height="450" frameborder="0">
		</iframe>
	</div>	

<?php 

	if (isset($_SESSION['msgsent'])) {
		echo $_SESSION['msgsent'];
		unset($_SESSION['msgsent']);
	}
	
?>
	<br>
	<div class="container_reg">
    <h1>Kontaktirajte nas</h1>

	<h3 class="nortification"></h4>
	<form action="mail.php" method="POST" class="myForm">
		<label for="name">Ime *</label> 
		<input type="text" name="name"  placeholder="Vaše ime" required>

		<label for="email">Email *</label>
		<input type="text" name="email"  placeholder="Vaš email" required>

		<label for="msgname">Naslov poruke</label> 
		<input type="text" name="msgname" placeholder="Naslov poruke">

		<label for="message">Poruka</label>
		<textarea name="message" class="message" placeholder="Vaša poruka" rows="6" cols="25"></textarea><br><br>

		<input style="width:auto"type="submit" name="send_msg" onclick="sendEmail()" value="Pošalji">
	</form>

</div>
  </html>

