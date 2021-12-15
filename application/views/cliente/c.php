<div class="container">
	<form action="<?=base_url()?>cliente/cPost" method="post">
		<h1>Nuevo cliente</h1>
		<label for="id-nombre">Nombre</label>
		<input id="id-nombre" type="text" name="nombre" autofocus="autofocus"/>
		<br/><br/>
		<select name="localidad">
		<?php foreach($localidades as $localidad):?>
			<option value="<?= $localidad->id?>">
				<?= $localidad->nombre.' ('.$localidad->provincia.')'?>
			</option>
		<?php endforeach;?>
		</select>
		
		<input type="submit"/>
		
	</form>
</div>