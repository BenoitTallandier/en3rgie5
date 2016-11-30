<?php 
session_start();
include("DBconnection.php");
 ?>
<head>
<link rel="shortcut icon" href="images/logo.ico" type="image/x-icon" />
<link rel="stylesheet" href="theme.css">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

    <title></title>

    <meta charset="UTF-8">
    <meta name="author" content="Tellis">
    <meta name="description" content="Site Officiel du youtuber en3rgie5">
	<meta name="keywords" content="en3rgie5, farming simulator">
</head>
<body>
<?php
$c1 = "";
$c2 = "";
if(!isset($_SESSION['user']) or $_SESSION['user'] <1){
	header('Location:index.php');
}
else{
	if(isset($_POST['des'])){
		mysqli_query($db,"UPDATE videos SET classement=0");
		mysqli_query($db,"UPDATE videos SET classement=2 WHERE id_videos='".$_POST['f']."'");
		mysqli_query($db,"UPDATE videos SET classement=1 WHERE id_videos='".$_POST['s']."'");
		
	
	}
	echo "<form method='POST' action='updvi.php'>";
	echo "<TABLE>";
		$Result = mysqli_query($db,"SELECT * FROM videos ORDER BY date DESC");
		$iform=0;
		echo "<TR><TD>video</TD><TD>1ère</TD><TD>2nd</TD></TR>";
		while( $Lines = mysqli_fetch_array($Result)){
			extract($Lines);
			echo "<TR>";
				echo "<TD>".$lien."</TD>";
				
				if($classement==2){
					$c1="checked";
				}
				if($classement==1){
					$c2="checked";
				}
				echo "<TD><input type='radio' name='f' value='".$id_videos."' ".$c1."></TD>";
				echo "<TD><input type='radio' name='s' value='".$id_videos."' ".$c2."></TD>";
				$c1 = "";
				$c2 = "";
			echo"</TR>";
			$iform +=1;
		}
	echo "</TABLE>";
	echo "<input type='hidden' name='iform' value=".$iform.">";
	echo "<input type='submit' name='des' value='valider'>";
}
?>