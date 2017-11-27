<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

    <label for="title">Titulo</label>
    <input type="input" name="title" /><br />
    <br>
    <label for="text">Descripcion</label>
    <br>
    <textarea name="text"></textarea><br />
    <br>
    <br>
    <label for="autor">Autor</label>
    <input type="input" name="autor" /><br />
    <br>
    <label for="fecha">Fecha</label>

   <?php   $fecha = date("d/m/Y"); ?>  
<input type="input" value="<?php echo $fecha;?>" name="fecha"/>

    <input type="submit" name="submit" value="Crear noticia" />

</form>