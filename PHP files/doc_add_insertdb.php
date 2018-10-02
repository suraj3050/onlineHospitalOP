<?php
session_start();
include 'db_pat_con.php';

$dname = $_POST['dname'];
$spl = $_POST['spl'];
$demail = $_POST['demail'];
$pwd = $_POST['pwd'];
$cpwd = $_POST['cpwd'];


if($pwd == $cpwd){
	$hid = $_SESSION['hid'];
	$htable = $_SESSION['htabname'];
	
	$sql = "INSERT INTO $htable (doc_name, specialisation, doctor_email, doc_password) 
	VALUES ('$dname', '$spl', '$demail', '$pwd' )";
	$result = $conn->query($sql);
	
	//echo $hid;
	//echo $htable;
	/*if($result)
		echo "Successfully Inserted";
	else
		echo "Failed inserting";
	*/
	$sql1 = "SELECT doc_id FROM $htable WHERE doctor_email = '$demail'";
	$result1 = $conn->query($sql1);
	
	while ($row = $result1->fetch_assoc()) {
     $did = $row['doc_id'];
    }
	
	
	$dtabname = $htable."_".$did;
	$query = "CREATE TABLE $dtabname (s_no int(11) AUTO_INCREMENT PRIMARY KEY, patient_id int(11), patient_name varchar(200) NOT NULL, problem varchar(250) NOT NULL, gender varchar(6) NOT NULL, age int(3) NOT NULL, date date NOT NULL,status varchar(40) NOT NULL)";
	$result2 = $conn->query($query);
	
	$docavail = $dtabname."_avail";
	$query1 = "CREATE TABLE $docavail (date date PRIMARY KEY, availability VARCHAR(20) DEFAULT 'Available', reason varchar(500), est_time varchar(25) )";
	$result3 = $conn->query($query1);
	
	
	echo "<script>
	alert('New Doctor added Successfuly..');
	window.location.href='hosp_add_doc.php';
	</script>";
	
	/*if($result2)
	{
		echo "successful";
	}
	*/
}

//header("Location: hosp_add_doc.php");
?>