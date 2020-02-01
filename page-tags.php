<?php /* Template Name: Tags Page Template */ ?>

<?php include "config.php"; ?>

<?php get_header(); ?>

    <div id="container">

        <div id="main">

            <h1 class="page-title">Tags</h1>

            <div class="page-content">
                <?php
                    $tags = get_tags();
                    $html = '<div class="page-tags">';
                    foreach ( $tags as $tag ) {
                        $tag_link = get_tag_link( $tag->term_id );
                        $html .= "<a href='{$tag_link}'>#{$tag->name}</a>";
                        $html .= " ";
                    }
                    $html .= '</div>';
                    echo $html;
                ?>
            </div>

        </div><!-- End main -->

    </div> <!-- End container -->

<!-- sidebar -->
<?php get_sidebar(); ?>

<?php get_footer(); ?>
