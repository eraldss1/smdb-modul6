<!DOCTYPE html>
<html>

<head>
  <title>Latihan CRUD</title>
</head>

<body>
  <h3>
    <p><a href="index.php">Beranda</a> /
      <a href="tambah.php">Tambah Data</a>
    </p>
    <b>Edit Data Mahasiswa</b><br>
  </h3>
  <?php
  include('koneksi.php');
  $id = $_GET['id'];
  $show = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id_mhs='$id'");

  if (mysqli_num_rows($show) == 0) {
    echo '<script>window.history.back()</script>';
  } else {
    $data = mysqli_fetch_assoc($show);
  }
  ?>
  <form action="edit-proses.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <table cellpadding="3" cellspacing="0">
      <tr>
        <td>NIM</td>
        <td>:</td>
        <td><?php echo $data['nim']; ?> </td>
      </tr>
      <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td><input type="text" name="nama" size="30" value="<?php echo $data['nama']; ?>" required></td>

      </tr>
      <tr>
        <td>KOM</td>
        <td>:</td>
        <td>
          <select name="kom" required>
            <option value="">Pilih KOM</option>
            <option value="A" <?php if ($data['kom'] == 'A') echo 'selected' ?>>A</option>
            <option value="B" <?php if ($data['kom'] == 'B') echo 'selected' ?>>B</option>
            <option value="C" <?php if ($data['kom'] == 'C') echo 'selected' ?>>C</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Jurusan</td>
        <td>:</td>
        <td>
          <select name="jurusan" required>
            <option value="">Pilih Jurusan</option>
            <option value="Ilmu Komputer" <?php if ($data['jurusan'] == 'Ilmu Komputer') echo 'selected' ?>>Ilmu Komputer</option>
            <option value="Teknologi Informasi" <?php if ($data['jurusan'] == 'Teknologi Informasi') echo 'selected' ?>>Teknologi Informasi</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td></td>
        <td><input type="submit" name="simpan" value="Simpan"></td>
      </tr>
    </table>
  </form>
</body>

</html>