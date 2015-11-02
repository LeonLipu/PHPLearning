<?php

$no =10;
//pass by reference
function change (&$temp){

  $temp=40;

}
change($no);

echo "$no";
//dynamic function call
$fun = "change";

$no1=30;
$fun($no1);

echo $no1;



 ?>
