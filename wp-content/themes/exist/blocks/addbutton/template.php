<section id="block_addbutton">
<?php
 $mainText = get_field('mainText'); 
?>
    <div class="container">
        <div class="addbutton">
        <?php if ( !empty( $mainText ) ): ?>
            <h3 class="addbutton__title" data-aos="fade-up" data-aos-duration="500"><?php $mainText ?></h3>
            <?php endif ?>
            <div class="addbutton__button">
                <div class="addbutton__button--first" data-aos="fade-up" data-aos-duration="1000">
                    <a href="<?php the_field('buttonLink') ?>"><?php the_field('buttonText') ?></a>
                </div>
            </div>
        </div>

    </div>

</section>