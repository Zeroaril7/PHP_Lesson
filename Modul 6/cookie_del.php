<html>
    <head>
        <title>Hapus Cookie</title>
    </head>
</html>

<body>
    <?php

setcookie('nama_cookie', 'nilai_cookie');

if (isset($_COOKIE['nama_cookie'])){
    echo 'cookie di-set <br>';

} else {
    echo 'unset';
}
    ?>

    <p>
        Tekan Refresh (F5);
    </p>
</body>