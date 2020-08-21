jQuery(function($){ // use jQuery code inside this to avoid "$ is not defined" error
	$('.ajax_loadmore').click(function(){
 
		var button = $(this),
		post_type = button.data('pt'),
		    data = {
			'action': 'loadmore',
			'query': ajax_loadmore_params.posts, // that's how we get params from wp_localize_script() function
			'page' : ajax_loadmore_params.current_page,
			'post_type':	post_type ? post_type : 'post'
		};
 
		$.ajax({ // you can also use $.post here
			url : ajax_loadmore_params.ajaxurl, // AJAX handler
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
				button.text('Loading.....'); // change the button text, you can also add a preloader image
			},
			success : function( data ){
				if( data ) { 
					button.text( 'More posts' ).prev().after(data); // insert new posts
					ajax_loadmore_params.current_page++;
					if ( ajax_loadmore_params.current_page == ajax_loadmore_params.max_page ) 
						button.remove(); // if last page, remove the button
 
					// you can also fire the "post-load" event here if you use a plugin that requires it
					// $( document.body ).trigger( 'post-load' );
				} else {
					button.remove(); // if no data, remove the button as well
				}
			}
		});
	});
});

