<?php
// Cho mảng $array 1 = [1,2,3,4,5,6,7,8,9,10]

// $array 2 = [1,2,3,4,5,6,12,44,99,100]

// in ra mảng 3 là tổng hợp 2 mảng 

// mảng 4 là tổng hợp 2 mảng ko trùng phần tử 

// mảng 5 là các phần tử của mảng 2 không thuộc mảng 1 
$a = [1,2,3,4,5,6,7,8,9,10];
  $b = [1,2,3,4,5,6,12,44,99,100];
  $arr = implode(" ", $a );
  $arr1 = implode(" ", $b);
  echo  "   $arr .  $arr1  <br>";
   echo '<br>';
 print_r($a);
   print_r($b);
   echo '<br>';


    ?>