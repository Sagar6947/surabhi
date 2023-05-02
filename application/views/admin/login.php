<?php include('template/header_link.php'); ?>
<div class="container">
    <div class="row vh-100 justify-content-between align-items-center">
        <div class="col-12">

            <?php
            if ($this->session->has_userdata('login_error')) {
                echo $this->session->userdata('login_error');
                $this->session->unset_userdata('login_error');
            }
            ?>
            <form action="<?= base_url('Admin/adminlogin') ?>" method="POST" class="row row-eq-height lockscreen  mt-5 mb-5">
                <div class="lock-image col-12 col-sm-5"></div>
                <div class="login-form col-12 col-sm-7">
                    <div class="form-group mb-3"><h2><img src="<?= base_url() ?>assets/logo.png" width="80px"><b>Admin</b></h2></div>
                    <div class="form-group mb-3">
                        <label for="emailaddress">Username</label>
                        <input class="form-control" type="email" name="username" id="emailaddress" required="" placeholder="Enter your email">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" required="" id="password" placeholder="Enter your password">
                    </div>
                    <div class="form-group mb-0">
                        <button class="btn btn-primary" type="submit"> Log In </button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
<?php include('template/footer_link.php'); ?>

</body>

</html>