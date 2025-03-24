<?php
 $name = readline("Enter a string ");

 $namereverse = strrev($name);

 echo $name;
 echo "\n";
 echo $namereverse;

 echo "\n";


 if( $name === $namereverse ){
    echo "Word is  a Palindrome";
 }else{
    echo "Word is  not a palindrome";
 }

 $x = "Hello World!";
 $y = explode(" ", $x);
 
 //Use the print_r() function to display the result:
 print_r($y);


?>