<?php
include("change_client.php");
include("menu.php");

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


        <h2 style="text-align:center">Uredi klijente</h2>
<table>
	<thead>
		<tr>

			<th>Ime</th>
            <th>Prezime</th>
            <th>Dob ime</th>
            <th>U terapiji</th>
            <th>Komentar</th>
            <th>Email</th>
            <th>Tel. broj</th>
            <th>Datum narudžbe</th>
            <th>Vrijeme narudžbe</th>
			<th colspan="2">Akcija</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['firstname']; ?></td>
            <td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['age']; ?></td>
			<td><?php echo $row['in_therapy']; ?></td>
			<td><?php echo $row['comment']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['tel_number']; ?></td>
            <td><?php echo date('d/m/yy' ,strtotime($row['date'])); ?></td>
            <td><?php echo date('H:i' ,strtotime($row['time'])); ?></td>
        	<td><a href="client_dashboard.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a></td>
			<td><a href="client_dashboard.php?del=<?php echo $row['id']; ?>" class="del_btn" onclick="return confirm('Da li ste sigurni da želite izbrisati ovog klijenta?');">Delete</a></td>
		</tr>
	<?php } ?>
</table>

<?php 

if(isset($_GET['edit']) && $_GET['edit'] != ''){

    $id = $_GET['edit'];
    $rec = mysqli_query($con, "SELECT * FROM clients WHERE id = $id");
    $record = mysqli_fetch_array($rec);
    $fname = $record['firstname'];
    $lname = $record['lastname'];
    $age = $record['age'];
    $in_therapy = $record['in_therapy'];
    $comment = $record['comment'];
    $email = $record['email'];
    $tel_number = $record['tel_number'];
    $date = $record['date'];
    $time = $record['time'];
    $id=$record['id'];
?>



<form method="post" action="change_client.php" >
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
        <label>Dob</label>
        <input type="text" name="age" value="<?php echo $age; ?>">
    </div>

    <div class="input-group">
        <label>U terapiji</label>
        <input type="text" name="in_therapy" value="<?php echo $in_therapy; ?>">
    </div>

    <div class="input-group">
        <label>Komentar</label>
        <input type="text" name="comment" value="<?php echo $comment; ?>">
    </div>

    <div class="input-group">
        <label>Email</label>
        <input type="text" name="email" value="<?php echo $email; ?>">
    </div>

    <div class="input-group">
        <label>Tel. broj </label>
        <input type="text" name="tel_number" value="<?php echo $tel_number; ?>">
    </div>

    <div class="input-group">
        <label>Datum narudžbe</label>
        <input type="text" name="date" value="<?php echo $date; ?>">
    </div>
    
    <div class="input-group">
        <label>Vrijeme narudžbe</label>
        <input type="text" name="time" value="<?php echo $time; ?>">
    </div>
    

    <div class="input-group">
    
        <input name="update" style="width: 100px; height:40px; margin: 0 auto;" type="submit" name="submit" value="Unesi">
    </div>


</form>

<?php
}
include("footer.php");

?>