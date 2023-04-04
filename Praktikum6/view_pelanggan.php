<?php 
require_once 'dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from pelanggan where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM pelanggan a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM pelanggan WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>

<table class="table table-striped">
    <tbody>
        <tr><td>ID</td><td><?=$row['id']?></td></tr>
        <tr>  <td>Kode</td><td><?=$row['kode']?></td></tr>
        <tr>   <td>Nama</td><td><?=$row['nama']?></td></tr>
        <tr>   <td>Jenis Kelamin</td><td><?=$row['jk']?></td></tr>
        <tr>   <td>Harga Beli</td><td><?=$row['tmp_lahir']?></td></tr>
        <tr>   <td>Stok</td><td><?=$row['tgl_lahir']?></td></tr>
        <tr>   <td>Minimum Stok</td><td><?=$row['email']?></td></tr>
        <tr>   <td>Kartu Pelanggan</td><td><?=$row['kartu_id']?></td></tr>
    </tbody>
</table>

