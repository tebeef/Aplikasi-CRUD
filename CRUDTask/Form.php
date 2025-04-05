<?php
include 'connect.php';

$edit = null;

if (isset($_POST['tambah'])) {
    $nama  = $_POST['nama'];
    $nim = $_POST['nim'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $prodi = $_POST['prodi'];
    $tahun_masuk = $_POST['tahun_masuk'];
    
    $sql = "INSERT INTO mahasiswa (NAMA, NIM, JENIS_KELAMIN, PRODI, TAHUN_MASUK) 
            VALUES ('$nama', '$nim', '$jenis_kelamin', '$prodi', '$tahun_masuk')";
    $conn->query($sql);
    header("Location: daftar.php");
}

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $result = $conn->query("SELECT * FROM mahasiswa WHERE No=$id");
    if ($result->num_rows > 0) {
        $edit = $result->fetch_assoc();
    }
}

if (isset($_POST['update'])) {
    $id    = $_POST['id'];
    $nama  = $_POST['nama'];
    $nim = $_POST['nim'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $prodi = $_POST['prodi'];
    $tahun_masuk = $_POST['tahun_masuk'];
    
    $sql = "UPDATE mahasiswa SET NAMA='$nama', NIM='$nim', JENIS_KELAMIN='$jenis_kelamin', 
            PRODI='$prodi', TAHUN_MASUK='$tahun_masuk' WHERE No=$id";
    $conn->query($sql);
    header("Location: daftar.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
    <link rel="stylesheet" type="text/css" href="Styleform.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <h2><i class="fa-solid fa-database"></i> Sistem Manajemen Mahasiswa<br>Fakultas Ilmu Komputer</h2>
        <form method="post" class="form-container">
            <input type="hidden" name="id" value="<?= $edit['No'] ?? '' ?>">

            <div class="form-group">
                <label for="nama"><i class="fa-solid fa-user"></i> Nama:</label>
                <input type="text" id="nama" name="nama" required value="<?= $edit['NAMA'] ?? '' ?>">
            </div>

            <div class="form-group">
                <label for="nim"><i class="fa-solid fa-id-card"></i> NIM:</label>
                <input type="text" id="nim" name="nim" required value="<?= $edit['NIM'] ?? '' ?>">
            </div>

            <div class="form-group">
                <label for="jenis_kelamin"><i class="fa-solid fa-venus-mars"></i> Jenis Kelamin:</label>
                <select id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="Laki-laki" <?= (isset($edit['JENIS_KELAMIN']) && $edit['JENIS_KELAMIN'] == 'Laki-laki') ? 'selected' : '' ?>>Laki-laki</option>
                    <option value="Perempuan" <?= (isset($edit['JENIS_KELAMIN']) && $edit['JENIS_KELAMIN'] == 'Perempuan') ? 'selected' : '' ?>>Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="prodi"><i class="fa-solid fa-building-columns"></i> Program Studi:</label>
                <input type="text" id="prodi" name="prodi" required value="<?= $edit['PRODI'] ?? '' ?>">
            </div>

            <div class="form-group">
                <label for="tahun_masuk"><i class="fa-solid fa-calendar-alt"></i> Tahun Masuk:</label>
                <input type="number" id="tahun_masuk" name="tahun_masuk" required value="<?= $edit['TAHUN_MASUK'] ?? '' ?>">
            </div>

            <div class="button-container">
                <button type="submit" name="<?= $edit ? 'update' : 'tambah' ?>">
                    <i class="fa-solid fa-paper-plane"></i> <?= $edit ? "Update" : "Simpan" ?>
                </button>
            </div>
        </form>

        <div class="link-container">
            <a href="daftar.php"><i class="fa-solid fa-table-list"></i> Lihat Data</a>
        </div>
    </div>
</body>
</html>
