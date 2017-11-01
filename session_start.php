<?
  session_start();
  $id = "kim123";
  // session_register("id");
  $_SESSION['id'] = $id;
  echo "아이디 : $id 이 등록되었습니다.";
?>
