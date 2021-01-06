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
    Data Mahasiswa
    <table cellpadding="5" cellspacing="0" border="1">
      <tr bgcolor="#CCCCCC">
        <th>No.</th>
        <th>NIM</th>
        <th>Nama Lengkap</th>
        <th>KOM</th>
        <th>Jurusan</th>
        <th>Opsi</th>
      </tr>

      <?php
      include('koneksi.php');
      $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY nim DESC") or die(mysqli_error($koneksi));

      if (mysqli_num_rows($query) == 0) {
        echo '<tr align="center"><td colspan="6">Tidak ada data!</td></tr>';
      } else {
        $no = 1;
        while ($data = mysqli_fetch_assoc($query)) {
          echo '<tr>';
          echo '<td>' . $no . '</td>';
          echo '<td>' . $data['nim'] . '</td>';
          echo '<td>' . $data['nama'] . '</td>';
          echo '<td>' . $data['kom'] . '</td>';
          echo '<td>' . $data['jurusan'] . '</td>';
          echo '<td><a href="edit.php?id=' . $data['id_mhs'] . '">Edit</a> / Hapus </td>';
          echo '</tr>';
          $no++;
        }
      }
      ?>
    </table>
  </h3>
</body>

</html>