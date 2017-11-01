<?
  session_start();
  $id = $_SESSION['id'];
  if($id)
    echo "생성된 아이디 : $id 입니다. <br><br>";
  else
    echo "아이디가 제거되어 존재하지 않습니다.";
  unset($_SESSION['id']);
