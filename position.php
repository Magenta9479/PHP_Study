<?
    function report($file, $line, $message)
    {
      echo "파일의 위치 => $file <br> 프로그램 전체 라인 수 =>$line <br> 메세지 => $message";
    }
    report(__FILE__, __LINE__, "미리 제공되는 상수 예제");
?>
