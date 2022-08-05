<div class="my-2"></div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Costumer</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No.Hp</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>No</td>
                        <td>Saya</td>
                        <td>08262263797</td>
                        <td>cs@gmail.com</td>
                        <td>
                            <a href="detail-costumer"><button class="btn btn-primary btn-sm col-sm-10" type="submit"
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
<?php require_once 'form_ubah_costumer.php'; ?>