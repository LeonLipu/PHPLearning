<?php

$name= "brahmananda kar123";

if (preg_match("/\\d*/",$name))
{
  echo "it is matched ";
}


$sccuess =preg_match("/brahmananda kar(\\d*)/",$name,$match);

if($sccuess){

echo "\n this something need to have \n";

echo  $match[1]." here is match ";
}



?>
