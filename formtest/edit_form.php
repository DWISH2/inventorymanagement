<?php
include_once 'dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM tbl_camera WHERE cam_id=:id");
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
    
	</div>
        
 	
	 <form method='post' id='cam-UpdateForm' action='#'>
 
    <table class='table table-bordered'>
 		<input type='hidden' name='id' value='<?php echo $row['cam_id']; ?>' />
        <tr>
            <td>Product Naam</td>

            <td><input type='text' name='cam_name' class='validate' value='<?php echo $row['cam_name']; ?>' required>

            </td>
        </tr>
 
        <tr>
            <td>Aantal Producten</td>
            <td><input type='text' name='cam_quantity' class='form-control' value='<?php echo $row['cam_quantity']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Lokatie</td>
            <td><input type='text' name='cam_location' class='form-control' value='<?php echo $row['cam_location']; ?>' required></td>
        </tr>
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn waves-effect waves-light blue darken-2" name="btn-update" id="btn-update">
    		<i class="large material-icons left">sd_storage</i> Opslaan Updates
			</button>
            </td>
        </tr>
 
    </table>
</form>
     
