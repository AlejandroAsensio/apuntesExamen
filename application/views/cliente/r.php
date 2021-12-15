<div class="container">
	<h1>Lista de clientes</h1>
	
	<form action="<?=base_url()?>cliente/c">
		<input type="submit" value="Nuevo Cliente" autofocus="autofocus"/>
	</form>
	
	<table class="table table-striped">
		<tr>
			<th>Nombre</th>
			<th>¿Madrileño?</th>
		</tr>
		
		<?php foreach ($clientes as $cliente):?>
		
		<tr>
			<td>
				<?=$cliente->nombre?>
			</td>
			
			<td>
				<?=($cliente->localidad->provincia == 'Madrid') ? 'SI' : 'NO'?>
			</td>
			
		</tr>
		<?php endforeach;?>
	</table>

</div>