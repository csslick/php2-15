<?php
  include_once "./connectDB_mydb.php";

  // 전체 회원 불러오기
  $sql = "SELECT area, year, rain FROM seoulrain";
  $result = $conn->query($sql); // 쿼리 요청

  $rows = $result->num_rows;
  $result_array = array();

  // echo $rows; // DB 데이블 행 개수 확인
  if($rows){
    for($i = 0; $i < $rows; $i++){
      $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
      array_push($result_array, $memberInfo);
      // var_dump($myJSON);
    }
  } else{
    echo "데이터가 없습니다.";
  }

  // JSON인코드(utf-8)
  // $myJSON = json_encode($memberInfo, JSON_UNESCAPED_UNICODE);
  $myJSON = json_encode($result_array, JSON_UNESCAPED_UNICODE);
  echo $myJSON;
  $conn->close();
?>
