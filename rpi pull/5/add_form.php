
<style type="text/css">
#dis{
	display:none;
}
</style>

<!-- Form to add new qeury to mysql DB -->
	
    
    <div id="dis">
    <!--  message will be displayed here -->
	</div>
        
 	
	 <form method='post' id='cam-SaveForm' action="#">
 
    <table class='table table-bordered'> <!-- Begin table form -->
 
        <tr>
            <td>Product Naam</td>
            <td><input type='text' name='cam_name' class='form-control' placeholder='EX : Camera type' required /></td>
        </tr>
 
        <tr>
            <td>Aantal Producten</td>
            <td><input type='text' name='cam_quantity' class='form-control' placeholder='EX : 10' required></td>
        </tr>
 
        <tr>
            <td>Lokatie</td>
            <td><input type='text' name='cam_location' class='form-control' placeholder='EX : A1' required></td> 
        </tr>
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn waves-effect waves-light blue darken-2" name="btn-save" id="btn-save"> <!-- Save button on form -->
    		<i class="large material-icons left">add</i> Opslaan
			</button>  
            </td>
        </tr>
 
    </table> <!-- End table form -->
</form>
     
