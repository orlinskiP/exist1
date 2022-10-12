<section class="block_text" id="<?php echo the_field('id')?>" data-aos="zoom-out" data-aos-duration="1000">
    <?php 
        $title = get_field('title'); 
        $text = get_field('text');
    ?>
    <div class="blockText__line"></div>
    <div class="container blockText <?= (get_field('text') ? 'blockText--text' : '') ?> " data-aos="fade-up" data-aos-duration="1500" >
        <!-- <div>
            <h2 class="blockText__title"> <?php the_field("title") ?></h2>
        </div> -->
        <?php if ( !empty( $text ) ): ?>
            <p class="blockText__content"><?php the_field("text")?></p>
        <?php endif ?>
    </div>
</section>