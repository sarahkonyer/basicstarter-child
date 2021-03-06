<?php

/*Template Name: Sarah's Custome Page */

get_header(); ?>

<div id="main">
	
	<section id="content">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h1><?php the_title(); ?></h1>
			
			<?php the_content(); ?>
			
		</article>
		
		<?php endwhile; endif; ?>
		
	</section><!-- #content -->

<?php //get_sidebar(); ?>

<?php
$quotation = get_post_meta($post->ID, 'quotation', true);
if ($quotation) {
echo "<p class='sidebar-quote'>".$quotation."</p>";
} else {
echo "You forgot to insert a quote…";
}
?>

</div><!-- #main -->

<?php get_footer(); ?>