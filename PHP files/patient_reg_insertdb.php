<?php

include 'db_pat_con.php';

$uname = $_POST['pname'];
$email = $_POST['pemail'];
$pwd = $_POST['ppwd'];
$cpwd = $_POST['pcpwd'];

if($pwd == $cpwd){
	$sql = "INSERT INTO pat (username, email, password) 
	VALUES ('$uname', '$email', '$pwd')";
	$result = $conn->query($sql);
	
	$sel = "SELECT pid FROM pat WHERE email='$email'";
	$result1 = $conn->query($sel);
	
	while ($row = $result1->fetch_assoc()) {
     $ptab = $row['pid'];
    }
	
	$ptab1 = "pat_".$ptab;
	$query = "CREATE TABLE $ptab1 (op_no int(4) NOT NULL, patient_name varchar(100) NOT NULL, hosp_name varchar(250) NOT NULL, doctor_name varchar(100) NOT NULL, problem varchar(250) NOT NULL, date date NOT NULL, hosp_id int(11) NOT NULL, doc_id int(11) NOT NULL)";
	$result2 = $conn->query($query);
	
	echo "<script>
	alert('Successfully Registered');
	window.location.href='home.php';
	</script>";
}

//header("Location: home.php");
?>