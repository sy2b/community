$(function(){
	
	
	//carousel
	var $carouselImgs = $('#carousel-imgs');
	var $imgs = $('img', $carouselImgs);
	var $imgWidth = $imgs.eq(0).width();
	var $newNode = $imgs.eq(0).clone();
	$newNode.appendTo($carouselImgs);
	$carouselImgs.width($imgWidth * ($imgs.length + 1));
	var nowIdx = 0;
	var timer;
	$('#carousel-tab li').on('mouseover', function(){
		changeImg($(this).index());
		nowIdx = $(this).index();
	});

	run();
	$('#carousel-container').hover(function(){
		clearInterval(timer);
	},function(){
		run();
	});

	function changeImg(index){
		$('#carousel-tab li').eq(index==$imgs.length?0:index).addClass('selected').siblings().removeClass('selected');
		$carouselImgs.stop().animate({
			left : -index * $imgWidth
		});
	}
	function run(){
		timer = setInterval(function(){
			nowIdx++;
			if(nowIdx == ($imgs.length + 1)){
				nowIdx = 1;
				$carouselImgs.css({
					left : 0
				});
			}
				changeImg(nowIdx);
		},2000);
	}

	//activity
	$('#activities-tab li a').on('click', function(){
		$(this).addClass('selected').parent('li').siblings().children('a').removeClass('selected');
		$(this).parent('li').addClass('selected').siblings().removeClass('selected');
		$('#activities-con-details div').eq($(this).parent('li').index()).addClass('selected').siblings().removeClass('selected');
		console.log($(this).parent('li').index());
	});

















});