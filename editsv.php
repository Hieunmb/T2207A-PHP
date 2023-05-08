<?php
$name= $_POST["name"];
$email=$_POST["email"];
$birthday=$_POST["birthday"];
$gender=$_POST["gender"];
$class_id=$_POST["class_id"];
$id=$_GET["id"];
// luu vao db
$host = "localhost";
$user = "root";
$pwd = "";
$db = "t2207a";
$conn = new mysqli($host, $user, $pwd, $db);
if ($conn -> connect_error){
    die("Connect error...");
}
$sql = "UPDATE sinhvien SET name = '$name', email = '$email', birthday = '$birthday', gender = '$gender', class_id = $class_id WHERE id = $id";
if ($conn -> query($sql)){
    header("location: database.php");// chuyen sang trang danh sach
} else{
    echo "Error";
}