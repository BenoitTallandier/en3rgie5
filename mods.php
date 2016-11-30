<?php
session_start();
include("DBconnection.php");
include("fonction.php");
$today = date('Y')."-".date('m')."-".date('d')." ".date('H').":".date('i').":".date('s')."";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/images/logo.ico">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="../netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/theme.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//www.en3rgie5.com/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//www.en3rgie5.com/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
	<script type="text/javascript">
  function affiche(boite, tot){
	var k=0;
	 while(k < tot){
		document.getElementById("boitem"+k).style.display = 'none';
		document.getElementById("chiffre"+k).style.color = '';
		if(k+1 == boite){k=k+2;}
		else{k=k+1;}
		} 	   	
	document.getElementById("boitem"+boite).style.display = 'block';
	document.getElementById("chiffre"+boite).style.color = 'black';	
		   
	}
	function affiche_menu(){
		if(document.getElementById("block_cat").style.display == "block"){
			document.getElementById("block_cat").style.display = "none";
		}
		else{
			document.getElementById("block_cat").style.display = "block";			
		}
	}
</script>
</head>
<?php
	if(isset($_GET['choix'])){
		$c = "&sort=type&choix=".$_GET['choix'];
	}
	else{
		$c = "";
	}
	if(isset($_GET['fs']) && ($_GET['fs']=="17" || $_GET['fs']=="15") ){
		$fs = $_GET['fs'];
	}
	else{
		$fs = "17";
	}
?>
<body>
	<form method='POST' action='mods.php'>
		<div id='barre_navigation' class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Navigation Mobile</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" data-scroll href="index.php"><img src="assets/images/top/logo.png"  alt="logo"></a>
				</div>
				<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a><input class='input_mod' type='text' name='search' placeholder='Rechercher'><input type='Submit' value='Recherche'></a></li>
						</ul>
					<ul class="nav navbar-nav navbar-right">
						<?php 
							echo "<li><a data-scroll href='mods.php?sort=mn&fs=".$fs."'>Les Mieux Notés</a></li>";
							echo "<li><a data-scroll href='mods.php?sort=mt&fs=".$fs."'>Les Plus Téléchargés</a></li>"; 
						?>
					</ul>
					<div id='menu_cat' onMouseover="affiche_menu();" onMouseout="affiche_menu();"	>
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a data-scroll style='padding-left:50px;padding-right:50px;' href="mods.php"><span class="contact">catégorie</span></a>
								<div id='block_cat' >
										<?php
											$r = mysqli_query($db,"SELECT * FROM type");
											while($l = mysqli_fetch_array($r)){
												extract($l);
												echo "<a href='mods.php?sort=type&choix=".$id_type."'>".$name_type."</a></br>";
											}
										?>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>	
		</div>
	</form>
	<title>EN3RGIE5</title>


	<div class="bg-services" id="services">
	  <div class="container">
		
		<div class="row">
		  <div class="col-sm-12">
			<h2 class="title">MODS</h2>
			<hr style='margin-bottom:10px;'>
		  </div>
		</div>
		<?php
		echo "<div style='padding-top:20px;width:275px;margin:auto;'>";
				echo "<a class='fs' href='mods.php?fs=15".$c."'>FS 2015</a>";
				echo "<a class='fs' href='mods.php?fs=17".$c."'>FS 2017</a>";
			echo "</div>";
			echo "</br></br></br>";

		$nb_mod = 8;
		
				echo "<div class='boite_m'>";				
					if(isset($_GET['sort']) and $_GET['sort'] == "mn"){
						echo "<center><h3 class='title' style='margin-bottom:50px;'>Les Mieux Notés</h3></center>";
						$Query = "SELECT * FROM mods WHERE fs=".$fs." ORDER BY note DESC";
					}
					elseif(isset($_GET['sort']) and $_GET['sort'] == "mt"){
						echo "<center><h3 class='title' style='margin-bottom:50px;'>Les Plus Téléchargés</h3></center>";
						$Query = "SELECT * FROM mods WHERE fs=".$fs." ORDER BY dl DESC";
					}
					elseif(isset($_GET['sort']) and $_GET['sort'] == "type"){
						$r = mysqli_query($db,"SELECT * FROM type WHERE  fs=".$fs." AND id_type ='".intval($_GET['choix'])."'");
						if($r != null){
							extract(mysqli_fetch_array($r));
							echo "<center><h3 class='title' style='margin-bottom:50px;'>".$name_type."</h3></center>";
						}
						$Query = "SELECT * FROM mods INNER JOIN type ON type_mod=id_type WHERE fs=".$fs." AND type_mod=".intval($_GET['choix'])." ORDER BY mods.id_mod DESC";
					}
					elseif(isset($_POST['search'])){
						echo "<center><h3 class='title' style='margin-bottom:50px;'>Resultat(s) pour ".$_POST['search']."</h3></center>";
						$Query = "SELECT * FROM mods WHERE fs=".$fs." AND name_mod LIKE '%".$_POST['search']."%' ORDER BY mods.id_mod DESC";
					}
					else{
						echo "<center><h3 class='title' style='margin-bottom:50px;'>Derniers mods</h3></center>";
						$Query = "SELECT * FROM mods WHERE fs=".$fs." ORDER BY id_mod DESC";
					}						
					$Result = mysqli_query($db,$Query);
					//echo "<a href='mods.php?sort=".$_GET['sort']."'style='text-align:center;'><img id='image_retour' src='images/fleche.png' height=30px;></a>";
					$i=0;
					if($Result != null){
						if(mysqli_num_rows($Result)>0){
							
							while($Line=mysqli_fetch_array($Result)){
								if($i%$nb_mod == 0){
									$k = $i / $nb_mod;
									if($i==0){echo "<div id='boitem".$k."' class='boite_m' style='display:block;'>";}
									else{echo "<div id='boitem".$k."' class='boite_m' style='display:none;'>";}
								}
								extract($Line);
								$note_temp = $note;
								echo "<div id='mods' onClick='window.open(\"redirection.php?id=$id_mod\");' >";
									echo"<TABLE><TR>";
										echo "<TD><img id='image_mod' src='assets/images/mods/".$image_mod."'></TD>";
										echo "<TD  style='padding:10px;width:550px;'>";
											echo "<div style='text-transform:uppercase;text-align:center;font-size:20px;margin-bottom:20px;color:#555555;'>".$name_mod."</div>";
											echo "<div style='font-size:12px;margin-bottom:15px;'>".$description."</div>";
											echo "<div style='font-size:12px;'>ajouté le ".$date."</div>";
											echo "<div style='display:inline-block;'>";
												while($note_temp>=1){
													echo "<img width=20px src='assets/images/star.png'>";
													$note_temp = $note_temp - 1;
												}
												if($note_temp >= 0.5){
													echo "<img width=20px src='assets/images/hstar.png'>";
												}
												$note_temp = $note;
												while( $note_temp <4.5){
													echo "<img width=20px src='assets/images/unstar.png'>";
													$note_temp +=1;
												}
											echo "</div>";
											echo"<div style='float:right;display:inline-block;'><img width=20px; style='z-index:5;' src='assets/images/download.png'> ".$dl."</div>";
										echo "</TD>";
									echo "</TR></TABLE>";
								echo "</div>";
								$i+=1;
								if($i%$nb_mod == 0){echo "</div>";}							

							}
							if(  $i%$nb_mod != 0){echo "</div>";}
							$k = ($i-$i%$nb_mod)/$nb_mod +1 ;
							echo "<div style='text-align:center;margin-bottom : 20px; margin-top:30px;'>";
								echo "<a href='#' class='chiffre' id='chiffre0' style='color:black;' onClick='affiche( 0 , ".$k.");' >1</a>";
								if($i%$nb_mod == 0){
									for($j=1 ; $j< $k -1  ; $j++){$m=$j+1;echo "<a href='#' id='chiffre".$j."' class='chiffre' style='margin-left:10px;' onClick='affiche(".$j." , ".$k.");' >".$m."</a>";}
								}
								else{
									for($j=1 ; $j< $k ; $j++){$m=$j+1;echo "<a href='#' id='chiffre".$j."' class='chiffre' style='margin-left:10px;' onClick='affiche(".$j." , ".$k.");' >".$m."</a>";}
								}
							echo "</div>";
						}
						else{
							echo "<div style='margin-bottom:300px;'>Pas de résultat</div>";
						}
					}
					else{
						echo "<div style='margin-bottom:300px;'>Pas de résultat</div>";
					}
				echo "</div>";
			echo "</div>";
		 ?>
		 </div>
<!-- Modal -->
<div class="bg-footer-bottom">
	  <div class="container">
		<div class="row">
		  <div style='text-align:center;'>
			<p class="copyright">Code by <a href='http://codeurtellis.com'>Tellis</a></br>version : <?php echo $version_site;?>
			</p>
		  </div>


		</div>
	  </div>
	<script src="../ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/smooth-scroll.js"></script>
	<script src="assets/js/jRespond.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>

</html>
