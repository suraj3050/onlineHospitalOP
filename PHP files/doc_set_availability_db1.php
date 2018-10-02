<?php
session_start();
include 'db_pat_con.php';

$doctab = $_SESSION['doctab'];
$today = $_POST['today'];
$docavail = $doctab."_avail";
	$query = "SELECT * FROM $docavail WHERE date = 'CURDATE()'";
	$result=$conn->query($query);
	
 	  //print_r( $_POST );
	if(isset($_POST['submit'])){
		
	/*if(($row = $result->fetch_assoc()) == 0){	
	$query1 = "INSERT INTO $docavail (date,availability) VALUES (CURDATE(), '$today')";
	$result1=$conn->query($query1);
	echo "<script>
	alert('Successfully updated');
	window.location.href='doctor_set_availability.php';
	</script>";
	}
	
	else{
		$query2 = "UPDATE $docavail SET availability = '$today' WHERE date = CURDATE()";
	$result2=$conn->query($query2);
	echo "<script>
	alert('Successfully updated1');
	window.location.href='doctor_set_availability.php';
	</script>";
		
	}*/
	
	$query1 = "INSERT INTO $docavail (date,availability) VALUES (CURDATE(), '$today')";
	$result1=$conn->query($query1);
	$query2 = "UPDATE $docavail SET availability = '$today' WHERE date = CURDATE()";
	$result2=$conn->query($query2);
	echo "<script>
	alert('Successfully updated');
	window.location.href='doctor_set_availability.php';
	</script>";
	}

//header("Location: doctor_frontpage_status.php"); 
?>