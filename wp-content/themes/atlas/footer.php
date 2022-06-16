<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package atlas
 */

?>
<div class="bottom-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/includes/img/bottom.jpg');">
    <div class="footer-caption text-center">
        <h4>විමසීම්</h4>
        <h4 class="eng"><a target="_blank" href="#"><i class="fa fa-phone"></i></a> <a target="_blank" href="#"><i class="fa fa-whatsapp"></i></a> <a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></h4>
        <hr>
        <div class="row">
            <div class="col-sm-6">
                <a class="terms" href="">Terms & Conditions</a>
            </div>
            <div class="col-sm-6">
                <p class="copyright">Copyright @ <script>
                        document.write(new Date().getFullYear())
                    </script> Atlas by <a href="https://yogeemedia.com/">YogeeMedia</a></p>
            </div>
        </div>

    </div>

</div>

<!-- cards section end -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

<!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- Custom JS -->
<script src="<?php echo get_template_directory_uri(); ?>/includes/js/index.js"></script>
<script>
    function myFunction(x) {
        if (x.matches) { // If media query matches
            document.getElementById('top-banner').style.backgroundImage = "url('<?php echo get_template_directory_uri(); ?>/includes/img/mobile-banner.jpg')";
        } else {
            document.getElementById('top-banner').style.backgroundImage = "url('<?php echo get_template_directory_uri(); ?>/includes/img/desktop-banner.jpg')";
        }
    }

    var x = window.matchMedia("(max-width: 576px)")
    myFunction(x) // Call listener function at run time
    x.addListener(myFunction) // Attach listener function on state changes
</script>


<?php wp_footer(); ?>

</body>

</html>