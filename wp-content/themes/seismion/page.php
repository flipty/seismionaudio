<?php get_header();?>

	<?php	if(have_posts()): while(have_posts()): the_post();?>
		<?php $headerImg = get_field('header_icon') ;?>
<main>
	<div <?php post_class('container');?>>
			<h1 style="background-image: url('<?php echo $headerImg; ?>');"><?php the_title();?></h1>
			<div class="post-content">
				<?php	the_content();?>
			</div>
	</div>
</main>

	<?php	endwhile; endif;?>

<?php get_footer();
