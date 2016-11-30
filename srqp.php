<head>
<link rel="shortcut icon" href="images/logo.ico" type="image/x-icon" />
<link rel="stylesheet" href="theme.css">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<script type="text/javascript" src="ckeditor/ckeditor_basic.js"></script>
    <title>Energie</title>

    <meta charset="UTF-8">
    <meta name="author" content="Tellis">
    <meta name="description" content="Site Officiel du youtuber en3rgie5">
	<meta name="keywords" content="en3rgie5, farming simulator">
</head>
<?php
$today = date('Y')."-".date('m')."-".date('d')." ".date('H').":".date('i').":".date('s')."";
session_start();
include('DBconnection.php');
include('fonction.php');
if(isset($_SESSION['user']) && $_SESSION['user']>=1)
{
	if(isset($_POST['ad_news'])){
		mysqli_query($db,"INSERT INTO news (title,content,date,auteur) VALUES ('".prepare_txt($_POST['title'])."','".$_POST['text']."','".$today."','".$_SESSION['user']."')");
		echo "la news a été ajoutée</br><a href='srqp.php'>retour</a>";
	}
	else{
		echo "<form method='POST' action='srqp.php'>";
			echo "Titre : <input type='text' name='title'></br></br>";
			echo "<textarea id='editor1' name='text'></textarea><BR/>";
			echo "<input type='submit' name='ad_news' />";
		echo "</form>";
		echo"<script type='text/javascript'>CKEDITOR.replace('editor1');</script>";
	}
}
?>