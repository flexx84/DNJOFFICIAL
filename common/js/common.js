//브라우저 체크
(function(){
    $(document).ready(function(){
        var $agents = [/(opr|opera)/gim,/(chrome)/gim,/(firefox)/gim,/(safari)/gim,/(msie[\s]+[\d]+)/gim,/(trident).*rv:(\d+)/gim];
        var $agent = navigator.userAgent.toLocaleLowerCase();
        for(var ag in $agents){
            if($agent.match($agents[ag])){
                $(document.body).addClass(String(RegExp.$1+RegExp.$2).replace(/opr/,'opera').replace(/trident/,'msie').replace(/\s+/,''));
                break;
            }
        }
    });
})();

//해더 스크롤
$(window).scroll(function () {
    var headerTop = $(window).scrollTop();
    if (headerTop > 100) {
        $('.header').addClass('scroll');
    } else {
        $('.header').removeClass('scroll');
    };
});


// gnb 스크립트
$(document).ready(function () {
    $('.header').mouseenter(function () {
        $('.header').addClass('on');
    });

    $('.header').mouseleave(function () {
        $('.header').removeClass('on');
    });

    $('.header .gnb > ul > li').mouseenter(function(){
        $('.header').addClass('open');
        $(this).addClass('active');
    });

    $('.header .gnb > ul > li').mouseleave(function(){
        $('.header').removeClass('open');
        $(this).removeClass('active');
    }); 
});

//토글
$(document).ready(function () {
    $('.header .togglePC').mouseenter(function () {
        $(this).addClass('active')
        $(this).siblings('ul').addClass('active');
    });
    $('.header .etcPC').mouseleave(function () {
        $('.header .togglePC').removeClass('active')
        $('.header .togglePC').siblings('ul').removeClass('active');

        // $(this).siblings('ul').slideToggle();
    });

    $('.header .toggleMO').click(function () {
        $(this).toggleClass('active')
        $(this).siblings('ul').toggleClass('active');
    });
});

// lnb 클릭
$(document).ready(function () {
    $('.lnb .lnb-link').click(function () {
        $(this).toggleClass('active')
        $(this).siblings('ul').slideToggle();
    });
});

// 서브 visual 배경
$(document).ready(function () {
    setTimeout(function () {
        $('.sub .visual .bg').addClass("active");
    }, 300);
});

//이미지 정렬
$(window).on('load resize', function () {
    $('.js-position').each(function () {
        var imgWidth = $(this).width() / 2;
        var imgHeight = $(this).height() / 2;
        $(this).css('margin-top', -imgHeight).css('margin-left', -imgWidth);
    });
});
$(window).trigger('resize');


