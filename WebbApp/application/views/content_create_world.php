<div id="content">	
	<?php 
	$sokvag = '';
	if(($world_name != NULL || $world_name != '')){
		$sokvag = "/".$world_name;
	}

	?>
		<ul>
		<li><?php echo anchor('index.php/site/add_world_and_objects'.$sokvag, 'L�gg till v�rld och objekt');?></li>
		<li><?php echo ">";?></li>
		<li><?php echo anchor('index.php/site/add_object_information'.$sokvag, 'L�gg till info');?></li>
		<li><?php echo ">";?></li>
		<li><?php echo anchor('index.php/site/add_plane'.$sokvag, 'L�gg till plan');?></li>
		</ul>
		<hr size="1px" class="hr3"> <hr size="1px" class="hr4">
	</div>
	