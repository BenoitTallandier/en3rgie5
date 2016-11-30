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
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
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
            <h2 class="title" >Materiel</h2>
            <hr style='margin-bottom:50px;'>
          </div>
        </div>
		<H4 style='text-align:center;'>Configuration PC </H4>
		<div id="box_matos">
			<div id="titre_matos">Alimentation</div>
			<img width=240px src='assets/images/matos/alimentation.png'>
			<div id="text_matos">
				référence : Bequiet Power zone 750w</br></br>
				prix : 125€</br></br>
				date d'achat : Aout 2016</br></br>
			</div>
		</div>
		<div id="box_matos">
			<div id="titre_matos">Boitier</div>
			<img height=160px src='assets/images/matos/boitier.png'>
			<div id="text_matos">
				référence : Be-quiet Dark base pro 900</br></br>
				prix : 200€</br></br>
				date d'achat : Aout 2016</br></br>
			</div>
		</div>
		<div id="box_matos">
			<div id="titre_matos">RAM</div>
			<img width=240px src='assets/images/matos/ram.png'>
			<div id="text_matos">
				référence : Corsaire Vengeance 4x4go</br></br>
				prix : 120€</br></br>
				date d'achat : Aout 2016</br></br>
			</div>
		</div>
		<div id="box_matos">
			<div id="titre_matos">Carte Mère</div>
			<img width=240px src='assets/images/matos/cartemere.png'>
			<div id="text_matos">
				référence : Asus x99 strix</br></br></br>
				prix : 300€</br></br>
				date d'achat : Aout 2016</br></br>
			</div>
		</div>
		<div id="box_matos">
			<div id="titre_matos">Carte graphique</div>
			<img width=240px src='assets/images/matos/cg.jpg'>
			<div id="text_matos">
				référence : EVGA GTX 1080 FTW</br></br>
				prix : 750€</br></br>
				date d'achat : Aout 2016</br></br>
			</div>
		</div>
		<div id="box_matos">
			<div id="titre_matos">Ventirad</div>
			<img width=240px src='assets/images/matos/ventirad.jpg'>
			<div id="text_matos">
				référence : Dark Rock Pro 3</br></br></br>
				prix : 85€</br></br>
				date d'achat : Aout 2016</br></br>
			</div>
		</div>
		<div id="box_matos">
			<div id="titre_matos">Processeur</div>
			<img width=240px src='assets/images/matos/processeur.jpg'>
			<div id="text_matos">
				référence : I7-6800K</br></br></br>
				prix : 400€</br></br>
				date d'achat : Aout 2016</br></br>
			</div>
		</div>
		<div id="box_matos">
			<div id="titre_matos">SSD</div>
			<img width=240px src='assets/images/matos/ssd.jpg'>
			<div id="text_matos">
				référence : Samsung 850 EVO 500go</br></br>
				prix : 165€ </br></br>
				date d'achat : Aout 2016</br></br>
			</div>
		</div>

		
		</br></br></br></br>
		
		
		<H4 style='text-align:center;'>Périphériques</H4>
		<div id="box_matos">
			<div id="titre_matos">Clavier</div>
			<img width=240px src='assets/images/matos/clavier.png'>
			<div id="text_matos">
				référence : Logitech G920</br></br></br>
				prix : 130€</br></br>
				date d'achat : Mars 2016</br></br>
			</div>
		</div>
		<div id="box_matos">
			<div id="titre_matos">Manette</div>
			<img width=240px src='assets/images/matos/manette.png'>
			<div id="text_matos">
				référence : Manette Xbox 360</br></br></br>
				prix : 30€</br></br>
				date d'achat : Fervrier 2014</br></br>
			</div>
		</div>
		<div id="box_matos">
			<div id="titre_matos">Casque</div>
			<img width=240px src='assets/images/matos/casque.png'>
			<div id="text_matos">
				référence : HyperX CLOUD 2</br></br></br>
				prix : 90€</br></br>
				date d'achat : Janvier 2016</br></br>
			</div>
		</div>
		<div id="box_matos">
			<div id="titre_matos">Ecran</div>
			<img width=240px src='assets/images/matos/ecran.png'>
			<div id="text_matos">
				référence : Asus 27" </br></br></br>
				prix : 240€ </br></br>
				date d'achat : Novembre 2015</br></br>
			</div>
		</div>
		<div id="box_matos">
			<div id="titre_matos">Ecran</div>
			<img width=240px src='assets/images/matos/ecran.png'>
			<div id="text_matos">
				référence : Asus 24"</br></br></br>
				prix : 180€ </br></br>
				date d'achat : Mars 2015</br></br>
			</div>
		</div>
		<div id="box_matos">
			<div id="titre_matos">Volant</div>
			<img width=240px src='assets/images/matos/g27.png'>
			<div id="text_matos">
				référence : Logitech G27</br></br></br>
				prix : 200€</br></br>
				date d'achat : Aout 2015</br></br>
			</div>
		</div>
		<div id="box_matos">
			<div id="titre_matos">Joystick</div>
			<img width=240px src='assets/images/matos/joystick.png'>
			<div id="text_matos">
				référence : Joystick extrem 3D PRO</br></br>
				prix : 40€</br></br>
				date d'achat : Septembre 2015</br></br>
			</div>
		</div>
		<div id="box_matos">
			<div id="titre_matos">Micro</div>
			<img width=240px src='assets/images/matos/micro.jpg'>
			<div id="text_matos">
				référence : Auna Mic 900b</br></br></br>
				prix : 80€</br></br>
				date d'achat : OCtobre 2015</br></br>
			</div>
		</div>
		<div id="box_matos">
			<div id="titre_matos">Souris</div>
			<img style='display:block;margin:auto;' height=160px src='assets/images/matos/souris.jpg'>
			<div id="text_matos">
				référence : G502</br></br></br>
				prix : 70€</br></br>
				date d'achat : Mars 2016</br></br>
			</div>
		</div>
		<div id="box_matos">
			<div id="titre_matos">WebCam</div>
			<img style='display:block;margin:auto;' height=160px src='assets/images/matos/WEBCAM.jpg'>
			<div id="text_matos">
				référence : Microsoft LifeCam</br></br></br>
				prix : 60€</br></br>
				date d'achat : Octobre 2015</br></br>
			</div>
		</div>

		
		</br></br></br></br>
		
		
		<H4 style='text-align:center;'>Autres</H4>
		<div id="box_matos">
			<div id="titre_matos">Telephone</div>
			<img width=240px src='assets/images/matos/telephone.jpg'>
			<div id="text_matos">
				référence : Sony Xperia Z3</br></br></br>
				prix : 300€</br></br>
				date d'achat : Juillet 2015</br></br>
			</div>
		</div>
		<div id="box_matos">
			<div id="titre_matos">Perche Micro</div>
			<img width=240px src='assets/images/matos/pince.jpg'>
			<div id="text_matos">
				référence :Tinksky Durable Radio</br></br>
				prix : 25€</br></br>
				date d'achat : Janvier 2016</br></br>
			</div>
		</div>
		<div id="box_matos">
			<div id="titre_matos">Siege</div>
			<img height=160px id='center' style='display:block;margin:auto;' src='assets/images/matos/siege.jpg'>
			<div id="text_matos">
				référence : DxRacer RacingSeries</br></br>
				prix : 300€</br></br>
				date d'achat : Fevrier 2016</br></br>
			</div>
		</div>
		<div id="box_matos">
			<div id="titre_matos">Fond vert</div>
			<img height=160px id='center' style='display:block;margin:auto;' src='assets/images/matos/fond.png'>
			<div id="text_matos">
				référence : Neewer</br></br></br>
				prix : 20€</br></br>
				date d'achat : Janvier 2016</br></br>
			</div>
		</div>
		<div id="box_matos">
			<div id="titre_matos">Soft Box</div>
			<img height=160px id='center' style='display:block;margin:auto;' src='assets/images/matos/lampadaire.png'>
			<div id="text_matos">
				référence : INTROUVABLE</br></br></br>
				prix : environ 100€</br></br>
				date d'achat : Janvier 2016</br></br>
			</div>
		</div>
		<div id="box_matos">
			<div id="titre_matos">Go Pro</div>
			<img height=160px id='center' style='display:block;margin:auto;' src='assets/images/matos/GOPRO.png'>
			<div id="text_matos">
				référence : GoPro Hero4 Silver</br></br></br>
				prix : 400€</br></br>
				date d'achat : fevrier 2015</br></br>
			</div>
		</div>
	    <div id="box_matos">
			<div id="titre_matos">Réplique Airsoft</div>
			<img height=160px id='center' style='display:block;margin:auto;' src='assets/images/matos/Réplique.png'>
			<div id="text_matos">
				référence : ASR115 SPYDER</br></br></br>
				prix : 200€</br></br>
				date d'achat : Decembre 2015</br></br>
			</div>
		</div>
	    <div id="box_matos">
			<div id="titre_matos">Réplique RED DOT</div>
			<img height=160px id='center' style='display:block;margin:auto;' src='assets/images/matos/REDDOT.jpg'>
			<div id="text_matos">
				référence : DOT SIGHT OPEN TACTICAL</br></br>
				prix : 20€</br></br>
				date d'achat : Decembre 2015</br></br>
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