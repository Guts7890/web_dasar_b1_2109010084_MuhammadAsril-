<?php
require "";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equip="X-UA-Compatible" content="IEdge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ini adalah Halaman Tambah Data Dokter</h1>
    <ul>
        <a href="dokter.php">
          <li>Data Dokter</li>
        </a>
        <a href="jadwal_dokter..php">
            <li>jadwal_dokter</li>
        </a>
    </ul>
<hr>

<form action="" method="post">
    <table>
        <tr>
            <th>Nama Dokter</th>
            <td>:</td>
            <td>
                <input type="text" name=nama_dokter">
            </td>
        </tr>
        <tr>
            <th>Spesialis</th>
            <td>:</td>
            <td>
                <select name="spesial">
                    <option value=""selected>Pilih spesial</option>
                    <?php
                    foreach(spesialis() as $s) : ?>
                    <option value="><?= $s["id"]; ?>"><?= $s["nama"]; ?></option>
                    <?php endforeach; ?>
            </select> 
        </td>
    </tr>
    <td colspan="3">
        <button style="width: 100%;"type="submit"
        name="simpan_dokter">Simpan</button>
    </td>
</table>
</form>


<?php
$tanggal = date("Y-m-d-H");

if (isset($_POST["simpan_dokter"])){
    $nama_dokter = $_POST ("nama_dokter");
    $id_spesialis = $_POST ("id_spesialis");
    if ($nama_dokter == "") {
        echo "Nama Dokter Masih Kosong!";
    } elseif ($id_spesialis == "") {
        echo "Spesialis belum dipilih!";
    }else{   
     $simpan = mysql_query(
        koneksi(),
        "INSERT INTO dokter VALUES(null,
        '$nama_dokter'
        '$id_spesialis',
        '$tanggal',
        '$tanggal')"
     );
     if (simpan) {
        echo "
        <script>
        alert('Simpan dokter berhasil!');
        location='dokter.php';
        </script>
        ";
     }else{
      echo "
      <script>
      alert('Data gagal disimpan!');
      </script>
      ";
     }
    }
}
?>


</body>

</html>