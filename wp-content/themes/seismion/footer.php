
<footer>
        <div class="footer-container">
            <div class="branding">
                <a href="/">
                    <img src="/wp-content/themes/seismion/images/logo.png" alt="Seismion Audio" class="logo">
                </a>
            </div>
            <div class="navigation">
                <?php wp_nav_menu( array(
                'menu' => 'Header Menu',
                'menu_class' => 'header-nav',
                'container' => 'nav'
                )); ?>
            </div>

        </div>
</footer>

<script src="/wp-content/themes/seismion/js/vendor/jquery-3.8.0.min.js"></script>
<script src="/wp-content/themes/seismion/js/seismion.js"></script>
<?php wp_footer(); ?>
</body>
</html>
