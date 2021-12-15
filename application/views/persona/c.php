<div class="container">
	<form action="<?=base_url()?>persona/cPost" method="post">
		<h1>Nueva persona</h1>
		<label for="id-nombre">Nombre</label>
		<input id="id-nombre" type="text" name="nombre" autofocus="autofocus"/>
		<br/><br/>
		País de nacimiento
		<select name="idPaisNace">
			<?php foreach($paises as $pais):?>
				<option value="<?=$pais->id?>">
					<?=$pais->nombre?>
				</option>
			<?php endforeach;?>
		</select>
		<br/><br/>
		País de residencia
		<select name="idPaisVive">
			<?php foreach($paises as $pais):?>
				<option value="<?=$pais->id?>">
					<?=$pais->nombre?>
				</option>
			<?php endforeach;?>
		</select>
		<br/><br/>
		
		
		<fieldset>
		<legend>Aficiones que gusta</legend>
			<?php foreach($aficiones as $aficion):?>
				<input type="checkbox" id="idg-<?=$aficion->id?>" name="aficionesGusta[]" value="<?=$aficion->id?>"/>
				<label for="idg-<?=$aficion->id?>"><?=$aficion->nombre?></label>
			<?php endforeach;?>
		
		</fieldset>
		<fieldset>
		<legend>Aficiones que odia</legend>
			<?php foreach($aficiones as $aficion):?>
				<input type="checkbox" id="ido-<?=$aficion->id?>" name="aficionesOdia[]" value="<?=$aficion->id?>"/>
				<label for="ido-<?=$aficion->id?>"><?=$aficion->nombre?></label>
			<?php endforeach;?>
		
		</fieldset>
				
		<input type="submit"/>
		
	</form>
</div>