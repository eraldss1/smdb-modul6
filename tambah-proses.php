<?php
if (isset($_POST['tambah'])) {
  include('koneksi.php');

  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $kom = $_POST['kom'];
  $jurusan = $_POST['jurusan'];

  $input = mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES (NULL, '$nim', '$nama', '$kom', '$jurusan')") or die(mysqli_error($koneksi));

  if ($input) {
    echo '<h3>Data berhasil di tambahkan! <br>';
    echo '<a href="index.php">Beranda</a> &nbsp;&nbsp;';
    echo '<a href="tambah.php">Tambah</a>';
  } else {
    echo 'Gagal menambahkan data! ';
    echo '<a href="tambah.php">Kembali</a>';
  }
} else {
  echo '<script>window.history.back()</script>';
}
?>