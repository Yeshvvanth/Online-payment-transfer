<?php

$db="payment";
$user="root";
$psw="";
$host="localhost";

$conn = mysqli_connect($user,$psw,$host,$db);

if(!$conn)
{
	die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT * FROM payment";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>