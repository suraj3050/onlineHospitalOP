
<?php
//patient_frontpage_temporarily testing
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
.padbox {
	border: 1px solid black;
    background-color: lightblue;
    padding-top: 50px;
    padding-right: 30px;
    padding-bottom: 50px;
    padding-left: 80px;
}

.box {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
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
      <li><a href="patient_dashboard.php"targeted">dashboard</a></li>
      <li><a href="patient_getop.php">GET OP</a></li>
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
						$ptab = $_SESSION['pid'];
						$tab = "pat_".$ptab;
						$_SESSION['ptable'] = $tab;
						
						$sql = "SELECT * FROM pat WHERE pid = '$ptab'";
						$result = $conn->query($sql);
						if(($row = $result->fetch_assoc()) > 0)
						{
	
							$username = $row['username'];
							echo $username;	
						}
						
						?></a></li>
	 
       <li class="logout"><a href="logout.php">LOGOUT</a></li>
      
    </ul>
    <div class="mainContent clearfix">
	
      <h1>Today OP's</h1>
	  <br><br>
	  <?php
		$ptable = $_SESSION['ptable'];
		$sql1 = "SELECT * FROM $ptable WHERE date = CURDATE()";
		$result1 = $conn->query($sql1); 
		while(($row1 = $result1->fetch_assoc()) > 0)
		{
			//echo '<div class="box">';
			$hospitalid = $row1['hosp_id'];
			$doctorid = $row1['doc_id'];
			$doctortab = "hosp_".$hospitalid."_".$doctorid;
			
			echo "Hospital-Name:&nbsp;".$row1['hosp_name'];
			echo "<br>";
			echo "Doctor-Name:&nbsp;".$row1['doctor_name'];
			echo "<br>";
			echo "Patient_name:&nbsp;".$row1['patient_name'];
			echo "<br>";
			echo "Problem:&nbsp;".$row1['problem'];
			echo "
				<form action='patient_status.php?dtab=".$doctortab."' method='POST'>
					<input type='submit' name='view_status' value='View Status' class='box'>
				</form>
				";
			//echo '</div>';
			
			echo "<br><br>";
		}
		
		
		
	  ?>
	  
     </div>
     
   </div>
</div>
</body>
</html>