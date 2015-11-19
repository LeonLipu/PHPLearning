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

$lamba2='head';
echo is_callable($lamba2);
$lam3="something";
is_callable($lam3);


 ?>
