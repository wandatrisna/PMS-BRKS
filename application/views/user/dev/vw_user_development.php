<div class="col-md-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">IT DEVELOPMENT TABLE</h6>
            <div class="float-right">
                <a href="<?= base_url() ?>User/tambahdev" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                        <i class="fas fa-flag"></i>
                    </span>
                    <span class="text">Add New User</span> </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="table-warning">
                            <th width="5px">Number</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Role</th>
                            <th>NIK</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i =1; ?>
                        <?php foreach ($development as $us) : ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><img src="<?= base_url('assets/images/profile/') . $us['gambar']; ?>"
                                    style="width : 50px;" class="img-thumbnail">
                            </td>
                            <td><?= $us['nama']; ?></td>
                            <td><?= $us['jk']; ?></td>
                            <td><?= $us['role']; ?></td>
                            <td><?= $us['NIK']; ?></td>
                            <td>
                                <a href="<?= base_url('User/hapusdev/'). $us['id_user']; ?> " class="badge badge-danger"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');"
                                    class="ik ik-trash-2 text-red">Delete</a>
                                <a href="<?= base_url('User/edit/'). $us['id_user']; ?>"
                                    class="badge badge-warning">Edit</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>