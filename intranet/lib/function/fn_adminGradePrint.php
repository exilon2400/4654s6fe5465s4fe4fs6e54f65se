<?php 
	function adminGradePrint($adminGrade, $langue) {
		if($langue == "fr-fr") {
			if($adminGrade == 0) {
				return "Membre";
			}
			if($adminGrade == 1) {
				return "Bêta-Tester";
			}
			if($adminGrade == 2) {
				return "Staff";
			}
			if($adminGrade == 3) {
				return "Helpeur";
			}
			if($adminGrade == 4) {
				return "Ingénieur Technique";
			}
			if($adminGrade == 5) {
				return "Support Technique";
			}
			if($adminGrade == 6) {
				return "Développeur";
			}
			if($adminGrade == 7) {
				return "Directeur Artistique";
			}
			if($adminGrade == 8) {
				return "Modérateur";
			}
			if($adminGrade == 9) {
				return "Administrateur";
			}
			if($adminGrade == 10) {
				return "Référent R.P";
			}
			if($adminGrade == 11) {
				return "Chef Mappeur";
			}
			if($adminGrade == 12) {
				return "Chef Développeur";
			}
			if($adminGrade == 13) {
				return "D.R.H.";
			}
			if($adminGrade == 14) {
				return "Technicien Intranet";
			}
			if($adminGrade == 15) {
				return "Technicien Intranet / Modérateur";
			}
		} elseif($langue == "en-en") {
			if($adminGrade == 0) {
				return "Citizen";
			}
		}
	}
?>