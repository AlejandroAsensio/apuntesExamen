<div class="container">
	<form action="<?=base_url()?>localidad/cPost" method="post">
		<h1>Nueva localidad</h1>
		<label for="id-nombre">Localidad</label><br/>
		<input id="id-nombre" type="text" name="nombre" autofocus="autofocus"/>
		<br/><br/>
		<select name="provincia">
		<option value="Madrid">Madrid</option>
		<option value="Segovia">Segovia</option>
		<option value="Zaragoza">Zaragoza</option>
		<option value="Badajoz">Badajoz</option>
		</select>
		
		<br/><br/>
		<input type="submit"/>
		
	</form>
</div>