<?php
require_once 'dbconfig.php'; /* Connect with DB from dbconfig.php */

	
	if($_POST)
	{
		$id = $_POST['id'];
		$cam_name = $_POST['cam_name'];
		$cam_quantity = $_POST['cam_quantity'];
		$cam_location = $_POST['cam_location'];
		
		$stmt = $db_con->prepare("UPDATE tbl_camera SET cam_name=:cn, cam_quantity=:cq, cam_location=:cl WHERE cam_id=:id");
		$stmt->bindParam(":cn", $cam_name);
		$stmt->bindParam(":cq", $cam_quantity);
		$stmt->bindParam(":cl", $cam_location);
		$stmt->bindParam(":id", $id);
		
		if($stmt->execute())
		{
			echo "Succesvol updated";
		}
		else{
			echo "Query Problem";
		}
	}


?