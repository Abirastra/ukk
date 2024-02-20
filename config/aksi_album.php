<?php
session_start();
include 'koneksi.php';

if (isset($_POST['tambah'])) {
    $namaalbum = $_POST['namaalbum'];
    $deskeripsi = $_POST['deskeripsi'];
    $tanggal = date('y-m-d');
    $userid = $_SESSION['userid'];

    $sql = mysqli_query($koneksi, "INSERT INTO album VALUES('','$namaalbum','$deskeripsi','$tanggal','$userid')");
    echo "<script>
    alert('Data Berhasil Disimpan');
    location.href='../admin/album.php';
    </script>";

}

if (isset($_POST['edit'])) {
    $albumid = $_POST['albumid'];
    $namaalbum = $_POST['namaalbum'];
    $deskeripsi = $_POST['deskeripsi'];
    $tanggaldibuat = date('y-m-d');
    $userid = $_SESSION['userid'];

    $sql = mysqli_query($koneksi, "UPDATE album SET namaalbum='$namaalbum',deskeripsi='$deskeripsi',tanggaldibuat='$tanggaldibuat' WHERE albumid='$albumid'");

    echo "<script>
    alert('Data Berhasil Diperbarui');
    location.href='../admin/album.php';
    </script>";

}
if (isset($_POST['hapus'])) {
    $albumid = $_POST['albumid'];
    $sql = mysqli_query($koneksi, "DELETE FROM album WHERE albumid='$albumid'");
    echo "<script>
    alert('Data Berhasil Dihapus');
    location.href='../admin/album.php';
    </script>";
}


?>