<section id="block_listapunktow">
    <?php
$text = get_field('text');
?>
    <div class="container">

        <div class="points">
            <?php if ( !empty( $text ) ): ?>
            <p class="points__text"><?php the_field("text") ?></p>
            <?php endif;

			if (have_rows('elements')) :
				while (have_rows('elements')) : the_row();
					$points = get_sub_field('points');
			?>
            <div class="points__list">
                <?php
		 		 echo'  <img class="points__vector"
						src="'.get_template_directory_uri() . "/images/vector2.png".'"
						alt="'.$points.'">'; 
				echo '<p class="points__elements">' . $points . '</p>';
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