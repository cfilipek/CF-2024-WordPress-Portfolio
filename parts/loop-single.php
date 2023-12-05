<?php
/**
 * Template part for displaying a single post
 */

$materials = get_field('materials');
$live_link = get_field('live_link');
$about = get_field('about');
$video_demo = get_field('video_demo');
$team_members = get_field('team_members');
$subject_matter_expert = get_field('subject_matter_expert');
$images = get_field('images');
?>

<section class="section section-single">
	<div class="grid-container grid-x">
		<div class="cell small-12 medium-10 medium-offset-1">

			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
									
				<!-- <header class="article-header">	
					<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
				</header> -->
				
				<!-- end article header -->
								
				<!-- <section class="entry-content" itemprop="text">
					<?php the_post_thumbnail('full'); ?>
					<?php the_content(); ?>
				</section>  -->
				<!-- end article section -->
									
				<div class="right-col">

					<div class="title"><?php the_title( '<h3>', '</h3>' ); ?></div>

					<?php if( $materials) : ?>
					<p><b>Materials:</b> <?php echo $materials?></p>
					<?php endif; ?>

					<?php if( $live_link) : ?>
					<p><b>Live Link:</b> <a href="<?php echo $live_link?>" target="_blank">View Link</a></p>
					<?php endif; ?>

					<?php if( $about) : ?>
					<p><b>About:</b> <?php echo $about?></p>
					<?php endif; ?>

					<?php if( $video_demo) : ?>
					<p><b>Video Demo:</b> <a href="<?php echo $video_demo?>" target="_blank">View Demo</a></p>
					<?php endif; ?>

					<?php if( $team_members) : ?>
					<p><b>Team Members:</b> <?php echo $team_members?></p>
					<?php endif; ?>

					<?php if( $subject_matter_expert) : ?>
					<p><b>Subject Matter Expert:</b> <?php echo $subject_matter_expert?></p>
					<?php endif; ?>

					<?php if( have_rows('images') ): ?>
					<div class="slides">
					<?php while( have_rows('images') ): the_row(); 
						$image = get_sub_field('image');
						?>
						<div class="img-container">
							<img src="<?php echo $image ?>" alt="image about the project"/>
						</div>
					<?php endwhile; ?>
					</div>
				<?php endif; ?>

				</div>
																
			</article> <!-- end article -->

		</div>
	</div>
</section>