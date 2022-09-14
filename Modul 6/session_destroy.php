<html>
    <head>
        <title>Destroy Session</title>
    </head>
    <body>
        <?php
        session_start();
        //$_SESSION['test'] = "tes";

        if (isset($_SESSION['test'])) {
            unset($_SESSION['test']);
            echo 'session dihapus';
        } else {
            echo 'unset';
        }
        ?>

        <p>
            Tekan Refresh (F5);
        </p>
    </body>
</html>