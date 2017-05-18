$(function(){
    var $tabSpan = $('#property-content .property-tab span');
    var $detailUl = $('#property-content .property-details ul');
    $tabSpan.on('click', function(){
        changeDetail($(this).index());
    });


    function changeDetail(index){
        $tabSpan.eq(index).addClass('active').siblings().removeClass('active');
        $detailUl.eq(index).addClass('active').siblings().removeClass('active');
    }
});