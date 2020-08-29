<?php

$fname = $_GET['fname'];
$lname = $_GET['lname'];
$password = $_GET['password'];
$email = $_GET['emailid'];



$conn = new mysqli("localhost","root","","hotels");

// Create connection
// Check connection


$sql2 = "INSERT INTO hotelowners VALUES('$fname','lname','email','$password')";

$result = $conn->query($sql2);

// Create connection
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($result === TRUE){

    echo('Query executed success');
}
else {
    echo('Problem 2');
}

// sql to create table


mysqli_close($conn);
?>

<br>
<br>
<br>
