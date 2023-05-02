<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('admin/template/header_link'); ?>

<body class="sidebar-fixed">
    <div id="app">
        <?php $this->load->view('admin/template/header'); ?>

        <?php $this->load->view('admin/template/sidebar'); ?>
        <!--START PAGE HEADER -->
        <header class="page-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h1><?= $title ?></h1>
                    <p>(File size below 4 mb only jpg jpeg and png allow)</p>
                </div>

                <ul class="actions top-right">
                    <li>
                        <button onclick="history.back()" class="btn btn-dark"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>

                    </li>
                </ul>

            </div>
        </header>

        <section class="page-content container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <form action="<?php echo base_url('admin_Dashboard/addteam') ?>" method="post" enctype="multipart/form-data">
                                <div class="row">

                                    <div class="col-md-12 col-lg-12 col-xl-12">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="">Name</label>
                                                <input class="form-control" required="" type="text" name="name" required>
                                            </div>

                                            <div class="col-sm-4">
                                                <label class="">Image</label>
                                                <div class="pos-relative">
                                                    <input class="form-control pd-r-80" required="" type="file" name="image" accept="image/png, image/jpg, image/jpeg">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="">Designation</label>
                                                <div class="pos-relative">
                                                    <input class="form-control pd-r-80" required="" type="text" name="designation">
                                                </div>
                                            </div>

                                           
                                            <div class="col-sm-12">
                                                <label class="">Introduction</label>
                                                <div class="pos-relative">
                                                <textarea class="form-control" name="intro" ></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <label class="">More Details</label>
                                                <div class="pos-relative">
                                                 <textarea class="form-control" name="details" id="editor1"></textarea>
                                                </div>
                                            </div>

                                          
                                        </div>
                                        <br>
                                        <button  class="btn btn-primary">Submit</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
</div>
<?php $this->load->view('admin/template/footer_link'); ?>
</body>

</html>