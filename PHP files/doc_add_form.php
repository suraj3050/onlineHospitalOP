

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
      <li><a href="hosp_addop_form.php" id="targeted">ADD OP</a></li>
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
			<form action="doc_add_insertdb.php" method="post" class="form_colour">
			<label for="dname">Doctor Name:</label>
				<input type="text" id="dname" name="dname" placeholder="Doctor name.." required autofocus><br><br>	

			<label for="spl">Specialisation</label>
				<input type="text" id="spl" name="spl" placeholder="Doctor's specialisation.."   required><br><br>
			
			<label for="demail">Doctor Email:</label>
				<input type="email" id="demail" name="demail" placeholder="Doctor Email.."    required><br><br>	

			<label for="pwd">Password</label>
				<input type="password" id="pwd" name="pwd" placeholder="password.." required><br><br>
				
			<label for="cpwd"> Confirm Password</label>
				<input type="password" id="cpwd" name="cpwd" placeholder=" confirm password.."  required><br><br>
			
			<input type="submit" value="Add Doctor">
		</form>
      
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