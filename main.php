<?php /* Template Name: Main Page Template */ ?>

<?php include "config.php"; ?>

<?php get_header(); ?>

    <div id="container">

        <div id="main">

            <h1 class="page-title"><?php echo bloginfo('name'); ?></h1>

            <div class="page-content">
                <?php echo bloginfo('description'); ?>
            </div>

        </div><!-- End main -->

    </div> <!-- End container -->

<!-- sidebar -->
<?php get_sidebar(); ?>

<?php get_footer(); ?>
