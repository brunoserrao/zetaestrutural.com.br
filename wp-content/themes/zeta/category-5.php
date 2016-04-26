<?php 
	query_posts('cat=5&posts_per_page=-1');
	get_template_part('category-projetos');