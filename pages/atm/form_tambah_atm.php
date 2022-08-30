<div class="modal fade bd-example-modal-lg<?= $data['sn_atm']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title"> Tambah Atm</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="col-md-12">
                <form action="" name="modal_popup" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label>Nomor Serial Atm</label>
                        <input type="text" placeholder="Nomor Serial Atm" class="form-control" name="sn_atm"
                            autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label class="mb-3">Tipe Atm</label>
                        <select name="tipe" class="form-control">
                            <option>-- Pilih Tipe Atm --</option>
                            <option value="1">Atm Setor Tunai</option>
                            <option value="2">Atm Penarikan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kerusakan</label>
                        <input type="text" autocomplete="off" placeholder="Kerusakan" class="form-control"
                            name="kerusakan">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea type="text-area" class="form-control" placeholder="Alamat" name="alamat"
                            autocomplete="off">

                            </textarea>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary btn-sm" type="submit" name="simpan_atm">
                            <i class="fas fa-paper-plane"></i> Simpan </button>
                        <button type="reset" class="btn btn-danger btn-sm" data-dismiss="modal" aria-hidden="true">
                            <i class="fas fa-ban"></i> Batal </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php

if (isset($_POST['simpan_atm'])) {
    $sn_atm = $_POST['sn_atm'];
    $tipe = $_POST['tipe'];
    $kerusakan = $_POST['kerusakan'];
    $alamat = $_POST['alamat'];

    $insert = mysqli_query($koneksi, "INSERT INTO atm (id_atm,sn_atm,alamat,kerusakan,tipe)
VALUES('','$sn_atm','$alamat','$kerusakan','$tipe')");
    if ($insert) {
        echo "<script>
alert('data berhasil disimpan ');
window.location.replace('atm');
</script>";
    } else {
        echo "<script>
alert('data gagal disimpan ');
</script>";
    }
}
?>