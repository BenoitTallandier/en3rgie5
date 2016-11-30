<!DOCTYPE html>
<?php
include("DBconnection.php");
include("fonction.php");
$today = date('Y')."-".date('m')."-".date('d')." ".date('H').":".date('i').":".date('s')."";
?>
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

	<script>
  		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  		})(window,document,'script','../www.google-analytics.com/analytics.js','ga');

  		ga('create', 'UA-71026113-1', 'auto');
  		ga('send', 'pageview');
		function taille(){
			alert()
		}
	</script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body >
    <div id='barre_navigation' class="navbar navbar-default " role="navigation">
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
<title>En3rgie5</title>


    <div class="bg-services" id="services">
		<div class="container">
			<div class="row">
			  <div class="col-sm-12">
				<h2 class="title">Contact</h2>
				<hr>
				<a href='https://www.facebook.com/pages/En3rgie5/471298409605424?ref=hl'><div class='sociaux'><img class='img_sociaux' src='assets/images/contact/facebook.png'><div class='text_sociaux'><div class='title_sociaux'>Facebook</div>Ici tu peux retrouver la plupart de mes actualités, j'y publie aussi toutes mes nouvelles vidéos !</div></div></a>			
				<a href='https://twitter.com/En3rgie5'><div class='sociaux'><img class='img_sociaux' src='assets/images/contact/twiter.png'><div class='text_sociaux'><div class='title_sociaux'>Twitter</div>Un peu comme sur Facebook mais avec un peu plus de publications divers (humour, billets d'humeurs...)</div></div></a>
				<a href='https://www.youtube.com/channel/UCXVZTo6BbnwbAkw9FfoE9dQ'><div class='sociaux'><img class='img_sociaux' src='assets/images/contact/youtube.png'><div class='text_sociaux'><div class='title_sociaux'>Youtube</div>C'est ici que je post toutes mes vidéos et que je live tous les vendredis !</div></div></a>
				<a href='https://www.twitch.tv/en3rgie5yt/profile'><div class='sociaux'><img class='img_sociaux' src='assets/images/contact/twitch.png'><div class='text_sociaux'><div class='title_sociaux'>Twitch</div>c'est sur Twitch que je lance des streams improvisés sur n'importe quel jeu a n'importe quel heure !</div></div></a>
				<a href=''><div class='sociaux'><img class='img_sociaux' src='assets/images/contact/snapchat.png'><div class='text_sociaux'><div class='title_sociaux'>Snapchat</div>Si vous voulez me partager vos photos, vidéos ou autres c'est sur snapchat que je vous conseille de m'ajouter ! </br>(Marlonn "En3rgie5")</div></div></a>
				<a href='mailto:acexteamofficiel@gmail.com'><div class='sociaux'><img class='img_sociaux' src='assets/images/contact/mail.png'><div class='text_sociaux'><div class='title_sociaux'>Mail</div>Pour toutes demandes de partenariat ou de sponsoring merci de me contacter sur mon adresse mail.</div></div></a>

				<!--<div style='text-align:center'>Vous pouvez me contacter via l'adresse mail : <span style='color:blue;'>acexteamofficiel@gmail.com</span>. Je me ferrai une joie de vous répondre rapidement.</div>-->
			  </div>
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
	 </div>
    <script src="../ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/smooth-scroll.js"></script>
    <script src="assets/js/jRespond.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>