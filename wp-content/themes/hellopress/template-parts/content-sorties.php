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
	<h2>Dernières sorties</h2>

<?php	query_posts( "cat=4&posts_per_page=3&post_status=publish" ); ?>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article class="text-center medium-4 column end">
					<?php the_post_thumbnail( 'vignette' ); ?>
				<h3 class="">
					<?php the_title(); ?>
				</h3>
				<p>
					<?php the_content(); ?>
				</p>
			</article>
			
		<?php endwhile; ?>
	<?php endif; ?>
</section>