<?php
/*
* @brief    Creates a new world and upload objects to use
*
* @details  
*
* @author   Emil Lindstr�m, emili250@student.liu.se
* @date     December 7, 2012
* @version  1.0
*/
?>
<div id="sub">
	<?php if($error != ""){
		echo "<h3 id='error'> ".htmlentities($error)." </h3></br>";
	}?>
	<div class='uploadform'>
	<div class="textinfo"><p>Skapa din v�rld h�r. Ladda upp dina objekt som ska anv�ndas i v�rlden, exempelvis blommor eller tr�d. Om du inte vill ha n�gra objekt s� skriver du bara in namnet p� v�rlden.</p></div>
		<?php echo form_open_multipart('index.php/site/add_world_and_objects');?>
			<input class="upload" type="file" name="uploadObject[]" size="20" multiple=""/>
			<div id="world">
				<label for="world">
					V�rldnamn
				</label>
				<input type="text" name="world" size="20"/>
			</div>

			<div id="button">
				<p class='max'>Max filstorlek 2MB.</p>
				<input class="styledbutton" type="submit" name="submitworld" value="Ladda upp bilderna" />
			</div>
		</form>
	</div>
</div>