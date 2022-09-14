<html>
    <head>
        <title>Check Cookie</title>
    </head>
</html>

<body>
    <?php
if (isset($_GET['q'])&& $_GET['q']==1) {
    if (isset($_COOKIE['test'])) {
        echo 'support';
    }else{
        echo 'Tak Support';
    }
} else {
    setcookie('test', 'value');
    $self = $_SERVER['PHP_SELF'];
    //header('Location: '.$self.'?q=1');
    exit;
}
    ?>

    <p>
        Tekan Refresh (F5);
    </p>
</body>