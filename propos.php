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


    <div class="bg-services" id="services">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="title">A Propos</h2>
					<hr style='margin-bottom:10px;'>
				</div>
			</div>
			<div class="row">
			  <div class="col-sm-12">
				<h2 class="title" style='float:left;margin-top:20px; margin-bottom:20px;'>En3rgie5</h2></br>
			  </div>
			</div>			
				<TABLE class='table_team'>
					<TR class='tr_team'>
						<TD class='td_team'><img width=200px src='assets/images/team/en.png'></TD>
						<TD class='td_team'><div class='text_team'><H3><center>Marlonn "En3rgie5"<center></H3>
							Hey ! Moi c'est Marlon ou En3rgie5 comme tu veux. J'ai 17 ans, j'habite dans le 56 en Bretagne, je suis réalisateur et Streameur sur les jeux vidéo, principalement Farming Simulator et beaucoup d'autres jeux. J'espère que mes vidéos te plaisent, aller SALUT !</div></TD>
					</TR>
				</TABLE>
			<hr style='margin-bottom:0px;'>
			<div class="row">
			  <div class="col-sm-12">
				<h2 class="title" style='float:left;margin-top:20px; margin-bottom:20px;'>Ma team</h2>
			  </div>
			</div>
			<TABLE class='table_team' onclick="window.open('https://www.youtube.com/channel/UCUT5kPy0PjgUGe8y_Y_ynUQ');">
				<TR class='tr_team'>
					<TD class='td_team'><img width=200px height=200px src='assets/images/team/chris.png'></TD>
					<TD class='td_team'><div class='text_team'><H3><center>Christophe "CHRIS43"<center>	</H3> Yop, moi c'est <red>Chris</red> et j'ai 18 ans. Ma passion est l'agriculture, j'étudie également dans ce domaine. Au début j'ai fait connaissance avec En3rgie5 sur Facebook, puis je suis rentré dans sa team. J'ai commencé à lui modifier les maps comme "Old Stream" et "Bindblach" pour ses séries rôleplay. J'ai tourné avec lui pour la première fois pour l'élevage gamsting épisode 17. Je suis passionné par l'agriculture IRL ainsi que la moto.</div></TD>
				</TR>
			</TABLE>		
			<TABLE class='table_team' onclick="window.open('https://www.youtube.com/channel/UC_2WgCz64GCaqUj-p6t6uLw');">
				<TR class='tr_team'>
					<TD class='td_team'><img width=200px src='assets/images/team/bastoune.jpg'></TD>
					<TD class='td_team'><div class='text_team'><H3><center>Bastien "B@stoune"<center></H3>salut, moi c’est B@stoune ou <red>Bastien</red> pour certain , j’ai 16 ans et j’habite dans l’nord (Haut de France)! J’aime bien tout ce qui touche à l’agriculture et les jeux de simulation. J’ai connu énergie lors de sa rencontre abonné sur Holzhausen et c’est de là que tout est parti ! Puis petit à petit j’ai commencé à rejoindre la team ! J’ai moi aussi une chaine YouTube ! Voilà donc pourquoi je suis là aujourd’hui !  ;)</div></TD>
				</TR>
			</TABLE>
			<TABLE class='table_team' onclick="window.open('https://www.youtube.com/channel/UCITnyS1B7suMcSX_OnQU4Mw');">
				<TR class='tr_team'>
					<TD class='td_team'><img width=200px src='assets/images/team/sniper.jpg'></TD>
					<TD class='td_team'><div class='text_team'><H3><center>Ludovic "TheSniper"<center></H3>Hey ! Moi c'est <red>TheSniper</red>, je m'appelle ludovic j'ai 16 ans. Je suis en 2nd en bac pro Logistique, j'habite en Lorraine {Vosges}, Mes passions sont les jeux vidéo et l'airsoft. Je me lance actuellement sur Youtube principalement du multi-gaming. J'ai connu en3rgie sur son live spécial 3000 abonnée depuis j'allais tous les jours sur son teamspeak, puis je suis rentré dans sa team.</div></TD>
				</TR>
			</TABLE>
			<TABLE class='table_team' onclick="window.open('https://www.youtube.com/user/DiaGlon22');">
				<TR class='tr_team'>
					<TD class='td_team'><img width=200px src='assets/images/team/diaglon.png'></TD>
					<TD class='td_team'><div class='text_team'><H3><center>Pierre "DiaGlon22"<center></H3>Bonjour, moi c'est DiaGlon22 ou <red>Pierre</red>, à vous de choisir. J'ai actuellement 17 ans et je suis Breton ! J'aime bien aller me détendre avec la team sur divers jeux ou même pour discuter. Je propose principalement du contenu sur des jeux de simulation tel que Farming Simulator 15 et bientôt je l’espère sur Cattle and Crops, American Truck Simulator et bien sûr Farming Smulator 17 !</div></TD>
				</TR>
			</TABLE>
			<TABLE class='table_team' onclick="window.open('https://www.youtube.com/channel/UCOQDP72Gov5MpI62G7YVjzA');">
				<TR class='tr_team'>
					<TD class='td_team'><img width=200px src='assets/images/team/greg.jpg'></TD>
					<TD class='td_team'><div class='text_team'><H3><center>Greg "TheGregGam3r"<center></H3>Salut l'ami moi ces TheGregGam3r! où <red>Greg</red>	 comme tu veux .J'ai 18 ans , j'habite en Bretagne , grâce a la ferme de mon père je travaille depuis mon plus jeune âge a la ferme d'ailleurs je fais des études pour a l'avenir conduire une exploitation (BAC pro CGEA) . je connais Energie depuis 17ans je suis donc membres de la team depuis ses début , je compte d'ailleurs vous montrer une partie de mes aventures grâce aux vidéos IRL !</div></TD>
				</TR>
			</TABLE>


			<TABLE class='table_team'>
				<TR class='tr_team'>
					<TD class='td_team'><img width=200px src='assets/images/team/wally.png'></TD>
					<TD class='td_team'><div class='text_team'><H3><center>William "Mister Wallon"<center></H3>Bonjour, Moi c'est <red>William</red>, Wally ou Mister Wallon, comme vous voulez. J'ai 15 ans et j'ai aussi une chaîne YouTube. J'ai rencontré Marlonn en lui demandant une intro car à l'époque il était GFX. On a appris à se connaître et depuis 4 mois je fais partie de sa team. Je m'entends très bien avec la team et on passe de super moments. Au plus grand plaisir de tous.</div></TD>
				</TR>
			</TABLE>
			<hr style='margin-bottom:0px;'>
			<div class="row">
			  <div class="col-sm-12">
				<h2 class="title" style='float:left;margin-top:20px; margin-bottom:20px;'>Mes partenaires</h2>
			  </div>
			</div>
				<center><img style='margin-bottom:50px;' width=1120px src='assets/images/partenaires/Games-Planet.png'></center>
				<center><img style='margin-bottom:50px;' width=1120px src='assets/images/partenaires/bbtv.png'></center>
				<center><img width=1120px src='assets/images/partenaires/verygames.png'></center>
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