<?php

abstract class House{
	function introduce(){
		echo "House ".$this->getHouseName()." of ".$this->getHouseSeat()." : ".$this->getHouseMotto()."\n";
	}

	abstract function getHouseName();

	abstract function getHouseMotto();

	abstract function getHouseSeat();
}

?>