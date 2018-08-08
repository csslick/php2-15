<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>form post</title>
  <style media="screen">
    label{
      display: block;
      margin: 5px 0;
    }
    label > span{
      display: inline-block;
      width: 5em;
    }
  </style>
</head>
<body>

  <h1>form 전송하기</h1>
  <form name='data' action="12-3_post.php" method="post">
    <label>
      <span>email</span>
      <input type="email" name="email" id="email" placeholder="이메일">
    </label>
    <label>
      <span>비밀번호</span>
      <input type="password" name="password" placeholder="비밀번호">
    </label>

    <input type="submit" value="전송">
  </form>
</body>
</html>
