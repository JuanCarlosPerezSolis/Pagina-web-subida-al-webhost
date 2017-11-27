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
	<?Php

	   require("head.php"); 
	  require("links3.php");	//tres link("nombre", "link","nombre", "link","nombre", "link")
	   require("piedepagina.php");	 //pie de pagina  ()
	   
		$head = new head("ALTAS"); 
		
		?>
			<header>


				<br><br><br>
		<BODY>
		<CENTER>
			<strong>
		<MARQUEE WIDTH=80% BGCOLOR=#ffffff BEHAVIOR="alternate">
		<FONT FACE="Georgia"  COLOR=#4682B4 SIZE=8x5>
		- - - - -ELIMINAR NOTICIA- - - - -
		</FONT>
		</MARQUEE> </strong>
		</CENTER>
		</BODY>
		</header>
		<?php
		$links1 = new links3("CREAR NOTICIA","index.php/news/create","ELIM. NOTICIA","tabla_modelos.php","CERRAR SESION","index.php/usuarios/iniciar_sesion");


       ?>
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
					<td>Fecha</td>
					
					<td colspan="2">Operaciones</td>
					
				</tr>

				<?php
				include("conexion.php");

				$query="SELECT * FROM news";
				$resultado = $conexion->query($query);
				while ($row=$resultado->fetch_assoc()) {
			    ?>

			    <tr>
			    	<td><?php echo $row['title']; ?></td>
			    	<td><?php echo $row['slug']; ?></td>
			    	<td><?php echo $row['text']; ?></td>
			    	<td><?php echo $row['fecha']; ?></td>

			    	<td><a href="eliminar_modelos.php?id=<?php echo $row['id']; ?>">Eliminar</a></td>
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