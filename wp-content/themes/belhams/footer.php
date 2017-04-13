<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/12/2017
 * Time: 9:21 AM
 */
?>
<section id="footer">
    <div class="container">
        <div class="container-margin">
            <div class="row">
                <div class="col-xs-12 col-md-4 links-wrapper">
                    <h4>Links</h4>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-menu',
                            'fallback_cb' => '',
                            'menu_id' => 'footer-menu'
                        )
                    );
                    ?>
                </div>
                <div class="col-xs-12 col-md-4 brands-wrapper">
                    <h4>Brands</h4>
                    <?=brands_menu()?>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="social-media-wrapper">
                        <h4>Follow us</h4>
                        <?=social_media_menu()?>
                        <div class="contacts-wrapper">
                            <a href="tel:02102295582">+64 210 229 5582</a>
                            <a href="mailto:belinda@belhams.co.nz">belinda@belhams.co.nz</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-12 copyright-wrapper">
                    &copy; Belhams Interior <?=date('Y')?>. Site by <a href="http://www.designgarage.co.nz" target="_blank">Design Garage</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php wp_footer(); ?>
</div>
</body>
</html>
