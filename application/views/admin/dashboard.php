<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('admin/template/header_link'); ?>

<body class="sidebar-fixed">
  <div id="app">
    <?php $this->load->view('admin/template/header'); ?>

    <?php $this->load->view('admin/template/sidebar'); ?>
    <!--START PAGE HEADER -->
    <main>
      <div class="container-fluid site-width">
        <div class="row">
          <div class="col-sm-10  align-self-center">
            <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
              <div class="w-sm-100 mr-auto">
                <h4 class="mb-0">Welcom Admin !</h4>
              </div>
            </div>
          </div>
        </div>
        <section class="page-content container-fluid">
          <div class="row">
            <div class="col-12 col-lg-12  mt-3">
              <div class="row">
                <div class="col-12 col-lg-12">
                  <div class="row">
                    <div class="col-12 col-sm-3 mt-3">
                      <div class="card bg-primary">
                        <a href="<?= base_url('Admin_Dashboard/mentee') ?>">
                          <div class="card-body">
                            <div class='d-flex px-0 px-lg-2 py-2 align-self-center'>
                              <i class="icon-user icons card-liner-icon mt-2 text-white"></i>
                              <div class='card-liner-content'>
                                <h2 class="card-liner-title text-white"><?= $mentee ?></h2>
                                <h6 class="card-liner-subtitle text-white">Registered Mantee</h6>
                              </div>
                            </div>
                            <div id="apex_primary_chart"></div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="col-12 col-sm-3 mt-3">
                      <div class="card">
                        <a href="<?= base_url('Admin_Dashboard/mentors') ?>">
                          <div class="card-body">
                            <div class='d-flex px-0 px-lg-2 py-2 align-self-center'>

                              <div class='card-liner-content'>
                                <h2 class="card-liner-title"><?= $mentors ?></h2>
                                <h6 class="card-liner-subtitle">Total Mentors</h6>
                              </div>
                            </div>

                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="col-12 col-sm-3 mt-3">
                      <div class="card">
                        <a href="<?= base_url('Admin_Dashboard/join_us') ?>">
                          <div class="card-body">
                            <div class='d-flex px-0 px-lg-2 py-2 align-self-center'>

                              <div class='card-liner-content'>
                                <h2 class="card-liner-title"><?= $join_us ?></h2>
                                <h6 class="card-liner-subtitle">Join request as Member/Student Ambassador</h6>
                              </div>
                            </div>

                          </div>
                        </a>
                      </div>
                    </div>

                    <div class="col-12 col-sm-3 mt-3">
                      <div class="card">
                        <a href="<?= base_url('Admin_Dashboard/initiatives') ?>">
                          <div class="card-body">
                            <div class='d-flex px-0 px-lg-2 py-2 align-self-center'>

                              <div class='card-liner-content'>
                                <h2 class="card-liner-title"><?= $initiatives ?></h2>
                                <h6 class="card-liner-subtitle">Our Initiatives</h6>
                              </div>
                            </div>

                          </div>
                        </a>
                      </div>
                    </div>

                    <div class="col-12 col-sm-3  mt-3">
                      <div class="card">
                        <a href="<?= base_url('Admin_Dashboard/banner') ?>">
                          <div class="card-body">
                            <div class='d-flex px-0 px-lg-2 py-2 align-self-center'>

                              <div class='card-liner-content'>
                                <h2 class="card-liner-title"><?= $home_banner ?></h2>
                                <h6 class="card-liner-subtitle">Successful Candidates Banner</h6>
                              </div>
                            </div>
                            <div id="apex_today_sale"></div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="col-12 col-sm-3 mt-3">
                      <div class="card">
                        <a href="<?= base_url('Admin_Dashboard/blogs') ?>">
                          <div class="card-body">
                            <div class='d-flex px-0 px-lg-2 py-2 align-self-center'>

                              <div class='card-liner-content'>
                                <h2 class="card-liner-title"><?= $blog ?></h2>
                                <h6 class="card-liner-subtitle">Total Blogs</h6>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>

                    <div class="col-12 col-sm-3 mt-3">
                      <div class="card">
                        <a href="<?= base_url('Admin_Dashboard/contact_query') ?>">
                          <div class="card-body">
                            <div class='d-flex px-0 px-lg-2 py-2 align-self-center'>

                              <div class='card-liner-content'>
                                <h2 class="card-liner-title"><?= $contact_query ?></h2>
                                <h6 class="card-liner-subtitle">Total Contact queries</h6>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>


                    <div class="col-12 col-sm-3 mt-3">
                      <div class="card">
                        <a href="<?= base_url('Admin_Dashboard/testimonials') ?>">
                          <div class="card-body">
                            <div class='d-flex px-0 px-lg-2 py-2 align-self-center'>

                              <div class='card-liner-content'>
                                <h2 class="card-liner-title"><?= $testimonial ?></h2>
                                <h6 class="card-liner-subtitle">Total Testimonial</h6>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>

                  </div>
                </div>

              </div>
            </div>
          </div>
          <?php $this->load->view('admin/template/footer_link'); ?>
</body>

</html>