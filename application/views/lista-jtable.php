<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet">        
        <link href="/assets/jtable/themes/metro/blue/jtable.min.css" rel="stylesheet" type="text/css">
        <title></title>
    </head>
    <body>
        <div id="usuariosContainer"></div>

        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="/assets/bootstrap/js/bootstrap.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script src="/assets/jtable/jquery.jtable.js" type="text/javascript"></script>

        <script type='text/javascript'>
            $(document).ready(function() {
                $('#usuariosContainer').jtable({
                    title: 'Mantenimiento de Usuarios',
                    paging: true,
                    pageSize: 10,
                    //sorting: true, 
                    //defaultSorting: 'name ASC', 
                    actions: {
                        listAction: '<?php echo base_url()?>index.php/home/listarUsuarios'
                        //createAction: '<?php echo base_url()?>index.php/home/crear'
//                        updateAction: 
//                        deleteAction: 
                    },
                    fields: {
                        id: {
                            key: true,
                            create: false,
                            edit: false,
                            list: false
                        },
                        name: {
                             title: 'Nombre',
                             width: '40%'
                        },
                        password: {
                            title: 'Password',
                            width: '40%'
                        }

                    }
                });
                
                $('#usuariosContainer').jtable('load');
            });
        </script>

    </body>
</html>
