<?php
function add_five(&$value) {
    $value += 5;
  }
  
  $num = 2;
  add_five($num);
  echo $num;

//   function add_five1($value) {
//     $value += 5;
//   }
  
//   $num = 2;
//   add_five1($num);
//   echo $num;

$i = 8;

do {
  echo $i;
  $i++;
} while ($i < 6);

?>