
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



</head>
<body>
<div class="admin-panel clearfix">
  <div class="slidebar">
    <div class="logo">
      <img src="nurse.jpg" width="200px"></a>
    </div>
    <ul>
      <li><a href="#dashboard" id="targeted">ADD OP</a></li>
      <li><a href="hosp_add_doc.php">Add a Doctor</a></li>
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
						$ptab = $_SESSION['hid'];
						
						
						$sql = "SELECT * FROM hosp WHERE hid = '$ptab'";
						$result = $conn->query($sql);
						if(($row = $result->fetch_assoc()) > 0)
						{
	
							$username = $row['hosp_name'];
							echo $username;	
						}
						
						?></a></li>
	 
       <li class="logout"><a href="logout.php">LOGOUT</a></li>
      
    </ul>
    <div class="mainContent clearfix">
		<form action="#" method="POST">
		Patient Name:
		<input type="text" name="pname" required><br><br>
		Problem:
		<input type="text" name="prob" required><br><br>
		Gender:
		<input type="radio" name="gender" value="male" required>
		<input type="radio" name="gender" value="female" required>
		<br><br>
		Age:
		<input type="text" name="age" required><br><br>

		<input type="submit" value="get op" >

	</form>
     </div>
     <ul class="statusbar">
       <li><a href=""></a></li>
       <li><a href=""></a></li>
     <!-- <li class="profiles-setting"><a href="">Do</a></li> -->
      
     </ul>
   </div>
</div>
</body>
</html>
