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

.button {
    width: 30%;
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
<?php
	$doctab = $_SESSION['doctab'];
	$docavail = $doctab."_avail";
	$query2 = "SELECT * FROM $docavail WHERE date = CURDATE()";
	$result2 =$conn->query($query2);
	if ($result2->num_rows > 0) {
    	while($row2 = $result2->fetch_assoc()) {
			if($row2['availability'] == 'Available')
			{
        echo "<h2>Today:&nbsp&nbsp<img src='active.jpg' height=10 width=10>&nbspAvailable</h2>";
			}
			else if($row2['availability'] == 'Not Available'){
				echo "<h2>Today:&nbsp&nbsp<img src='inactive.jpg' height=10 width=10>&nbspNot Available</h2>";
			}
			
    }
		
    }

	
	
?>

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
						//$doctab = $_SESSION['doctab'];
						
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
      
     <?php
			//$sql = "select * from $doctab order by s_no ASC";
			$sql = "select * from $doctab WHERE date = CURDATE()";
			$result = $conn->query($sql);
			//$num=mysqli_num_rows($query);
			//$row=mysqli_fetch_array($query, MYSQLI_ASSOC);
			echo "<table >
			<tr>
				<th >OP_NO </th>
				<th >Name</th>
				<th >Problem</th>
				<th >Gender</th>
				<th >Age</th>
				<th >CURRENT STATUS</th>
				<th >UPDATE STATUS</th>
			</tr>";
		$op = 1;
  while(($row = $result->fetch_assoc()) > 0)
  {
  echo "<tr>";
  //echo "<td>".$row['s_no']."</td>";
  echo "<td>".$op."</td>";
  echo "<td>".$row['patient_name']."</td>";
  echo "<td>".$row['problem']."</td>";
  echo "<td>".$row['gender']."</td>";
  echo "<td>".$row['age']."</td>";
  echo "<td>".$row['status']."</td>";
  echo "<td>
  <form action='doctor_frontpage_status_update.php' method='POST'> 
	<input type='radio' name='stat' value='visited' >visited  <input type='radio' name='stat' value='not visited' >not visited <input type='submit' name='update' value='update' class='button'>
    <input name='op' style=\"display:  none;\" value=".$row['s_no'].">
  </form>
  </td>";
  
  echo "</tr>";
  
	$op = $op+1;
 }
	
  echo "</table>";	
	


?>
   </div>
   
   
   
</div>
</body>
</html>