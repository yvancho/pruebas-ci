<html>
    <head>
        <title>Formulario de Subida</title>
    </head>
    <body>
        <?php echo $error; ?>
        <?php echo form_open_multipart('upload/do_upload'); ?>
        <input type="file" name="userfile" size="20" accept="image/*"/>
        <br /><br />
        <input type="submit" value="upload" />        
    </form>
</body>
</html>