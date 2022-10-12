<section id="block_table">
    <div class="container">
        <div class="table">
            <div class="table__top">
                <div class="table__elements"></div>
                <div class="table__elements">Pakiet Basic</div>
                <div class="table__elements">Opłata za hosting</div>
                <div class="table__elements">SUMA</div>
            </div>
            <?php
                if (have_rows('elements')) :

                    while (have_rows('elements')) : the_row();

                        $times = get_sub_field('times');
                        $first = get_sub_field('firstTrening');
                        $second = get_sub_field('secondTrening');
                        $third = get_sub_field('thirdTrening');
                    ?>

            <div class="table__line">
                <?php
                        echo '<div class="table__price table__price--times"><p>'.$times.'</p></div>';
                        echo '<div class="table__price table__price--price"><p>'.$first.'</p></div>';
                        echo '<div class="table__price table__price--price"><p>'.$second.'</p></div>';
                        echo '<div class="table__price table__price--price table__price--last"><p>'.$third.'</p></div>';
                ?>
            </div>
            <?php
                    endwhile;
                    else :
                endif;
                ?>
        </div>
        <p class="table__star"><?php the_field('textStar') ?></p>

        <div class="table__button">
                <div class="table__button--first" data-aos="fade-up" data-aos-duration="1000">
                    <a href="<?php the_field('link') ?>">Wybierz pakiet</a>
                </div>
            </div>
    </div>
</section>