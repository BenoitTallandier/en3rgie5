<head>
<link rel="shortcut icon" href="images/logo.ico" type="image/x-icon" />
<link rel="stylesheet" href="theme.css">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>En3rgie5</title>

    <meta charset="UTF-8">
    <meta name="author" content="Tellis">
    <meta name="description" content="Site Officiel du youtuber en3rgie5">
	<meta name="keywords" content="en3rgie5, farming simulator">

</head>

<?php
session_start();
include('DBconnection.php');
if(isset($_SESSION['user']) && $_SESSION['user'] >=1){


	?>
	<script type="text/javascript">
	  function reponseD(){
		confirm("C'est votre dernière baffouille?");
		document.location.href="https://www.youtube.com/watch?v=-xgwd5kLiDY";
		}
	</script>
	Qu'est que tu es venu faire ici? </br>
	réponse A : <button onclick='document.location.href="upvi.php";' >ajouter une vidéo/live</button></br>
	réponse B : <button onclick='document.location.href="upma.php";' >ajouter un mods</button></br>		
	réponse C : <button onclick='document.location.href="srqp.php";' >Ajouter une news</button></br></br>
	réponse D : <button onclick='reponseD();'>la réponse D</button></br></br>
	réponse E : <button onclick='document.location.href="momo.php";' >supprimer mods</button></br>
	réponse F : <button onclick='document.location.href="mimo.php";' >Supprimer videos/live</button></br>
	réponse G : <button onclick='document.location.href="updvi.php";' >modifier videos populaires</button></br>
	réponse G : <button onclick='document.location.href="upve.php";' >modifier version</button></br>
	
<?php 
	}
	elseif(isset($_POST['valider'])){
		$Result = mysqli_query($db,"SELECT * FROM user WHERE user='".$_POST['ndc']."' AND pass='".$_POST['mdp']."'");
		if($line = mysqli_fetch_array($Result)){
			extract($line);
			$_SESSION['user']=$id_user;
			header('Location:ad.php');
		}
		echo "mauvais logs";
	}
	else{
		echo "<form method='POST' action='ad.php'>";
			echo "user : <input type='text' name='ndc'></br>";
			echo "mot de passe : <input type='password' name='mdp'></br>";
			echo "<INPUT TYPE='submit' NAME='valider' VALUE=' Envoyer '>";
		echo "</form>";
	}



