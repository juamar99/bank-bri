<div class="pull-right">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Data Atm</span>
    </button>
</div>
<div class="my-2"></div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Atm</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Seri Atm</th>
                        <th>Alamat</th>
                        <th>Kerusakan</th>
                        <th>Tipe</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM atm") or mysqli_error($koneksi);
                    $no = 1;
                    while ($data = mysqli_fetch_assoc($query)) {

                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data['sn_atm']; ?></td>
                        <td><?= $data['alamat']; ?></td>
                        <td><?= $data['kerusakan']; ?></td>
                        <td><?= $data['tipe']; ?></td>
                        <td>
                            <a href="detail-atm"><button class="btn btn-primary btn-sm col-sm-10" type="submit"
                                    name="terima_judul"><i class="fa fa-eye"></i> Detail</button>
                            </a>
                            <div class="my-2"></div>
                            <button type="button" class="btn btn-success btn-sm col-sm-10" data-toggle="modal"
                                data-target="#ubah-data-modal-lg<?= $data['sn_atm']; ?>">
                                <span class="icon text-white-50">
                                    <i class="fas fa-edit"></i>
                                </span>
                                <span class="text">Ubah</span>
                            </button>
                            <div class="my-2"></div>

                            <a href="atm&id_atm=<?= $data['id_atm']; ?>"><button class="btn btn-danger btn-sm col-sm-10"
                                    type="submit" name="hapus_data"><i class="fa fa-trash"></i> Hapus</button></a>
                            <form action="" method="GET">
                            </form>

                        </td>
                    </tr>
                    <?php include "form_ubah_atm.php";
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include "form_tambah_atm.php";
if (isset($_GET['id_atm'])) {
    $id_atm = $_GET['id_atm'];
    $query_hapus = mysqli_query($koneksi, "DELETE FROM atm WHERE id_atm='$id_atm'")
        or die('Ada kesalahan pada query delete : ' . mysqli_error($koneksi));
    if ($query_hapus) {
        echo "<script>
    alert('data berhasil dihapus ');
    </script>";
    } else {
        echo "<script>
    alert('data gagal idhapus ');
    </script>";
    }
}

?>