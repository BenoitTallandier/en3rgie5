<?php
session_start();
include("DBconnection.php");
if(isset($_SESSION['user']) && $_SESSION['user'] >=1){
	if(isset($_POST['version'])){
		mysqli_query($db,"UPDATE state SET version='".$_POST['version']."'");
	}
	echo "<form method='POST' action='upve.php'>";
		extract(mysqli_fetch_array(mysqli_query($db,"SELECT version FROM state")));
		echo "version : <input type='text' name='version' value='".$version."'></br>";
		echo "<input type='submit'>";
	echo"</form>";
}
else{
	header('Location:index.php');
}
?>