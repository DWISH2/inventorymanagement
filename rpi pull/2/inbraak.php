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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>

    <?php
      $server = mysql_connect("localhost", "im2017", "inventory2017"); 
      $db = mysql_select_db("Inventory", $server); 
      $query = mysql_query("SELECT * FROM inbraak"); 
    ?>


    <div class="container">
      <img class="logoNoorlander" src="logoNoorlander.jpg" alt="logoNoorlander" height="127" width="250">
      <div class="row">
        <div class=" col m2 offset-m10">
          <a class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">add</i></a>
        </div>
      </div>
    	<div class="row">
    		<div class="col m12">
    			<table class="striped">
    				<thead>
          				<tr>
            				<th>Naam</th>
            				<th>Kwantiteit</th>
              			<th>Lokatie</th>
         	 			</tr>
        			</thead>

        			<tbody>
                <?php
                    while ($row = mysql_fetch_array($query)) {
                      echo "<tr>";
                      echo "<td>".$row['iNaam']."</td>";
                      echo "<td>".$row['iQty']."</td>";
                      echo "<td>".$row['iLoc']."</td>";
                      echo "</tr>";
                    }
                ?>
      				</tbody>
   				 </table>
    		</div>
    	</div>
    </div>
</body>
</html>