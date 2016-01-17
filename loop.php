<?php
$arr=array("modatty","tuesday","wedesday","something and it might be best possible to this nothing");
$assarr=array("key1"=>"value1","key2"=>"value2");


foreach($assarr as $key=>$value){

echo "$key";

}

foreach($arr as $element){
  echo "$element<br>";
}

while(list($var ,$arr)==each($arr)){
  print "$var and $arr"
}
 ?>
