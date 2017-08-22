	<?php
		require_once 'dbconfig.php';
		if($_POST)
	{
		$inbraakinstallatie_name = $_POST['iname'];
		$inbraakinstallatie_quantity = $_POST['iquantity'];
		$inbraakinstallatie_location = $_POST['ilocation'];
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO tbl_inbraak(iname,iquantity,ilocation) VALUES(:iname, :iquantity, :ilocation)");
			$stmt->bindParam(":iname", $inbraakinstallatie_name);
			$stmt->bindParam(":iquantity", $inbraakinstallatie_quantity);
			$stmt->bindParam(":ilocation", $inbraakinstallatie_location);
			
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
