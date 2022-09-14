<html>
    <head>
        <title>Admin Web</title>
        <style type="text/css">
            .inner {
                margin: 200px auto;
                padding: 20px;
                width: 240px;
                border: 1px solid #333;
            }
        </style>
    </head>
    <body>
        <?php
            ini_set('display_errors', 1);
            define('_VALID',1);
            require_once('./auth.php');
            init_login();
            validate();
        ?>
        <h3>Simulasi Halaman Admin</h3>
        <p><a href="?m=logout">Logout</a></p>
        <p>Menu Admin Disini</p>
    </body>
</html>
