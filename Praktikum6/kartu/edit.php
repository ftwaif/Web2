<?php 
require_once '../dbkoneksi.php';

if(isset($_GET['idedit'])){
  $id = $_GET['idedit'];
  $sql = "SELECT * FROM kartu WHERE id='$id'";
  $result = $dbh->query($sql);
  $row = $result->fetch(PDO::FETCH_ASSOC);
}

if(isset($_POST['proses'])){
  $id = $_POST['id'];
  $kode = $_POST['kode'];
  $nama = $_POST['nama'];
  $diskon = $_POST['diskon'];
  $iuran = $_POST['iuran'];
  
  $sql = "UPDATE kartu SET kode='$kode', nama='$nama', diskon='$diskon', iuran='$iuran' WHERE id='$id'";
  $result = $dbh->query($sql);
  if($result){
    header("location:index.php");
  } else {
    echo "Error: " . $sql . "<br>" . $dbh->error;
  }
}

?>
            
<form method="POST" action="edit.php">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="kode" name="kode" type="text" class="form-control"
        value="<?= $row['kode'] ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama kartu</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control" 
        value="<?= $row['nama'] ?>">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="diskon" class="col-4 col-form-label">Diskon</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="diskon" name="diskon" type="text" class="form-control" 
        value="<?= $row['diskon'] ?>">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="iuran" class="col-4 col-form-label">Iuran</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="iuran" name="iuran" type="text" class="form-control" 
        value="<?= $row['iuran'] ?>">
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="index.php" class="btn btn-secondary">Batal</a>
</form>