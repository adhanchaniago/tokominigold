</div>
<!---Container Fluid-->
</div>
<!-- Footer -->
<footer class="sticky-footer bg-white mt-3">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Application Version 1.0
            </span>
        </div>
    </div>
</footer>
<!-- Footer -->
</div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<script src="<?php echo base_url('assets/admin/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/admin/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/admin/js/myscript.min.js') ?>"></script>
<script src="<?php echo base_url('assets/admin/vendor/chart.js/Chart.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/admin/js/demo/chart-area-demo.js'); ?>"></script>

<!-- SUMMERNOTE -->
<link href="<?php echo base_url('assets/admin/js/summernote/summernote-lite.min.css'); ?>" rel="stylesheet">
<script src="<?php echo base_url('assets/admin/js/summernote/summernote-lite.min.js'); ?>"></script>

<script>
    $('#summernote').summernote({
        placeholder: 'Deskripsi Produk ..',
        tabsize: 2,
        height: 130,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
</script>




</body>

</html>