



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
</head>
<body>
<div class="admin-panel clearfix">
  <div class="slidebar">
    <div class="logo">
      <img src="nurse.jpg" width="200px"></a>
    </div>
    <ul>
      <li><a href="# id="targeted">dashboard</a></li>
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
      <h1>Available Hospital:</h1>
	  <?php


			$state = $_POST['state'];
			$city = $_POST['city'];

			$sql = "SELECT * FROM hosp where hosp_state='$state' AND hosp_dist='$city'";
			$result = $conn->query($sql);

			while(($row = $result->fetch_assoc()) > 0)
			{
				$hid = $row['hid'];
				$hname = $row['hosp_name'];
				echo '<a href="patient_search_select_hosp.php?ID=' . $hid . '">'. $hname.'</a>';
				echo "<br>";
			}
		?>
	  
     </div>
     
   </div>
</div>
</body>
</html>