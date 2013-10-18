<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>CI y Uploadify</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="uploadify and CI">
        <meta name="author" content="YVANCHO">
        <!--styles-->
        <link href="/assets/bootstrap/css/bootstrap.min.css" type="text/css" media="screen" rel="stylesheet"/>
        <link href="/assets/uploadify/uploadify.css" type="text/css" media="screen" rel="stylesheet"/>

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/assets/js/jquery-1.10.2.js"><\/script>')</script>
        <script src="/assets/uploadify/jquery.uploadify.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function() {

                var base_url = '<?php echo base_url(); ?>';

                $('#upload-file').click(function(e) {
                    e.preventDefault();
                    $('#userfile').uploadify('upload', '*');
                });

                $('#userfile').uploadify({
                    'debug':true,
                    'auto': false,
                    'swf': base_url + 'assets/uploadify/uploadify.swf',
                    'uploader': 'uploadify_v3/do_upload',
                    'cancelImg': base_url + '/assets/img/uploadify-cancel.png',
                    'fileTypeExts': '*.jpg;*.bmp;*.png;*.tif',
                    'fileTypeDesc': 'Image Files (.jpg,.bmp,.png,.tif)',
                    'fileSizeLimit': '2MB',
                    'fileObjName': 'userfile',
                    'buttonText': 'Select Photo(s)',
                    'multi': true,
                    'removeCompleted': false
                });
            });
        </script>

    </head>

    <body>
        <div class="container">
            <h1 class="page-header">Uploadify V3 &amp; CodeIgniter</h1>

            <p>This is a simple tutorial demo showing Uploadify V3 working with CodeIgniter 2.1.2</p>
            <?php echo form_open_multipart(); ?>
            <ul class="unstyled">
                <li>
                    <?php echo form_upload('userfile', '', 'id="userfile"'); ?>
                    <?php echo (isset($error)) ? $error : ''; ?>
                </li>
                <li>
                    <?php echo form_button(array('content' => 'Upload', 
                                                 'id' => 'upload-file', 
                                                 'class' => 'btn btn-large btn-primary')
                                ); ?>
                </li>
            </ul>
            <?php echo form_close(); ?>
        </div>
    </body>
</html>
