<?php
/**
 * This template generates the meta information below each post. 
 * Link to Author, Date, Number of comments
 * List which category and tags are associated with this post
 *
 * @package blm_basic
 */
?>

<div class="entrymeta">
	<p>Filed in: <?php the_category(', ');?> | <?php echo the_tags(); ?> <?php comments_popup_link( 'No Comments', '1 Comment', '% Comments' ); ?></p>
</div>