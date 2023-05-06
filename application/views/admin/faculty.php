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
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2  align-self-center">
                        <a href="<?= base_url('admin_Dashboard/add_faculty') ?>" class="btn btn-primary align-left">Add faculty</a>
                    </div>

                </div>
            </section>
            <section class="page-content container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <?php if ($msg = sessionId('msg')) :
                                    $msg_class = sessionId('msg_class') ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="alert  <?= $msg_class; ?>"><?= $msg; ?></div>
                                        </div>
                                    </div>
                                <?php
                                    $this->session->unset_userdata('msg');
                                endif; ?>
                                <div class="table-responsive">
                                <table id="example" class="display table dataTable table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S No</th>
                                                <th>Date</th>
                                                <th>Name</th>
                                                <th>Designation</th>
                                                <th>Disable</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            if ($mentors) {
                                                foreach ($mentors as $fetchrow) {
                                            ?>
                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo date('m-d-Y H:i:A',strtotime($fetchrow['create_date'])) ?></td>
                                                        <td><img src="<?= base_url() ?>uploads/faculty/<?= $fetchrow['image'] ?>" width="60"> &nbsp; <?= $fetchrow['name']; ?></td>
                                                        <td><?= $fetchrow['designation']; ?></td>
                                                       
                                                        
                                                        <td>
                                                            <a href="<?php echo base_url() . 'admin_Dashboard/disable/' . $fetchrow['mid'] . '/faculty/' . (($fetchrow['is_visible'] == '1') ? '0' : '1'); ?>" class="btn btn-light"><?php if ($fetchrow['is_visible'] == '1') { ?><i class="fas fa-eye"></i><?php } else { ?> <i class="fas fa-eye-slash"></i><?php } ?></a>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo base_url() . 'admin_Dashboard/edit_faculty/' . encryptId($fetchrow['mid']); ?>" class="btn btn-success edit"><i class="fas fa-pencil-alt"></i></a>

                                                            <a href="<?php echo base_url() . 'admin_Dashboard/faculty?BdID=' . encryptId($fetchrow['mid']) . '&img=' . $fetchrow['image'] ?>" class="btn btn-danger" onclick="return confirm('Continue to delete ?')"><i class="fas fa-trash-alt"></i></a>
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
        </div>
        </section>
</div>

<?php include('template/footer.php') ?>
<?php include('template/footer_link.php'); ?>
</body>

</html>