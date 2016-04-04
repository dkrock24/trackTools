$(document).ready(function(){
	$('.pages').load('pageHome');


	$('.enlace').click(function(){
		var enlace = $(this).attr("id");
		//alert(enlace);
		$('.pages').load("../"+enlace);
	});



	//$(".menu_section ul li").removeClass('active');
	//$(".child_menu").addCss('display','block');
	/*
	$(".link").click(function(){
		var link = $(this).attr("id");
		$(".pages").load(link);
	});
	*/
	function demo(){
		
	}
	function alertSuccess(redirect){
		setTimeout(function(){ 
		//var enlace2;
        //alert(enlace2);
        	$('.pages').load(redirect);
		}, 2000);
	}

});

