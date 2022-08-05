<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title"> Tambah Jasa</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="col-md-12">
                <form action="proses_simpan.php" name="modal_popup" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label>Jenis Jasa</label>
                        <input type="text" placeholder="Jenis Jasa" class="form-control" name="jenis_jasa"
                            autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label>Layanan</label>
                        <input type="text" autocomplete="off" placeholder="Layanan" class="form-control" name="layanan">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" class="form-control" placeholder="Keterangan" name="keterangan"
                            autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Harga Jasa</label>
                        <input type="text" class="form-control" placeholder="Harga Jasa" name="harga_jasa"
                            autocomplete="off">
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary btn-sm" type="submit" name="simpan_tukang">
                            <i class="fas fa-paper-plane"></i> Simpan </button>
                        <button type="reset" class="btn btn-danger btn-sm" data-dismiss="modal" aria-hidden="true">
                            <i class="fas fa-ban"></i> Batal </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>