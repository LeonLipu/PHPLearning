<?php


session_start();

if (isset($_SESSION['counter'])) {

echo "something ";
}
else {
  $_SESSION['counter']=1;
}

$msg = "You have visited this page ". $SESSION['counter'];

echo $msg;
?>
