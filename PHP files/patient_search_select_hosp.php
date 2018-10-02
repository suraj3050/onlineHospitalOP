

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
.button {
    width: 100%;
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
      <h1>Available Doctors</h1>
	  <?php
			$hid = $_GET['ID'];
			
$htab = "hosp_".$hid;
$_SESSION['htab'] = $htab;
$_SESSION['hid'] = $hid;
//echo $hid;
$sql = "SELECT * FROM $htab ";
			$result = $conn->query($sql);
			echo ' <html><body><head><style>table, th, td {border: 1px solid black;border-collapse: collapse;}</style></head><body><table style="width:60%"><tr><th>Doctor ID</th><th>Doctor Name</th><th>Specialisation</th><th>GET OP</th>';
			
			while(($row = $result->fetch_assoc()) > 0)
			{
				
						
						$did = $row['doc_id'];
							
							
							echo '<tr>';
							//echo '<td>' $username '</td>';
							echo '<td>'. $row["doc_id"] .' </td>';
							echo '<td>'. $row["doc_name"].' </td>';
							echo '<td>'. $row["specialisation"].' </td>' ;
							echo '<td><form action="patient_getop_form.php?ID=' . $did . '" method="POST">
										<input type="submit" name="submit" value="GET OP" class = "button">
										</form>
										</td>';
							echo '<tr>';
			echo "<br>";
							
					
			}

			
		?>
	  
     </div>
     
   </div>
</div>
</body>
</html>