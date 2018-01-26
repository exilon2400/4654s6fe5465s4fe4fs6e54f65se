<?php 
	function goto_t($id_t, $page_t) {
		echo "view.php?id=".htmlspecialchars($id_t)."&page=".htmlspecialchars($page_t);
	}
?>