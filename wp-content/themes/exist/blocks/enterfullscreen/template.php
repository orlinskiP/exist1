<section class="block_enterfullscreen" id="<?php echo the_field('id')?>" >
    <div class="container enterfullscreen">
        <div class="enterfullscreen__content"data-aos="fade-right" data-aos-duration="1000" >
            <h1 class="enterfullscreen__header"><?php the_field('header') ?></h1>
            <p class="enterfullscreen__text"><?php the_field('text') ?></p>
            <div class="enterfullscreen__button">
                <div class="enterfullscreen__button--first">
                    <a href="<?php the_field('button-first-link') ?>"><?php the_field('button-first-text') ?></a>
                </div>
                <div class="enterfullscreen__button--second">
                    <a href="<?php the_field('button-second-link') ?>"><?php the_field('button-second-text') ?></a>
                </div>
            </div>
        </div>
        <div class="enterfullscreen__image" data-aos="fade-left" data-aos-duration="1000">
            <img src="<?php the_field('image') ?>" alt="<?php the_field('header') ?>">
        </div>
    </div>

</section>