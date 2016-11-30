<?php
session_start();
include("DBconnection.php");
include("fonction.php");
$today = date('Y')."-".date('m')."-".date('d')." ".date('H').":".date('i').":".date('s')."";
if($auto){?>
<!DOCTYPE html>
<html lang="fr">
  
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site officiel de en3rgie5 codé par TELLIS</br>Il résume l'ensemble des activités du youtuber en3rgie5">
    <meta name="author" content="Tellis">
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
  </head>
  <body >
    <div id='barre_navigation' class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Navigation Mobile</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" data-scroll href="#"><img src="assets/images/top/logo.png"  alt="logo"></a>
        </div>
		<?php include("menu.php"); ?>
      </div>
    </div><!-- title temporaire ici cause de slim framework -->
<title>EN3RGIE5</title>
	<div id='content' class='content_scrolled'>
		<div class="bg-intro" id="home">
		  <div class="layer-intro">
			<div class="container">
			  <div class="row">
				<div class="col-sm-12">
				  <h1 class="text-center">Bienvenue Sur Mon Site ! <br> www.en3rgie5.com</br>  </h1>				 
				 </div>
			  </div>
			</div>
		  </div>
		</div>
		<div class="arrow-down"></div>

		<div class="bg-services" id="services">
		  <div class="container">

			<div class="row">
			  <div class="col-sm-12">

			  </div>
			</div>
			<div id='text_accueuil'>
		<p>Ma team et moi-même te souhaitons la bienvenue sur le site En3rgie5 où tu pourras retrouver mes dernières vidéos, actualités et surtout mes derniers mods et aussi plein d'informations sur moi et les membres de ma team. J'espère que vous passerez un bon moment sur le site !</p>
	</div>
			<TABLE>
				<TR>
					<TD class='td_index_gauche'>
						<h3 class="title">Derniers mods</h3>
						<?php			
						$Query = "SELECT * FROM mods  ORDER BY id_mod DESC LIMIT 1";
						$Result = mysqli_query($db,$Query);
						while($Line = mysqli_fetch_array($Result)){
							extract($Line);
							echo"<div class='news_u mods_u'>";
								// echo "<center><h4>".$name_mod."</h4></center>";
								echo "<img  width=400px height=225px id='image_mod_home' src='assets/images/mods/".$image_mod."'>";
							echo"</div>";
						}
						?>
					</TD>
					<TD class='td_index_droite'>
						<h3 class="title">Dernière video</h3>
						<?php			
						$Query = "SELECT * FROM videos WHERE type=0 ORDER BY date DESC LIMIT 1";
						$Result = mysqli_query($db,$Query);
						while($Line = mysqli_fetch_array($Result)){
							extract($Line);
							echo"<div class='news_u'>";
								echo "<iframe  width=400px height=225px style='border:0px;' src='https://www.youtube.com/embed/".$lien."' frameborder='2' allowfullscreen></iframe>";
							echo"</div>";
						}
						?>
					</TD>
				</TR>
			</TABLE>
			<div id='news' >
				<h3 class="title" style='margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;'>News</h3>
				<hr style='margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;'>
				<?php			
				$Query = "SELECT * FROM news JOIN user WHERE auteur=id_user ORDER BY date DESC LIMIT 4";
				$Result = mysqli_query($db,$Query);
				while($Line = mysqli_fetch_array($Result)){
					extract($Line);
					echo"<div class='news_u case_news'>";
						echo"<h4 style='text-align:center'>".$title."</h4><div style='text-align:right;font-size:10px;'>il y a ".diff_date($today,$date)."</div>";
						echo"<p >".$content."</p><div style='text-align:right;font-size:10px;'>écrit par ".$user."</div>";
					echo"</div>";
				}
				?>
			</div>
			
			<h2 class="title" style='margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;'>Contact</h2>
			<hr style='margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;'>
			<a href='https://www.facebook.com/pages/En3rgie5/471298409605424?ref=hl'><div class='sociaux'><img class='img_sociaux' src='assets/images/contact/facebook.png'><div class='text_sociaux'><div class='title_sociaux'>Facebook</div>Ici tu peux retrouver la plupart de mes actualités, j'y publie aussi toutes mes nouvelles vidéos !</div></div></a>			
			<a href='https://twitter.com/En3rgie5'><div class='sociaux'><img class='img_sociaux' src='assets/images/contact/twiter.png'><div class='text_sociaux'><div class='title_sociaux'>Twitter</div>Un peu comme sur Facebook mais avec un peu plus de publications divers (humour, billets d'humeurs...)</div></div></a>
			<a href='https://www.youtube.com/channel/UCXVZTo6BbnwbAkw9FfoE9dQ'><div class='sociaux'><img class='img_sociaux' src='assets/images/contact/youtube.png'><div class='text_sociaux'><div class='title_sociaux'>Youtube</div>C'est ici que je post toutes mes vidéos et que je live tous les vendredis !</div></div></a>
			<a href='https://www.twitch.tv/en3rgie5yt/profile'><div class='sociaux'><img class='img_sociaux' src='assets/images/contact/twitch.png'><div class='text_sociaux'><div class='title_sociaux'>Twitch</div>C'est sur Twitch que je lance des streams improvisés sur n'importe quel jeu a n'importe quel heure !</div></div></a>
			<a href=''><div class='sociaux'><img class='img_sociaux' src='assets/images/contact/snapchat.png'><div class='text_sociaux'><div class='title_sociaux'>Snapchat</div>Si vous voulez me partager vos photos, vidéos ou autres c'est sur snapchat que je vous conseille de m'ajouter ! </br>(Marlonn "En3rgie5")</div></div></a>
			<a href='mailto:acexteamofficiel@gmail.com'><div class='sociaux'><img class='img_sociaux' src='assets/images/contact/mail.png'><div class='text_sociaux'><div class='title_sociaux'>Mail</div>Pour toutes demandes de partenariat ou de sponsoring merci de me contacter sur mon adresse mail.</div></div></a>

			
		  </div>
		</div>
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
<?php
}else{echo $message;}
