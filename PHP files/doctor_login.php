<?php
session_start();
include 'db_pat_con.php';

$hid = $_POST['hid'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$htab = "hosp_".$hid;

$sql = "SELECT * FROM $htab WHERE doctor_email='$email' AND doc_password='$pwd' ";
$result = $conn->query($sql); 

if(($row = $result->fetch_assoc()) > 0)
{
	/*while ($row = $result->fetch_assoc()) {
     $ptab = $row['pid'];
	 
    }*/
	$did = $row['doc_id'];
	$dtab1 = $htab."_".$did;
	
	$_SESSION['htab'] = $htab;
	$_SESSION['doctab'] = $dtab1;
	$_SESSION['hospid'] = $hid;
	$_SESSION['docid'] = $did;
	
	//echo $ptab;
	//echo $ptab1;
	
	header("Location: doctor_frontpage_status.php");
	
}

else{
	//echo "please enter valid Email and Password...";
	echo "<script>
	alert('please enter valid Hospital-ID,Email and Password...');
	window.location.href='doctor_login_form.php';
	</script>";
}
	


  	
	

//session_destroy();

//header("Location: hosp.php");
?>