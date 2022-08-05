<div class="modal fade ubah-data-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title"> Ubah Costumer</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="col-md-12">
                <form action="proses_simpan.php" name="modal_popup" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label>Nama Costumer</label>
                        <input type="text" placeholder="Nama Costumer.." class="form-control" name="nama"
                            autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label>No.Hp</label>
                        <input type="text" autocomplete="off" placeholder="No Hp.." class="form-control" name="no_hp">
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" class="form-control" placeholder="E-mail.." name="email" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password"
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