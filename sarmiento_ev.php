<?php
    $dbserver = "localhost";
    $dbuser = "root";
    $password = "m3c464r0n";
    $dbname = "sarmiento_rt";

	$sql = $_GET['q'];
	$con = mysqli_connect($dbserver,$dbuser,$password,$dbname);
	if (!$con) {
       die('Could not connect: ' . mysqli_error($con));
	}

	mysqli_select_db($con,$dbname);

//	$sql = "SELECT * FROM `sarmiento_ev` ORDER BY DATE DESC LIMIT 10"; 
//	$sql= "SELECT * FROM `sarmiento_ev` WHERE 1 "; 

	$result = mysqli_query($con,$sql);

	while($row = mysqli_fetch_array($result)) {
    	echo $row['DATE'] . ";";
    	echo $row['TIME'] . ";";
    	echo $row['TRAIN'] . ";";
    	echo $row['TC'] . ";";
    	echo $row['ST_TC'] . ";";
    	echo $row['OB_ATP'] . ";";
    	echo $row['MAP']. ";";
    	echo $row['TYPE'] . ";";
    	echo $row['SUB_TYPE']. ";";
	} 


	mysqli_close($con);
?>