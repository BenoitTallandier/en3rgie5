<?php
include("DBconnection.php");
session_start();
if(isset($_SESSION['user']) && $_SESSION['user'] >=1){
	if(isset($_POST['des'])){
		for($ipost=0; $ipost <= $_POST['iform']; $ipost++){
			if(isset($_POST['supp'.$ipost])){
				mysqli_query($db, "DELETE FROM videos WHERE id_videos='".$_POST['id'.$ipost]."'");
			}
		}
	
	}
	echo "<form method='POST' action='mimo.php'>";
	echo "<TABLE>";
		$Result = mysqli_query($db,"SELECT * FROM videos ORDER BY date DESC");
		$iform=0;
		while( $Lines = mysqli_fetch_array($Result)){
			extract($Lines);
			echo "<TR>";
				echo "<TD>".$lien."</TD>";
				echo "<TD><input type='checkbox' name='supp".$iform."' value='".$id_videos."'></TD>";
				echo "<input type='hidden' name='id".$iform."' value='".$id_videos."'>";
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