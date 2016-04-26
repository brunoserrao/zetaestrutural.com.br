<?php while (have_posts()) { the_post(); $subtitle = the_subtitle(null, null, false) ?>
	<div class="post">
		<a href="<?php echo get_permalink(); ?>" class="post-projetos" title="<?php echo get_the_title() ?>">
			<img src="<?php echo thumb(array('id' => get_the_ID(), 'width' => 380, 'height' => 300 )); ?>" alt="">
		</a>

		<a href="<?php echo get_permalink(); ?>" class="post-projetos post-projetos-titulo" title="<?php echo get_the_title() ?>">
			<?php echo get_the_title(); ?>
			<?php if (!empty($subtitle)) { ?>
				, <?php echo $subtitle ?>
			<?php } ?>
			.
		</a>
	</div>
	<?php  ?>
<?php } ?>

<?php wp_reset_query(); ?>