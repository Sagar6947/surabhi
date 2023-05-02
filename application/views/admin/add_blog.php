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

                    <div class="col-sm-2  align-self-center text-right">
                        <a href="<?= base_url('admin_Dashboard/blogs') ?>" class="btn btn-primary align-left">Blog List</a>
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
                                                    <label class="">Title</label>
                                                    <input class="form-control" type="text" name="title">
                                                </div>
                                                <div class="form-group">
                                                    <label class="">Banner type</label>
                                                    <select name="image_type" id="type" class="form-control">
                                                        <option value="">Choose</option>
                                                        <option value="0">Image</option>
                                                        <option value="1">Video</option>

                                                    </select>
                                                </div>
                                                <div class="form-group" id="image">
                                                    <label class="">Image</label>
                                                    <input class="form-control pd-r-80" type="file" name="img" accept="image/png, image/gif, image/jpeg">

                                                </div>

                                                <div class="form-group" id="video">
                                                    <label class="">Video</label>
                                                    <input class="form-control" type="text" name="video">
                                                </div>

                                                <?php if ($tag == 'initiatives') { ?>

                                                    <label class="">Form Link</label>
                                                    <input class="form-control" type="text" name="form_link">
                                                <?php } ?>


                                                <div class="form-group">
                                                    <label class="">Description</label>
                                                    <div class="pos-relative">
                                                        <textarea class="form-control" id="editor" name="blog_body"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="">Meta Description</label>
                                                    <input class="form-control" type="text" name="meta_desc">
                                                </div>
                                                <div class="form-group">
                                                    <label class="">Meta Keyword</label>
                                                    <input class="form-control" type="text" name="meta_keyword">
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
<script type="text/javascript">
    $(function() {
        $('#image').hide();
        $('#video').hide();

        $('#type').change(function() {
            if ($('#type').val() == 0) {
                $('#image').show();
                $('#video').hide();
            } else if ($('#type').val() == 1) {
                $('#video').show();
                $('#image').hide();
            } else {
                $('#image').hide();
                $('#video').hide();
            }
        });
    });
</script>