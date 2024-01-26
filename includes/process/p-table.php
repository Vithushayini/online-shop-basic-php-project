<?php
// class CreateTableSadmin
// {
    
// }
 
$pdo1= new PDO("mysql:host=localhost;dbname=abc_pvt", "superadmin", "2000");
$pdo1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
$sql1="CREATE TABLE users (
    email VARCHAR(225) NOT NULL PRIMARY KEY,
    password VARCHAR(225) NOT NULL,
    username VARCHAR(225) NOT NULL,
    phone VARCHAR(12) NOT NULL,
    is_admin BOOLEAN DEFAULT false,
    is_sadmin BOOLEAN DEFAULT false
)";

$stmt1=$pdo1->prepare($sql1);
$stmt1->execute();


$sql2="CREATE TABLE images (
name VARCHAR(225) PRIMARY KEY,
location VARCHAR(225) NOT NULL
)";
$stmt2=$pdo1->prepare($sql2);
$stmt2->execute();

$sql3="CREATE TABLE products (
    name VARCHAR(225) NOTNULL PRIMARY KEY,
    description TEXT,
    price DECIMAL(10,2),
    FOREIGN KEY (name) REFERENCES images(name)
)";
$stmt3=$pdo1->prepare($sql3);
$stmt3->execute();

$password=password_hash('vithushayini',PASSWORD_DEFAULT);
$sql4="INSERT INTO users ('email','password','username','phone','is_sadmin') VALUES ('vithushayini@gmail.com',$password,'vithushayini','0762354785',true)";

$stmt4=$pdo1->prepare($sql4);
$stmt4->execute();
?>