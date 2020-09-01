jQuery(function(){
	// Menu
	jQuery('#menu a, .btn-contato').click(function(e){
		e.preventDefault();
		var target = this.hash;
		var $target = jQuery(this.hash);

		jQuery('html, body').stop().animate({
			'scrollTop': $target.offset().top
		}, 900, 'swing', function () {
			window.location.hash = target;
		});
	});
	
	// Fixar Menu
	jQuery(window).scroll(function(){		
		if (this.scrollY >= (jQuery('#menu').height() - 20) ) {
			jQuery('#menu').addClass('menu-fixo');
		} else {
			jQuery('#menu').removeClass('menu-fixo');
		}
	});

	// Projetos Posts Carousel
	jQuery("#projetos-posts").owlCarousel({
		navigation : true,
		slideSpeed : 300,
		paginationSpeed : 400,
		autoPlay : false,
		items : 3,
		scrollPerPage: true
	});

	var owl = jQuery("#projetos-posts").data('owlCarousel');

	// Projetos Posts lista
	jQuery('#projetos #projetos-submenu li:last-child a').addClass('projetos-submenu-selecionado');
	jQuery('#projetos-submenu a').click(function(e){
		e.preventDefault();

		href = jQuery(this).attr('href');

		jQuery('#projetos #projetos-submenu li a').removeClass('projetos-submenu-selecionado');
		jQuery(this).addClass('projetos-submenu-selecionado');

		jQuery.ajax({
			url: href,
			beforeSend: function(){
				jQuery('#projetos-posts').html('').addClass('carregando');
			},
			success: function(data){
				jQuery('#projetos-posts').html(data);
			},
			complete: function(){
				jQuery('#projetos-posts').removeClass('carregando');
				owl.reinit()
			},
			error: function(error){
				console.log(jQuery.parseJSON(error));
			}
		});
	});

	// Projetos Post exibir
	jQuery('#projetos-posts').on('click','.post-projetos',function(e){
		e.preventDefault();
		
		jQuery.colorbox({
			fixed: true, 
			href: jQuery(this).attr('href'), 
			width:'665', 
			minHeight: '70%',
			maxHeight: '90%',
			onComplete: function(){
				jQuery("#galeria").owlCarousel({
					navigation : true,
					slideSpeed : 300,
					paginationSpeed : 400,
					singleItem:true,
					autoPlay : true,
					stopOnHover : true
				});
			}
		});
	});
});