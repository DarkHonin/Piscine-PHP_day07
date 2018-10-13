<?php

class NightsWatch{

	private $peeps = [];

	public function recruit($prson){
		if ($prson instanceof IFighter)
			array_push($this->peeps, $prson);
	}

	public function fight(){
		foreach($this->peeps as $p)
			$p->fight();
	}
}

?>