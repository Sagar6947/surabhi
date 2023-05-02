<?php include('template/header_link.php'); ?>
<div class="holder">


    <?php include('template/header.php'); ?>
    <?php $this->load->view('admin/template/sidebar'); ?>
    <main>
        <div class="container-fluid site-width">
            <div class="row">
                <div class="col-sm-10  align-self-center">
                    <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                        <div class="w-sm-100 mr-auto">
                            <h4 class="mb-0"><?= $title ?></h4>
                        </div>
                    </div>
                </div>


            </div>


            <section class="page-content container-fluid">
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
                        <div class="col-lg-12 col-xl-12">
                            <div class="card">

                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table id="example" class="display table dataTable table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>S No</th>
                                                    <th>Email</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $i = 1;
                                            if (!empty($contact)) {
                                                foreach ($contact as $row) {
                                            ?>
                                                    <tbody>
                                                        <tr>
                                                            <td><?php echo $i; ?></td>

                                                            <td><?php echo $row['email']; ?></td>

                                                            <td>
                                                                <a href="<?php echo base_url() . 'admin_Dashboard/newsletter?BdID=' . encryptId($row['id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')"><i class="fas fa-trash-alt"></i></a>
                                                            </td>

                                                        </tr>
                                                    </tbody>
                                            <?php
                                                    $i++;
                                                }
                                            } else {
                                                // echo  'No contact query exists';
                                            }
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>

        <?php include('template/footer.php') ?>
        <?php include('template/footer_link.php'); ?>
        </body>

        </html>