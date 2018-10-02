<?php
session_start();
include 'db_pat_con.php';

$doctab = $_SESSION['doctab'];
$docavail = $doctab."_avail";
$today = $_POST['today'];
$reason = $_POST['reason'];
$time = $_POST['time'];

	$query = "SELECT * FROM $docavail WHERE date = CURDATE()";
	$result=$conn->query($query);
	
 	  //print_r( $_POST );
	if(isset($_POST['submit'])){
		
	if(($row = $result->fetch_assoc()) == 0){	
	echo "<script>
	alert('First set Availability');
	window.location.href='doctor_frontpage_status.php';
	</script>";
	}
	
	else{
		$query1 = "UPDATE $docavail SET availability = '$today', reason= '$reason', est_time = '$time' WHERE date = CURDATE()";
	$result1=$conn->query($query1);
	echo "<script>
	alert('Successfully updated');
	window.location.href='doctor_frontpage_status.php';
	</script>";
		
	}
	}

//header("Location: doctor_frontpage_status.php"); 
?>