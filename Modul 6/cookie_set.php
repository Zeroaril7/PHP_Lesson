<html>
    <head>
        <title>Set Cookie</title>
    </head>
</html>

<body>
    <?php
    setcookie('nama_cookie', 'nilai_cookie');

    echo $_COOKIE['nama_cookie'];
    ?>

    <p>
        tekan Refresh(F5);
</body>