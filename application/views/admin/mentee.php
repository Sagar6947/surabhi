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
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                     <th>Passowrd</th>
                                                    <th>Graduate</th>
                                                    <th>Graduation Year</th>
                                                    <th>College</th>
                                                    <th>Degree</th>
                                                    <th>Graduation semester</th>
                                                    <th>Linkedin</th>
                                                     <th>Why do you think you deserve free mentorship </th>
                                                    <th>Mentorship looking for</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $i = 1;
                                            if (!empty($mentee)) {
                                                foreach ($mentee as $row) {
                                            ?>
                                                    <tbody>
                                                        <tr>
                                                            <td><?php echo $i; ?></td>
                                                            <td><?php echo $row['name']; ?></td>
                                                            <td><?php echo $row['email']; ?></td>
                                                            <td><?php echo $row['number']; ?></td>
                                                            <td><?php echo $row['password']; ?></td>
                                                            <td><?= (($row['graduate'] == '1') ? 'Yes' : 'No' ) ?></td>
                                                            <td><?php echo $row['graduation_year']; ?></td>
                                                            <td><?php echo $row['college']; ?></td>
                                                            <td><?php echo $row['degree']; ?></td>
                                                            <td><?php echo $row['semester']; ?></td>
                                                            <td><?php echo $row['linkedin']; ?></td>
                                                            <td><?php echo wordwrap($row['free_mentorship'],200 , '<br>'); ?></td>
                                                             <td><?php echo wordwrap($row['mentorship'],200 , '<br>'); ?></td>
                                                            <td>
                                                                <a href="<?php echo base_url() . 'admin_Dashboard/mentee?BdID=' . encryptId($row['id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')"><i class="fas fa-trash-alt"></i></a>
                                                            </td>

                                                        </tr>
                                                    </tbody>
                                            <?php
                                                    $i++;
                                                }
                                            } else {
                                                // echo  'No mentee query exists';
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