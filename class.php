<?php

  class Person{

    function __construct(){
      echo 'Person class constructor<br>';
    }

    function speak($word){
      echo $word."라고 말합니다.<br>";
    }

    function run($km){
      echo $km."를 달리다.<br>";
    }

    function walk($km){
      echo $km."을 걷다.<br>";
    }

    function __destruct(){
      echo "클래스가 소멸됨.<br>";
    }
  }

  $man1 = new Person;
  $man1->speak('hello');


?>
