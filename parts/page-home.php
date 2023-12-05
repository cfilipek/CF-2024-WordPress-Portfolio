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
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('article article-'.$num); ?> role="article" itemscope itemtype="http://schema.org/Article">
					<div class="project-container">
                        <div class="left-col">
                            <h3>0<?php echo $num?></h3>
                        </div>
                       
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

                    </div>
				</article>
				<?php $num++; endwhile; ?>
			</div>
		</div>
	</div>
</section>
<?php endif; wp_reset_query(); ?>