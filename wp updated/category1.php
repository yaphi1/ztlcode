<?php get_header(); ?>
<section id="content" role="main">
	<div class="masthead">
		<h1 class="contentwidth"><?php _e( 'Category: ', 'blankslate' ); ?><?php single_cat_title(); ?></h1>
		<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
	</div>
	

	<div class="gridbg">
		<div class="gridcontainer">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="gridbox">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
					<div class="tags">
						<?php _e( 'Tags: ', 'blankslate' ); ?><?php the_category( ', ' ); ?>
					</div>
				</div>
			<?php endwhile; endif; ?>
		</div>
	</div>

	
	<?php get_template_part( 'nav', 'below' ); ?>
</section>


<?php get_footer(); ?>