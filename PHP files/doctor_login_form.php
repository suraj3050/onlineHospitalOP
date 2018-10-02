<!DOCTYPE html>
<html>
<title>Hospital OP</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="home_css.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="home.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
	
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"></a>
    
	<a href="hosp_reg_form.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Register Your Hospital</a>
	
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"></a>
    
	<a href="patient_reg_form.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">New User Registration</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
   <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  
  
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}


input[type=text], select, textarea{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
}
input[type=email]{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
}
input[type=password]{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
}

label {
	font-family: Lucida Sans Unicode;
	font-size:18px;
    padding: 12px 2px 12px 12px;
    display: inline-block;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}


@media (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
</style>
</head>
<body>

<h1>Doctor LogIn</h1>


<div class="container">
  <form action="doctor_login.php" method="post">
  <div class="row">
      <div class="col-25">
        <label for="hid">Hospital-ID</label>
      </div>
      <div class="col-75">
        <input type="text" id="hid" name="hid" placeholder="Your Hospital-ID.."required autofocus>
      </div>
    </div>
    
				<div class="row">
      <div class="col-25">
        <label for="email">E-Mail</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="email" placeholder="Your E-Mail.."required>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="pwd">Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="pwd" name="pwd" placeholder="Your  Password.."required>
      </div>
    </div>
	
	<div class="row">
      <input type="submit" value="login" name="login">
    </div>
  </form>
</div>
 </header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
	 
      <h1>Online OP</h1>
      <h5 class="w3-padding-32">For your first visit to hospital, registration and appointment with doctor is made simpler. All you have to do is verify yourself using Aadhaar Number, Select Hospital and Department, Select date of Appointment and receive SMS for Appointment.</h5>
					<img src="pexel.jpg" alt="Image Missing" style="width:320px;height:415px;margin-left:750px; margin-top:-240px">
      <p class="w3-text-grey" style="margin-top:-180px">Online OP System (OOPS) is a framework to link various hospitals across the country for Aadhaar based online registration and appointment system, where counter based OPD registration and appointment system through Hospital Management Information System (HMIS) has been digitalized. The application has been hosted on the cloud services of NIC. Portal facilitates online appointments with various departments of different Hospitals using eKYC data of Aadhaar number, if patient's mobile number is registered with UIDAI. And in case mobile number is not registered with UIDAI it uses patient's name. New Patient will get appointment as well as Unique Health Identification (UHID) number. If Aadhaar number is already linked with UHID number, then appointment number will be given and UHID will remain same.</p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
	 <img src="pex.jpg" alt="Image Missing" style="width:270px;height:220px;margin-left:-350px;">	
     <br/> <br/> <h1 style="margin-top:-240px">Features</h1>
	  <br/>
      <h5 class="w3-padding-32" style="margin-top:-40px">Dashboard Reports</h5>
		
      <p class="w3-text-grey" style="margin-top:-40px">Total number of Hospitals for which appointment can be taken through web along with their departments for which online appointment can be taken can be seen in reports. Detail reports showing information about New and Old patients taking appointment through this portal can be seen.</p>
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: Live Life Long</h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  
 <p>Powered by <a href="#" target="_blank">TechCoders</a></p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
	window.location = "http:/feth/dash/mee.html";
}
</script>

</body>
</html>
