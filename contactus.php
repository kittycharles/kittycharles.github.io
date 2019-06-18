<?php
//speak to marcus if you want this changed, thanks x


//connetcing to mysql server
$host="localhost";
$username="cha17219_kitty17";
$password="4{&i3-+Y@bgL";
$dbname="cha17219_contact";

//create a connection
$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
	//die("Connection Failed: " . mysqli_connect_error())
}

//store form values
$fullname = $_POST["fullname"];
$message = $_POST["message"];
$email = $_POST["email"];

$conn->query("USE cha17219_contact");
//inserting these values into mysql table
$sql = "INSERT INTO contacts (fullname, message, email) VALUES ('$fullname', '$message','$email')";

if ($conn->query($sql) === TRUE) {
;
}else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>




<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/stylesheets/w3.css">
<link rel="stylesheet" href="assets/stylesheets/dropdown.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

<div class="w3-container w3-black" style="color:white;">
<h4> <p> Carter Angelo Gallery <img src="assets/img/logo.png" style="margin-top:-30px;float:right;"><p> </h4>
     
</div>
 <div class="navbar">
<a href="index.html">Home</a>
   <a href="contactus.html">Contact Us</a>
 <a href="aboutus.html">About Us</a>
 
  <div class="dropdown">
    <button class="dropbtn" onclick="myFunction()">Artists
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" id="myDropdown">
	  <a href="angelo.html">Angelo</a>
      <a href="mark.html">Mark</a>
      <a href="louise.html">Louise</a>
      <a href="sharon.html">Sharon</a>
    </div>
  </div> 
</div>

<div class="w3-row-padding">

<div class="w3-container">
  
  <h1>Contact Us</h1>
   <p> Gallery Hours: Tuesday - Saturday 11am-6pm </p>
      <p class="w3-opacity">GET IN TOUCH</p>
      <form action="database.php" target="_blank" method="POST" class="w3-container w3-card w3-padding-32 w3-white">
        <div class="w3-section">
          <label>Full Name</label>
          <input class="w3-input" id="fullname" style="width:100%;" type="text" required="">
        </div>
        <div class="w3-section">
          <label>Email Address</label>
          <input class="w3-input" id="email" style="width:100%;" type="text" required="">
        </div>
		
		<div class="w3-section">
          <label> Message (250 character max)</label>
          <input class="w3-input" id="message" style="width:100%;" type="text" required>
        </div>
        <button type="submit" value="Submit Email" class="w3-btn">Send</button>
      </form>
    </div>
  </div>
<script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
  }
}
</script>
</body>
</html>