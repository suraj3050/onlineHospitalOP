<?php
session_start();
include 'db_pat_con.php';

$doctab = $_SESSION['doctab'];
$tom = $_POST['tom'];
$docavail = $doctab."_avail";
	$query = "SELECT * FROM $docavail WHERE date = 'CURDATE()+1'";
	$result=$conn->query($query);
	
 	  //print_r( $_POST );
	if(isset($_POST['submit'])){
		
	/*if(($row = $result->fetch_assoc()) == 0){	
	$query1 = "INSERT INTO $docavail (date,availability) VALUES (CURDATE()+1, '$tom')";
	$result1=$conn->query($query1);
	echo "<script>
	alert('Successfully updated');
	window.location.href='doctor_set_availability.php';
	</script>";
	}
	
	else{
		$query1 = "UPDATE $docavail SET availability = '$tom' WHERE date = CURDATE()+1";
	$result1=$conn->query($query1);
	echo "<script>
	alert('Successfully updated');
	window.location.href='doctor_set_availability.php';
	</script>";
		
	}*/
	
	$query1 = "INSERT INTO $docavail (date,availability) VALUES (CURDATE()+1, '$tom')";
	$result1=$conn->query($query1);
	$query2 = "UPDATE $docavail SET availability = '$tom' WHERE date = CURDATE()+1";
	$result2=$conn->query($query2);
	echo "<script>
	alert('Successfully updated');
	window.location.href='doctor_set_availability.php';
	</script>";
	}

//header("Location: doctor_frontpage_status.php"); 
?>