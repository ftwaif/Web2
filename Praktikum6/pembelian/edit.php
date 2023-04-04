<?php
    require_once 'db_koneksi.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM pembelian WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    
    if(isset($_POST["submit"])){
        $tanggal = $_POST['tanggal'];
        $nomor = $_POST['nomor'];
        $produk_id = $_POST['produk_id'];
        $jumlah = $_POST['jumlah'];
        $harga = $_POST['harga'];
        $vendor_id = $_POST['vendor_id'];

        $sql = "UPDATE pembelian SET tanggal = :tanggal, nomor = :nomor, produk_id = :produk_id, jumlah = :jumlah, harga = :harga, vendor_id= :vendor_id  WHERE id = :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':tanggal', $tanggal);
        $stmt->bindParam(':nomor', $nomor);
        $stmt->bindParam(':produk_id', $produk_id);
        $stmt->bindParam(':jumlah', $jumlah);
        $stmt->bindParam(':harga', $harga);
        $stmt->bindParam(':vendor_id', $vendor_id);

        $stmt->execute();

        header('Location: index.php');


    }

    $sqljenis = "SELECT * FROM pembelian";
    $rowjenis = $conn->prepare($sqljenis);
    $rowjenis->execute();
?>

<form method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    <label>Tanggal</label>
    <input type="text" name="tanggal" value="<?php echo $row['tanggal']; ?>">
    <br>
    <label>Nomer</label>
    <input type="text" name="nomor" value="<?php echo $row['nomor']; ?>">
    <br>
    <label>Produk id</label>
    <input type="number" name="produk_id" value="<?php echo $row['produk_id']; ?>">
    <br>
    <label>Jumlah</label>
    <input type="number" name="jumlah" value="<?php echo $row['jumlah']; ?>">
    <br>
    <label>Harga</label>
    <input type="text" name="harga" value="<?php echo $row['harga']; ?>">
    <br>
    <label>Vendor ID</label>
    <input type="number" name="vendor_id" value="<?php echo $row['vendor_id']; ?>">
    <br>

    <button type="submit" name="submit">Save</button>
</form>