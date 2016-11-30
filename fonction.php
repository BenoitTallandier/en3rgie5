<?php
function diff_date($date1, $date2)
{
	$datetime1 = new DateTime($date1);
    $datetime2 = new DateTime($date2);
    $interval = $datetime1->diff($datetime2);
		// $interval = $date1->diff($date2);
		// $interval = date_diff($date1, $date2);
		if($interval->y>0)
		{
			return($interval->y." ans");
		}
		elseif($interval->m>0)
		{
			return($interval->m." mois");
		}
		elseif($interval->d>0)
		{
			return($interval->d." jours");
		}
		elseif($interval->h>0)
		{
			return($interval->h." heures");
		}
		elseif($interval->i>0)
		{
			return($interval->i." minutes");
		}
		elseif($interval->s>0)
		{
			return($interval->s." secondes");
		}

}

function prepare_txt($text){
	$healthy = array("'", '"');
	$yummy   = array("\'", '\"');

	$newphrase = str_replace($healthy, $yummy, $text);
	return $newphrase;
}
?>