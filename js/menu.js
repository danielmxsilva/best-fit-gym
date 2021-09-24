$(document).ready(function(){
    $('.menu-mobile').click(function(e){
    	e.stopPropagation();
    	if($(this).find('ul').is(':visible')){
    		console.log('menu escondido');
    		$('.icone-menu').css('background-image','url("img/header/menu.png")');
    	}else{
    		console.log('menu visible');
    		$('.icone-menu').css('background-image','url("img/header/menu-open.png")');
    	}
        $(this).find('ul').slideToggle();
    })
    $('body').click(function(e){
    	e.stopPropagation();
    	$('.menu-mobile').find('ul').slideUp();
      	$('.icone-menu').css('background-image','url("img/header/menu.png")');
    })
})