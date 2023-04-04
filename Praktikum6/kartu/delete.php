<?php
require_once '../dbkoneksi.php';
$id = $_GET['iddel'];
$sql = "DELETE FROM kartu WHERE id = $id";
$dbh->query($sql);

header('location:index.php');
?>