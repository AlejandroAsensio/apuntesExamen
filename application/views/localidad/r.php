<div class="container">
	<h1>Lista de localidades</h1>
	
	<form action="<?=base_url()?>localidad/c">
		<input type="submit" value="Nueva localidad" autofocus="autofocus"/>
	</form>
	
	<table class="table table-striped">
		<tr>
			<th>Nombre</th>
			<th>Provincia</th>
		</tr>
		
		<?php foreach ($localidades as $localidad):?>
		
		<tr>
			<td>
				<?=$localidad->nombre?>
			</td>
			
			<td>
				<?=$localidad->provincia?>
			</td>
			
		</tr>
		<?php endforeach;?>
	</table>

</div>