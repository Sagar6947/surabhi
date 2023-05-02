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
                </div>
            </section>

            <section class="page-content container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row">

                                        <div class="col-md-12 col-lg-12 col-xl-12 text-right">
                                            <span>Status:</span>
                                            <a href="<?php echo base_url() . 'admin_Dashboard/disable/' . $banner[0]['bid'] . '/whats_new/' . (($banner[0]['is_visible'] == 1) ? '0' : '1'); ?>" class="btn btn-light">
                                                <?php if ($banner[0]['is_visible'] == 1) { ?><span class="badge badge-success">Active</span><?php } else { ?> <span class="badge badge-danger">Deactive</span><?php } ?>

                                            </a>
                                        </div>

                                        <div class="col-md-12 col-lg-12 col-xl-12">
                                            <div class="">
                                                <div class="form-group">
                                                    <label class="">What's New Banner</label>
                                                    <div class="pos-relative">
                                                        <input class="form-control pd-r-80" type="file" name="img" accept="image/png, image/jpg, image/jpeg">

                                                        <input type="hidden" name="image" value="<?= $banner['0']['image'] ?>">
                                                        <img src="<?= base_url() ?>uploads/new/<?= $banner['0']['image'] ?>" height="50px">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="">Link</label>
                                                    <div class="pos-relative">
                                                        <input class="form-control pd-r-80" type="text" name="link" value="<?= $banner['0']['link'] ?>">
   </div>
                                                </div>

                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

</div>
<?php $this->load->view('admin/template/footer_link'); ?>
</body>

</html>