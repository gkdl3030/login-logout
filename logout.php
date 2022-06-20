<?php
session_start();

session_destroy();

$_SESSION["check"]="";
?>
<script>
alert("로그아웃되었습니다.");
location.href ="/member";
  </script> 