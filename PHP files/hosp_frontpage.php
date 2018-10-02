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
      <div id="dashboard">
        <h2 class="header"><span class="icon"></span>Dashboard</h2>
          <div class="monitor">
            <h4>Right Now</h4>
            <div class="clearfix">
              <ul class="content">
                <li>content</li>
                <li class="posts"><span class="count">179</span><a href="">posts</a></li>
                <li class="pages"><span class="count">13</span><a href="">pages</a></li>
                <li class="categories"><span class="count">21</span><a href="">categories</a></li>
                <li class="tags"><span class="count">305</span><a href="">tags</a></li>
              </ul>
              <ul class="discussions">
                <li>discussions</li>
                <li class="comments"><span class="count">353</span><a href="">comments</a></li>
                <li class="approved"><span class="count">319</span><a href="">approved</a></li>
                <li class="pending"><span class="count">0</span><a href="">pending</a></li>
                <li class="spam"><span class="count">34</span><a href="">spam</a></li>
             </ul>
           </div>
           <p>Theme <a href="">Twenty Eleven</a> with <a href="">3 widgets</a></p>
         </div>
         <div class="quick-press">
           <h4>Quick Press</h4>
           <form action="" method="post">
             <input type="text" name="title" placeholder="Title"/>
             <input type="text" name="content" placeholder="Content"/>
             <input type="text" name="tags" placeholder="Tags"/>
             <button type="button" class="save">l</button>
             <button type="button" class="delet">m</button>
             <button type="submit" class="submit" name="submit">Publish</button>
           </form>
         </div>
       </div>
       <div id="posts">
         <h2 class="header">posts</h2>
       </div>
       <div id="media">
         <h2 class="header">media</h2>
       </div>
       <div id="pages">
         <h2 class="header">pages</h2>
       </div>
       <div id="links">
         <h2 class="header">links</h2>
       </div>
       <div id="comments">
         <h2 class="header">comments</h2>
       </div>
       <div id="widgets">
         <h2 class="header">widgets</h2>
       </div>
       <div id="plugins">
         <h2 class="header">plugins</h2>
       </div>
       <div id="users">
         <h2 class="header">users</h2>
       </div>
       <div id="tools">
         <h2 class="header">tools</h2>
       </div>
       <div id="settings">
         <h2 class="header">settings</h2>
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