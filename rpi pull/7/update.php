<?php
require_once 'dbconfig.php'; /* Connect with DB from dbconfig.php */

	
	if($_POST)
	{
		$cam_id = $_POST['cam_id'];
		$cam_name = $_POST['cam_name'];
		$cam_quantity = $_POST['cam_quantity'];
		$cam_location = $_POST['cam_location'];
		
		$stmt = $db_con->prepare("UPDATE tbl_camera SET cam_name=:cn, cam_quantity=:cq, cam_location=:cl WHERE cam_id=:id");
		$stmt->bindParam(":cn", $cam_name);
		$stmt->bindParam(":cq", $cam_quantity);
		$stmt->bindParam(":cl", $cam_location);
		$stmt->bindParam(":cid", $cam_id);
		
		if($stmt->execute())
		{
			echo "Succesvol updated";
		}
		else{
			echo "Query Problem";
		}
	}



	if($_POST)
	{
		$inbraak_id = $_POST['inbraak_id'];
		$inbraak_name = $_POST['inbraak_name'];
		$inbraak_quantity = $_POST['inbraak_quantity'];
		$inbraak_location = $_POST['inbraak_location'];
		
		$stmt = $db_con->prepare("UPDATE tbl_inbraak SET  inbraak_name=:cn, inbraak_quantity=:cq, inbraak_location=:cl WHERE inbraak_id=:iid");
		$stmt->bindParam(":in", $inbraak_name);
		$stmt->bindParam(":iq", $inbraak_quantity);
		$stmt->bindParam(":il", $inbraak_location);
		$stmt->bindParam(":iid", $inbraak_id);
		
		if($stmt->execute())
		{
			echo "Succesvol updated";
		}
		else{
			echo "Query Problem";
		}
	}


?