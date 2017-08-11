<!DOCTYPE html>
<html>
<head>
	<title>Data & camera</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">


<!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	  <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <!--PHP init-->
    <?php
		$servername = "localhost";
		$username = "im2017";
		$password = "986p478mrZKzCLeK";

		// Create connection
		$conn = new mysqli($servername, $username, $password);

		// Check connection
		/*
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
			} 
		echo "Connected successfully";
		*/
		?>

	<img class="logoNoorlander" src="logoNoorlander.jpg" alt="logoNoorlander" height="127" width="250">
	<div class="container">
		<div class="row">
			<div class="col s4 m4 offset-s2 offset-m4">
				<h5>Item</h5>
			</div>
			<div class="col s2 m2">
				<h5>Quantiteit</h5>
			</div>
			<div class="col s2 m2">
				<h5>Lokatie</h5>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col s1 m1">
				  	<button class="btn waves-effect waves-light" type="submit" name="action">
    					<i class="material-icons center">remove</i>
  				  	</button>
			</div>
			<div class="col s1 m1">
					<button class="btn waves-effect waves-light" type="submit" name="action">
    					<i class="material-icons center">add</i>
  				 	</button>
			</div>
			<div class="col s4 m4 offset-m2">
					<h6> Ahua IP Camera</h6>
				</div>
				<div class="col s2 m2">
					<h6>2</h6>
				</div>
				<div class="col s2 m2">
					<h6>A2</h6>
			</div>
		</div>
	</div>
	

</body>
</html>