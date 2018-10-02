<?php
session_start();
include 'db_pat_con.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Hospital DASH</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="hosp_frontpage_css.css">

<style>



.button {
    width: 15%;
    background-color: #4CAF50;
    color: white;
    padding: 7px 10px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

</style>


</head>
<body>
<div class="admin-panel clearfix">
  <div class="slidebar">
    <div class="logo">
      <img src="nurse.jpg" width="200px"></a>
    </div>
    <ul>
      <li><a href="doctor_frontpage_status.php" id="targeted">OP LIST</a></li>
      <li><a href="doctor_set_availability.php">Set Availability</a></li>
    <!--  <li><a href="#media">media</a></li>
      <li><a href="#pages">pages</a></li>
      <li><a href="#links">links</a></li>
      <li><a href="#comments">comments</a></li>
      <li><a href="#widgets">widgets</a></li>
      <li><a href="#plugins">plugins</a></li>
      <li><a href="#users">users</a></li>
      <li><a href="#tools">tools</a></li>
      <li><a href="#settings">settings</a></li>-->
    </ul>
  </div>
  <div class="main">
    <ul class="topbar clearfix">
      <li><a href="#"><?php
						//$ptab = $_SESSION['hid'];
						$htab = $_SESSION['htab'];
						$did = $_SESSION['docid'];
						$doctab = $_SESSION['doctab'];
						
						$sql = "SELECT * FROM $htab WHERE doc_id = '$did'";
						$result = $conn->query($sql);
						if(($row = $result->fetch_assoc()) > 0)
						{
	
							$username = $row['doc_name'];
							echo $username;	
						}
						
						?></a></li>
	 
       <li class="logout"><a href="logout.php">LOGOUT</a></li>
      
    </ul>
    <div class="mainContent clearfix">
      <h1>Set Availability</h1>
		<form action="doc_set_availability_db1.php" method="POST">
			Today Availability:
			<input type="radio" name="today" value="Available" REQUIRED>Available
			<input type="radio" name="today" value="Not Available" REQUIRED>Not Available
			<input type="submit" name="submit" value="submit" class="button">
			</form><br><br>
			<form action="doc_set_availability_db2.php" method="POST">
			Tomorrow Availability:
			<input type="radio" name="tom" value="Available" REQUIRED>Available
			<input type="radio" name="tom" value="Not Available" REQUIRED>Not Available
			<input type="submit" name="submit" value="submit" class="button">
		</form><br><br>
		<form action="doc_set_availability_db3.php" method="POST">
			Day After Tomorrow Availability:
			<input type="radio" name="datom" value="Available" REQUIRED>Available
			<input type="radio" name="datom" value="Not Available" REQUIRED>Not Available
			
		    <input type="submit" name="submit" value="submit" class="button">
			
		</form>
		<br><br><br>
		<h1>Update Today's Availability</h1>
		<form action="doc_set_availability_update_db.php" method="POST">
			Update Today's Availability(Emergency):
			<input type="radio" name="today" value="Available" REQUIRED>Available
			<input type="radio" name="today" value="Not Available" REQUIRED>Not Available
			<br><br>
			Reason: <br><br>
			<textarea rows="4" cols="50" name="reason" REQUIRED></textarea>
			<br><br>
			Estimation time for return:
			<input type="text" name="time" REQUIRED>
			<br><br>
		    <input type="submit" name="submit" value="submit" class="button">
			
		</form>
		
   </div>
   
   
   
</div>
</body>
</html>