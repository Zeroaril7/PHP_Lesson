<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>TAMBAH DATA DOSEN</h2>
    <form action="create.php" method="POST">
        <table>
        <tr>
            <td>Nama Dosen</td>
            <td>:</td>
            <td><input type="text" name="nama_dosen"></td>
        </tr>
        <tr>
            <td>No. Telepon</td>
            <td>:</td>
            <td><input type="number" name="telp" maxlength="12"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="Simpan" name="btnSimpan"></td>
        </tr>
        </table>
    </form>
</body>
</html>