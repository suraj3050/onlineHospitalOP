
<?php
session_start();
include 'db_pat_con.php';

$op=$_POST["op"];
$doctab = $_SESSION['doctab'];
	  //print_r( $_POST );
	if(isset($_POST['update'])){
		
		$upd=$_POST['stat'];
	$query = "UPDATE $doctab SET status = '$upd' WHERE  s_no = '$op' ";
	$result=$conn->query($query);
	
/*	if($result){
		echo "UPDATED";
	}else{
		echo "NOT UPDATED";
	} */
	}

header("Location: doctor_frontpage_status.php"); 
?>