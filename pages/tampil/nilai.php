<?php $data['judul'] = "Data Nilai";
include('templates/header.php');
$sql = mysqli_query($koneksi, "SELECT * FROM nilai"); ?>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <table class="table table-bordered table-striped" id="datatabel">
            <thead class="thead-dark">
                <tr>
                    <th>Nis</th>
                    <th>Nama</th>
                    <th>Mapel</th>
                    <th>Nilai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($nilai = mysqli_fetch_array($sql)) {
                    $a = $nilai['nis'];
                    $b = $nilai['kode_mapel'];
                    $nama = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis=$a");
                    $n = mysqli_fetch_array($nama);
                    $mapel = mysqli_query($koneksi, "SELECT * FROM mapel WHERE kode_mapel=$b");
                    $m = mysqli_fetch_array($mapel); ?>
                    <tr>
                        <td><?= $nilai['nis']; ?></td>
                        <td><?= $n['nama']; ?></td>
                        <td><?= $m['mapel']; ?></td>
                        <td><?= $nilai['nilai']; ?></td>
                        <td>
                            <a class="btn btn-info" href="edit/nilai.php?kode=<?= $nilai['kode_penilaian']; ?>">Edit</a>
                            <a class="btn btn-danger" href="hapus/nilai.php?kode=<?= $nilai['kode_penilaian']; ?>">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>
<?php include('templates/footer.php'); ?>