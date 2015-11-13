<?php
$line ="Vi editor is greatest editor has ever made ";

if(preg_match("/\bVi\b/i",$line,$match)):
  print "match is found ";
  print_r( $match); //this will return array so that print_r will print any associative array
endif;

preg_match_all("/\d*/","something 123 and 3212 nothing 898",$matched);
foreach ($matched[0] as $value ) {
  echo $value;
  echo "\n";
}


 ?>
