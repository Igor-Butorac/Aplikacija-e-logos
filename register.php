<?php
echo'

<br>
<div class="container_reg">
    <form name="registration_form" method="post" class="myForm" action="">
        <div id="div_register">


            <h1>Registracija korisnika</h1>

            <label for="fname">Ime *</label>
			<input type="text"  name="firstname" placeholder="Ime.." required>

			<label for="lname">Prezime *</label>
			<input type="text" name="lastname" placeholder="Prezime.." required>
				
			<label for="email">E-mail *</label>
			<input type="email"  name="email" placeholder="E-mail.." required>
			
			<label for="username">Korisničko ime:* &nbsp;<small style="color:  #ff4d4d">Korisničko ime mora sadržavati minimalno 4 znaka,a najviše 20</small></label>
			<input type="text" name="username" pattern=".{5,20}" placeholder="Korisničko ime.." required>
						
			<label for="password">Lozinka:* &nbsp;<small style="color:  #ff4d4d">Lozinka mora sadržavati minimalno 4 znaka</small></label>
            <input type="password" name="password" placeholder="Lozinka.." pattern=".{4,}" required>

            <label for="image">Fotografija korisnika:</label>
			<input type="file" name="pr_image">
            
            <label for="profession">Zanimanje:*<br>
			<select name="profession" required >
			<option value="">molimo odaberite</option>';
            

            $query_prof  = "SELECT * FROM professions";
            $result = @mysqli_query($con, $query_prof);
            while($row = @mysqli_fetch_array($result)) {
                print '<option value="' . $row['id'] . '">' . $row['profession'] . '</option> ';
            }

echo'
            </select></label>
            <label for="type_of_user">Tip korisnika:* &nbsp;<small style="color:  #ff4d4d">Tip korisnika može biti samo u rasponu od 1-3</small></label>
            <input type="number" name="type_of_user" placeholder="Tip korisnika"  min="1" max="3" required>

			<input style="width:auto"type="submit" name="reg_submit" value="Unesi" >


        </div>
    </form>
<br>';


if(isset($_POST['reg_submit'] )  ){

    if ($row['email'] == '' || $row['username'] == '') {
        $query  = "SELECT * FROM users";
		$query .= " WHERE email='" .  $_POST['email'] . "'";
		$query .= " OR username='" .  $_POST['username'] . "'";
		$result = @mysqli_query($con, $query);
		$row = @mysqli_fetch_array($con, MYSQLI_ASSOC); 
    
    $query  = "INSERT INTO users (firstname, lastname, email, username, password, pr_image,  profession_id, type_of_user)";
	$query .= " VALUES ('" . $_POST['firstname'] . "', '" . $_POST['lastname'] . "', '" . $_POST['email'] . "', '" . $_POST['username'] . "', '" . md5($_POST['password']) . "', '" .$_POST['pr_image'] . "','" .$_POST['profession'] . "', '" . $_POST['type_of_user'] . "')";
    $result = @mysqli_query($con, $query);

   echo" <div class=success-msg>
        <i class=fa fa-check></i>
        Korisnik uspješno dodan u bazu
        </div>";

        }

        else{

            echo " <div class=error-msg>
                    <i class=fa fa-warning></i>
                    Korisnik postoji u bazi. Pokušajte ponovno.
                  </div>";
        }
    }
            
echo'
        </div>';

?>