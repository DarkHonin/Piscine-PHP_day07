<?php

class Jaime extends Lannister{
	function sleepWith($person){
		if (get_parent_class($person) != "Lannister")
			echo "Let's do this.\n";
		else if (get_class($person) == "Cersei")
			echo "With pleasure, but only in a tower in Winterfell, then.\n";
		else
			echo "Not even if I'm drunk !\n";
	}
}

?>