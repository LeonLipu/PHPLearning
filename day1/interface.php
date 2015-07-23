<?php

interface inter {

	public function getmyname();
	public function setname();
}

class imple implements inter {

	public function getmyname() {

		echo "i am getmyname methods ";
	}

	public function setname() {
		echo "i am set name method ";
	}
}

$ob = new imple();
$ob->setname();

?>