<div class="modal fade" id="ubah-data-modal-lg<?= $data['sn_atm']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title"> Ubah Atm<?= $data['sn_atm']; ?> </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="col-md-12">
                <form action="" name="modal_popup" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label>Nomor Serial Atm</label>
                        <input type="text" value="<?= $data['sn_atm']; ?>" placeholder="Nomor Serial Atm"
                            class="form-control" name="sn_atm" autocomplete="off" required>
                        <input type="hidden" value="<?= $data['id_atm']; ?>" placeholder="Nomor Serial Atm"
                            class="form-control" name="id_atm" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label class="mb-3">Tipe Atm</label>
                        <select name="tipe" class="form-control">
                            <option value="<?= $data['tipe']; ?>"><?= $data['tipe']; ?></option>
                            <option>-- Pilih Tipe Atm --</option>
                            <option value="<?= $data['tipe']; ?>">Atm Setor Tunai</option>
                            <option value="<?= $data['tipe']; ?>">Atm Penarikan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kerusakan</label>
                        <input type="text" autocomplete="off" value="<?= $data['kerusakan'] ?>" placeholder="Kerusakan"
                            class="form-control" name="kerusakan">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" rows="2" name="alamat" placeholder="ALAMAT" autocomplete="off"
                            required>
                            <?= $data['alamat']; ?></textarea>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary btn-sm" type="submit" name="ubah_atm">
                            <i class="fas fa-send"></i> Ubah Data </button>
                        <button type="reset" class="btn btn-danger btn-sm" data-dismiss="modal" aria-hidden="true">
                            <i class="fas fa-close"></i> Batal </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php

if (isset($_POST['ubah_atm'])) {
    $id_atm = $_POST['id_atm'];
    $sn_atm = $_POST['sn_atm'];
    $tipe = $_POST['tipe'];
    $kerusakan = $_POST['kerusakan'];
    $alamat = $_POST['alamat'];

    $update = mysqli_query($koneksi, "UPDATE atm SET alamat='$alamat',kerusakan='$kerusakan',tipe='$tipe' WHERE id_atm='$id_atm'") or die('Terdapat Kesalahan Pada Query Update : ' . mysqli_error($koneksi));
    if ($update) {
        //      echo '<script>window.location="atm"</script>';
        echo "<script>
        alert('data berhasil diubah ');
        window.location.reload();
        </script>";
    } else {
        echo "<script>
alert('data gagal diubah ');
</script>";
    }
}
?>