<head>
<link rel="shortcut icon" href="images/logo.ico" type="image/x-icon" />
<link rel="stylesheet" href="theme.css">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<?php include("DBconnection.php");
session_start(); ?>
    <title></title>

    <meta charset="UTF-8">
    <meta name="author" content="Tellis">
    <meta name="description" content="Site Officiel du youtuber en3rgie5">
	<meta name="keywords" content="en3rgie5, farming simulator">
</head>
<body>
<?php
if(!isset($_SESSION['user']) or $_SESSION['user'] <1){
	header('Location:index.php');
}
else{
	if(isset($_POST['up_mod'])){
		mysqli_query($db, "DELETE FROM join_carr_mods");
		mysqli_query($db, "ALTER TABLE join_carr_mods AUTO_INCREMENT=0");
		for($ipost=0; $ipost<=$_POST['iform']; $ipost++){
			if(isset($_POST['mod'.$ipost])){
			mysqli_query($db,"INSERT INTO join_carr_mods (id_carr,id_mod) VALUES('".$_POST['carr'.$ipost]."','".$_POST['mod'.$ipost]."')");	
			}
			
		
		}
		
	}
	echo "<form method='POST' action='upca.php'>";
	$Query = "SELECT * FROM carriere";
	$Result = mysqli_query($db, $Query);
	echo "<TABLE>";
	$iform=0;
	
		while( $Line = mysqli_fetch_array($Result)){
			extract($Line);
			echo "<TR>";
				echo "<TD>";
					echo $name_carr."</br>";					
				echo"</TD>";
				echo"<TD>";
					$Result1 = mysqli_query($db,"SELECT * FROM mods");
					
					echo"<ul>";
						while($Line1 = mysqli_fetch_array($Result1)){
							extract($Line1);
							$Result2= mysqli_query($db,"SELECT * FROM join_carr_mods WHERE id_mod=".$id_mod." AND id_carr=".$id_carr."");							
							echo "<input type='hidden' name='carr".$iform."' value=".$id_carr.">";
							echo "<li><input type='checkbox' name='mod".$iform."' value='".$id_mod."'";
							
							if(mysqli_fetch_array($Result2)){echo"checked";}
							echo">".$name_mod."</li></br>";
							$iform+=1;					
						}
					echo"</ul>";
					echo "<hr>";
				echo"</TD>";
				
			echo "</TR>";
			
		}
	echo "</TABLE>";
	echo "<input type='hidden' name='iform' value=".$iform.">";
	echo "<input type='submit' name='up_mod' value='valider'>";
}

?>
