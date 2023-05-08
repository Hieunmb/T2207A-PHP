<?php
$id=$_GET["id"];
// ket noi db
$host = "localhost";
$user = "root";
$pwd = "";
$db = "t2207a";

$conn = new mysqli($host, $user, $pwd, $db);
if ($conn -> connect_error){
    die("Connect error...");
}

// ra day tuc la ket noi thanh cong

// truy van
$sql = "SELECT * FROM lophoc";
$result = $conn -> query($sql);
$class = [];
if ($result -> num_rows > 0){
    while ($row = $result -> fetch_assoc()){
        $class[] = $row;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <title>Document</title>
</head>
<body>
    <div class="container">
      <form action="editsv.php?id=<?php echo $id?>" method="POST">
<div class="input-group mb">
  <input type="text" class="form-control" placeholder="Username" name="name" aria-describedby="basic-addon1">
</div>
<div class="input-group mb">
  <input type="text" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1">
</div>
<div class="input-group mb">
  <input type="date" class="form-control" placeholder="Birthday" name="birthday" aria-describedby="basic-addon1">
  <div class="form-group">
                        <label for="formGroupExampleInput2">Gender</label>
                        <select name="gender" class="form-control">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Gender</label>
                        <select name="class_id" class="form-control">
                        <?php foreach ($class as $cl): ?>
                          <option value="<?php echo $cl["id"] ?>"><?php echo $cl["name"] ?></option>
                        <?php endforeach;?>
                        </select>
                        </div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>