<?php
//it is about inheritance of class
class bapa {

	public $var = "i am variable ";

	public function getvariable() {

		echo $this->var;
	}
}

class pua extends bapa {

	public $car = "maruti ";

	public function getcar() {

		echo $this->car;
	}
}
$ob = new pua();
$ob->getcar(); //accessing child methods

$ob->getvariable(); //accessing parent methods

?>