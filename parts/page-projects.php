<?php
	/**
	 * Template part for displaying home content
	 */
	$projects = new WP_Query( array('post_type' => 'project', 'posts_per_page' => 1000, 'orderby' => 'date', 'order' => 'DESC' ) );
?>

<?php if( $projects->have_posts() ) : ?>
<section class="section section-diary">
	<div class="grid-container grid-x">
		<div class="cell small-12 medium-10 medium-offset-1">
			<div class="drawing-list">
				<?php 
					$num = 1;
					while ( $projects->have_posts() ) : $projects->the_post(); 
					$materials = get_field('materials');
					$live_link = get_field('live_link');
                    $about = get_field('about');
                    $video_demo = get_field('video_demo');
                    $team_members = get_field('team_members');
                    $subject_matter_expert = get_field('subject_matter_expert');
                    $images = get_field('images');
                    $title = the_title('','', false);

				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('article article-'.$num); ?> role="article" itemscope itemtype="http://schema.org/Article">
					<div class="project-container">
                        <div class="left-col">
                            <h3>0<?php echo $num?></h3>
                        </div>
                       
                        <div class="right-col">

                            <a class="project-link" href="/project/<?php echo sanitize_title_with_dashes( $title ) ?>"><div class="title"><?php the_title( '<h3>', '</h3>' ); ?></div></a>

                        </div>

                    </div>
				</article>
				<?php $num++; endwhile; ?>
			</div>
		</div>
	</div>
</section>
<?php endif; wp_reset_query(); ?>