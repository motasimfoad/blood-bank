<?php

$conn = mysqli_connect("localhost", "root", "", "blood_bank")
OR die('failed' . mysqli_connect_error());

//sql to create table

// $sql = "CREATE TABLE bb (
// id INT(6) AUTO_INCREMENT,
// un VARCHAR(30) NOT NULL,
// fn VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// pass VARCHAR(30),
// age INT(5),
// sex VARCHAR(2),
// location VARCHAR(20),
// bg VARCHAR (20),
// pon VARCHAR (20),
// donate VARCHAR(20),
// phone int(20),
// PRIMARY KEY (id)
// )ENGINE=InnoDB";

// if ($conn->query($sql) === TRUE) {
//     echo "Table BB created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }

// $conn->close();

?>


