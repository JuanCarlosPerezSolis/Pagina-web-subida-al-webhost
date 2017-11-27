<html>
<body>
    <center>
    <h1>
        Nuevo Usuario
    </h1>
    <?php

        echo form_open('usuarios/crear_usuario');

        echo form_error('iniciosecion');
        echo form_label('Inicio de sesion', 'iniciosecion');
        echo form_input('iniciosecion');
        echo '<br>';
        echo '<br>';
        echo form_error('nombre');
        echo form_label('Nombre', 'nombre');
        echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';
        echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';
        echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';
        echo form_input('nombre');
        echo '<br>';
        echo '<br>';
        echo form_error('apellidos');
        echo form_label('Apellidos', 'apellidos');
        echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';
        echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';
        echo '&nbsp;';
        echo form_input('apellidos');
        echo '<br>';
        echo '<br>';
        echo form_error('nacionalidad');
        echo form_label('Nacionalidad', 'nacionalidad');
        echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';
        echo form_input('nacionalidad');
        echo '<br>';
        echo '<br>';
        echo form_error('correo');
        echo form_label('Correo', 'correo');
        echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';
        echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';
        echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';
        echo form_input('correo');
        echo '<br>';
        echo '<br>';
        echo form_error('contrasena');
        echo form_label('Contraseña', 'contrasena');
        echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';
        echo '&nbsp;';echo '&nbsp;';
        echo form_password('contrasena');
        echo '<br>';      
        echo '<br>';
        echo form_submit('botonSubmit', 'Enviar');
        echo form_close();
    ?>
</center>
</body>
</html>
<br>