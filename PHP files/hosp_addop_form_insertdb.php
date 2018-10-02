<?php
session_start();
include 'db_pat_con.php';

$pname = $_POST['pname'];
$prob = $_POST['prob'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$did = $_POST['did'];


if(isset($_POST['submit'])){
	//$hid = $_SESSION['hid'];
	$htable = $_SESSION['htabname'];
	$addoptab = $htable."_".$did;
	
	$sql = "INSERT INTO $addoptab (patient_name, problem, gender, age, date, status) 
	VALUES ('$pname', '$prob', '$gender', '$age', NOW(), 'waiting' )";
	$result = $conn->query($sql);
	
	echo "<script>
	alert('OP added Successfully');
	window.location.href='hosp_addop_form.php';
	</script>";

}

//header("Location: hosp_addop_form.php");

?>