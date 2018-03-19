jQuery(document).ready(function($) {
	/*$('.tm-read-more-link').on('click', function(event) {
		if($('.tm-toggle-block').hasClass('uk-hidden')){
		  $('.tm-read-more-link').text('Read Less');
		}
		else
		  $('.tm-read-more-link').text('Read More');
	});*/
	 var minimized_elements = $('p.tm-minimize');
    
    minimized_elements.each(function(){    
        var t = $(this).text();        
        if(t.length < 100) return;
        
        $(this).html(
            t.slice(0,100)+'<span>... </span><a style="display:block; margin-top:10px;" href="#" class="more">Read More</a>'+
            '<span style="display:none;">'+ t.slice(100,t.length)+' <a style="display:block; margin-top:10px;" href="#" class="less">Read Less</a></span>'
        );
        
    }); 
    
    $('a.more', minimized_elements).click(function(event){
        event.preventDefault();
        $(this).hide().prev().hide();
        $(this).next().show();        
    });
    
    $('a.less', minimized_elements).click(function(event){
        event.preventDefault();
        $(this).parent().hide().prev().show().prev().show();    
    });
});
