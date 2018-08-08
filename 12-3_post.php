<?php
  if($_POST['email'] && $_POST['password']){
    echo "이메일: ".$_POST['email']."<br>";
    echo "비밀번호: ".$_POST['password']."<br>";
    sleep(3);
    header('Location: http://localhost/php/form.php');
  } else{
    echo "No POST data...";
    // sleep(3);
    //header('Location: http://localhost/php/test.php');
    // exit();
  }

?>
