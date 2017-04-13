<?php
/**
 * The template for displaying all single posts.
 *
 * @package storefront
 */
get_header(); ?>
    <div class="wrapper" id="single-wrapper">
        <div id="content" class="container">
            <div class="row">
                <div id="primary" class="blog-container col-md-12">
                    <div class="spacer-2"></div>
                    <main id="main" class="site-main" role="main">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'loop-templates/content', 'single' ); ?>
                            <?php
                            // If comments are open or we have at least one comment, load up the comment template
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                            ?>
                        <?php endwhile; // end of the loop. ?>
                    </main>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>