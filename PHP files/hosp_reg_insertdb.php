<?php

include 'db_pat_con.php';

$hname = $_POST['hname'];
$htype = $_POST['htype'];
$hadd = $_POST['haddress'];
$hstate = $_POST['hstate'];
$hcity = $_POST['hcity'];
$hstreet = $_POST['hstreet'];
$email = $_POST['hemail'];
$pwd = $_POST['hpwd'];
$cpwd = $_POST['hcpwd'];

if($pwd == $cpwd){
	$sql = "INSERT INTO hosp (hosp_name, hosp_type, hosp_address, hosp_state, hosp_dist, hosp_street, hosp_email, hosp_password) 
	VALUES ('$hname', '$htype', '$hadd', '$hstate', '$hcity', '$hstreet', '$email', '$pwd')";
	$result = $conn->query($sql);
	
	$sel = "SELECT hid FROM hosp WHERE hosp_email='$email'";
	$result1 = $conn->query($sel);
	
	while ($row = $result1->fetch_assoc()) {
     $ptab = $row['hid'];
    }
	
	$ptab1 = "hosp_".$ptab;
	$query = "CREATE TABLE $ptab1 (doc_id int(5) AUTO_INCREMENT PRIMARY KEY, doc_name varchar(200) NOT NULL, specialisation varchar(100) NOT NULL, doctor_email varchar(150) UNIQUE KEY, doc_password varchar(250) NOT NULL)";
	$result2 = $conn->query($query);
	
	echo "<script>
	alert('Successfully Registered');
	window.location.href='home.php';
	</script>";
	
}

//header("Location: home.php");
?>