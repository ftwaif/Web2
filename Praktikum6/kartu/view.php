<?php 
require_once '../dbkoneksi.php';

$id = $_GET['id'];

$sql = "SELECT * FROM kartu WHERE id = $id";
$rs = $dbh->query($sql);
$data = $rs->fetch();

?>

<h1>Detail Kartu</h1>

<table class="table">
    <tr>
        <td>Kode</td>
        <td><?= $data['kode'] ?></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><?= $data['nama'] ?></td>
    </tr>
    <tr>
        <td>Diskon</td>
        <td><?= $data['diskon'] ?></td>
    </tr>
    <tr>
        <td>Iuran</td>
        <td><?= $data['iuran'] ?></td>
    </tr>
</table>

<a class="btn btn-primary" href="index.php">Kembali ke daftar kartu</a>
