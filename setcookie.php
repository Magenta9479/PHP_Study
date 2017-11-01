<?
if($kind_sel)
  setcookie("car[kind]", $_POST['kind_sel'], time()+3600);
if($color_sel)
  setcookie("car[color]", $_POST['color_sel'], time()+3600);

$kind = array("에쿠스", "K9", "체어맨","그랜져", "소나타");
$color = array("Red", "Yellow","Green","White","Black");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>쿠키 예제(자동차의 종류와 색상 선택)</title>
  </head>
  <body>
    <form method="post">
      원하는 차종을 선택하시오 :
      <select name="kind_sel">
        <option selected value="">차량종류</option>
        <?
          foreach($kind as $var)
            echo "<option>$var</option>";
        ?>
      </select><br><br>
      원하는 색상을 선택하시오 :
      <select  name="color_sel">
        <option value="" selected>차량색상</option>
        <?
          foreach($color as $var)
          echo "<option>$var</option>";
        ?>
      </select><br><br>
      <input type="submit">
    </form>
    <b>폼에서 전달된 변수 값 : </b><br>
    <?
      echo "<car ";
      if($kind_sel)
        echo "차종=$_POST[kind_sel]";
      if($color_sel)
        echo "색상=$_POST[color_sel]";
      echo ">";
      echo "차량종류 =".$_POST['kind_sel']."<br>";
      echo "차량색상 = ".$_POST['color_sel']."<br>";
      echo "</car><br>"
    ?>
    <b>쿠키에 저장된 값 : </b><br>
    <?
      echo "<car ";
      if($car[kind])
      echo "차종 = $car[kind]";
      if($car[color])
      echo "색상 = $car[color]";
      echo ">";
      echo "차량종류 = $car[kind]<br>";
      echo "차량색상 = $car[color]<br>";
      echo "</car><br>";
    ?>
  </body>
</html>
