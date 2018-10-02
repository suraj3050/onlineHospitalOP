<?php
session_start();
include 'db_pat_con.php';

$email = $_POST['email'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM hosp WHERE hosp_email='$email' AND hosp_password='$pwd'";
$result = $conn->query($sql); 

if(($row = $result->fetch_assoc()) > 0)
{
	/*while ($row = $result->fetch_assoc()) {
     $ptab = $row['pid'];
	 
    }*/
	$ptab = $row['hid'];
	$ptab1 = "hosp_".$ptab;
	
	$_SESSION['htabname'] = $ptab1;
	$_SESSION['hid'] = $ptab;
	
	//echo $ptab;
	//echo $ptab1;
	
	header("Location: hosp_frontpage.php");
	
}

else
{
	//echo "please enter valid Email and Password...";
	echo "<script>
alert('Please enter valid Email and Password...');
window.location.href='hosp_login_form.php';
</script>";
	
}

  	
	

//session_destroy();

//header("Location: hosp.php");
?>