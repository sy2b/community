$(function(){
	$('#property-content .property-tab span').on('click', function(){
		$(this).addClass('active').siblings().removeClass('active');
		$('#property-content .property-details ul').eq($(this).index()).addClass('active').siblings().removeClass('active');
	});

});