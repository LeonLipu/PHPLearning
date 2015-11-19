<?php
// lession 1
$lamba=rand(0,1)?function(){echo "rand selected 1";}:function(){echo "rand selected 0";};
$lamba();


// lession 2
function head(){
  echo "head invoked";
}
function tail(){
echo "tail invoked";
}

$function=rand(0,1) ? 'head':'tail';
$function();


 ?>
