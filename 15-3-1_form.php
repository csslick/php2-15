<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>form</title>
  <style media="screen">
    label{
      display: block;
      margin: 5px 0;
    }
    label > span{
      display: inline-block;
      width: 4em;
    }
    input, select{
      padding: 5px;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <h1>회원정보입력</h1>
  <form name="signUp" action="./15-3-2_insert.php" method="post">
    <label>
      <span>이름</span>
      <input type="text" name="userName" placeholder="이름">
    </label>
    <label>
      <span>비밀번호</span>
      <input type="password" name="userPw" placeholder="비밀번호">
    </label>
    <label>
      <span>이메일</span>
      <input type="email" name="email" placeholder="이메일">
    </label>
    <label for="gender">성별</label>
    <select class="" name="gender" id="gender">
      <option value="m">남성</option>
      <option value="w">여성</option>
    </select>

    <p>
      <input type="submit" value="가입하기">
    </p>
  </form>

</body>
</html>
