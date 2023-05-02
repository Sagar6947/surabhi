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

                                        <div class="col-md-12 col-lg-12 col-xl-12">
                                            <div class="">

                                                <div class="form-group">
                                                    <label class="">Add Title</label>
                                                    <div class="pos-relative">
                                                        <input class="form-control pd-r-80" type="text" name="title">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="">Add PDF</label>
                                                    <div class="pos-relative">
                                                        <input class="form-control pd-r-80" type="file" name="pdffile">

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


            <section class="page-content container-fluid">
                <div class="row">
                    <div class="col-md-12   mb-3 mt-5 ">
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
                                                    <th>Title</th>
                                                    <th>Image</th>
                                                    <th>Edit</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                if ($banner) {
                                                    foreach ($banner as $row) {
                                                ?>

                                                        <tr>
                                                            <td><?php echo $i; ?></td>

                                                            <td><?php echo $row['title']; ?></td>
                                                            <td>
                                                                <a href="<?= base_url('uploads/newsletter/') . $row['pdffile'] ?>" target="_blank" class="btn_service">Read More</a>


                                                            </td>
                                                            <td>
                                                                <a href="<?php echo base_url() . 'admin_Dashboard/newsletter_pdf?BdID=' . encryptId($row['id']); ?>&&img=<?= $row['pdffile'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')"><i class="fas fa-trash-alt"></i></a>
                                                            </td>

                                                        </tr>

                                                <?php
                                                        $i++;
                                                    }
                                                }
                                                ?>
                                            </tbody>

                                        </table>
                                    </div>
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