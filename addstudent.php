<?php
$name= $_POST["name"];
$email=$_POST["email"];
$birthday=$_POST["birthday"];
$gender=$_POST["gender"];
$class_id=$_POST["class_id"];
// luu vao db
$host = "localhost";
$user = "root";
$pwd = "";
$db = "t2207a";
$conn = new mysqli($host, $user, $pwd, $db);
if ($conn -> connect_error){
    die("Connect error...");
}
$sql = "INSERT into sinhvien(name, email, birthday, gender, class_id) values('$name','$email','$birthday','$gender','$class_id')";
 $conn -> query($sql);

// chuyen ve trang danh sach
header("Location:database.php");