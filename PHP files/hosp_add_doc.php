

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
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
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
						$htable = $_SESSION['htabname'];
						
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
			
			
			<button type="button" onclick="window.location = 'doc_add_form.php';" class="button" >Add Doctor here</button>
			<br><br><br>
			<?php
				$sql1 = "SELECT * FROM $htable ";
						$result1 = $conn->query($sql1);
						
						while(($row1 = $result1->fetch_assoc()) > 0)
						{
	
							//$username = $row['hosp_name'];
							//echo $username;	
							//echo $row1['doc_id'];
							//echo $row1['doc_name'];
							//echo $row1['specialisation'];
							//echo $row1['doctor_email'];
							
							echo ' <html><body><head><style>table, th, td {border: 1px solid black;border-collapse: collapse;}</style></head><body><table style="width:60%"><tr><th>Doctor ID</th><th>Doctor Name</th><th>Specialisation</th><th>Doctor E-Mail</th>';
							echo '<tr>';
							//echo '<td>' $username '</td>';
							echo '<td>'. $row1["doc_id"] .' </td>';
							echo '<td>'. $row1["doc_name"].' </td>';
							echo '<td>'. $row1["specialisation"].' </td>' ;
							echo '<td>'. $row1["doctor_email"] .'</td>';
			echo "<br>";
							
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