
<?php 
	include("change_user.php");
	include("menu.php");

	if (isset($_SESSION['message'])) {
		print $_SESSION['message'];
		unset($_SESSION['message']);
	}
	
?>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
		<style>
			
		table{
			width: 50%;
			margin: 30px auto;
			border-collapse: collapse;
			text-align: left;
		}
		tr {
			border-bottom: 1px solid #cbcbcb;
		}
		th, td{
			border: none;
			height: 30px;
			padding: 2px;
		}
		tr:hover {
			background: #F5F5F5;
		}

		form {
			width: 25%;
			margin: 50px auto;
			text-align: left;
			padding: 20px; 
			border: 1px solid #bbbbbb; 
			border-radius: 5px;
		}

		.input-group {
			margin: 10px 0px 10px 0px;
		}
		.input-group label {
			display: block;
			text-align: left;
			margin: 3px;
		}
		.input-group input {
			height: 30px;
			width: 93%;
			padding: 5px 10px;
			font-size: 16px;
			border-radius: 5px;
			border: 1px solid gray;
		}
		.btn {
			padding: 10px;
			font-size: 15px;
			color: white;
			background: #5F9EA0;
			border: none;
			border-radius: 5px;
		}
		.edit_btn {
			text-decoration: none;
			padding: 2px 5px;
			background: #2E8B57;
			color: white;
			border-radius: 3px;
		}

		.del_btn {
			text-decoration: none;
			padding: 2px 5px;
			color: white;
			border-radius: 3px;
			background: #800000;
		}
		.msg {
			margin: 30px auto; 
			padding: 10px; 
			border-radius: 5px; 
			color: #3c763d; 
			background: #dff0d8; 
			border: 1px solid #3c763d;
			width: 50%;
			text-align: center;
		}

		</style>
</head>
<h2 style="text-align:center">Uredi korisnike</h2>
<table>
	<thead>
		<tr>

			<th>Ime</th>
			<th>Prezime</th>
            <th>Email</th>
            <th>Korisničko ime</th>
            <th>Tip korisnika</th>
			<th colspan="3">Akcija</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['firstname']; ?></td>
			<td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['email']; ?></td>
			<td><?php echo $row['username']; ?></td>
			<td><?php echo $row['type_of_user']; ?></td>

			
			<?php if($_SESSION['user']['type_of_user']==1) { ?>
			<td>
				<a href="dashboard.php?del=<?php echo $row['id']; ?>" class="del_btn" onclick="return confirm('Da li ste sigurni da želite izbrisati ovog korisnika?');">Delete</a>
			</td>
			<td>
				<a href="dashboard.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="dashboard.php?profile=<?php echo $row['id']; ?>" class="prof_btn" ><img src="images/user3.png" alt="user"></a>
			</td>
			<?php } else{?>
			<td>
				<a href="dashboard.php?profile=<?php echo $row['id']; ?>" class="prof_btn" ><img src="images/user3.png" alt="user"></a>
			</td>
			<?php } ?>

		</tr>
	<?php } ?>
</table>

<?php



		if(isset($_GET['edit']) && $_GET['edit'] != ''){

		$id = $_GET['edit'];
		$rec = mysqli_query($con, "SELECT * FROM users WHERE id = $id");
		$record = mysqli_fetch_array($rec);
		$fname = $record['firstname'];
		$lname = $record['lastname'];
		$email = $record['email'];
		$username = $record['username'];
		$pr_image = $record['pr_image'];
		$type_of_user = $record['type_of_user'];
		$id=$record['id'];
?>



	<form method="post" action="change_user.php" >
    <input type="hidden" name="id" value="<?php echo $id; ?>">

		<div class="input-group">
			<label>Ime</label>
			<input type="text" name="firstname" value="<?php echo $fname; ?>">
		</div>
		<div class="input-group">
			<label>Prezime</label>
			<input type="text" name="lastname" value="<?php echo $lname; ?>">
		</div>


		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="<?php echo $email; ?>">
		</div>


        <div class="input-group">
			<label>Korisničko ime</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>


		<div class="input-group">
			<label>Fotografija korisnika</label>
			<img class="user_picture" src="images/<?php echo $pr_image?>"  alt="<?php echo $pr_image?>" width="200" height="150">
			<label>Promijeni fotografiju korisnika</label>
			<input type="file" name="pr_image" value="<?php echo $pr_image; ?>">
		</div>

		<div class="input-group">
			<label>Tip korisnika</label>
			<input type="text" name="type_of_user" value="<?php echo $type_of_user; ?>">
		</div>
        
		<div class="input-group">
        
			<input name="update" style="width: 100px; height:40px; margin: 0 auto;" type="submit" name="submit" value="Unesi">
        </div>
    

	</form>
<?php
}


if(isset($_GET['profile']) && $_GET['profile'] != ''){


		
		$rec = mysqli_query($con, "SELECT * FROM users WHERE id = ".$_GET['profile']);
		$row = mysqli_fetch_array($rec);
		$pr_image = $row['pr_image'];
		$fname = $row['firstname'];
		$lname = $row['lastname'];
		$email = $row['email'];
		$username = $row['username'];
		$type_of_user = $row['type_of_user'];
		$id=$row['id']; ?>


<div style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);max-width: 300px;margin: auto;font-family:arial;" id="user_div">
		<br>
		<h2 class="h3about" style="text-align:center">Korisnikov profil</h2>


		<div >
		<img class="user_picture" src="images/<?php echo $pr_image?>"  alt="<?php echo $pr_image?>" width="200" height="150">
		</div>

		<div>
		<p class="user">Ime: <?php echo $fname ?><br></p>
		</div>

		<div>
		<p class="user">Prezime: <?php echo $lname?></p>
		</div>


	<div>
		<p class="user"class="user">Email: <?php echo $email ?></p>
	</div>

	<div>
		<p class="user">Korisničko ime: <?php echo $username ?></p>
	</div>
	<a href = "mailto:<?php echo $email ?>"> <button class="btn_user">Kontakt</button></a>

</div>

<br />
<?php }


include("footer.php");
?>

