<?php
    $dbserver = "localhost";
    $dbuser = "root";
    $password = "m3c464r0n";
    $dbname = "sarmiento_rt";

	//$q = intval($_GET['q']);
	$con = mysqli_connect($dbserver,$dbuser,$password,$dbname);
	if (!$con) {
       die('Could not connect: ' . mysqli_error($con));
	}

	mysqli_select_db($con,$dbname);

	$sql= "SELECT * FROM `sarmiento_tr` WHERE 1"; 

	$result = mysqli_query($con,$sql);

	while($row = mysqli_fetch_array($result)) {
    	echo $row['DATE'] . ";";
    	echo $row['TIME'] . ";";
    	echo $row['TRAIN'] . ";";
    	echo $row['TC_ACT'] . ";";
    	echo $row['TC_ANT'] . ";";
    	echo $row['BLS_ACT'] . ";";
    	echo $row['BLS_ANT']. ";";
	} 


	mysqli_close($con);
?>
