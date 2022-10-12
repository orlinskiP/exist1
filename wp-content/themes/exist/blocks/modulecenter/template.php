<section id="block_modulecenter">
    <div class="blockText__line"></div>
    <div class="container blockText <?= (get_field('title') ? 'blockText--text' : '') ?> " data-aos="fade-up" data-aos-duration="1500" >
        <!-- <div>
            <h2 class="blockText__title"> <?php the_field("title") ?></h2>
        </div> -->
            <p class="blockText__content"><?php the_field("title")?></p>
    </div>

    </div>
</section>