<section id="block_elements">

    <div class="container ">
        <h3 class="element__header" data-aos="fade-right" data-aos-duration="1000">Co zawiera oferta?</h3>
        <div class="element__box">

            <?php
            $duration = 500;
if (have_rows('elements')) :

	while (have_rows('elements')) : the_row();

        $icon = get_sub_field('icon');
		$title = get_sub_field('title');
        $text = get_sub_field('text');
        $duration= $duration+  250;
?>

            <div class="element" data-aos="fade-up" data-aos-duration="<?= $duration ?>">
                <?php
                     echo '<img class="element__icon" src="' . $icon . '"/>';
                   
		echo '<p class="element__title">' . $title . '</p>';
        echo  '<p class="element__text">' . $text . '</p>';
?>
            </div>

            <?php
	endwhile;

else :
endif;
?>
        </div>

    </div>


</section>