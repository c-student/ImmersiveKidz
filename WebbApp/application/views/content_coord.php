<?php 
	echo "<div id='content'><div class='editList'><h2>V�LJ EN GRUPP ATT PLACERA KOORDINATER F�R</h2>";
	foreach ($info as $group) 
	{
	 	echo "<div class='editObject'><a href='".base_url()."index.php/site/add_coordinates/".$group -> date."/".htmlentities($group -> name)."'><span class='date'>". $group -> date."</span><span class='group'>".htmlentities($group -> name)."</span></a></div>";
	}
	echo"</div></div>";
?>