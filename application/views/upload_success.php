<html>
    <head>
        <title>Formulario de Subida</title>
    </head>
    <body>
        <h3>El archivo se transfirió correctamente!</h3>
        <ul>
            <?php foreach ($upload_data as $item => $value): ?>
                <li><?php echo $item; ?>: <?php echo $value; ?></li>
            <?php endforeach; ?>
        </ul>
        <p><?php echo anchor('upload', 'Transferir otro archivo!'); ?></p>
    </body>
</html>