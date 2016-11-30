<script src='assets/js/date.js' type='text/javascript'></script>
<?php
//if( (isset($_SESSION['b']) and $_SESSION['b']==true) OR (isset($_POST['a']) and $_POST['a']== "demat") OR ((time() - mktime(17, 0, 0, 6, 25, 2016))>=0 ) ){
	$_SESSION['b']=true;
	$db = mysqli_connect('localhost', 'enrgtnyv_aze', '$JC!If8fy]Xd', 'enrgtnyv_energie');
	if(mysqli_connect_errno()) {die('The connection to the database could not be established.');}
	$db->set_charset("utf8");
	$result = mysqli_query($db,"SELECT * FROM state");
	extract(mysqli_fetch_array($result));
	if($autorisation == 1){$auto = true;}
	else{$auto = false;}

	if($lien_bottom == 1){$lien_yt = true;}
	else{$lien_yt=false;}
	$version_site = $version;
	$message_db = $message;
/*}
else{
	echo "<div style='margin:0px;padding:0px;'>";
		echo "<img width=100% height=100% src='assets/images/constru.png'>";
		?>
		<div style='position:absolute;top:54%;left:47%;color:white;font-size:70px;font-weight:bold;'><div id="compte_a_rebours"></div></div>
		 
				<script type="text/javascript">
				 
					function compte_a_rebours() 
					{
					 
						 var compte_a_rebours = document.getElementById("compte_a_rebours"); 
						 var date_actuelle = new Date(); 
						 var date_evenement = Date.parse('June 25th');
						 date_evenement.addHours(17);
						 date_evenement.addMinutes(00);
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
							 var mot_jour = "jours,"; 
							 var mot_heure = "heures,"; 
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
		echo "<form method='POST' action=''>";
			echo "<input type='text' name='a'>";
			echo "<input type='submit'>";
		echo "</form>";
	echo "</div>";
}*/
?>
