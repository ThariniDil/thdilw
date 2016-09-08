<!DOCTYPE html>
<html>
    <head>
        <title>Learn CI</title>
    </head>
    <body>
        <h1>Welcome <?php echo $this->session->userdata('username') ?></h1>
        <a href="<?php echo site_url('Home/logout') ?>">Logout</a>
    </body>
</html>