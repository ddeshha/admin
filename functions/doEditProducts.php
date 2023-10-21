<?php

    require_once("functions.php");
    require_once("connect.php");

    $name = $_POST["name"];
    $price = $_POST["price"];
    $count = $_POST["count"];
    $cat = $_POST["category"];
    $brand = $_POST["brand"];
    $des = $_POST["description"];
    $id = $_POST["id"];


if ($_FILES['image']['error'] == 0) {
    $image_name = $_FILES['image']['name'];
    $image_exploud = explode(".", $image_name);
    $image_extension = end($image_exploud);

    $extension_allowed = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'tif'];

    $image_size = $_FILES['image']['size'];
    $image_tmp = $_FILES['image']['tmp_name'];

    if (!in_array($image_extension, $extension_allowed) || $image_size >= 4000000) {
        die();
    }

    $last_image_name = time() . rand(0, 10000) . $image_name;
    move_uploaded_file($image_tmp, "../image/$last_image_name");

    $edit = "UPDATE products SET name='$name', price='$price', image='$last_image_name', count='$count', brand='$brand', category='$cat', description='$des' WHERE id = '$id'";
} else {
    $edit = "UPDATE products SET name='$name', price='$price', count='$count', brand='$brand', category='$cat', description='$des' WHERE id = '$id'";
}

$connect->query($edit);

dd("../products.php");

