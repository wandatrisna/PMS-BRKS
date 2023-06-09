<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="float">
                <a href="<?= base_url('Profile//') ?>" class="btn btn-info">&larr; Back</a>
            </div>
            <br>
            <div class="card" style="background-color: rgba(245, 245, 245, 0.9);">
                <div class="row">
                    <div class="card-body">
                        <center>
                            <h4 class="title"><strong>My Profile</strong></h4><br><br>
                        </center>
                        <form action="" method="POST" enctype="multipart/form-data">

                            <div class="page-header-title">
                                <div class="row">
                                    <div class="col-md-6">
                                        &emsp;&emsp;&emsp;<img class="img-profile rounded-circle "
                                            style="width : 280px;"
                                            src="<?= base_url('assets/images/profile/') . $user1['gambar']; ?>">

                                        <center>

                                            <br>
                                            &emsp; &emsp; &emsp;<input type="file" name="gambar" id="gambar"
                                                accept="image/png, image/jpeg, image/jpg, image/gif">
                                            <?= form_error('dimensions','<small class="text-danger pl-3">','</small>'); ?>
                                            <br>
                                            <label style="color:red">Please upload 1:1 (square) picture</label>
                                        </center>
                                    </div>


                                    <div class="col-md-6">
                                        <!-- <div class="card-body"> -->
                                        <h3>&emsp;<strong><?= $user1['nama']; ?></strong></h3>
                                        <br>

                                        <h6>&emsp;&emsp;<strong>NIK</strong></h6>
                                        <p>&emsp;&emsp;<?= $user1['NIK'] ?> </p>


                                        <h6>&emsp;&emsp;<strong>Role</strong></h6>
                                        <p>&emsp;&emsp;<?= $user1['role'] ?></p>
                                        <br>

                                        <div class="form-group row">
                                            <input type="hidden" name="id_user" value="<?= $user['id_user']; ?>">
                                            <input type="hidden" name="nama" value="<?= $user['nama']; ?>">
                                            <input type="hidden" name="NIK" value="<?= $user['NIK']; ?>">
                                            <input type="hidden" name="role" value="<?= $user['role']; ?>">
                                            <input type="hidden" name="password1" value="<?= $user['password']; ?>">
                                            <input type="hidden" name="password2" value="<?= $user['password']; ?>">


                                            <div class="col-md-12">
                                                &emsp;&emsp;<button type="submit" name="tambah"
                                                    class="btn btn-primary float">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>