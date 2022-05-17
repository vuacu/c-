<?php
require_once 'login.php';
$conn=new mysqli($severname,$username,$password,$database);//create connect
if ($conn->connect_error){
    die("connection failed:" .$conn->connect_error);//check connect
}
// create database
//$sql = "CREATE DATABASE Banhang";
// create table
// $sql="CREATE TABLE Category(
//     id SMALLINT NOT NULL AUTO_INCREMENT,
//     name VARCHAR(20) NOT NULL,
//     descriptions VARCHAR(20) NOT NULL,
//     PRIMARY KEY(id)
//     )";
// $sql= "CREATE TABLE Products(
//     id SMALLINT NOT NULL AUTO_INCREMENT,
//     name VARCHAR(20) NOT NULL,
//     quantity INT NOT NULL,
//     price INT NOT NULL,
//     descriptions VARCHAR(20) NOT NULL,
//     PRIMARY KEY (id)
//     )";
// $sql=" CREATE TABLE Customers(
//     id SMALLINT NOT NULL AUTO_INCREMENT,
//     firstname VARCHAR(20) NOT NULL,
//     lastname VARCHAR(20) NOT NULL,
//     Phone INT NOT NULL,
//     address VARCHAR(20) NOT NULL,
//     descriptions VARCHAR(20) NOT NULL,
//     PRIMARY KEY (id)
//     )";
// $sql ="INSERT INTO Category(name,descriptions)
//     VALUE ('jsnark','khong'),
//     ('oc','khong')
// ";
// $sql ="INSERT INTO Products(name,quantity,price,descriptions)
//     VALUE ('sting',10,50000,'nuoc uong'),
//     ('nutti',5,30000,'nuoc uong')
    
//     ";
// $sql="INSERT INTO Customers(firstname,lastname,Phone,address,descriptions)
//     VALUE ('ronaldo','jr ronaldo', 07386118,'bo dao nha','khong'),
//     ('messi','leo messi',839719161,'argentina','khong')
    
//     ";

// cout data table products
$sql="SELECT id, name,price FROM Products";
$result= $conn->query($sql);
echo 'Create table:  <br>';
if($result->num_rows > 0){
    echo "<table style='boder: 1px solid #000 '><tr><th>id</th><th>name</th><th>price</th></tr>";
    while($row=$result->fetch_assoc()){
        echo "<tr><td style ='boder 1px solid #000'>". $row["id"]."</td><td style = 'boder: 1px solid #000'>" .$row["name"]. "</td><td style = 'boder: 1px solid #000'>" .$row["price"]."</td></tr>";
    }
}
else{
    echo "ko co du lieu";
}


// //cout data table customers
// $sql="SELECT * FROM Customers";
// $result= $conn->query($sql);
// if($result->num_rows > 0){
//     while($row=$result->fetch_assoc()){
//         echo "id: ". $row["id"]. "- firstname: ".$row["firstname"]. "- lastname: ". $row["lastname"]. "- Phone: ".$row["Phone"]. "- addrress: ". $row["address"]. "- descriptions: ". $row["descriptions"] ."<br>";
//     }
// }
// else{
//     echo "ko co du lieu";
// }


// if(mysqli_query($conn,$sql)){
//     echo "Thanh cong.";
// }
// else{
//     echo "ERROR: lỗi $sql. " .mysqli_error($conn);
// }
$conn->close();

?>