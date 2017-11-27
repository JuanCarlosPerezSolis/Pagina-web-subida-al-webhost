<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="estilo.css">
<script src="prefixfree.js"></script>
    <title>Pagina php</title>
</head>

<body>
	<br><br>
	<center>
		<table border="3">
			<thead>

			 <tr>
				
				<th colspan="7">ELIMINAR NOTICIAS</th>
			 </tr>
			</thead>
			<tbody>
				<tr> 
					<td>Titulo</td>
					<td>Slug</td>
					<td>Descripcion</td>
					<td>Autor</td>
					<td>Fecha</td>
					
					<td colspan="2">Operaciones</td>
					
				</tr>

				<?php

				include("conexion.php");
				$baz = array("valor" => $iniciosecion );
				$query=" SELECT * FROM news where autor= '{$baz['valor']}'";

				
				
				$resultado = $conexion->query($query);
				while ($row=$resultado->fetch_assoc()) { 
			    ?>

			    <tr>
			    	<td><?php echo $row['title']; ?></td>
			    	<td><?php echo $row['slug']; ?></td>
			    	<td><?php echo $row['text']; ?></td>			    	
			    	<td><?php echo $row['autor']; ?></td>
			    	<td><?php echo $row['fecha']; ?></td>

			    	<td><a href="<?= base_url()?>eliminar_modelos.php?id=<?php echo $row['id']; ?>">Eliminar</a></td>
			    </tr>
			    <?php
				}
				?>

			</tbody>
		</table>
	</head>
	</center>
<br><br><br>
 	
 	<footer>
	<p>Todos los derechos reservados por la copa MX</p>
</footer>
</body>
</html>