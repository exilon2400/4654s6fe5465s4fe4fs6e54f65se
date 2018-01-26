<?php 
	function gradePrint($grade, $side, $langue)	{
		if($langue == "fr-fr") {
			if($side == 0) {
				if($grade == 0) {
					return "Citoyen";
				}
			} elseif($side == 1) {
				if($grade == 0) {
					return "Citoyen";
				}
			} elseif($side == 2) {
				if($grade == 0) {
					return "Secouriste";
				}
				if($grade == 1) {
					return "Brancardier";
				}
				if($grade == 2) {
					return "Ambulancier";
				}
				if($grade == 3) {
					return "Médecin";
				}
				if($grade == 4) {
					return "Cadre";
				}
				if($grade == 5) {
					return "Cadre Formateur/Recruteur";
				}
				if($grade == 6) {
					return "Cardre supérieur";
				}
				if($grade == 7) {
					return "Sous-Directeur";
				}
				if($grade == 8) {
					return "Directeur";
				}
			}
		} elseif($langue == "en-en") {
			if($side == 0) {
				if($grade == 0) {
					return "Citizen";
				}
			} elseif($side == 1) {
				if($grade == 0) {
					return "Citizen";
				}
			} elseif($side == 2) {
				if($grade == 0) {
					return "Doctor";
				}
			}
		}
	}
?>