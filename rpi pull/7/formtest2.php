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
    <script>
     function loaddata()
{
 var update=document.getElementById( "inbraak-SaveForm" );
  
 if(update)
 {
  $.ajax({
  type: 'post',
  url: 'update.php',
  data: {
   
  },
  success: function (response) {
   // We get the element having id of display_info and put the response inside it
   $( '#display_info' ).html(response);
  }
  });
 }
  
 else
 {
  $( '#display_info' ).html("Er is iets fout gegaan");
 }
} 


    </script>
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
	<!-- Insert form -->
		<div class="col s12 m4 offset-m4">
    <ul class="collapsible popout" data-collapsible="accordion">
      <li>
        <div class="collapsible-header"><i class="material-icons">add_to_photos</i>Items toevoegen</div>
          <div class="row collapsible-body">

          
           <!-- Begin form -->
          <form  id="inbraak-SaveForm" action="#" method="post">
            <div id="display_info"></div>
            <div class="col s12 m4">
              <div class="input-field">
                <input placeholder="e.g. Dahua IP camera" name="inbraak_name" id="iname" type="text" class="validate">
                <label for="product_name">Naam product</label>
              </div>
            </div>
            <div class="col s12 m2">
              <div class="input-field">
                <input placeholder="e.g. 10" id="iquantity" name="inbraak_quantity" type="text" class="validate">
                <label for="quantity">Aantal</label>
              </div>
            </div>
            <div class="col s12 m2">
              <div class="input-field">
                <input placeholder="e.g. A3IV" id="ilocation" name="inbraak_location" type="text" class="validate">
                <label for="location">Lokatie</label>
              </div>
            </div>
            <div class="col s12 m4">
              <button class="waves-effect waves-light btn-large blue darken-2" id="btn_save" type="submit" name="btn_save">Opslaan
              <i class="material-icons right">send</i>
              </button>
            </div>
            </form>
            <!-- End form -->

          </div>
        </div>
      </li>
    </ul>
    <!--End insert form -->

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

              $stmt = $db_con->prepare("SELECT * FROM tbl_inbraak ORDER BY inbraak_id DESC");
              $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
            {
            
            ?>
            <tr> <!-- Begin row -->
              <td>
                <?php echo $row['inbraak_name']; ?> <!-- Echo inbraakinstallaties_name -->
              </td>
              <td>
                <?php echo $row['inbraak_quantity']; ?> <!-- Echo inbraakinstallaties_quantity -->
              </td>
              <td>
                <?php echo $row['inbraak_location']; ?>  <!-- Echo inbraakinstallaties_location -->
              </td>
              <td align="center">
                <a id="<?php echo $row['inbraak_id']; ?>" class="edit-link" href="#" title="Edit">
                  <!--<img src="/assets/img/edit.png" width="20px" />    Edit button -->
                  <i class="small material-icons">edit</i>
                </a>
              </td>
              <td align="center">
                <a id="<?php echo $row['inbraak_id']; ?>" class="delete-link" href="#" title="Delete">
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