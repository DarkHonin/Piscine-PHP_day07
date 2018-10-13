<?php

class Tyrion extends Lannister{
	function sleepWith($person){
		if (get_parent_class($person) != "Lannister")
			echo "Let's do this.\n";
		else
			echo "Not even if I'm drunk !\n";
	}
}

?>