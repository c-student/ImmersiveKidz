<body>

<div id="container">	
	<div id="nav">
		<ul>
		<?php echo "<div class='image'><img src='".base_url()."/styles/images/logotyp.png' /></div>"; ?>
		<li><?php echo anchor('index.php/site/create/upload', 'Skapa ny v�rld');?></li>
		<li><?php echo anchor('index.php/site/edit', '�ndra befintlig v�rld');?></li>
		<li><?php echo anchor('index.php/site/about', 'Om');?></li>
		</ul> 	
	</div>