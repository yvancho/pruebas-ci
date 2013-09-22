<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="<?php echo base_url()?>/assets/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">

        <script src="../../assets/js/jquery-1.10.2.js"></script>
        <script src="../../assets/bootstrap/js/bootstrap.js"></script>
        <title></title>
    </head>
    <body>

        <div class="container">
            <a href="/">HOME</a> 
            <?php
            echo '<h1>Lista de usuarios</h1>'
            ?>
            <table class="table table-bordered">
                <?php foreach ($usuarios as $item): ?>
                    <tr>
                        <td>
                            <?php echo $item['id'] ?>
                        </td>
                        <td>
                            <?php echo $item['name'] ?>
                        </td>
                        <td>
                            <?php echo $item['password'] ?>
                        </td>
                    </tr>
                <?php endforeach; ?>    
            </table>
            <div class="pagination">
                <ul>
                    <li><a href="#">«</a></li>
                    <li><a href="#">Prev</a></li>
                    <?php for ($index = 0; $index < $totalPagView; $index++): ?>
                        <?php $nPag=$index+1;?>
                        <?php echo '<li><a href="'.base_url().'index.php/home/listarTablaPaginada2/' . $index . '">' . $nPag  . '</a></li>'; ?>
                    <?php endfor; ?>
                    <li><a href="#">Next</a></li>
                    <li><a href="#">»</a></li>
                </ul>
            </div>
            <?php // for ($index = 1; $index <= $totalPagView; $index++): ?>
            <?php // echo '<a href=\'?id=\'>' . $index . '</a>'; ?>
    
        </div>
    </body>
</html>
