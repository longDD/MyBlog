// +----------------------------------------------------------------------
// | The only need to do is to make yourself good enough.
// +----------------------------------------------------------------------
// | Author: Long_DD <741886920@qq.com>
// +----------------------------------------------------------------------
// | Time: 2013-04-7
// +----------------------------------------------------------------------
// | Description: 框架打开新窗口
// +----------------------------------------------------------------------
$(function() {
    //主目录
    //    $('#m-menu li').each(function(i){
    //        $(this).click(function(){
    //            $('#m-cont').load($($('#m-menu li a')[i]).attr('href'));
    //            return false;
    //        });
    //    });

    //右侧目录
    $('#m-list li').each(function(i) {
        $(this).click(function() {
            $('#m-list li').removeClass('active');
            $(this).addClass('active');
            //$('#m-cont').html('').load($($('#m-list li a')[i]).attr('href'));
            //面包屑
            //$('.breadcrumb .active').html($(this).text());
            //return false;
        });
    });

    //右侧目录
    $('#m-menu li').each(function(i) {
        $(this).click(function() {
            $('#m-menu li').removeClass('active');
            $(this).addClass('active');
            //$('#m-cont').html('').load($($('#m-list li a')[i]).attr('href'));
            //面包屑
            //$('.breadcrumb .active').html($(this).text());
            //return false;
        });
    });
});

