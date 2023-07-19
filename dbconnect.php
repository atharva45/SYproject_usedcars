<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "test";

$CarBrand = $_POST["CarBrand"];
$CarName = $_POST["CarName"];
$Year = $_POST["Year"];
$Fuel = $_POST["Fuel"];
$Trans = $_POST["trans"];
$ownerno = $_POST["noofowners"];
$kms = $_POST["kms"];
$reg_no = $_POST["reg_no"];



$conn = mysqli_connect($server, $username, $password, $database);
// Create connection
$conn = new mysqli($server, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sqlquery = "INSERT into addcar(Carbrand, Carname , Year1 , Fuel , Trans , Ownerno , Kms , Reg_no) VALUES
('$CarBrand', '$CarName' , '$Year' , '$Fuel' , '$Trans' , '$ownerno' , '$kms','$reg_no' )";

if ($conn->query($sqlquery) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sqlquery . "<br>" . $conn->error;
}

?>
