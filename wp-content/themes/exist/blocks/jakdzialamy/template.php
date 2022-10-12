<section id="block_jakdzialamy">
    <div class="container">
        <div class="operate">
           
            <div class="operate__top" data-aos="fade-up" data-aos-duration="1000">
                <p class="operate__subtitle"><?php the_field('subtitle') ?></p>
            </div>
            <div class="operate__content">
                <div class="operate__left">
                    <div class="operate__box operate__first" data-aos="fade-right" data-aos-duration="800">
                        <p class="operate__number">1</p>
                        <h3 class="operate__header"><?php the_field('header_1') ?></h3>
                        <div class="operate__text"><?php the_field('text_1') ?></div>
                    </div>
                    <div class="operate__box operate__second" data-aos="fade-right" data-aos-duration="1400">
                        <p class="operate__number">2</p>
                        <h3 class="operate__header"><?php the_field('header_2') ?></h3>
                        <div class="operate__text"><?php the_field('text_2') ?></div>
                    </div>
                    <div class="operate__box operate__third" data-aos="fade-right" data-aos-duration="2000">
                        <p class="operate__number">3</p>
                        <h3 class="operate__header"><?php the_field('header_3') ?></h3>
                        <div class="operate__text"><?php the_field('text_3') ?></div>
                    </div>
                </div>
                <div class="operate__center" data-aos="zoom-in" data-aos-duration="1000">
                <picture class="operate__imageBox">
                            <source srcset="<?= get_template_directory_uri() . "/images/jakdzialamy.webp"; ?>" type="image/webp">
                            <source srcset="<?= get_template_directory_uri() . "/images/jakdzialamy.png"; ?>" type="image/png">
                            <img class="operate__imageBox--image"
                                src="<?= get_template_directory_uri() . "/images/jakdzialamy.png"; ?>" alt="jak działamy">
                        </picture>
                </div>
                <div class="operate__right">
                    <div class="operate__box operate__fourth" data-aos="fade-left" data-aos-duration="800">
                        <p class="operate__number">4</p>
                        <h3 class="operate__header"><?php the_field('header_4') ?></h3>
                        <div class="operate__text"><?php the_field('text_4') ?></div>
                    </div>
                    <div class="operate__box operate__fifth" data-aos="fade-left" data-aos-duration="1400">
                        <p class="operate__number">5</p>
                        <h3 class="operate__header"><?php the_field('header_5') ?></h3>
                        <div class="operate__text"><?php the_field('text_5') ?></div>
                    </div>
                    <div class="operate__box operate__sixth" data-aos="fade-left" data-aos-duration="2000">
                        <p class="operate__number">6</p>
                        <h3 class="operate__header"><?php the_field('header_6') ?></h3>
                        <div class="operate__text"><?php the_field('text_6') ?></div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>