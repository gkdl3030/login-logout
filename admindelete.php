<?php
    include("./dbcon.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자삭제</title>
</head>
<body>
<?php    
$no = $_GET["no"];

$sql = "DELETE FROM admin WHERE ano=$no";

if (mysqli_query($conn, $sql)) {
  echo "레코드가 삭제되었습니다.";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
<div>
<a href="./admininput.php">관리자입력</a> 
<a href="./adminlist.php">관리자목록</a>
</div>
</body>
</html>