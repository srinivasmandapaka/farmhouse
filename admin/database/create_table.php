<?php
include('db_connect.php');
// sql to create table
$sql = "CREATE TABLE Register (
trans_id INT(6) AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(25) NOT NULL,
email VARCHAR(50) NOT NULL,
mobile varchar(12) NOT NULL,
password VARCHAR(50) NOT NULL,
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Register created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}


$sql = "CREATE TABLE Register (
trans_id INT(6) AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(25) NOT NULL,
email VARCHAR(50) NOT NULL,
mobile varchar(12) NOT NULL,
password VARCHAR(50) NOT NULL,
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Register created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}


?>
