<?php 
	function sidePrint($side, $langue) {
		if($langue == "fr-fr") {
			if($side == 0) {
				return "O.T.A.N.";
			} elseif($side == 1) {
				return "U.R.S.S.";
			} elseif($side == 2) {
				return "I.D.A.P.";
			} elseif($side == 4) {
				return "Afficher pour tous";
			}
		} elseif($langue == "en-us") {
			if($side == 0) {
				return "N.A.T.O.";
			} elseif($side == 1) {
				return "U.R.S.S.";
			} elseif($side == 2) {
				return "I.D.A.P.";
			} elseif($side == 4) {
				return "Nothing Side";
			}
		}
	}
?>