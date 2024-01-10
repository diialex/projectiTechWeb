<?php include('header.php'); ?>    
<?php include('session.php'); ?>    
    <body>
	<?php include('navbar.php'); ?>
			<div id="masthead">  
				<div class="container">
					    <div class="row">
      <div class="col-md-2">
		<hr>
		<center><img class="pp" src="<?php echo $image; ?>" height="140" width="160"></center>
		<hr>
		<button class="btn btn-success">Change profile picture</button>
      </div>
		<div class="col-md-10">
			<?php
	$query = $conn->query("select * from members where member_id = '$session_id'");
	$row = $query->fetch();
	$id = $row['member_id'];
	?>
	<hr>
					<form method="post" action="save_edit.php">
	<input type="hidden" name="member_id" value="<?php echo $id; ?>">
	User:<input type="text" name="username" value="<?php echo $row['username']; ?>">
	<hr>
	Name:<input type="text" name="firstname" value="<?php echo $row['firstname']; ?>">
	<hr>
	Lasname:<input type="text" name="lastname" value="<?php echo $row['lastname']; ?>">
	<hr>
	Gender:
	<select name="gender">
		<option><?php echo $row['gender']; ?></option>
		<option>Man</option>
		<option>Woman</option>
	</select>
	<hr>
	Birthdate:<input name="birthdate" type="text" value="<?php echo $row['birthdate']; ?>">
	<hr>
	Adress:<input name="address" type="text" value="<?php echo $row['address']; ?>">
	<hr>
	Civil State:<input name="status" type="text" value="<?php echo $row['status']; ?>">
	<hr>
	Phone number:<input name="mobile" type="text" value="<?php echo $row['mobile']; ?>">
	<hr>
	Work:<input name="work" type="text" value="<?php echo $row['work']; ?>">
	<hr>
	Religion:<input name="religion" type="text" value="<?php echo $row['religion']; ?>">
	<hr>
	<br>
			<center>
			<button name="save" class="btn edit">Guardar</button>
			</center>
	<br>
	<form>
		</div>

    </div> 
				</div><!-- /cont -->
				<div class="container">
					<div class="row">
					<div class="col-md-12">
						<div class="top-spacer"> </div>
					</div>
					</div> 
				</div><!-- /cont -->
			</div>

                                                
                                                                                
<?php include('footer.php'); ?>
        
    </body>
</html>