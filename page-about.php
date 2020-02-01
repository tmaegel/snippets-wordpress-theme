<?php /* Template Name: About Page Template */ ?>

<?php include "config.php"; ?>

<?php get_header(); ?>

    <div id="container">

        <div id="main">

            <?php $about = get_page_by_path( '/about/', OBJECT, 'page' ); ?>

            <h1 class="page-title">
                <?php echo get_the_title( $post->post_parent ); ?>
            </h1>

            <div class="page-content">
                <?php
                    $about = get_page_by_path( '/about/', OBJECT, 'page' );
                    echo $content;
                ?>
            </div>

        </div><!-- End main -->

    </div> <!-- End container -->

<!-- sidebar -->
<?php get_sidebar(); ?>

<?php get_footer(); ?>
