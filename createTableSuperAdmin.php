<?php

// ------------------------------step1--------------------------------------------------- 

$pdo1= new PDO("mysql:host=localhost;dbname=abc", "Vithushayini", "2000");
$pdo1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

//-----------------------Step2------------------------------------------------------------
// $sql1="CREATE TABLE users(
//     email VARCHAR(225) PRIMARY KEY,
//     password VARCHAR(225),
//     username VARCHAR(225),
//     phone VARCHAR(12),
//     is_admin BOOLEAN DEFAULT NULL,
//     is_sadmin BOOLEAN DEFAULT NULL
// )";

// $stmt1=$pdo1->prepare($sql1);
// $stmt1->execute();

//-------------------------step3----------------------------------------------------

// $sql2="CREATE TABLE images(
// name VARCHAR(225) PRIMARY KEY,
// location VARCHAR(225)
// )";
// $stmt2=$pdo1->prepare($sql2);
// $stmt2->execute();

//--------------------------step4----------------------------------------------------

$sql3="CREATE TABLE products (
    name VARCHAR(225) PRIMARY KEY,
    description TEXT,
    price DECIMAL(10,2),
    FOREIGN KEY (name) REFERENCES images(name)
)";
$stmt3=$pdo1->prepare($sql3);
$stmt3->execute();

//----------------------------step5--------------------------------

// $password = password_hash('vithushayini', PASSWORD_DEFAULT);
// $sql4 = "INSERT INTO users (email, password, username, phone, is_sadmin) VALUES ('vithushayini@gmail.com', :password, 'vithushayini', '0762354785', true)";

// $stmt4 = $pdo1->prepare($sql4);
// $stmt4->bindParam(':password', $password, PDO::PARAM_STR);
// $stmt4->execute();

?>