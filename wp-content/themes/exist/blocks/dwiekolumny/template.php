<section id="block_dwiekolumny">
    <div class="container">
        <div class="doubleColumn">
            <div class="doubleColumn__left" data-aos="fade-right" data-aos-duration="500">
                <h2 class="doubleColumn__titleLeft"><?php the_field('title')?></h2>
                <p class="doubleColumn__textLeft">
                    <?php the_field('textLeft')?>
                </p>
                <?php
                $duration = 700;
                if (have_rows('elements')) :
			while (have_rows('elements')) : the_row();
      		  $textElement = get_sub_field('textElement');
            
			  ?>
                <div class="doubleColumn__elements" data-aos="fade-right" data-aos-duration="<?= $duration ?>">
                    <?php $duration= $duration+  200;
			  	echo'  <img class="doubleColumn__elementsImage"
			  	src="'.get_template_directory_uri() . "/images/vector.png".'"
                alt="">'; 
                echo '<p class="doubleColumn__textElement">' . $textElement . '</p>';
                ?>
                </div>
                <?php
			endwhile;
            
		else :
		endif;
        ?>
            </div>
            <div class="doubleColumn__right" data-aos="fade-left" data-aos-duration="500">
                <h4 class="doubleColumn__titleRight"><?php the_field('headerRight') ?></h4>
                <h5 class="doubleColumn__textRight"><?php the_field('textRight') ?></h5>
                <div class="doubleColumn__button">
                    <div class="doubleColumn__button--first">
                        <a href="<?php the_field('link') ?>">Bezpłatna wycena</a>
                    </div>
                </div>
            </div>
        </div>


    </div>
   
</section>