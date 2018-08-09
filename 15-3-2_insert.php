<?php
  include_once("./15-1_connectDB.php");

  // post 방식으로 전달 받은 값 확인
  echo "<pre>";
  var_dump($_POST);

  // 이름 검증
  if($_POST['userName'] == '' || $_POST['userName'] == null){
    echo "이름을 입력해 주세요.";
    exit;
  }

  $userName = $_POST['userName'];
  $userName = trim($userName);  // // 앞뒤 공백 제거

  // "\ 특수문자 처리(쿼리 오류 해킹 방지용)
  $userName = $conn->real_escape_string($userName);


  // 비밀번호 검증
  if($_POST['userPw'] == '' || $_POST['userPw'] == null){
    echo "비밀 번호를 입력해 주세요.";
    exit;
  }
  // 암호화
  // $userPw = sha1('hello'.$_POST['userPw']);
  $userPw = $_POST['userPw'];

  // 성별
  if($_POST['gender']){
    $gender = $_POST['gender'];
  } else{
    echo "성별 값이 올바르지 않습니다.";
    exit;
  }
  // var_dump((bool) $_POST['gender']);


  // 이메일 채크
  $emailCheck = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

  if(!$emailCheck){
    echo "이메일 형식이 맞지 않습니다";
    exit;
  }
  // echo gethostbyname(gethostname()); # 클라이언트 ip 확인
  $email = $_POST['email'];


  // SQL 작성
  $sql = "
    INSERT INTO member(name, password, email, gender, created)
      VALUES(
        '{$userName}',
        '{$userPw}',
        '{$email}',
        '{$gender}',
        NOW()
      )";
  // $sql .= "('{$userName}', '{$userPw}', '{$email}', '{$gender}', NOW())";
  $res = $conn->query($sql);

  if($res){
    echo "회원가입 완료!!";
  } else{
    echo "회원가입 실패: ";
    die(mysqli_error($conn));
  }






?>
