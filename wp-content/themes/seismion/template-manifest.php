<?php

/* Template Name: URL Manifest */

get_header();

if(have_posts()):
	while(have_posts()): the_post();
?>

<main>
<style>
td { padding: 2px; }
header, footer {
    display: none !important;
}
body {
    padding-top: 0;
}
</style>
	<div class="row">
		<div class="col-md-12">

<h2>BLOGS</h2>
        <table width="100%" border="1">
<?php

$blogs = array(
        'posts_per_page' => -1,
        'post_type' => 'post',
        'orderby' => 'date',
        'order'   => 'DESC'
);
$blog_posts = new WP_Query( $blogs );
if ( $blog_posts->have_posts() ) {
    ?>
    <?php
        while ( $blog_posts->have_posts() ) {
                $blog_posts->the_post();
    ?>
    <tr>
    <td><?php the_title();?></td>
    
    <td><?php echo str_replace(home_url(), '', get_permalink());?></td>
    <td>
        <?php $tags = get_the_tags(); ?>
        <?php foreach ( $tags as $tag ) { ?>
            <?php echo $tag->name; ?> | 
        <?php } ?>
    </td>

    <?php } ?>
    <?php } ?>
    </tr>
    <?php wp_reset_postdata(); ?>
</table>
<h2>PAGES</h2>
<table width="100%" border="1">
<?php

$pages = array(
        'posts_per_page' => -1,
        'post_type' => 'page',
        'orderby' => 'date',
        'order'   => 'DESC'
);
$page_posts = new WP_Query( $pages );
if ( $page_posts->have_posts() ) {
    ?>
    <?php
        while ( $page_posts->have_posts() ) {
                $page_posts->the_post();
    ?>
    <tr>
    <td><?php the_title();?></td>
    <td><?php echo str_replace(home_url(), '', get_permalink());?></td>
    <td>
        <?php $tags = get_the_tags(); ?>
        <?php foreach ( $tags as $tag ) { ?>
            <?php echo $tag->name; ?> | 
        <?php } ?>
    </td>

    <?php } ?>
    <?php } ?>
    </tr>
    <?php wp_reset_postdata(); ?>
</table>

<h2>LANDING PAGES</h2>
<table width="100%" border="1">
<?php

$lpages = array(
        'posts_per_page' => -1,
        'post_type' => 'landingpage',
        'orderby' => 'date',
        'order'   => 'DESC'
);
$lpage_posts = new WP_Query( $lpages );
if ( $lpage_posts->have_posts() ) {
    ?>
    <?php
        while ( $lpage_posts->have_posts() ) {
                $lpage_posts->the_post();
    ?>
    <tr>
    <td><?php the_title();?></td>
    <td><?php echo str_replace(home_url(), '', get_permalink());?></td>
    <td>
        <?php $tags = get_the_tags(); ?>
        <?php foreach ( $tags as $tag ) { ?>
            <?php echo $tag->name; ?> | 
        <?php } ?>
    </td>

    <?php } ?>
    <?php } ?>
    </tr>
    <?php wp_reset_postdata(); ?>
</table>
</div>
	</div>

</main>
<?php
	endwhile;
endif;

get_footer();
?>
