$(function(){
	$span = $('#property-content .property-tab span');
	$value = $('#property-val').val();
	var nowIdx = 0;

	if($value == '规定'){
		nowIdx = 1;
	}else if($value == '活动'){
		nowIdx = 2;
	}else if($value == '公告'){
		nowIdx = 3;
	}else{
		nowIdx = 0; 
	}
	console.log(nowIdx);
	changeService(nowIdx);
	$span.on('click', function(){
		changeService($(this).index());
	});

	function changeService(index){
		$span.eq(index).addClass('active').siblings().removeClass('active');
		$('#property-content .property-details ul').eq(index).addClass('active').siblings().removeClass('active');
	}
});