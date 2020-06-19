<?php
$meta      = $this->meta_model->get_meta();

?>






<section class="bantuan py-md-3 mt-md-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-light"><span style="font-size:35px;font-weight:700;">Butuh Bantuan ? Hubungi Kami</span></div>
            <div class="col-md-4 text-light"><span style="font-size:30px;font-weight:700;"><i class="fas fa-phone"></i> <?php echo $meta->telepon; ?></span></div>
        </div>
    </div>
</section>
<footer class="pt-4 pt-md-5 pb-md-5 border-top bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md">
                <a href="<?php echo base_url(); ?>"><img class="mb-2" src="<?php echo base_url('assets/img/logo/' . $meta->logo) ?>" alt="" width="250"></a>
                <span style="font-size:18px;"><br>
                    <i class="fa fa-phone"></i> <?php echo $meta->telepon ?><br>
                    <i class="fa fa-envelope"></i> <?php echo $meta->email ?>
                </span>
            </div>
            <div class="col-6 col-md ml-md-5">
                <h5>Produk Utama</h5>
                <ul class="list-unstyled text-small">

                    <li><a class="text-muted" href="#sec1">MiniGold</a></li>
                    <li><a class="text-muted" href="#sec2">Antam</a></li>

                </ul>
            </div>
            <div class="col-5 col-md">
                <h5>Halaman</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="<?php echo base_url('about') ?>">About Us</a></li>
                    <li><a class="text-muted" href="<?php echo base_url('contact') ?>">Contact Us</a></li>
                    <li><a class="text-muted" href="<?php echo base_url('products') ?>">Produk</a></li>
                    <li><a class="text-muted" href="<?php echo base_url('berita') ?>">Berita</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
              <h5>Social Media</h5>
              <ul class="social-network social-circle">
                        <li><a href="<?php echo $meta->facebook;?>" class="icoFacebook" title="Facebook"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fab fa-youtube"></i></a></li>
                    </ul>
            </div>
        </div>
    </div>
</footer>
<div class="credit text-center text-light py-md-3">Copyright &copy; <?php echo date('Y') ?> - <?php echo $meta->title ?> - <?php echo $meta->tagline ?></div>
<!-- Load javascript Jquery -->
<script src="<?php echo base_url() ?>assets/template/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/template/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/template/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url() ?>assets/template/js/chosen.jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/template/assets/js/vendor/popper.min.js"></script>
<script src="<?php echo base_url() ?>assets/template/js/moment-with-locales.js"></script>
<script src="<?php echo base_url() ?>assets/template/js/bootstrap-datetimepicker.js"></script>
<script src="<?php echo base_url() ?>assets/template/js/timepicker.js"></script>


<script>
    $(function() {
        $('#id_tanggal').datetimepicker({
            locale: 'id',
            format: 'D MMMM YYYY',
            minDate: new Date(),
        });
    });
    $('.form-control-chosen').chosen({});
    $('#timepicker').timepicker();
</script>



<script type="text/javascript">
    $('#menu-utama').affix({
        offset: {
            top: 500
        }
    })
</script>

<!-- Google Analitycs -->
<?php echo $meta->google_analytics; ?>
<!-- End Google Analitycs -->




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


<script>
$(document).on('click', '.number-spinner button', function () {    
	var btn = $(this),
		oldValue = btn.closest('.number-spinner').find('input').val().trim(),
		newVal = 0;
	
	if (btn.attr('data-dir') == 'up') {
		newVal = parseInt(oldValue) + 1;
	} else {
		if (oldValue > 1) {
			newVal = parseInt(oldValue) - 1;
		} else {
			newVal = 1;
		}
	}
	btn.closest('.number-spinner').find('input').val(newVal);
});
</script>






</body>

</html>
