<?php
/*
 * This is the default post format.
 *
 * So basically this is a regular post. if you don't want to use post formats,
 * you can just copy ths stuff in here and replace the post format thing in
 * single.php.
 *
 * The other formats are SUPER basic so you can style them as you like.
 *
 * Again, If you want to remove post formats, just delete the post-formats
 * folder and replace the function below with the contents of the "format.php" file.
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemprop="blogPost"
         itemtype="http://schema.org/BlogPosting">

    <header class="article-header entry-header">

        <h1 class="entry-title single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>

        <p class="byline entry-meta vcard">
            <?php printf('%1$s %2$s',
                /* the time the post was published */
                '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                /* the author of the post */
                '<span class="by">' . __('by', 'bonestheme') . '</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link(get_the_author_meta('ID')) . '</span>'
            ); ?>
            -
                            <span class="comment-count">
                                <?php comments_number(__('<span>No</span> Comments', 'bonestheme'), __('<span>One</span> Comment', 'bonestheme'), __('<span>%</span> Comments', 'bonestheme')); ?>
                            </span>
            -
                            <span class="category">
                                <?php the_category(', ') ?>
                            </span>
        </p>

    </header> <?php // end article header ?>

    <section class="entry-content" itemprop="articleBody">
        <?php
        // the content (pretty self explanatory huh)
        the_content();
        ?>
    </section> <?php // end article section ?>

    <footer class="article-footer">

        <?php the_tags('<p class="tags"><span class="tags-title">' . __('Tags:', 'bonestheme') . '</span> ', ', ', '</p>'); ?>

    </footer> <?php // end article footer ?>

    <?php comments_template(); ?>

</article> <?php // end article ?>
