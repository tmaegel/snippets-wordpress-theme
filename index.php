<?php /* Template Name: Posts Page Template */ ?>

<?php include "config.php"; ?>

<!-- header -->
<?php get_header(); ?>

<div id="container">

    <!-- container to store content -->
    <div id="main">

        <!-- Loop -->

        <h1 class="page-title">Posts</h1>

        <?php $year = 0; if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php $act_year = get_the_time('Y'); if ($year == 0) : ?>

            <!-- Begin post-group -->
            <div class="post-group">
                <div class="post-year">
                    <?php echo "$act_year" ?>
                </div>
                <!-- Begin ul -->
                <ul>

            <?php else : if ($year != $act_year) : ?>

                <!-- End ul -->
                </ul>
            <!-- End post-group -->
            </div>

            <!-- Begin post-group -->
            <div class="post-group">
                <div class="post-year">
                    <?php echo "$act_year" ?>
                </div>
                <!-- Begin ul -->
                <ul>

            <?php endif; endif; ?>

                <!-- Post -->
                <li><h2 class="post-title"><a href="<?php the_permalink() ?>"> <?php the_title(); ?> </a></h2></li>

            <?php $year=get_the_time('Y'); ?>

        <?php endwhile; endif; ?>

                <!-- End ul -->
                </ul>
            <!-- End post-group -->
            </div>

        <!-- End Loop -->

    </div><!-- End main -->

</div> <!-- End container -->

<!-- sidebar -->
<?php get_sidebar(); ?>

<!-- footer -->
<?php get_footer(); ?>
