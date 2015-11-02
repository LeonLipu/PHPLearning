<?php
$line ="Vi editor is greatest editor has ever made ";

if(preg_match("/\bVi\b/i",$line,$match)):
  print "match is found ";
  print_r( $match); //this will return array so that print_r will print any associative array 
endif;



 ?>
