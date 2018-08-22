<?php
  $host = 'localhost';
  $user = 'root';
  $pw = '000000';
  $dbname = 'mydb';
  $conn = new mysqli($host, $user, $pw, $dbname);
  $conn->set_charset("utf-8");

  if(mysqli_connect_errno()){
    echo "데이터베이스 접속 실패";
    echo mysqli_connect_error();
  }

?>
