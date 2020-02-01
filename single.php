<?php /* Template Name: Single Post Page Template */ ?>

<?php include "config.php"; ?>

<?php get_header(); ?>

    <div id="container">

        <div id="main">

        <!-- Loop -->

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="page-title">
                <h1 class="post-heading"><?php the_title(); ?></h1>
            </div>

            <div class="post-date">
                <?php the_time('d. F Y'); ?>, <?php the_time('H:i'); ?>
            </div>

            <div class="page-content">
                <?php the_content(); ?>
            </div>

            <hr class="post-end">

            <div class="post-footer">
                <?php $tags = get_the_tags(); if ($tags) : foreach ($tags as $tag) : $tag_link = get_tag_link($tag->term_id); ?>
                    <a href="<?php echo "$tag_link"; ?>"><?php echo "#$tag->name"; ?></a>
                <?php endforeach; endif; ?>
            </div>

        <?php endwhile; ?>

        <?php endif; ?>

        <!-- End Loop -->

        </div><!-- End main -->

    </div> <!-- End container -->

<!-- sidebar -->
<?php get_sidebar(); ?>

<?php get_footer(); ?>
