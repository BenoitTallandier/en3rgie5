<?php
session_start();
include("DBconnection.php");
if(isset($_GET['id'])){
	mysqli_query($db,"UPDATE mods SET dl = dl+1 WHERE id_mod ='".$_GET['id']."'");
	$r = mysqli_query($db,"SELECT * FROM mods WHERE id_mod ='".$_GET['id']."'");
	if($r!=null){
		extract(mysqli_fetch_array($r));
		header('Location: '.$lien_mod);
	}
	else{
		echo"erreur";
	}
}
?>