<?php

echo "hi";

class abc {

	public function hello() {
		echo "something \n ";
	}

	public function __invoke() {

		echo "object is called as function \n";

	}

	public function __toString() {

		return "called when object is trying to printing\n ";
	}

	public function __construct() {
		echo "object is initilized \n";
	}
}

$ob = new abc; //__construct is called

$ob->hello(); //normal function is called

$ob(); //__invoke method is called

echo $ob; //__tostring method is called

?>