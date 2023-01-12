<?php

require_once('function/koneksi.php');

$process = isset($_GET['process']) ? ($_GET['process']) : false;
$status = isset($_GET['status']) ? ($_GET['status']) : false;
?>


<?php if ($process == 'success') : ?>
    <div class="alert alert-success" role="alert">
        Data berhasil dimasukan
    </div>

<?php endif; ?>
<?php if ($status == 'success') : ?>
    <div class="alert alert-success" role="alert">
        Data berhasil dirubah
    </div>

<?php endif; ?>




<!-- mengambil data dari database -->
<?php

$pegawai = mysqli_query($koneksi, "SELECT * FROM pegawai");

?>

<div class="card" style="font-family: 'Share Tech Mono', monospace;">
    <div class="card-body">
        <div class="row" style="margin-left: 150px; ">
            <div class="col-md-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">ID</th>
                            <th scope="col">Nomor HP</th>
                            <th scope="col">Email</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($pegawai as $p) : ?>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $p['nama'] ?></td>
                                <td><?= $p['noid'] ?></td>
                                <td><?= $p['nohp'] ?></td>
                                <td><?= $p['email'] ?></td>
                                <td><?= $p['alamat'] ?></td>
                                <td>
                                    <a class="btn btn-danger badge" style="width: 60px;" href="<?= BASE_URL . 'process/process_delete.php?id=' . $p['id'] ?>">Delete</a>
                                    <a class="btn btn-info badge" style="width: 60px;" href="<?= BASE_URL . 'dashboard.php?page=edit&id=' . $p['id'] ?>">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>