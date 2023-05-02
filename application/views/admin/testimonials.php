<?php include('template/header_link.php'); ?>
<div class="holder">


    <?php include('template/header.php'); ?>
    <?php $this->load->view('admin/template/sidebar'); ?>
    <main>
        <div class="container-fluid site-width">
            <div class="row ">
                <div class="col-12  align-self-center">
                    <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                        <div class="w-sm-100 mr-auto">
                            <h4 class="mb-0"></h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">

                        <h3 class="page-title"><?= $title ?> </h3>
                    </div>

                    <div class="row">
                        <div class="col-md-12   mb-3 ">
                            <?php if ($msg = $this->session->flashdata('msg')) :
                                $msg_class = $this->session->flashdata('msg_class') ?>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="alert  <?= $msg_class; ?>"><?= $msg; ?></div>
                                    </div>
                                </div>
                            <?php
                                $this->session->unset_userdata('msg');
                            endif; ?>
                            <div class="card">
                                <div class="card-body">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label class=""> Name</label>
                                                <input class="form-control" required="" type="text" name="name" />
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label class=""> Name</label>
                                                <textarea class="form-control" name="testimonial"></textarea>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                <table id="example" class="display table dataTable table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S No</th>
                                                <th>Name</th>
                                                <th>Testimonial</th>

                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $i = 1;
                                        if (!empty($testimonials)) {
                                            foreach ($testimonials as $row) {
                                        ?>
                                                <tbody>
                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td>
                                                            <?= $row['name'] ?></td>
                                                        <td>
                                                            <?= $row['testimonial'] ?>
                                                            <!-- <img src="<?= base_url() ?>uploads/testimonials/<?= $row['testimonial'] ?>" width="150px"> -->
                                                        </td>

                                                        <td>
                                                            <a href="<?php echo base_url() . 'admin_Dashboard/deletetestimonials/' . $row['id']; ?>" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></a>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                        <?php
                                                $i++;
                                            }
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <?php include('template/footer.php') ?>
                <?php include('template/footer_link.php'); ?>
                </body>

                </html>