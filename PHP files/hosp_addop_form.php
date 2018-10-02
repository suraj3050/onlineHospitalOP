
	


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
      <li><a href="#" id="targeted">ADD OP</a></li>
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
			<form action="hosp_addop_form_insertdb.php" method="post" class="form_colour">
			<label for="pname">Patient Name:</label>
				<input type="text" id="pname" name="pname" placeholder="Patient name.." required autofocus><br><br>	

			<label for="prob">Problem:</label>
				<input type="text" id="prob" name="prob" placeholder="problem"   required><br><br>
			
			<label for="gender">Gender:</label>
				<input type="radio" id="gender" name="gender" value="male" required>male
				<input type="radio" id="gender" name="gender" value="female" required>female<br><br>

			<label for="age">Age</label>
				<input type="text" id="age" name="age" placeholder="age...Eg:(35)" required><br><br>
				
			<label for="did">Doctor-ID</label>
				<input type="text" id="did" name="did" placeholder="Doctor to add" required><br><br>
				
			
			
			<input type="submit" name= "submit" value="Add OP">
		</form>
		<br><br>
		<?php
		$htable = $_SESSION['htabname'];
		$sql1 = "SELECT * FROM $htable ";
						$result1 = $conn->query($sql1);
						
						echo ' <html><body><head><style>table, th, td {border: 1px solid black;border-collapse: collapse;}</style></head><body><table style="width:60%"><tr><th>Doctor ID</th><th>Doctor Name</th><th>Specialisation</th>';
						
						while(($row1 = $result1->fetch_assoc()) > 0)
						{
	
							
							
							//echo ' <html><body><head><style>table, th, td {border: 1px solid black;border-collapse: collapse;}</style></head><body><table style="width:60%"><tr><th>Doctor ID</th><th>Doctor Name</th><th>Specialisation</th>';
							echo '<tr>';
							//echo '<td>' $username '</td>';
							echo '<td>'. $row1["doc_id"] .' </td>';
							echo '<td>'. $row1["doc_name"].' </td>';
							echo '<td>'. $row1["specialisation"].' </td>' ;
							echo '<tr>';
			//echo "<br>";
							
						}
        ?>
       </div>
       
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