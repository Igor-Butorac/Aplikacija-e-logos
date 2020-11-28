<?php

include("config.php");

echo'

<head>
<title>Kontakt forma</title>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
</head>

<br>

<div class="container_reg">
    <form name="registration_form" method="post" class="myForm" action="">
        <div id="div_register">

            <h1>Unos klijenata</h1>

            <label for="fname">Ime *</label>
			<input type="text"  name="firstname" prequired>

			<label for="lname">Prezime*</label>
			<input type="text"  name="lastname" required>
				
			<label for="age">Dob*</label>
			<input type="text"  name="age" required>
			
			
			<label for="in_therapy">U terapiji:*</label>
            DA<input type="radio" name="in_therapy" value="da"><br />
            NE<input type="radio" name="in_therapy" value="ne" checked="checked">
    
        
						
            <label for="comment">Komentar</label>
			<textarea id="comment" name="comment" style="height:200px; width: 300px;"></textarea>
            
            <label for="profession">Email roditelja:*</label>
            <input type="email" name="email" required>
            
            <label for="tel_number">Telefonski broj roditelja:*</label>
            <input type="text" name="tel_number" required>


            <label for="ordered">Naručen datuma:*</label>
            <input type="date" name="date" required>

            <label for="ordered">Naručen u sati:*</label>
            <input type="time" name="time" required>

			<input style="width:auto" type="submit" name="reg_submit" value="Unesi">

            </div>
    </form>
<br />';

if (isset($_POST['reg_submit'])){


    $query  = "SELECT * FROM clients";
    $query .= " WHERE firstname='" .  $_POST['firstname'] . "'";
    $query .= " OR lastname='" .  $_POST['lastname'] . "'";
    $result = @mysqli_query($con, $query);
    $row = @mysqli_fetch_array($con, MYSQLI_ASSOC);



    if ($row['firstname'] == '' || $row['lastname'] == '') {

        $date=$_POST['date'];
        $query  = "INSERT INTO clients (firstname, lastname, age, in_therapy, comment, email, tel_number, date, time)";
        $query .= " VALUES (
            '" . $_POST['firstname'] . "'
            , '" . $_POST['lastname'] . "'
            , '" . $_POST['age'] . "'
            , '" . $_POST['in_therapy'] . "'
            , '" . $_POST['comment'] . "'
            , '" . $_POST['email'] . "' 
            , '" . $_POST['tel_number'] . "'
            , '" . $_POST['date'] . "'
            , '" . $_POST['time'] . "'
            )";
        $result = @mysqli_query($con, $query);
    
                echo" <div class=success-msg>
                <i class=fa fa-check></i>
                Klijent uspješno dodan u bazu
                </div>";

        }

    
            elseif ($row['email'] != $_POST['email']) {

                echo " <div class=error-msg>
                <i class=fa fa-warning></i>
                Klijent već postoji u bazi. Pokušajte ponovno.
                </div>";
    
    
            }}
                
    echo'
            </div>';
    
    ?>