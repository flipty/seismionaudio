<?php

/* Template Name: Home Page */

get_header();

if(have_posts()):
	while(have_posts()): the_post();
?>
<main>
<div class="container">
	<div class="latest-post">
		<div class="row">
		<div class="col-md-8 col-sm-12 offset-md-2 post-content">
			
	<?php
		$featured_post = get_field('featured_issue');
		$latest = array(
				'posts_per_page' => 1,
				'post_type' => 'newsletter',
				'orderby' => 'date',
				'order'   => 'DESC'
		);
		$latest_posts = new WP_Query( $latest );
		if ( $latest_posts->have_posts() ) {
			?>
			<?php
				while ( $latest_posts->have_posts() ) {
						$latest_posts->the_post();
			?>
			
			<h1><?php the_title();?></h1>
			<?php the_content();?>
			
			<?php
				}
				?>
			<?php }
		wp_reset_postdata();
		
		$therest = array(
				'posts_per_page' => 200,
				'offset' => 1,
				'post_type' => 'newsletter',
				'orderby' => 'date',
				'order'   => 'DESC'
				//'post__not_in' => array($featured_post)
		);?>
					</div>
		</div>

	</div>
	<div class="post-archive">
		<h2 style="text-align: center;">Parking Lot Issue Archive</h2>
		<?php 
		$therest_posts = new WP_Query( $therest );
		if ( $therest_posts->have_posts() ) {
			?>
			<ul class="the-rest">
			<?php
				while ( $therest_posts->have_posts() ) {
						$therest_posts->the_post();
			?>
				<li class="post">
					<a href="<?php echo get_the_permalink();?>">
						<div class="image-container">
							<span><?php echo get_the_title();?> - <?php $date = get_the_date('M Y'); echo $date; ?></span>
							<?php echo get_the_post_thumbnail();?>	
						</div>
					</a>
				</li>
			<?php
				}
				?>
			</ul>
			<?php }
		wp_reset_postdata();

		?>
		</div>
</div>
</main>
<?php
	endwhile;
endif;

get_footer();
?>
