<?php
  include_once "./15-1_connectDB.php";

  if(isset($_GET['page'])){
    $page = (int) $_GET['page'];
  } else{
    $page = 1;
  }

  // 페이지에 출력할 레코드 수
  $numView = 50;

  // page값에 따른 LIMIT의 첫 번째 값 계산
  $firstLimitValue = ($numView * $page) - $numView;

  $sql = "SELECT * FROM customer1000 LIMIT {$firstLimitValue}, {$numView}";
  $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Customer List</title>
  <style media="screen">
    table,th,td{
      border: 1px solid #ccc;
      border-collapse: collapse;
    }
    th,td{ padding: 10px;}
  </style>
</head>
<body>
  <h1>고객 리스트</h1>
  <table>
    <tr>
      <th>id</th>
      <th>name</th>
      <th>email</th>
      <th>gender</th>
    </tr>
<?php
  // echo $result->num_rows; // DB 행 개수
  for($i = 0; $i < $result->num_rows; $i++){
    $member = $result->fetch_array(MYSQLI_ASSOC);
?>
  <tr>
    <td><?php echo $member["id"] ?></td>
    <td><?php echo $member["name"] ?></td>
    <td><?php echo $member["email"] ?></td>
    <td><?php echo $member["gender"] == "Male"?"남자":"여자" ?></td>
  </tr>
<?php } ?>
  </table>
</body>
</html>
