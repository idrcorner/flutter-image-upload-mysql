<?php
$connect = new mysqli("localhost","root","","myphoto");
if ($connect){

 }else{
        echo "connection failed";
     exit();
        }

    $image      = $_FILES['image']['name'];
    $title      = $_POST['title'];
    $imagePath  = "uploads/".$image;

    move_uploaded_file($_FILES['image']['tmp_name'],$imagePath);

    $connect->query("INSERT INTO images(title,image) VALUES('".$title."','".$image."')");

?>
