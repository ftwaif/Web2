<?php
    require_once 'db_koneksi.php' ;

    $sql = " SELECT * FROM pembelian";
    $stmt = $conn->prepare($sql);
    $stmt->execute();


    if(isset($_POST["submit"])){
        $tanggal = $_POST['tanggal'];
        $nomor = $_POST['nomor'];
        $produk_id = $_POST['produk_id'];
        $jumlah = $_POST['jumlah'];
        $harga = $_POST['harga'];
        $vendor_id = $_POST['vendor_id'];

    $sql = "INSERT INTO pembelian (tanggal, nomor, produk_id, jumlah, harga, vendor_id) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$tanggal, $nomor, $produk_id, $jumlah, $harga, $vendor_id]);

    header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="form.php">Tambah pembelian</a>
    <hr>
    <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
        <thead>
            <tr>
                <th>NO</th>
                <th>Tanggal</th>
                <th>Nomer</th>
                <th>Produk ID</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Vendor ID</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
                $number = 1;
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)) :
            ?>

            <tr>
                <td> <?=  $number        ?></td>
                <td> <?=  $row['tanggal']  ?></td>
                <td> <?=  $row['nomor']   ?></td>
                <td> <?=  $row['produk_id']   ?></td>
                <td> <?=  $row['jumlah'] ?></td>
                <td> <?=  $row['harga'] ?></td>
                <td> <?=  $row['vendor_id'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id'] ?>">EDIT</a>
                    <a href="delete.php?id=<?= $row['id'] ?>"  
                        onclick="if(!confirm('Anda Yakin Hapus Data <?=$row['nomor']?>?')) {return false}"
                    >
                        HAPUS
                    </a>
                </td>
            </tr>

            <?php   
                $number++;
                endwhile;
            ?>
        </tbody>
    </table>
</body>
</html>