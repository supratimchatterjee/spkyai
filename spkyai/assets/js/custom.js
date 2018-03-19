jQuery(document).ready(function($){
	console.log("ready");
	drift.on('ready', function(api) {
		$('a[href="#drift-ui"]').click(function(event) {
			event.preventDefault();
			console.log(api);
			//api.widget.show();
			api.sidebar.open();
		});      
	});
});
