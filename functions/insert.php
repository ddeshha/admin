<?php
require_once("functions.php");

$name = $_POST["name"];
$price = $_POST["price"];
// $image = $_POST["image"];
$count = $_POST["count"];
$cat = $_POST["category"];
$brand = $_POST["brand"];
$des = $_POST["description"];

    require_once("connect.php");
    echo "<pre>";
    // print_r($_POST);
    print_r($_FILES);

    
    $image_name = $_FILES['image']['name'];
    $image_exploud = explode(".", $image_name);
    $image_extension = end($image_exploud);

    $extension_allowed = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'tif'];
    
    $image_size = $_FILES['image']['size'];

    $image_tmp = $_FILES['image']['tmp_name'];


    if(!in_array($image_extension, $extension_allowed)){
                die();
    }elseif ($image_size >= 4000000) {
                die();
    }

    $last_image_name = time(). rand(0,10000). $image_name;

   move_uploaded_file($image_tmp, "../image/$last_image_name");



// die();




$insert = "INSERT INTO products(name, price, image, count, brand, category, description) 
VALUES ('$name','$price', '$last_image_name','$count',  '$cat','$brand','$des')";

$connect->query($insert);

dd("../proudcts.php");