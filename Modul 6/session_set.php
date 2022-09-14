<html>
    <head>
        <title>Set Cookie</title>
    </head>
</html>

<body>
    <?php
    session_start();

    if (!isset($_SESSION['test'])){
        $_SESSION['test'] = 'value';

    }else {
        echo 'Session di start <br>';
        echo 'Nilai: '.$_SESSION['test'].'<br>';

        print_r($_SESSION);
    }
    ?>

    <p>
        Tekan Refresh (F5);
    </p>
</body>