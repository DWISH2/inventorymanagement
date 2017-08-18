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
                    <th>Aanpassen</th>
                    <th>Verwijderen</th>
         	 			</tr>
        			</thead>

        			<tbody>
                <?php
                    require_once 'dbconfig.php'; /* connect with DB */
                  
                    $stmt = $db_con->prepare("SELECT * FROM tbl_inbraak");
                    $stmt->execute();
                    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                    {
            
                ?>
                      <td>
                        <?php echo $row['iName']; ?> <!-- Echo cam_id -->
                      </td> 
                      <td>
                        <?php echo $row['iQty']; ?> <!-- Echo cam_name -->
                      </td>
                      <td>
                        <?php echo $row['iLoc']; ?> <!-- Echo cam_quantity -->
                      </td>
                      <td align="center">
                        <a id="<?php echo $row['cam_id']; ?>" class="edit-link" href="#" title="Edit">
                        <!--<img src="/assets/img/edit.png" width="20px" />    Edit button -->
                          <i class="small material-icons">edit</i>
                        </a>
                      </td>
                      <td align="center">
                        <a id="<?php echo $row['cam_id']; ?>" class="delete-link" href="#" title="Delete">
                        <!-- <img src="/assets/img/delete.png" width="20px" /> Delete button -->
                          <i class="small material-icons">delete</i>
                      </a>                
      				</tbody>
   				 </table>
    		</div>
    	</div>
    </div>
</body>
</html>