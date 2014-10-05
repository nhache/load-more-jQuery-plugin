(function($){
	
	$.fn.loadMore = function(options){

		//set options
		var settings = $.extend({
			//defaults
			count: 4
		}, options);

		$('.pager li').click(function(event){
			
			//prevent default link action
			event.preventDefault();
			
			//count existing items
			$start = 0;
			$('.blog-posts li').each(function(){
				$start += 1;
			});
			//define posts to get
			$data = { start: $start, count: settings.count };
			
			//get more blog posts via ajax
			$.ajax({
				url: 'load-more.php',
				type: 'post',
				data: $data,
				success: function(response){
					$data = $.parseJSON(response);
					$newposts = '';
					$.each($data.posts, function(i, post){
						$newposts += '<li>' 
						$newposts += '<h3>' + post.title + '</h3>';
						$newposts += '<p>' + post.text + '</p>';
						$newposts += '</li>';
					});//end each
					//append new posts to blog posts 
					$('.blog-posts').append($newposts);
				}//end success
			});//end ajax

		});//end load more event

	}///end loadMore

}(jQuery));//end Plugin
