
<section>
<fieldset>
	<center>
<h1><?php echo $titulo1;?></h1>
<form method ="post" action="guardar.php">
	<label>Nombre: &nbsp</label>
	<input type="text" name="Nombre" required placeholder="Nombre del equipo">
	<br>
	<br>
	<label>Procedencia &nbsp</label>
	<input type="text" name="nombre" required placeholder="Procedencia">
	<br>
	<br>
	<label>Comentarios: &nbsp</label>
	<textarea></textarea>
	<br>
	<br>
<legend>Color de tu camiseta</legend>
	
		<label>Elige tu color</label>
		<input type="color">
		<br>
		<input type="submit" value="Buscar color">
		<br>
		<br>
	<input id="enviar" type="submit" value="enviar">
	<input id="cancelar" type="reset" value="cancelar">


</form>
</center>
</fieldset>
</section>