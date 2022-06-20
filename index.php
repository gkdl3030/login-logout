<php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
</head>
<body>
<?php
if(isset($_SSESSION['check']) && $_SESSION["check"]=="ok"){
?>
<div>
        로그인되었습니다.
</div>
<div>
<a href="./list.php">회원목록</a>
<a href="./input.php">회원입력</a>
<a href="./adminlist.php">관리자목록</a>
<a href="./admininput.php">관리자입력</a>
<a href="./logout.php">로그아웃</a>
</div>
<?php }else{?>

<form action="loginok.php" method="post">
<div>
아이디<input type="text" name="aid">
</div>
<div>
패스워드<input type="password" name="apwd">
</div>
<div>
<input type="submit" value="로그인">
<input type="reset" value="취소">
</div>
</form>
<?php }?>

</body>
</html>