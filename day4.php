<?php
// it is about json decode and encode
$json = '{"a":1,"b":2,"c":3,"d":4}';

$ob = json_decode($json);
echo $ob->a;

var_dump(json_decode($json));

$json2 = json_encode($ob);

echo $json2;
?>
