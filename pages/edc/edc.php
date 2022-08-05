<div class="pull-right">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Data Edc</span>
    </button>
</div>
<div class="my-2"></div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Edc</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pengguna</th>
                        <th>Jumlah</th>
                        <th>Alamat</th>
                        <th>Tipe</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ronaldo Ngebu</td>
                        <td>Bakat</td>
                        <td>20-03-2021</td>
                        <td>28-09-2021</td>
                        <td>Berhasil</td>
                        <td>
                            <a href="detail-edc"><button class="btn btn-primary btn-sm col-sm-10" type="submit"
                                    name="terima_judul"><i class="fa fa-eye"></i> Detail</button>
                            </a>
                            <div class="my-2"></div>
                            <button type="button" class="btn btn-success btn-sm col-sm-10" data-toggle="modal"
                                data-target=".ubah-data-modal-lg">
                                <span class="icon text-white-50">
                                    <i class="fas fa-edit"></i>
                                </span>
                                <span class="text">Ubah</span>
                            </button>
                            <div class="my-2"></div>
                            <button class="btn btn-danger btn-sm col-sm-10" type="submit" name="tolak_judul"><i
                                    class="fa fa-trash"></i> Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include "form_tambah_edc.php";
include "form_ubah_edc.php";
?>