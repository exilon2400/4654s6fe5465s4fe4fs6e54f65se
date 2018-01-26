<?php 
	function sexePrint($sexe, $langue)	{
		if($langue == "fr-fr") {
			if($sexe == 0) {
				return "Homme";
			} elseif($sexe == 1) {
				return "Femme";
			}
		} elseif($langue == "en-us") {
			if($sexe == 0) {
				return "Male";
			} elseif($sexe == 1) {
				return "Women";
			}
		}
	}
?>