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

    <?php
    $servername="localhost";
    $username="im2017";
    $password="inventory2017";

    //Create connection
    $conn = new mysqli($servername, $username, $password);
    //check connection
    if (mysqli_connect_error()) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    echo "Connected succesfully";
    ?>

    <img class="logoNoorlander" src="logoNoorlander.jpg" alt="logoNoorlander" height="127" width="250">
    <div class="container">
    	<div class="row">
    		<div class="col m12">
    			<table class="striped">
    				<thead>
          				<tr>
          					<th>Add/Remove</th>
            				<th>Name</th>
            				<th>Item Name</th>
              				<th>Item Price</th>
         	 			</tr>
        			</thead>

        			<tbody>
         	 			<tr>
         	 				<td>
         	 					<button class="btn waves-effect waves-light blue" type="submit" name="action">
    								<i class="material-icons center">remove</i>
  				 				</button>
  				 				<button class="btn waves-effect waves-light blue" type="submit" name="action">
    								<i class="material-icons center">add</i>
  				 				</button>
         	 				</td>
            				<td>Alvin</td>
          	  				<td>Eclair</td>
          	  				<td>$0.87</td>
          				</tr>
          				<tr>
            				<td>Alan</td>
            				<td>Jellybean</td>
            				<td>$3.76</td>
          				</tr>
          				<tr>
            				<td>Jonathan</td>
            				<td>Lollipop</td>
            				<td>$7.00</td>
          				</tr>
      				</tbody>
   				 </table>
    		</div>
    	</div>
    </div>
</body>
</html>