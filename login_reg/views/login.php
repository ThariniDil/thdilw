<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <?php if(isset($_SESSION)) {
        echo $this->session->flashdata('flash_data','You have successfully registered . Please login !');
    } ?>
 
    <form action="<?php echo site_url('Helloworld') ?>" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" />
        <label for="password"></label>
        <input type="password" name="password" />
        <button type="submit">Login</button>
    </form>
</body>
</html>