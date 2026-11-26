<?php

/* Template Name: Home Page */

get_header();

if(have_posts()):
	while(have_posts()): the_post();
?>
<?php $background = get_field('main_background');?>
<main style="background-image: url('<?php echo wp_get_attachment_image_url( $background, 'full' ); ?>');">
	<div class="container">
		<h1><?php the_title(); ?></h1>
		<?php the_content();?>
	</div>
</main>
<?php
	endwhile;
endif;

get_footer();
?>
