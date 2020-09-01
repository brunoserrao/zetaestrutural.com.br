<?php 
	query_posts('cat=6&posts_per_page=6&orderby=post_title&order=ASC');
?>

<?php while (have_posts()) { the_post(); ?>
	<li>
		<img src="<?php echo thumb(array('id' => get_the_ID(), 'width' => 215, 'height' => 215)) ?>" alt="<?php echo get_the_title() ?>" class="wp-post-image">
		<h2><?php echo get_the_title(); ?></h2>
		<h3><?php echo get_the_subtitle(); ?></h3>
		<?php the_content(); ?>
	</li>
	<?php  ?>
<?php } ?>

<?php wp_reset_query(); ?>