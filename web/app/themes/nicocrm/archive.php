<?php get_header(); ?>


<div class="page-content">
    <main class="inner-content u-clearfix" role="main" itemscope itemprop="mainContentOfPage"
          itemtype="http://schema.org/Blog">

        <?php
        the_archive_title('<h1 class="page-title">', '</h1>');
        the_archive_description('<div class="taxonomy-description">', '</div>');
        ?>

        <?php
        if (have_posts()) {
            ?>
            <div class="posts-list"><?php
            while (have_posts()) {
                the_post();
                get_template_part('post-formats/format-summary');
            }
            ?></div><?php
            bones_page_navi();
        } else {
            get_template_part('notfound');
        }
        ?>

    </main>

    <?php // get_sidebar(); ?>
</div>

<?php get_footer(); ?>
