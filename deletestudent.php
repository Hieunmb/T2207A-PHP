<?php
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
$sql = "DELETE from sinhvien WHERE id = $id";
if ($conn -> query($sql)){
    header("location: database.php");// chuyen sang trang danh sach
} else{
    echo "Error";
}