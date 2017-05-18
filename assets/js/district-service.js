$(function(){
	$('#district-life-service .district-life-tab span').on('mouseover', function(){
		$(this).addClass('selected').siblings().removeClass('selected');;
		$('#district-life-service ul').eq($(this).index()).addClass('selected').siblings().removeClass('selected');
	});

	$('#house-rent-info .house-rent-tab span').on('click', function(){
		$(this).addClass('active').siblings().removeClass('active');
		$('#house-rent-info .house-rent-details ul').eq($(this).index()).addClass('active').siblings().removeClass('active');
	});


});