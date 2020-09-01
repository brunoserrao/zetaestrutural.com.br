<?php 
	query_posts('cat=3&posts_per_page=-1');
	get_template_part('category-projetos');