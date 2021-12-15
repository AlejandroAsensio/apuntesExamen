<div class="container">
	<h1>Lista de personas</h1>
	
	<form action="<?=base_url()?>persona/c">
		<input type="submit" value="Nueva persona" autofocus="autofocus"/>
	</form>
	
	<table class="table table-striped">
		<tr>
			<th>Nombre</th>
			<th>Pais de nacimiento</th>
			<th>Pais de residencia</th>
			<th>Aficiones que gusta</th>
			<th>Aficiones que odia</th>
		</tr>
		
		<?php foreach ($personas as $persona):?>
		
		<tr>
			<td>
				<?=$persona->nombre?>
			</td>
			<td>
				<?=$persona->fetchAs('pais')->nace->nombre?>
			</td>
			<td>
				<?=$persona->fetchAs('pais')->vive->nombre?>
			</td>
			
			<td>
				<?php foreach($persona->ownGustoList as $gusto):?>
					<?=$gusto->aficion->nombre?>
				<?php endforeach;?>
			</td>
			<td>
				<?php foreach($persona->ownOdioList as $odio):?>
					<?=$odio->aficion->nombre?>
				<?php endforeach;?>
			</td>
			
		</tr>
		<?php endforeach;?>
	</table>

</div>