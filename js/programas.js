$(document).ready(function(){
	var amtImg = $('.img-pg').length;
	var curIndex = 0;
	navegarSlide();
	iniciarDepoimento();
	function iniciarDepoimento(){
		$('.img-pg').hide();
		$('.img-pg').eq(0).show();
	}
	function navegarSlide(){
		$('.arrow-right').click(function(){
			curIndex++;
			if(curIndex >= amtImg){
				curIndex = 0;
			}
			$('.img-pg').hide();
			$('.img-pg').eq(curIndex).show();
		})
		$('.arrow-left').click(function(){
			curIndex--;
			if(curIndex < 0){
				curIndex = amtImg-1;
			}
			$('.img-pg').hide();
			$('.img-pg').eq(curIndex).show();

		})
	}
	
})