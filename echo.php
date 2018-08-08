<?php

  $ww = "world";
  $num = 5;
  echo "hello $ww<br>";
  echo "<h1>hello {$ww}</h1>";
  echo "저는 {$num}월이 좋습니다.<br>";
  echo "\"사랑해요\"";
  echo "<br>\$ww<hr>";

  $arr = array(1,2,3,4,5);
  echo $arr[1];
  echo count($arr).'<hr>';

  $earth['nation'][0] = 'korea';
  $earth['nation'][1] = 'japan';
  echo $earth['nation'][0].'<br>';
  echo $earth['nation'][1].'<br>';

  // var_dump($earth);
  $arr2 = [1,2,3,4,5];
  var_dump($arr2);
  echo '<hr>';

  echo gettype($arr2);
  $num  = 1;
  echo '<hr>';
  echo gettype($num);

  // 데이터 형 변경
  $str1 = 'hello999';
  $str2 = '999hello';

  $num = (int)$str1;
  echo $num;
  echo '<hr>';

  $num = (int)$str2;
  echo $num;
  echo '<hr>';

  $double = 3.14159;
  echo gettype($double);
  echo '<hr>';

?>

<ul>
<?php
for($i = 1; $i <= 9; $i++){ ?>
  <li><?= $i.$i ?></li>
<?php } ?>
</ul>


<select class="" name="">
  <?php for($i = 1000; $i < 1005; $i++){ ?>
    <option value="<?= $i ?>"><?= $i ?></option>
  <?php } ?>
</select>


<?php
  $str = "hello world";
  echo str_replace('world', 'yong', $str);
  echo $str;

  echo "<h1>문자열 자르기</h1>";
  $name = "devilCat.jpg";
  $new_name = substr($name, 8, 4);
  echo $new_name;
 ?>
