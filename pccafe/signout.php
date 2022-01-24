<?php

session_start();
// 로그아웃은 세션 정보를 삭제한다는 것 
session_destroy();

echo "<script>
		  alert('로그아웃 성공.');
		  location.href = 'index.php';
		  </script>";
		  
?>