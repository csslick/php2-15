<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>회원 이름 변경</title>
</head>
<body>
  <h1>회원 이름 변경</h1>
  <form action="./15-5-2_update.php" method="post">
    <p>
      <label for="id">id</label>
      <input type="text" name="id" id="id">
    </p>
    <p>
      <label for="name">name</label>
      <input type="text" name="name" id="name" placeholder="변경할 이름">
    </p>
    <input type="submit" name="" value="변경">
  </form>
</body>
</html>
