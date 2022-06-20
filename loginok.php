<?php
session_start();
include("./dbcon.php");

$id = trim($_POST["aid"]);  //관리자ID
$pwd = trim($_POST["apwd"]); //관리자PWD

$sql ="select * from admin where aid='$id' and apwd='$pwd' ";
// echo $sql;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    //관리자정보가 맞을경우
    $_SSESSION["check"]="ok";   
?> 
   <script>
       location.href ="./list.php";
   </script>
<?php
}else{
    //관리자 정보가 안맞을경우 
?>
   <script>
     alert("관리자 정보가 일치하지 않습니다.");
     history.back();
   </script>
   
<?php
}
?>