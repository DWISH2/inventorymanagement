<?php
require_once 'dbconfig.php'; /* Connect with DB from dbconfig.php */

	
	if($_POST)
	{
		$cam_name = $_POST['cam_name'];
		$cam_quantity = $_POST['cam_quantity'];
		$cam_location = $_POST['cam_location'];
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO tbl_camera(cam_name,cam_quantity,cam_location) VALUES(:cname, :cquantity, :clocation)");
			$stmt->bindParam(":cname", $cam_name);
			$stmt->bindParam(":cquantity", $cam_quantity);
			$stmt->bindParam(":clocation", $cam_location);
			
			if($stmt->execute())
			{
				echo "Succesvol Toegevoegd";
			}
			else{
				echo "Query Problem";
			}	
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}
	/* create for camera.php */

		if($_POST)
	{
		$inbraak_name = $_POST['inbraak_name'];
		$inbraak_quantity = $_POST['inbraak_quantity'];
		$inbraak_location = $_POST['inbraak_location'];
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO tbl_inbraak(inbraak_name,inbraak_quantity,inbraak_location) VALUES(:iname, :iquantity, :ilocation)");
			$stmt->bindParam(":iname", $inbraak_name);
			$stmt->bindParam(":iquantity", $inbraak_quantity);
			$stmt->bindParam(":ilocation", $inbraak_location);
			
			if($stmt->execute())
			{
				echo "Succesvol Toegevoegd";
			}
			else{
				echo "Query Problem";
			}	
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}
	/* create for inbraak.php */
?>