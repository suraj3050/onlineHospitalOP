
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
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}

.box {
    width: 320px;
    padding: 10px;
    border: 5px solid gray;
    margin: 0;
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
      <h1>Status</h1>
	  <br><br>
	  <?php
		$doctab = $_GET['dtab'];
		//echo $doctab;
		$sql1 = "SELECT * FROM $doctab WHERE date = CURDATE()";
		$result1 = $conn->query($sql1); 
		echo "<table >
			<tr>
				<th >OP_NO </th>
				<th >Name</th>
				<th >CURRENT STATUS</th>
				
			</tr>";
		$op = 1;
  while(($row1 = $result1->fetch_assoc()) > 0)
  {
  if($ptab == $row1['patient_id']){
  echo "<tr >";
  //echo "<td>".$row['s_no']."</td>";
  echo "<td bgcolor='#00FF00'>".$op."</td>";
  echo "<td bgcolor='#00FF00'>".$row1['patient_name']."</td>";
  echo "<td bgcolor='#00FF00'>".$row1['status']."</td>";
  
  
  echo "</tr>";
  }
  else{
	  echo "<tr>";
  //echo "<td>".$row['s_no']."</td>";
  echo "<td>".$op."</td>";
  echo "<td>".$row1['patient_name']."</td>";
  echo "<td>".$row1['status']."</td>";
  
  
  echo "</tr>";
  }
  
	$op = $op+1;
 }
	
  echo "</table>";	
		
		
	
	  ?>
	  
     </div>
     
   </div>
</div>
</body>
</html>