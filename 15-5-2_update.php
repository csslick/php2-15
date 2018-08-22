<?php
  include_once "./15-1_connectDB.php";

  $id = (int) $_POST['id'];
  if(!$id){
    echo "값이 없습니다";
    exit;
  }

  if($_POST['name'] == "" || $_POST['name'] == null){
    echo "값이 비어있습니다.";
  } else{
    $name = $_POST['name'];
  }

  $sql = "UPDATE customer1000 SET name = '{$name}' WHERE id = {$id}";
  $res = $conn->query($sql);

  if($res){
    echo "이름변경 성공";
  }else{
    echo "이름변경 실패";
  }

?>
