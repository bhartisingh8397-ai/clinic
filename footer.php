<footer>
    <div class="container">
        <div class="footer-grid">
            <div class="footer-col">

                <h3 class="footer-logo">DR. PRAVEEN <span class="accent-text">LAKRA</span></h3>
                <p>Advanced dermatological care ensuring your skin health and aesthetic goals are met with 15+ years of
                    clinical expertise.</p>
                <div class="social-links">
                    <a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i> Instagram</a>
                    <a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i> Facebook</a>
                </div>
            </div>
            <div class="footer-col">
                <h3>Our Services</h3>
                <ul>
                    <li><a href="#">Cosmetic Dermatology</a></li>
                    <li><a href="#">Clinical Dermatology</a></li>
                    <li><a href="#">Laser Treatments</a></li>
                    <li><a href="#">Hair Restoration</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/about/')); ?>">About Us</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
                    <li><a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a></li>
                    <li><a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer-col" id="footer-contact">
                <h3>Contact Us</h3>
                <p><i class="fa-solid fa-envelope"></i> info@drpraveenlakra.com</p>
                <p><i class="fa-solid fa-phone"></i> +91 98765 43210</p>
                <p><i class="fa-solid fa-location-dot"></i> 3rd Floor, Building B, Sector 14, MG Road, Gurgaon</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Dr. Praveen Lakra Skin Clinic | All Rights Reserved</p>
        </div>
    </div>
</footer>

<script>
    (function () {
        var btn = document.querySelector('.menu-toggle');
        var nav = document.querySelector('header nav');
        if (btn && nav) {
            btn.addEventListener('click', function () {
                btn.classList.toggle('active');
                nav.classList.toggle('open');
            });
            nav.querySelectorAll('a').forEach(function (a) {
                a.addEventListener('click', function () {
                    btn.classList.remove('active');
                    nav.classList.remove('open');
                });
            });
        }
    })();
</script>
<?php wp_footer(); ?>
</body>

</html>