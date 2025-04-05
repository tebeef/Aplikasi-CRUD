<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="Styledaftar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <h2><i class="fa-solid fa-list"></i> Daftar Mahasiswa</h2>
            <a href="form.php" class="btn-add"><i class="fa-solid fa-plus"></i>Tambah Data</a>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Jenis Kelamin</th>
                        <th>Program Studi</th>
                        <th>Tahun Masuk</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'connect.php';
                    $query = mysqli_query($conn, "SELECT * FROM mahasiswa");
                    $no = 1;
                    while($row = mysqli_fetch_assoc($query)) {
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['NAMA']; ?></td>
                        <td><?= $row['NIM']; ?></td>
                        <td><?= $row['JENIS_KELAMIN']; ?></td>
                        <td><?= $row['PRODI']; ?></td>
                        <td><?= $row['TAHUN_MASUK']; ?></td>
                        <td>
                            <a href="form.php?edit=<?= $row['No'] ?>" class="btn-icon edit">
                                <i class="fa-solid fa-pen"></i><span>Edit</span>
                            </a>
                            <a href="daftar.php?hapus=<?= $row['No'] ?>" class="btn-icon delete" onclick="return confirm('Yakin ingin menghapus?');">
                                <i class="fa-solid fa-trash"></i><span>Hapus</span>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
