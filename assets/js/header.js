$(function(){
	var dates = new Date(),
		year = dates.getFullYear(),
		month = dates.getMonth(),
		date = dates.getDate(),
		day = dates.getDay();
		switch(day){
			case 0:
				day = '日';
				break;
			case 1:
				day = '一';
				break;
			case 2:
				day = '二';
				break;
			case 3:
				day = '三';
				break;
			case 4:
				day = '四';
				break;
			case 5:
				day = '五';
				break;
			case 6:
				day = '六';
				break;
			default :
				break;
		}
	$('#header .date').html(year +'-'+ (month + 1) +'-'+ date);
	$('#header .weekdays').html('星期' + day);

});