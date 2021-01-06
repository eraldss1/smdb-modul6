<?php
if (isset($_POST['simpan'])) {
  include('koneksi.php');
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $kom = $_POST['kom'];
  $jurusan = $_POST['jurusan'];

  $update = mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', kom='$kom', jurusan='$jurusan' WHERE id_mhs='$id'") or die(mysqli_error($koneksi));

  if ($update) {
    echo '<h3>Data berhasil di update! ';
    echo '<a href="index.php?id=' . $id . '">Kembali</a>';
  } else {
    echo 'Gagal menyimpan data! ';
    echo '<a href="edit.php?id=' . $id . '">Kembali</a>';
  }
} else {
  echo '<script>window.history.back()</script>';
}
