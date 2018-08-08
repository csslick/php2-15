<?php
  include_once("./15-1_connectDB.php");

  $name = "kwon";
  $userPW = "1234";
  $email = "kwon@naver.com";
  $gender = "male";

  $sql = "insert into member(name, password, email, gender, date) values";
  $sql .= "('{$name}', '{$userPW}', '{$email}', '{$gender}', NOW())";
  // echo $sql;
  $result = $conn->query($sql);

  if($result){
    echo "데이터 입력 완료";
  } else{
    echo "데이터 입력 실패";
  }

?>
