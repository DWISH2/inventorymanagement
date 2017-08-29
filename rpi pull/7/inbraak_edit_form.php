<?php
include_once 'dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM tbl_inbraak WHERE inbraakinstallatie_id=:id");
	$stmt->execute(array(':id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
}

?>

<style type="text/css">
#dis{
	display:none;
}
</style>

	<div id="dis">
		<div id="modal1" class="modal">
			<div class="modal-content">
				<h4>Aanpassen</h4>
				<div class="row">
					<form method="post" id='iUpdate' class="col s12">
						<div class="row">
							<div class="input-field col s12 m4">
								<input type="text" id="Name" name="inbraak_name" class="validate" value='<?php echo $row['inbraak_name']; ?>'>
								<label for="Name">Product Naam</label>
							</div>
							<div class="input-field col s12 m4">
								<input type="text" id="Quantity" name="inbraak_quantity" class="validate" value='<?php echo $row['inbtaak_quantity']; ?>'>
								<label for="Quantity">Aantal</label>
							</div>
							<div class="input-field col s12 m4">
								<input type="text" id="Location" name="inbraak_location" class="validate" value='<?php echo $row['inbraak_location']; ?>'>
								<label for="Location">Lokatie</label>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="modal-footer">
				<!--<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>-->
				<button type="submit" class="modal-action modal-close btn waves-effect waves-light blue darken-2" name="btn-update" id="btn-update">
    			<i class="large material-icons left">sd_storage</i> Opslaan Updates
			</button>
			</div>
		</div>
	</div>