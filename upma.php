<?php 
session_start();
include("DBconnection.php");
include("fonction.php");
 ?>
<head>
<link rel="shortcut icon" href="images/logo.ico" type="image/x-icon" />
<link rel="stylesheet" href="theme.css">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>energie</title>

    <meta charset="UTF-8">
    <meta name="author" content="Tellis">
    <meta name="description" content="Site Officiel du youtuber en3rgie5">
	<meta name="keywords" content="en3rgie5, farming simulator">
</head>
<?php
$today = date('Y')."-".date('m')."-".date('d');
if(isset($_SESSION['user']) && $_SESSION['user']>=1)
{
	if( isset($_POST['upload']) ) // si formulaire soumis
	{
		$content_dir = 'assets/images/mods/';

		$tmp_file = $_FILES['fichier']['tmp_name'];

		if( !is_uploaded_file($tmp_file) )
		{
			exit("Le fichier est introuvable");
		}

		// on vérifie maintenant l'extension
		$type_file = $_FILES['fichier']['type'];

		if( !strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'bmp') && !strstr($type_file, 'gif') &&!strstr($type_file, 'png') )
		{
			exit("Le fichier n'est pas une image");
		}

		// on copie le fichier dans le dossier de destination
		$type = strstr($_FILES['fichier']['name'], ".");
		$name_file = time().$type;
		if( !move_uploaded_file($tmp_file, $content_dir . $name_file) )		{
			exit("Impossible de copier le fichier dans $content_dir");
		}
		echo "</br>Le fichier a bien été uploadé";

			
			echo "<form method='POST' action='upma.php'>";
				echo "Nom du mods : <input type='text' name='name'></br>";
				echo "Fs : <input type='radio' name='fs' value='15'>15 <input type='radio' checked name='fs' value='17'>17</br>";
				echo "Type du mod : ";
				$iform = 0;
				$Result = mysqli_query($db,"SELECT * FROM type");
				echo "<ul>";
					while($Line = mysqli_fetch_array($Result)){
						extract($Line);
						echo "<input type='radio' name='type' value='".$id_type."'>".$name_type."</br>";
					}
					echo "<input type='hidden' name='iform' value='".$iform."'>";
				echo "</ul>";
				
				echo "<textarea placeholder='description' name='description'></textarea></br>";
				echo "note :<input type='text' name='note'></br>";
				echo "Lien du mods : <input type='text' name='lien'></br>";
				echo "<input type='hidden' name='image' value='".$name_file."'>";
				echo "<input type='submit' name='ad_mod' value='valider'>";
			echo "</form>";
	}
	
	if(isset($_POST['ad_mod'])){
		$Query = "INSERT INTO mods (lien_mod,type_mod,image_mod,name_mod,date,description,dl,note,fs) VALUES ('".$_POST['lien']."','".$_POST['type']."','".$_POST['image']."','".prepare_txt($_POST['name'])."','".$today."','".prepare_txt($_POST['description'])."','0','".$_POST['note']."','".$_POST['fs']."')";
		mysqli_query($db, $Query);
		echo $Query;
	}

	if(!isset($_POST['upload'])){
		echo "</form><form method='POST' enctype='multipart/form-data' action='upma.php'>
			<p>
			<input type='file' name='fichier' size='30'></br>
			<input type='submit' name='upload' value='Uploader'>
			</p>
			</form>";
	}	
}
elseif(isset($_SESSION['user']) && $_SESSION['user']==true && !isset($_POST['upload'])){
	header('Location:ad.php');
}
else{
		header('Location:index.php');
}
?>
