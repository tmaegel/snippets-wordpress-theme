<?php include "config.php"; ?>

<div id="footerbar">
    <div id="navbar">
        <?php
            $pages = get_pages( array( 'child_of' => '0', 'sort_column' => 'menu_order', 'sort_order' => 'asc' ) );
            foreach ( $pages as $page ) :
        ?>
        <a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo "$page->post_title"; ?></a>
        <?php endforeach; ?>
    </div>
    <div id="socialbar">
        <!-- echo bloginfo('atom_url'); -->
        <a href="<?php echo bloginfo('rss2_url'); ?>"><span><svg class="icon icon-rss"><use xlink:href="#icon-rss"></use></svg><span class="mls"></span></span></a>
        <a href="<?php echo $github_link; ?>"><span><svg class="icon icon-github"><use xlink:href="#icon-github"></use></svg><span class="mls"></span></span></a>
    </div>
</div>
