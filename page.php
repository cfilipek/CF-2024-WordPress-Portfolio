<?php
get_header(); ?>
	<?php 
		if (have_posts()) : while (have_posts()) : the_post(); 
		$sec_title = get_the_title();
				
		if( has_post_thumbnail() ) {
			$thumb = get_the_post_thumbnail_url(get_the_ID(),'full');
		} else {
			$thumb = '';
		}
	?>
	<main class="main main-<?php echo sanitize_title_with_dashes($sec_title); ?>" role="main" style="background-image: url('<?php echo $thumb; ?>');">
		<?php if( is_page('Home') ) : ?>
			<?php get_template_part( 'parts/page', 'home' ); ?>
		<?php elseif ( is_page('About') ) : ?>
			<?php get_template_part( 'parts/page', 'about' ); ?>
		<?php elseif ( is_page('Projects') ) : ?>
			<?php get_template_part( 'parts/page', 'projects' ); ?>
		<?php elseif ( is_page('Contact') ) : ?>
			<?php get_template_part( 'parts/page', 'contact' ); ?>
		<?php else :?>
			<div class="grid-container">
				<div class="grid-x">
					<div class="cell small-12 medium-10 large-10 medium-offset-1 large-offset-1">
						<?php get_template_part( 'parts/loop', 'page' ); ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
	
	<?php endwhile; endif; ?>
<?php get_footer(); ?>