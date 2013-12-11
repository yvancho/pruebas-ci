<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login simple con CI - Area Privada</title>
    </head>
    <body>
        <h1>Home</h1>
        <h2>Welcome <?php echo $username; ?>!</h2>
        <a href="home/logout">Logout</a>
        </br></br>
        <h2>Ejemplos:</h2>
        <ol>
            <li><a href="home/listarTabla">Listar Usuarios</a></li>
            <li><a href="home/listarTablaPaginada2">Listar Usuarios - Paginado</a></li>
            <li>
                <a href="home/listarJtable">Listar Usuarios - Paginado</a>
            </li>
            <li>
                <a href="upload">Subir Archivos - UPLOAD</a>
            </li>
            <li>
                <a href="selectdemo">Select tag con Json y Chosen.js</a>
            </li>
            <li>
                <a href="uploadcsv">Upload CSV</a>
            </li>
        </ol>
    </body>
</html>
