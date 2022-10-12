<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package basetheme
 */

get_header();
?>

<div class="blog">

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="row">

                    <?php
                    if (have_posts()) :


                        while (have_posts()) :
                            the_post();
                            ?>
                    <div class="col-sm-5 pl-0 offset-md-1 article-container">
                      
                        <?php
                                
                                get_template_part('template-parts/content', get_post_type());
                                ?>

                        <p></p>
                    </div>
                    <?php
                        endwhile;

                        echo "<div class='col-12 pagination'><div>";
                        echo paginate_links();
                        echo "</div></div>";

                    else : get_template_part('template-parts/content', 'none');
                    endif;
                    ?>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->
</div>

<?php

get_footer();
?>