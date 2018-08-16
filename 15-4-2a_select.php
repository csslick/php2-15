<?php
  include_once "./15-1_connectDB.php";

  // 전체 회원 불러오기
  $sql = "SELECT id, name FROM member";
  $result = $conn->query($sql); // 쿼리 요청

  $rows = $result->num_rows;
  // echo $rows; // DB 데이블 행 개수 확인

  if($rows){
    for($i = 0; $i < $rows; $i++){
      $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
      // JSON인코드(utf-8)
      $myJSON = json_encode($memberInfo, JSON_UNESCAPED_UNICODE);
      echo $myJSON;
      // var_dump($myJSON);
    }
  } else{
    echo "데이터가 없습니다.";
  }

?>
