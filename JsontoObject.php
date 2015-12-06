<?php
//this file contains some tips and tricks
//json to object and object to json


//php
$arry = array('name' =>'para' ,
               'age'=> 33,
              'skill'=> array('php','js','css'));
//here it is   json.stringify in javascript

$json= json_encode($arry); //make php array to json object
//o/p {"name":"para","age":33,"skill":["php","js","css"]}

$phparry=json_decode($json);//this method for json to object


print_r($json);


print_r($phparry);


 ?>
