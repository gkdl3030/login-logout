<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원정보입력</title>
</head>
<body>
<form action="inputok.php" method="post">
<div>
학번<input type="text" name="num">
</div>
<div>
성명<input type="text" name="name"><br>
</div>
<div>
학과
<input type="radio" name="major" value="창업마케팅과">창업마케팅과 
<input type="radio" name="major" value="스마트웹콘텐츠과">스마트웹콘텐츠과 
<input type="radio" name="major" value="소프트웨어개발과">소프트웨어개발과
</div>
<div>
주소
<select name="addr">
    <option value="성남시">성남시</option>
    <option value="하남시">하남시</option>
    <option value="수원시">수원시</option>
    <option value="서울시">서울시</option>
</select>
</div>
<div>
<input type="submit">
</div>
</form>

</body>
</html>