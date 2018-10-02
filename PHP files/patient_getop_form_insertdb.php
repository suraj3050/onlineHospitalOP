<?php
session_start();
include 'db_pat_con.php';

$pname = $_POST['pname'];
$prob = $_POST['prob'];
$gender = $_POST['gender'];
$age = $_POST['age'];



if(isset($_POST['submit'])){
	//$hid = $_SESSION['hid'];
	//$htable = $_SESSION['htabname'];
	//$addoptab = $htable."_".$did;
	$dtab = $_SESSION['dtab'];
	$pid = $_SESSION['pid'];
	$htab = $_SESSION['htab'];
	$hid = $_SESSION['hid'];
	$did = $_SESSION['did'];
	$ptab = "pat_".$pid;
	
	
	
	
	$sql = "INSERT INTO $dtab (patient_id, patient_name, problem, gender, age, date, status) 
	VALUES ('$pid', '$pname', '$prob', '$gender', '$age', NOW(), 'waiting' )";
	$result = $conn->query($sql);
	
	$sql1 = "SELECT * FROM hosp WHERE hid='$hid' ";
	$result1 = $conn->query($sql1);
	if(($row = $result1->fetch_assoc()) > 0)
	{
		$hname = $row['hosp_name'];
	}
	
	$sql2 = "SELECT * FROM $htab WHERE doc_id='$did'";
	$result2 = $conn->query($sql2);
	if(($row1 = $result2->fetch_assoc()) > 0)
	{
		$dname = $row1['doc_name'];
	}
	//echo $dname;
	//echo $hname;
	
	$sql3 = "INSERT INTO $ptab (patient_name, hosp_name, doctor_name, problem, date, hosp_id, doc_id) 
	VALUES ('$pname', '$hname', '$dname','$prob', NOW(), '$hid', '$did')";
	$result3 = $conn->query($sql3);
	
	echo "<script>
	alert('OP added Successfully');
	window.location.href='patient_getop.php';
	</script>";
	
	
}

//header("Location: patient_getop.php");

?>