$(document).ready(function(){

	//$(".menu_section ul li").removeClass('active');
	//$(".child_menu").addCss('display','block');
	$(".link").click(function(){
		var link = $(this).attr("id");
		$(".pages").load(link);
	});
});