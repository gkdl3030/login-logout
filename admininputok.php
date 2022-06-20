<?php
include("./dbcon.php");

$aaa = $_POST["aid"];  //관리자ID
$bbb = $_POST["apwd"]; //관리자PWD

$sql = "INSERT INTO admin(aid,apwd) VALUES ('$aaa', '$bbb')";

if (mysqli_query($conn, $sql)) {
  echo "레코드가 저장되었습니다.";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>

<div>
<a href="./input.php">회원입력</a> 
<a href="./list.php">회원목록</a>
<a href="./adminlist.php">관리자목록</a>
</div>


