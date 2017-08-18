<!DOCTYPE html>
<html>
<head>
	<title>Data & camera</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/stylesheet.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
	<link href="assets/css/datatables.min.css" rel="stylesheet" type="text/css">

	 <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){
			
			$("#btn-view").hide();
			
			$("#btn-add").click(function(){
				$(".content-loader").fadeOut('slow', function()
				{
					$(".content-loader").fadeIn('slow');
					$(".content-loader").load('add_form.php');
					$("#btn-add").hide();
					$("#btn-view").show();
				});
			});
			
			$("#btn-view").click(function(){
				
				$("body").fadeOut('slow', function()
				{
					$("body").load('camera.php');
					$("body").fadeIn('slow');
					window.location.href="camera.php";
				});
			});
			
		});
	</script>

	<!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>

<body>
    <div class="container">  <!--Begin container div -->
    	<div class="row">
    		<div class="col s12 m12 offset-m6 l6 offset-l5">
				<img class="center-align" src="/assets/img/logoNoorlander.jpg" alt="logoNoorlander" height="127" width="250"> <!-- Img logo -->
			</div>
		</div>
    	<div class="row">
    		<div class="col m12">
    		    <h2 class="form-signin-heading">Cameras</h2><hr /> <!-- heading -->
			    <!--<button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Camera toevoegen</button>-->
			    <a href="/index.php" class="btn-floating btn-large waves-effect waves-light blue darken-2"><i class="material-icons">home</i></a>
			    <button class="btn-floating btn-large waves-effect waves-light blue darken-2" type="button" id="btn-add">
    				<i class="material-icons center">add</i>
  				</button>

			    <!-- Button to add to open add-form -->
			    <button class="waves-effect waves-light btn blue darken-2" type="button" id="btn-view"> <i class="large material-icons left">list</i> &nbsp; Bekijk cameras</button>	<!-- Button to view the table when added a new item -->
			    <hr />
    			
				<div class="content-loader"> <!-- Begin content-loader -->

    			<table class="striped" id="example"> <!-- Begin Table -->
    				<thead>
          				<tr>
          					<th>ID</th>
            				<th>Naam</th>
            				<th>Aantal</th>
              				<th>Lokatie</th>
         	 				<th>Aanpassen</th>
         	 				<th>Verwijderen</th>
         	 			</tr>
        			</thead>

        			<tbody>
						<?php
					    require_once 'dbconfig.php'; /* connect with DB */
					        
					    $stmt = $db_con->prepare("SELECT * FROM tbl_camera ORDER BY cam_id DESC");
					    $stmt->execute();
						while($row=$stmt->fetch(PDO::FETCH_ASSOC))
						{
						
						?>
						<tr> <!-- Begin row -->
							<td>
								<?php echo $row['cam_id']; ?> <!-- Echo cam_id -->
							</td> 
							<td>
								<?php echo $row['cam_name']; ?> <!-- Echo cam_name -->
							</td>
							<td>
								<?php echo $row['cam_quantity']; ?> <!-- Echo cam_quantity -->
							</td>
							<td>
								<?php echo $row['cam_location']; ?>  <!-- Echo cam_location -->
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
					        </td>
						</tr> <!-- End rows -->
						<?php
					}
					?>
      				</tbody>
   				 </table> <!-- End table -->
    		</div> <!-- End content-loader -->
    	</div> <!-- End col div -->
    </div> <!-- End row div -->
</div> <!-- End container div -->

    <script src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/assets/js/datatables.min.js"></script>
	<script type="text/javascript" src="/assets/js/crud.js"></script>

	<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
		$('#example').DataTable();

		$('#example')
		.removeClass( 'display' )
		//.addClass('table table-bordered');
	});
	</script>
</body>
</html>