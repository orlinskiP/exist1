<section id="block_lastentries">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="blog__title">Najnowsze publikacje</h3>
			</div>
		</div>
		<div class="row">
			<?php
			$recent_args = array(
				"posts_per_page" => 3,
				"orderby"        => "date",
				"order"          => "DESC"
			);
			$recent_posts = new WP_Query($recent_args);
			if ($recent_posts->have_posts()) :
				while ($recent_posts->have_posts()) :
					$recent_posts->the_post();
			?>
					<div class="col-12 col-md-3">
						
						<article>
							<a href="<?php the_permalink(); ?>">
								<h3><?php the_title(); ?></h3>
							</a>
						</article>

					</div>
			<?php
				endwhile;
			endif;
			?>
			<div class="col-12 col-md-3 flex ">
				<a class="button button--blog" href="https://existagency.pl/blog">Zobacz więcej</a>
			</div>
		</div>
	</div>
</section>