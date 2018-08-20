<?php
  include_once "./15-1_connectDB.php";

  $sql = "SELECT * FROM customer1000";
  $res = $conn->query($sql);

  $numView = 50;
  $totalRecord = $res->num_rows;

  // 페이지 수
  $numPage = ceil($totalRecord / $numView);

  for($i = 1; $i < $numPage; $i++){
    echo "<a href='./15-4-5_selectLimit.php?page={$i}'>{$i} </a>";
  }

?>
