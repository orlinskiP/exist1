<section id="block_benefits">
    <div class="container">
        <div class="benefits">
            <div class="benefits__flex" data-aos="fade-right" data-aos-duration="1000">
                <div class="benefits__left">
                    <h2 class="benefits__header">A gdyby tak nie martwić się o nic</h2>
                    <p class="benefits__text"><?= the_field('text') ?></p>
                    <h5 class="benefits__title">Jakie są korzyści ?</h5>
                    <?php
                    
                    $duration = 800;
       
		if (have_rows('elements')) :
			while (have_rows('elements')) : the_row();
      		  $benefitText = get_sub_field('benefitText');
                
			  ?>
                    <div class="benefits__elements" data-aos="fade-right" data-aos-duration="<?= $duration ?>">
                        <?php $duration= $duration+  200;
			  	echo'  <img class="benefits__elementsImage"
			  	src="'.get_template_directory_uri() . "/images/vector.png".'"
                alt="">'; 
                echo '<p class="benefits__elementsText">' . $benefitText . '</p>';
                ?>
                    </div>
                    <?php
			endwhile;
            
		else :
		endif;
        
	?>
      <p class="benefits__star">*w przypadku subskrypcji przez co najmniej rok</p>
                </div>
                <div class="benefits__right" data-aos="zoom-in" data-aos-duration="1000" >
                    <picture class="benefits__imageBox">
                        <source srcset="<?= get_template_directory_uri() . "/images/benefits.webp"; ?>"
                            type="image/webp">
                        <source srcset="<?= get_template_directory_uri() . "/images/benefits.png"; ?>" type="image/png">
                        <img class="benefits__imageBox--image"
                            src="<?= get_template_directory_uri() . "/images/benefits.png"; ?>"
                            alt="<?= the_field('title') ?>">
                    </picture>
                    <h5 class="benefits__info">Szczegóły i ceny pakietów</h5>
                    <div class="benefits__button">
                        <div class="benefits__button--first">
                            <a href="<?php the_field('buttonLink') ?>">Sprawdź</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>