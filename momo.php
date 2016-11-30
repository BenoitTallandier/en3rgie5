<?php
session_start();
include("DBconnection.php");
echo "<!DOCTYPE html>";
echo "<meta charset='utf-8'>";
if(isset($_SESSION['user']) && $_SESSION['user']>=1){
	if(isset($_POST['des'])){
		for($ipost=0; $ipost <= $_POST['iform']; $ipost++){
			if(isset($_POST['supp'.$ipost])){
				mysqli_query($db, "DELETE FROM mods WHERE id_mod='".$_POST['id'.$ipost]."'");
				unlink("assets/images/mods/".$_POST['image'.$ipost]);
			}
		}
	
	}
	echo "<form method='POST' action='momo.php'>";
	echo "<TABLE>";
	echo "<TR><TD>Nom</TD><TD>Type</TD><TD>supp</TD></TR>";
		$Result = mysqli_query($db,"SELECT * FROM mods INNER JOIN type ON type_mod=id_type ORDER BY type_mod");
		$iform=0;
		while( $Lines = mysqli_fetch_array($Result)){
			extract($Lines);
			echo "<TR>";
				echo "<TD><input type='text' name='name_mod' value='".$name_mod."'></input></TD>";
				echo "<TD>".$name_type."</TD>";
				echo "<TD><input type='checkbox' name='supp".$iform."' value='".$id_mod."'></TD>";
				echo "<input type='hidden' name='id".$iform."' value='".$id_mod."'>";
				echo "<input type='hidden' name='image".$iform."' value='".$image_mod."'>";
			echo"</TR>";
			$iform +=1;
		}
	echo "</TABLE>";
	echo "<input type='hidden' name='iform' value=".$iform.">";
	echo "<input type='submit' name='des' value='valider'>";
	
}
else{
	header('Location:index.php');
}
?>

