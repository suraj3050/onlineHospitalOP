<?php
session_start();
include 'db_pat_con.php';


$email = $_POST['email'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM pat WHERE email='$email' AND password='$pwd'";
$result = $conn->query($sql); 

if(($row = $result->fetch_assoc()) > 0)
{
	/*while ($row = $result->fetch_assoc()) {
     $ptab = $row['pid'];
	 
    }*/
	$ptab = $row['pid'];
	$ptab1 = "pat_".$ptab;
	
	$_SESSION['ptabname'] = $ptab1;
	$_SESSION['pid'] = $ptab;
	
	//echo $ptab;
	//echo $ptab1;
	
	header("Location: patient_frontpage.php");
	
}

else
	echo "please enter valid Email and Password...";


  	
	

//session_destroy();

//header("Location: hosp.php");
?>