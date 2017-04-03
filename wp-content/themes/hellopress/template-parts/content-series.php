<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
 ?>

<section class="favoris row">
	<h2>Mes séries</h2>

<?php	query_posts( "cat=3&posts_per_page=8&post_status=publish" ); ?>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article class="text-center medium-3 column end">
					<?php the_post_thumbnail( 'vignette' ); ?>
				<h3 class="">
					<?php the_title(); ?>
				</h3>
			</article>
			
		<?php endwhile; ?>
	<?php endif; ?>
</section>