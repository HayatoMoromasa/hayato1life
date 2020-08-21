jQuery(function($){ 
	$('.ajax_loadmore').click(function(){
 
		var button = $(this),
		post_type = button.data('pt'),
		    data = {
			'action': 'loadmore',
			'query': ajax_loadmore_params.posts, 
			'page' : ajax_loadmore_params.current_page,
			'post_type':	post_type ? post_type : 'post'
		};
 
		$.ajax({ 
			url : ajax_loadmore_params.ajaxurl, 
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
				button.text('Loading.....'); 
			},
			success : function( data ){
				if( data ) { 
					button.text( 'More posts' ).prev().after(data); 
					ajax_loadmore_params.current_page++;
					if ( ajax_loadmore_params.current_page == ajax_loadmore_params.max_page ) 
						button.remove(); 
					
				} else {
					button.remove(); 
				}
			}
		});
	});
});

