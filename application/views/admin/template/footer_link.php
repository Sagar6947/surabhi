<script src="<?= base_url() ?>assets/admin/vendors/jquery/jquery-3.3.1.min.js"></script>
<script src="<?= base_url() ?>assets/admin/vendors/jquery-ui/jquery-ui.min.js"></script>
<script src="<?= base_url() ?>assets/admin/vendors/moment/moment.js"></script>
<script src="<?= base_url() ?>assets/admin/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/admin/vendors/slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?= base_url() ?>assets/admin/js/app.js"></script>

<script src="<?= base_url() ?>assets/admin/vendors/datatable/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/admin/vendors/datatable/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/admin/vendors/datatable/jszip/jszip.min.js"></script>
<script src="<?= base_url() ?>assets/admin/vendors/datatable/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url() ?>assets/admin/vendors/datatable/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url() ?>assets/admin/vendors/datatable/buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>assets/admin/vendors/datatable/buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/admin/vendors/datatable/buttons/js/buttons.colVis.min.js"></script>
<script src="<?= base_url() ?>assets/admin/vendors/datatable/buttons/js/buttons.flash.min.js"></script>
<script src="<?= base_url() ?>assets/admin/vendors/datatable/buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>assets/admin/vendors/datatable/buttons/js/buttons.print.min.js"></script>

<script src="<?= base_url() ?>assets/admin/js/datatable.script.js"></script>
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(200, 0).slideUp(200, function() {
            $(this).remove();
        });
    }, 4000);
</script>
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
<script>
    CKEDITOR.replace('editor', {
        height: 400,
        baseFloatZIndex: 10005,
        removeButtons: 'PasteFromWord'
    });
</script>