<?php
include_once 'dbconfig.php'; /* Connect with DB from dbconfig.php */

if($_POST['del_id'])
{
	$id = $_POST['del_id'];	
	$stmt=$db_con->prepare("DELETE FROM tbl_camera WHERE cam_id=:id");
	$stmt->execute(array(':id'=>$id));	
}
?>