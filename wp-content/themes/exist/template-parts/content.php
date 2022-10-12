<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package exist
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="flex">

     
        <header class="entry-header">
            <?php
        if (is_singular()) :
            the_title('<h1 class="entry-title">', '</h1>');
        else :
            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        endif;

        if ('post' === get_post_type()) :
            ?>
            <div class="entry-meta">
                <?php
                exist_posted_on();
                exist_posted_by();
                ?>
            </div><!-- .entry-meta -->
            <?php endif; ?>
        </header><!-- .entry-header -->


        <p class="entry-more"><?php echo '<a href="' . esc_url(get_permalink()) . '" rel="bookmark">Przeczytaj wpis </a>'?></p>
    </div>
    <?php exist_post_thumbnail(); ?>


    <div class="entry-content">
        <?php
        the_content(sprintf(
                    wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                __('Czytaj dalej <span class="screen-reader-text"> "%s"</span>', 'exist'),
                        array(
                    'span' => array(
                        'class' => array(),
                    ),
                )
                    ),
                    get_the_title()
                ));

        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'exist'),
            'after'  => '</div>',
        ));
        ?>

    </div>



</article><!-- #post-<?php the_ID(); ?> -->