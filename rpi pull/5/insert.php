	<?php
		require_once 'dbconfig.php';
		if($_POST)
	{
		$iName = $_POST['iName'];
		$iQty = $_POST['iQty'];
		$iLoc = $_POST['iLoc'];
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO tbl_inbraak(iName,iQty,iLoc) VALUES(:cname, :cquantity, :clocation)");
			$stmt->bindParam(":cname", $iName);
			$stmt->bindParam(":cquantity", $iQty);
			$stmt->bindParam(":clocation", $iLoc);
			
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
	?>
