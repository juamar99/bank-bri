<div class="modal fade ubah-data-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title"> Ubah Atm</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="col-md-12">
                <form action="proses_simpan.php" name="modal_popup" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label>Nomor Serial Atm</label>
                        <input type="text" placeholder="Nomor Serial Atm" class="form-control" name="sn_atm"
                            autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label class="mb-3">Tipe Atm</label>
                        <select name="tipe" class="form-control">
                            <option>-- Pilih Tipe Atm --</option>
                            <option>Atm Setor Tunai</option>
                            <option>Atm Penarikan</option>
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
                        <button class="btn btn-primary btn-sm" type="submit" name="sv_atm">
                            <i class="fas fa-send"></i> Ubah Data </button>
                        <button type="reset" class="btn btn-danger btn-sm" data-dismiss="modal" aria-hidden="true">
                            <i class="fas fa-close"></i> Batal </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>