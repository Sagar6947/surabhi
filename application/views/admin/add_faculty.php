<?php include('template/header_link.php'); ?>
<div class="holder">
    <?php include('template/header.php'); ?>
    <?php $this->load->view('admin/template/sidebar'); ?>
    <main>
        <div class="container-fluid site-width">
            <section class="page-content container-fluid">
                <div class="row">
                    <div class="col-sm-10  align-self-center">
                        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto">
                                <h4 class="mb-0"><?= $title ?></h4>
                                <p>(File size below 4 mb only jpg jpeg and png allow)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2  align-self-center">
                        <a href="<?= base_url('admin_Dashboard/faculty') ?>" class="btn btn-primary align-left">Faculty List</a>
                    </div>
                </div>
            </section>

            <section class="page-content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <form action method="post" enctype="multipart/form-data">
                                    <div class="row">

                                        <div class="col-md-12 col-lg-12 col-xl-12">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label>Name</label>
                                                    <input class="form-control" type="text" name="name" value="<?= (($tag == 'edit') ? $mentors['0']['name'] : '') ?>">
                                                </div>

                                                <div class="col-sm-6">
                                                    <label>Designation</label>
                                                    <div class="pos-relative">
                                                        <input class="form-control pd-r-80" type="text" name="designation" value="<?= (($tag == 'edit') ? $mentors['0']['designation'] : '') ?>">
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <label>Image</label>
                                                    <div class="pos-relative">
                                                        <input class="form-control pd-r-80" type="file" name="img" accept="image/png, image/jpg, image/jpeg">
                                                        <?php if ($tag == 'edit') { ?>
                                                            <input type="hidden" name="image" value="<?= $mentors['0']['image'] ?>">
                                                            <img src="<?= base_url() ?>uploads/faculty/<?= $mentors['0']['image'] ?>" height="50px">

                                                        <?php    }  ?>
                                                    </div>
                                                </div>


                                            </div>
                                            <br>
                                            <button class="btn btn-primary">Submit</button>
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
            </section>
        </div>

        </section>
        <?php include('template/footer.php') ?>
        <?php include('template/footer_link.php'); ?>
        </body>

        </html>