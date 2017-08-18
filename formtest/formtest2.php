<!DOCTYPE html>
<html>
<head>
	<title>Inbraakinstallaties</title>
	<!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Compiled and minified CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
  	<script src="popup.js"></script>

</head>
<body>

	<!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>

	<div class="container">
	<div class="row">
		<div class="col s12 m12 offset-m4">
			<img class="logoNoorlander" src="logoNoorlander.jpg" alt="logoNoorlander" height="127" width="250">
		</div>
	</div>
	
		<div class="col s12 m4 offset-m4">
    <ul class="collapsible popout" data-collapsible="accordion">
      <li>
        <div class="collapsible-header"><i class="material-icons">add_to_photos</i>Items toevoegen</div>
          <div class="row collapsible-body">
          <form  id="i-SaveForm" action="#" method="post">
            <div class="col s12 m4">
              <div class="input-field">
                <input placeholder="e.g. Dahua IP camera" name="iName" id="product_name" type="text" class="validate">
                <label for="product_name">Naam product</label>
              </div>
            </div>
            <div class="col s12 m2">
              <div class="input-field">
                <input placeholder="e.g. 10" id="quantity" name="iQty" type="text" class="validate">
                <label for="quantity">Aantal</label>
              </div>
            </div>
            <div class="col s12 m2">
              <div class="input-field">
                <input placeholder="e.g. A3IV" id="location" name="iLoc" type="text" class="validate">
                <label for="location">Lokatie</label>
              </div>
            </div>
            <div class="col s12 m4">
              <button class="waves-effect waves-light btn-large blue darken-2" type="submit" name="action">Opslaan
              <i class="material-icons right">send</i>
              </button>
            </div>
            </form>
          </div>
        </div>
      </li>
    </ul>
			 <table class="striped" id="example"> <!-- Begin Table -->
            <thead>
                  <tr>
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
                  
              $stmt = $db_con->prepare("SELECT * FROM tbl_inbraak ORDER BY iName DESC");
              $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
            {
            
            ?>
            <tr> <!-- Begin row -->
              <td>
                <?php echo $row['iName']; ?> <!-- Echo cam_name -->
              </td>
              <td>
                <?php echo $row['iQty']; ?> <!-- Echo cam_quantity -->
              </td>
              <td>
                <?php echo $row['iLoc']; ?>  <!-- Echo cam_location -->
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
		</div>
	</div>

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