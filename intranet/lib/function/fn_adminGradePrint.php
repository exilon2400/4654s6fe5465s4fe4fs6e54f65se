<?php 
	function adminGradePrint($adminGrade, $langue) {
		if($langue == "fr-fr") {
			if($adminGrade == 0) {
				return "Membre";
			}
			if($adminGrade == 1) {
				return "Staff";
			}
			if($adminGrade == 2) {
				return "Ingénieur Technique";
			}
			if($adminGrade == 3) {
				return "Support Technique";
			}
			if($adminGrade == 4) {
				return "Directeur Artistique";
			}
			if($adminGrade == 5) {
				return "Modérateur";
			}
			if($adminGrade == 6) {
				return "Administrateur";
			}
			if($adminGrade == 7) {
				return "Référent R.P";
			}
			if($adminGrade == 8) {
				return "Chef Mappeur";
			}
			if($adminGrade == 9) {
				return "Chef Développeur";
			}
			if($adminGrade == 10) {
				return "D.R.H.";
			}
			if($adminGrade == 11) {
				return "Technicien Intranet";
			}
			if($adminGrade == 12) {
				return "Technicien Intranet / Modérateur";
			}
		} elseif($langue == "en-en") {
			if($adminGrade == 0) {
				return "Citizen";
			}
		}
	}
?>