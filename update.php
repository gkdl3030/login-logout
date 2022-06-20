<?php
    include("./dbcon.php");

    $no = $_GET["no"];

$sql = "SELECT * FROM member where sno=".$no;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $numprt = $row["snum"]; 
    $nameprt =$row["sname"];
    $majorprt = $row["smajor"];
    $addrprt = $row["saddr"];


  }
} else {
  echo "0 results";
}
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원정보수정</title>
</head>
<body>
<form action="updateok.php" method="post">
<input type="hidden" name="no" value="<?php echo $no; ?>">    
<div>
학번<input type="text" name="num" value='<?php echo $numprt; ?>'>
</div>
<div>
성명<input type="text" name="name" value="<?php echo $nameprt; ?>">
</div>
<div>
학과
<input type="radio" name="major" value="창업마케팅과" <?php if($majorprt =="창업마케팅과") echo "checked";?> >창업마케팅과 
<input type="radio" name="major" value="스마트웹콘텐츠과" <?php if($majorprt =="스마트웹콘텐츠과") echo "checked";?>  >스마트웹콘텐츠과 
<input type="radio" name="major" value="소프트웨어개발과" <?php if($majorprt =="소프트웨어개발과") echo "checked";?>  >소프트웨어개발과
</div>
<div>
주소
<select name="addr">
    <option value="성남시" <?php if($addrprt =="성남시") echo "selected";?> >성남시</option>
    <option value="하남시" <?php if($addrprt =="하남시") echo "selected";?> >하남시</option>
    <option value="수원시" <?php if($addrprt =="수원시") echo "selected";?> >수원시</option>
    <option value="서울시" <?php if($addrprt =="서울시") echo "selected";?> >서울시</option>
</select>
</div>
<div>
<input type="submit" value="수정">
</div>
</form>

</body>
</html>