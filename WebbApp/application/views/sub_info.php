<!--
* @brief   	The page where you view and edit pictures and related information
*
* @details  
*
* @author   Viktor Fr�berg, vikfr292@student.liu.se
* @author 	Belinda Bernfort, belbe886@student.liu.se
* @date     November 14, 2012 
* @version  1.0
*    
-->

<div id="sub">		

<h1>H�r �r alla fina bilder, jippi</h1>
		<p> majs</p>

<?php 

$counter = 0;

	echo form_open_multipart('index.php/site/create/info');
	$column = 0;
	$idArray = array();
	echo "<div class='form'><div class='row'>
		<input type='hidden' name='date' value='".$images[0] -> date."' />
		<input type='hidden' name='group' value='".$images[0] -> group."' />";
	foreach ($images as $row)
	{ 
		array_push($idArray, $row -> id); // sparar ner varje bilds id i en array.

	echo "<div class='imgform'>
	<img src='../../../".$row -> imgouturl."' alt='Bildj�vel' width='90' /> 
		<label>Konstn�r:
		<input type='text' name='artist".$column."' value='".$row -> artist."' />
    	</label>
    	<label>Titel:
		<input type='text' name='imgname".$column."' value='".$row -> imgname."' />
    	</label>
    	<label>Typ:
		<input type='text' name='type".$column."' value='' />
    	</label>
    	<label>Tr�skelv�rde:
		<input type='range' name='threshold".$column."' min='1' max='10' value='5' />
    	</label>
    	<label>Historia:
	 	<input type='text' name='story".$column."' value='".$row -> story."' />
    	</label>
    	<label>Ljud:
		<input type='file' name='soundurl".$column."' />
		</label></div>";
 			
 		$column++;

 		if($column%3 == 0){
 			echo "</div><div class='row'>";
 		}
	}
echo "</div></div>";
?>
<input type="submit" value="Submit" name="update">
</form>
<?php echo anchor('index.php/site/create/download', 'G� vidare');?>)

</div>		