<?php get_header();?>

	<?php	if(have_posts()): while(have_posts()): the_post();?>

<main>
	<div class="container">

		<div <?php post_class();?>>
		<h1><?php the_title();?> - <?php $date = get_the_date('F Y'); echo $date; ?></h1>

		<div class="post-container">

			<div class="post-content">
				<?php the_content();?>
			</div>

		<div class="post-listing">
			<h4>Issues</h4>

		<?php
		//$featured_offset = 2;
		$latest3 = array(
				'posts_per_page' => 2,
				'post_type' => 'newsletter',
				'orderby' => 'date',
				'order'   => 'DESC'
		);
		$latest_posts = new WP_Query( $latest3 );
		if ( $latest_posts->have_posts() ) {
			?>
			<ul class="latest">
			<?php
				while ( $latest_posts->have_posts() ) {
						$latest_posts->the_post();
			?>
				<li class="post">
					<a href="<?php echo get_the_permalink();?>">
						<div class="image-container">
							<span><?php $date = get_the_date('F Y'); echo $date; ?></span>
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
		$therest = array(
				'posts_per_page' => 200,
				'offset' => 2,
				'post_type' => 'newsletter',
				'orderby' => 'date',
				'order'   => 'DESC'
		);

		$therest_posts = new WP_Query( $therest );
		if ( $therest_posts->have_posts() ) {
			?>
			<ul class="the-rest">
			<?php
				while ( $therest_posts->have_posts() ) {
						$therest_posts->the_post();
			?>
				<li class="post">
					<a href="<?php echo get_the_permalink();?>"><?php $date = get_the_date('F Y'); echo $date;?></a>
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
	</div>
</main>

	<?php	endwhile; endif;?>

<?php get_footer();
