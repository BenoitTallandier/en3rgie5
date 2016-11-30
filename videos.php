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
	<script src="assets/js/date.js" type="text/javascript"></script>
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
			<h2 class="title">Dernières vidéos</h2>
			<hr style='margin-bottom:10px;'>
		  </div>
		</div>
		<?php
		echo "<div class='ligne_video'>";
			$Result = mysqli_query($db,"SELECT * FROM videos WHERE type=0 ORDER BY DATE DESC LIMIT 2");
			$i=0;
			
			while($Line = mysqli_fetch_array($Result))
			{
				extract($Line);
				echo "<div class='videos'>";
					echo "<iframe  width=350px	 height=190px style='border:none;' src='https://www.youtube.com/embed/".$lien."' frameborder='0' allowfullscreen></iframe>";
				echo "</div>";
				$i+=1;
			}
			echo "<div class='videos' style='margin-top:-1px;' >";
				echo "<a href='https://www.youtube.com/user/En3rgie5YT/videos'><img width=350px height=196px  src='assets/images/der_vid.png' ></a>";
			echo "</div>";
		echo "</div>";
		?>
		<div class="row">
		  <div class="col-sm-12">
			<h2 class="title">Lives</h2>
			<hr style='margin-bottom:10px;'>
		  </div>
		</div>
		<div class='ligne_video'>
		
			<div class='videos' style='margin-top:-1px;'><div id="compte_a_rebours"></div></div>
	 
			<script type="text/javascript">
			 
				function compte_a_rebours() 
				{
				 
					 var compte_a_rebours = document.getElementById("compte_a_rebours"); 
					 var date_actuelle = new Date(); 
					 var date_evenement = Date.today().next().friday(); 
					 date_evenement.addHours(20);
					 date_evenement.addMinutes(30);
					 var total_secondes = (date_evenement - date_actuelle) / 1000; 
					 var prefixe = ""; 
					 if (total_secondes < 0) 
					 { 
						 prefixe = "<a href='https://www.youtube.com/channel/UCXVZTo6BbnwbAkw9FfoE9dQ'>En live</a>"; 
						 total_secondes = Math.abs(total_secondes);  
					 }
				  
					 if (total_secondes > 0) 
					 { 
						 var jours = Math.floor(total_secondes / (60 * 60 * 24)); 
						 var heures = Math.floor((total_secondes - (jours * 60 * 60 * 24)) / (60 * 60)); 
						 minutes = Math.floor((total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60))) / 60); 
						 secondes = Math.floor(total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60 + minutes * 60))); 
						 var et = ""; 
						 var mot_jour = "j,"; 
						 var mot_heure = "h,"; 
						 var mot_minute = "m,"; 
						 var mot_seconde = "s"; 
				 
						 if (jours == 0) 
						 { 
							 jours = ''; 
							 mot_jour = ''; 
						 }		 
				 
						 if (heures == 0)
				 
						 {
				 
							 heures = '';
				 
							 mot_heure = '';
				 
						 }
				 
						 else if (heures == 1)
				 
						 {
				 
							 mot_heure = "h,";
				 
						 }
				 
				 
						 if (minutes == 0)
				 
						 {
				 
							 minutes = '';
				 
							 mot_minute = '';
				 
						 }
				 
						 else if (minutes == 1)
				 
						 {
				 
							 mot_minute = "m,";
				 
						 }
				 
				 
						 if (secondes == 0)
				 
						 {
				 
							 secondes = '';
				 
							 mot_seconde = '';
				 
							 et = '';
				 
						 }
				 
						 else if (secondes == 1)
				 
						 {
				 
							 mot_seconde = "s";
				 
						 }
				 
				 
						 if (minutes == 0 && heures == 0 && jours == 0)
				 
						 {
				 
							 et = "";
				 
						 }
				 
				 
						 compte_a_rebours.innerHTML = prefixe + jours + ' ' + mot_jour + ' ' + heures + ' ' + mot_heure + ' ' + minutes + ' ' + mot_minute + ' ' + et + ' ' + secondes + ' ' + mot_seconde;
				 
					 }
				 
					 else
				 
					 {
				 
						 compte_a_rebours.innerHTML = "<a href='https://www.youtube.com/channel/UCXVZTo6BbnwbAkw9FfoE9dQ'>En live</a>";
				 
					 }
				 
				 
					 var actualisation = setTimeout("compte_a_rebours();", 1000);
				 
				 }
				 
				 compte_a_rebours();
			 
			</script>
			
			<?php
		$Result = mysqli_query($db,"SELECT * FROM videos WHERE type=1 ORDER BY Date DESC LIMIT 1");
		$i=0;
		if($Result){			
			extract(mysqli_fetch_array($Result));
			echo "<div class='videos'>";
				echo "<iframe  width=350px	 height=196px style='border:0px;' src='https://www.youtube.com/embed/".$lien."' frameborder='0' allowfullscreen></iframe></br>";
			echo "</div>";
		}
		
			echo "<div class='videos' style='margin-top:-1px;'>";
				echo "<a href='https://www.youtube.com/playlist?list=PLM-t_AFnPo5iaru3PbuqotdWdcMKUeKSa'><img width=350px height=196px  src='assets/images/live_plus.png' ></a>";
			echo "</div>";
		echo "</div>";
		?>
		<div class="row">
		  <div class="col-sm-12">
			<h2 class="title">Vidéos populaires</h2>
			<hr style='margin-bottom:10px;'>
		  </div>
		</div>
		<?php
		$Result = mysqli_query($db,"SELECT * FROM videos ORDER BY classement DESC LIMIT 2");
		$i=0;
		while($Line = mysqli_fetch_array($Result))
		{
			extract($Line);
			echo "";
			echo "<div class='videos'>";
				echo "<iframe  width=350px	 height=196px style='border:0px;' src='https://www.youtube.com/embed/".$lien."' frameborder='2' allowfullscreen></iframe></br>";
			echo "</div>";
			$i+=1;
		}
			echo "<div class='videos' style='margin-top:-1px;'>";
				echo "<a href='https://www.youtube.com/user/En3rgie5YT/videos?sort=p&view=0&flow=grid'><img width=350px height=196px  src='assets/images/pop_vid.png' ></a>";
			echo "</div>";
		echo "</div>";
		?>

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