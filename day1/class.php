<?php

class abc {

	public $gender;
	public function hello() {

		echo "i am function 1111111111111 ";

	}

	function fun2() {
		echo "i am function 222222222";
	}

	public function __construct($gender) {

		echo "i am contructor";

		$this->gender = $gender;
	}

	function getgender() {

		echo $this->gender . "so many thing  ";

		$ob1 = (Object) array('p1' => 'v1', 'p2' => 'v2', 'p3' => 'v3');

		echo $ob1->p1 . 'p22222222222222222223333333333';
	}
}

$ob = new abc('female');

$ob->hello();
$ob->getgender();
$ob->fun2();

?>