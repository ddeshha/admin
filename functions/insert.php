<?php
require_once("functions.php");

$name = $_POST["name"];
$price = $_POST["price"];
$image = $_POST["image"];
$count = $_POST["count"];
$cat = $_POST["category"];
$brand = $_POST["brand"];
$des = $_POST["description"];



require_once("connect.php");

$insert = "INSERT INTO products(name, price, image, count, brand, category, description) 
VALUES ('$name','$price','$image','$count','$cat','$brand','$des')";

$connect->query($insert);

dd("../proudcts.php");