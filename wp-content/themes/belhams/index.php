<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package storefront
 */

get_header(); ?>
    <div class="wrapper" id="wrapper-index">
        <div id="content" class="container">
            <div class="row">
                <div class="spacer-2"></div>
                <div id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-sm-8<?php else : ?>col-md-12<?php endif; ?>">
                    <main id="main" class="site-main" role="main">
                        <?php if ( have_posts() ) :

                            get_template_part( 'loop' );

                        else :

                            get_template_part( 'content', 'none' );

                        endif; ?>
                    </main><!-- #main -->
                </div><!-- #primary -->
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
<?php
get_footer();