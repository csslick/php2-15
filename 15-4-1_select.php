<?php
  include_once "./15-1_connectDB.php";

  $myMemberID = 4; // 불러올 회원번호
  $sql = "SELECT * FROM member WHERE id = {$myMemberID}";
  $result = $conn->query($sql); // 쿼리 요청

  // fetch_array() - DB에서 배열로 불러옴
  $memberInfo = $result->fetch_array(MYSQLI_ASSOC);

  // 회원 정보 출력
  echo "<pre>";
  if(!$memberInfo){
    echo "회원정보가 없습니다.";
    exit;
  }

  var_dump($memberInfo);
  echo "회원번호가 {$myMemberID}번인 회원의 이름은 ".$memberInfo['name'];

?>
