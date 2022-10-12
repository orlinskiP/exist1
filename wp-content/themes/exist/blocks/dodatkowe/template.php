<section id="dodatkowe <?php echo the_field('block_type') ?>">

<?php 
 $image = get_field('image'); 
 $text = get_field('text');
 $buttons = get_field('block-with-buttons');
 $buttonTextFirst = get_field('button-text-first');
 $buttonLinkFirst = get_field('button-link-first');
 $buttonTextSecond = get_field('button-text-second');
 $buttonLinkSecond = get_field('button-link-second');
 ?>
 
    <div class="container additional <?php echo the_field('block_type') ?>">
        <div class=" additional__content <?= (get_field('reverse') ? 'order-1 order-lg-2' : 'order-2 order-lg-1') ?>" data-aos="fade-up" data-aos-duration="1000">
            <div class="additional__block">
                <h3 class="additional__title "><?php the_field('title') ?></h3>
                <p class="additional__text"><?php the_field('text') ?></p>
            </div>

        </div>
        <div class="additional__other <?= (get_field('reverse') ? 'order-1 order-lg-1' : 'order-2 order-lg-2') ?>">

            <?php if ( !empty( $image ) ): ?>
            <img class="additional__icon " id="<?= the_field('image') ?>" src="<?= $image ?>" alt="<?= $image ?>" data-aos="zoom-in" data-aos-duration="1500">
            <?php endif ?>

            <?php if ( !empty( $buttons ) ): ?>
            <div class="additional__button" data-aos="fade-left" data-aos-duration="800">
                <div class="additional__button--first">
                    <a href="<?php the_field('button-link-first') ?>"><?php the_field('button-text-first') ?></a>
                </div>
                <div class="additional__button--second">
                    <a href="<?php the_field('button-link-second') ?>"><?php the_field('button-text-second') ?></a>
                </div>
                <?php endif ?>
            </div>
        </div>
    </div>

</section>