<!DOCTYPE html>
<html>
<head>
	<title>insert.php</title>
</head>
<body>
	<?php
	/*require_once 'dbconfig.php';
	//$con = mysql_connect("tbl_camera","im2017","inventory2017");
	if (!$con)
  		{
  			die('Could not connect: ' . mysql_error());
  		}
	mysql_select_db(tbl_camera, $con);

	$sql="INSERT INTO tbl_inbraak (iName, iQty, iLoc)
	VALUES ('$_POST[iName]','$_POST[iQty]','$_POST[iLoc]')";

	if (!mysql_query($sql,$con)) {
		die('Error: ' . mysql_error());
	}
	echo "1 Record added";
	*/
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
</body>
</html>