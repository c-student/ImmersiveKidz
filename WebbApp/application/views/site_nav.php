<?php /* @brief    Site navigation
*
* @details  -
*
* @author   Emil Lindstr�m, emili250@student.liu.se
* @date     ?
* @version  
*/
?>

<body>

<div id="container">	
	<div id="nav">
		<?php $img = img('styles/images/logotyp.png'); ?>
		<div class="image"><?php echo anchor('".base_url()."', $img); ?></div><div class="logo"><a href="<?=base_url();?>"><b>Norrk�pings</b> Visualiseringscenter</a></div>
		
		<ul>
			<li><?php echo anchor('index.php/site/upload', 'Skapa ny v�rld');?></li>
			<li><?php echo anchor('index.php/site/add_information', '�ndra befintlig v�rld');?></li>
			<li><?php echo anchor('index.php/site/about', 'Om');?></li>
		</ul> 	
	</div>                            