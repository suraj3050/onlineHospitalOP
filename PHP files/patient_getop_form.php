		
		
		


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
input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.form_colour {
    border-radius: 5px;
    background-color: #E6E6FA;
    padding: 20px;
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
						$did = $_GET['ID'];
						$htab = $_SESSION['htab'];
						$dtab = $htab."_".$did;
						$_SESSION['dtab'] = $dtab;
						$_SESSION['did'] = $did;
						
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
      <h1>Submit OP form</h1>
		<form action="patient_getop_form_insertdb.php" method="post" class="form_colour">
			<label for="pname">Patient Name:</label>
				<input type="text" id="pname" name="pname" placeholder="Patient name.." required autofocus><br><br>	

			<label for="prob">Problem:</label>
				<input type="text" id="prob" name="prob" placeholder="problem"   required><br><br>
			
			<label for="gender">Gender:</label>
				<input type="radio" id="gender" name="gender" value="male" required>male
				<input type="radio" id="gender" name="gender" value="female" required>female<br><br>

			<label for="age">Age</label>
				<input type="text" id="age" name="age" placeholder="age...Eg:(35)" required><br><br>
				
			<!--<label for="did">Doctor-ID</label>
				<input type="text" id="did" name="did" placeholder="Doctor to add" required><br><br>-->
				
			
			
			<input type="submit" name= "submit" value="Add OP">
		</form>

	  
     </div>
     
   </div>
</div>
</body>
</html>