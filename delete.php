<?php
    include("./dbcon.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>삭제</title>
</head>
<body>
<?php    
$no = $_GET["no"];

$sql = "DELETE FROM member WHERE sno=$no";

if (mysqli_query($conn, $sql)) {
  echo "레코드가 삭제되었습니다.";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
<div>
<a href="./input.php">회원입력</a> 
<a href="./list.php">회원목록</a>
</div>
</body>
</html>