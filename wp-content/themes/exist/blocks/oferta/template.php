<section id="block_offer">

    <div class="container">
        <h2 class="offer__title"><?php the_field('header') ?></h2>
        <div class="offer">
            <div class="offer__box <?php the_field('title') ?>" data-aos="zoom-in" data-aos-duration="500">
                <div class="offer__header">
                    <h4><?php the_field('title') ?></h4>
                </div>

                <?php
                    if (have_rows('elements')) :
                        while (have_rows('elements')) : the_row();                    
                            $text = get_sub_field('text');
                    ?>

                <div class="offer__element">
                    <?php
                            echo '<p class="offer__text">' . $text . '</p>';
                    ?>
                </div>

                <?php
                        endwhile;
                    else :
                    endif;
                    ?>
                <p class="offer__price"><?php the_field('price') ?></p>
                <div class="offer__button">
                    <div class="offer__button--first">
                        <a href="<?php the_field('link_subpage') ?>">Wybierz</a>
                    </div>

                </div>


            </div>
            <div class="offer__box <?php the_field('title2') ?>" data-aos="zoom-in" data-aos-duration="1500">
                <div class="offer__header">
                    <h4><?php the_field('title2') ?></h4>
                </div>

                <?php
                    if (have_rows('elements2')) :
                        while (have_rows('elements2')) : the_row();
                            $text = get_sub_field('text2');
                    ?>

                <div class="offer__element">
                    <?php
                            echo '<p class="offer__text">' . $text . '</p>';
                    ?>
                </div>

                <?php
                        endwhile;
                    else :
                    endif;
                    ?>
                <p class="offer__price"><?php the_field('price2') ?></p>
                <div class="offer__button">
                    <div class="offer__button--first">
                        <a href="<?php the_field('link_subpage2') ?>">Wybierz</a>
                    </div>

                </div>
            </div>
            <div class="offer__box <?php the_field('title3') ?>" data-aos="zoom-in" data-aos-duration="1000">
                <div class="offer__header">
                    <h4><?php the_field('title3') ?></h4>
                </div>

                <?php
                    if (have_rows('elements3')) :
                        while (have_rows('elements3')) : the_row();                       
                            $text = get_sub_field('text3');
                    ?>

                <div class="offer__element">
                    <?php
                        echo '<p class="offer__text">' . $text . '</p>';
                    ?>
                </div>

                <?php
                        endwhile;
                    else :
                    endif;
                    ?>
                <p class="offer__price"><?php the_field('price3') ?></p>
                <div class="offer__button">
                    <div class="offer__button--first">
                        <a href="<?php the_field('link_subpage3') ?>">Wybierz</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>