<?php 
	the_post();
	$galeria = get_post_galleries_images();
	$content = strip_shortcodes(get_the_content());
?>

<div id="post-projeto">	
	<?php if (!empty($galeria)) { ?>
		<div id="galeria">
			<?php foreach ($galeria[0] as $foto) { ?>
				<div class="galeria-imagem" style="background-image: url(<?php echo thumb_image(array('image' => $foto, 'width' => 665, 'height' => 440)); ?>); ">
				</div>
			<?php } ?>
		</div>
		<!-- 	
		<a class="prev-next prev"></a>
		<a class="prev-next next"></a>
 		-->
	<?php } ?>

	<h1 class="post-projeto-titulo">
		<?php echo get_the_title(); ?>
	</h1>

	<h2 class="post-projeto-subtitulo">
		<?php echo get_the_subtitle(); ?>
	</h2>


	<div class="post-projeto-content">
		<?php echo apply_filters('the_content', $content); ?>
	</div>
</div>