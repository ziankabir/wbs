<script src="plugins/jquery/jquery-1.11.3.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/jquery-ui-1114/jquery-ui.js"></script>
<script src="plugins/owlcarousel-2/owl.carousel.min.js"></script>
<script src="plugins/jquery-appear/jquery.appear.js"></script>
<script src="plugins/jquery-countTo/jquery.countTo.js"></script>
<script src="plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="plugins/jquery.mixitup.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="plugins/fancyapps-fancyBox/source/jquery.fancybox.pack.js"></script>
<script src="plugins/typedjs-master/dist/typed.min.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function () {
        var offset = 220;
        var duration = 500;
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > offset) {
                jQuery('.back-to-top').fadeIn(duration);
            } else {
                jQuery('.back-to-top').fadeOut(duration);
            }
        });

        jQuery('.back-to-top').click(function (event) {
            event.preventDefault();
            jQuery('html, body').animate({scrollTop: 0}, duration);
            return false;
        })
    });
</script>