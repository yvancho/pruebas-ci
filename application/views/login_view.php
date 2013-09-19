<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login simple con CI</title>
    </head>
    <body>        
       <h1>Login simple con CI</h1>
       <?php echo validation_errors(); ?>
       <?php echo form_open('verifylogin'); ?>
            <label for="username">Username:</label>
            <input type="text" size="20" id="username" name="username"/>
            <br/>
            <label for="password">Password:</label>
            <input type="password" size="20" id="passowrd" name="password"/>
            <br/>
            <input type="submit" value="Login"/>
        </form>
    </body>
</html>
