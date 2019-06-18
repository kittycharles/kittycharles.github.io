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
    echo "new record created!";
}else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
