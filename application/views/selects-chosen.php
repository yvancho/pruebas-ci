
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>

    </head>
    <body>

        <select id="elSelect">
            <option value="#">Seleccione...</option>
        </select>

        <script src="http://code.jquery.com/jquery-1.9.1.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                App = {};
                App.usuario = <?php echo json_encode($usuarios); ?>;

                $('#elSelect').change(function(e) {
                    var $select = $(this);
                    selected_value = $select.val();
                    alert(selected_value);
                });

                var $select_usuarios = $('#elSelect');
                $.each(App.usuario, function(i, usuario) {
                    var option = $('<option value=' + usuario.id + '>' + usuario.name + '</option>');
                    $select_usuarios.append(option);
                });


            });
        </script>
    </body>
</html>
