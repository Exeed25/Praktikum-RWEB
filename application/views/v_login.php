<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style type="text/css">
  	
	#eror_div{
		font:normal 16px Tahoma,Verdana;
		display:block;
		width:500px;
		border:red 2px solid;
		padding:5px;
		background:#FFFFCC;
	}
	#eror_div p{
		margin:0 0 0 0;
		padding:0 0 0 0;
		color:red;
	}
	
  </style>
</head>
<body>

<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-sm-6">
			<br><br>
			<br><br>
		<h2>Form Login Admin</h2>
		<br>
		<div id="eror_div">
			<?php echo validation_errors(); ?>
			<?php echo $this->session->flashdata('pesan_flash'); ?>
		</div>
		
		<br>
			
			<form action="<?php echo site_url('login/aksi')?>" method="post">
				<div class="form-group">
				<label for="email" id="email">Username:</label>
				<input type="text" class="form-control" id="usr" name="username">
				</div>
				<div class="form-group">
				<label for="password" id="password">Password:</label>
				<input type="password" class="form-control" id="pwd" name="password">
				</div>
				<center><button type="submit" class="btn btn-success">Login</button></center>
			</form>
		</div>
	</div>
</div>

</body>
</html>
