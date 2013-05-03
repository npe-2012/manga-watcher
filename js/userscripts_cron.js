$(function(){
	if(!window.location.hash)
	{
		window.location.hash = "book";
	}

	hashTag = window.location.hash;
	$(hashTag).parent().addClass('active');
	switch(hashTag)
	{
		case '#book':
			$.ajax({
				type: 'GET',
				url: "cron/book",
				beforeSend: function(xhr)
				{

				},
				dataType: 'html'
			})
			.done(function(data){
			});
		break;
	}
});