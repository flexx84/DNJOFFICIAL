<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>크리에이티브그룹 아더</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="keywords" content="크리에이티브그룹 아더" />
    <meta name="description" content="크리에이티브그룹 아더" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="크리에이티브그룹 아더">
    <meta property="og:description" content="크리에이티브그룹 아더">
    <meta property="og:image" content="/common/layout/Logo_color.png">

    <!-- Chrome, Safari, IE  32*32  https://icoconvert.com/  -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- Firefox, Opera (Chrome and Safari say thanks but no thanks) -->
    <link rel="icon" type="image/png" href="favicon.png" sizes="192x192">
    <!-- apple safari -->
    <link rel="apple-touch-icon" type="image/png" href="favicon.png" sizes="180x180">
    <link href="https://webfontworld.github.io/SCoreDream/SCoreDream.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/common/css/efront.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type='text/javascript' src="/comm/js/script.js"></script> <!-- 회원가입등 공통스크립트 -->
    <script type="text/javascript" src="/common/js/jquery.fullpage.js"></script>
    <script type='text/javascript' src="/common/js/swiper.js"></script>
    <script type='application/json' src="/common/js/swiper.js.map"></script>
    <script type='text/javascript' src='/common/js/common.js'></script>

    <!-- 크로스브라우징 -->
    <!--[if lt IE 9]>
        <script src="/common/js/html5shiv.min.js"></script>
        <![endif]-->

</head>

<body>

    <header class="header">
        <div>
            <h1 class="montserrat"><a href="/"><img src="/common/img/layout/logo.png"
                        alt="Creative group arthur 크리에이티브그룹아더"></a></h1>

            <div class="etc etcPC montserrat">
                <a href="javascript:void(0)" class="toggle togglePC">
                    <div class="icon">
                        <span></span><span></span><span></span>
                    </div>
                    <p>MENU</p>
                </a>
                <ul>
                    <li>
                        <a href="/#section02">ABOUT</a>
                    </li>
                    <li>
                        <a href="/#section03">WHAT WE DO</a>
                    </li>
                    <li>
                        <a href="/#section04">PORTFOLIO</a>
                    </li>
                    <li>
                        <a href="/#section05">RECRUIT</a>
                    </li>
                </ul>
            </div>

            <div class="etc etcMO montserrat">
                <a href="javascript:void(0)" class="toggle toggleMO">
                    <div class="icon">
                        <span></span><span></span><span></span>
                    </div>
                    <p>MENU</p>
                </a>
                <ul>
                    <li>
                        <a href="/#section02">ABOUT</a>
                    </li>
                    <li>
                        <a href="/#section03">WHAT WE DO</a>
                    </li>
                    <li>
                        <a href="/#section04">PORTFOLIO</a>
                    </li>
                    <li>
                        <a href="/#section05">RECRUIT</a>
                    </li>
                </ul>
            </div>
        </div>
    </header><main class="sub">
    <div class="portfolio portfolio_list">

    <link href="/admin/product2/skin/prdBasic/style.css" rel="stylesheet" type="text/css">

<script language="javascript">

var prdimg = "2312110003_L1.jpg";

function chgImage(idx){
	if(idx == "1"){
		prdimg = "2312110003_L1.jpg";
		document.prdimg.src = "/admin/data/product2/2312110003_M1.jpg";
	}
	if(idx == "2"){
		prdimg = "2312110003_L2.jpg";
		document.prdimg.src = "/admin/data/product2/2312110003_M2.jpg";
	}
	if(idx == "3"){
		prdimg = "2312110003_L3.jpg";
		document.prdimg.src = "/admin/data/product2/2312110003_M3.jpg";
	}
	if(idx == "4"){
		prdimg = "2312110003_L4.jpg";
		document.prdimg.src = "/admin/data/product2/2312110003_M4.jpg";
	}
	if(idx == "5"){
		prdimg = "2312110003_L5.jpg";
		document.prdimg.src = "/admin/data/product2/2312110003_M5.jpg";
	}
	if(idx == "6"){
		prdimg = "2312110003_L6.jpg";
		document.prdimg.src = "/admin/data/product2/2312110003_M6.jpg";
	}
	if(idx == "7"){
		prdimg = "2312110003_L7.jpg";
		document.prdimg.src = "/admin/data/product2/2312110003_M7.jpg";
	}
	if(idx == "8"){
		prdimg = "";
		document.prdimg.src = "/admin/data/product2/";
	}
	if(idx == "9"){
		prdimg = "";
		document.prdimg.src = "/admin/data/product2/";
	}
	if(idx == "10"){
		prdimg = "";
		document.prdimg.src = "/admin/data/product2/";
	}
	if(idx == "11"){
		prdimg = "";
		document.prdimg.src = "/admin/data/product2/";
	}
	if(idx == "12"){
		prdimg = "";
		document.prdimg.src = "/admin/data/product2/";
	}

}

function prdImg(){
	var url = "/admin/product2/prdimg.php?prdimg=" + prdimg + "&prdcode=2312110003";
	window.open(url,"prdImg","width=100,height=100,scrollbars=no,resizable=yes");
}

function prevAlert(){
	alert("2023 이전 포토폴리오가 없습니다.");
}

function nextAlert(){
	alert("2023 마지막 포토폴리오 입니다.");
}

// 프린트
function prdPrint(){
	var url = "/admin/product2/print.php?prdcode=2312110003";
	window.open(url,"prdPrint","width=100,height=100,scrollbars=yes,resizable=yes");
}

</script>


<section class="visual viewVisual animatedParent animateOnce">
    <div class="bg animated" style="background:url('/admin/data/product2/2312110003_L1.jpg') no-repeat center/cover;">
    <div class="wLine"></div>
    <div class="wLine2"></div>
    </div>

    <div class="viewTxtBox">
        <div class="listBox animated fadeInUpShort delay-500"><a href='/portfolio/portfolio_list.php?ptype=list&catcode=14000000&searchopt=&searchkey=' class='listBtn'>목록으로</a></div>
        <h2 class="animated fadeInUpShort delay-250">Polestar X Department Store </h2>
        <div class="viewArrow animated fadeInUpShort delay-750">
            <ul>
                <li class="prevBtn"> <a href='/portfolio/portfolio_list.php?ptype=view&prdcode=2312110004&catcode=14000000'>이전글</a></li>
                <li class="nextBtn"> <a href='/portfolio/portfolio_list.php?ptype=view&prdcode=2312110002&catcode=14000000'>다음글</a>  </li>
            </ul>
        </div>
    </div>
</section>
<div class="inner">
    <section class="viewTitle animatedParent animateOnce">
        <h2 class="animated fadeInLeftShort">Polestar 2 on tour</h2>
        <ul>
            <li class="animated fadeInRightShort delay-250">
                <h4>VENUE</h4>
                <p>현대백화점(판교,목동,대구)/ 갤러리아 백화점(광교)</p>
            </li>
            <li class="animated fadeInRightShort delay-500">
                <h4>DATE</h4>
                <p>2023. 4. - 2023. 11.</p>
            </li>
            <li class="animated fadeInRightShort delay-750">
                <h4>CLIENT</h4>
                <p>폴스타코리아/HS애드</p>
            </li>
        </ul>
    </section>
    <section class="pro_view">
		<figure class="animatedParent animateOnce">
			<img src="/admin/data/product2/2312110003_M1.jpg" alt="Polestar 2 on tour 1번 상세이미지" class=" animated fadeInUp" >
		</figure>
			<figure class="animatedParent animateOnce">
			<img src="/admin/data/product2/2312110003_M2.jpg" alt="Polestar 2 on tour 2번 상세이미지" class=" animated fadeInUp" >
		</figure>
			<figure class="animatedParent animateOnce">
			<img src="/admin/data/product2/2312110003_M3.jpg" alt="Polestar 2 on tour 3번 상세이미지" class=" animated fadeInUp" >
		</figure>
			<figure class="animatedParent animateOnce">
			<img src="/admin/data/product2/2312110003_M4.jpg" alt="Polestar 2 on tour 4번 상세이미지" class=" animated fadeInUp" >
		</figure>
			<figure class="animatedParent animateOnce">
			<img src="/admin/data/product2/2312110003_M5.jpg" alt="Polestar 2 on tour 5번 상세이미지" class=" animated fadeInUp" >
		</figure>
			<figure class="animatedParent animateOnce">
			<img src="/admin/data/product2/2312110003_M6.jpg" alt="Polestar 2 on tour 6번 상세이미지" class=" animated fadeInUp" >
		</figure>
			<figure class="animatedParent animateOnce">
			<img src="/admin/data/product2/2312110003_M7.jpg" alt="Polestar 2 on tour 7번 상세이미지" class=" animated fadeInUp" >
		</figure>
	<!--		<figure class="animatedParent animateOnce">
			<img src="/admin/data/product2/" alt="Polestar 2 on tour 8번 상세이미지" class=" animated fadeInUp" >
		</figure>
	--><!--		<figure class="animatedParent animateOnce">
			<img src="/admin/data/product2/" alt="Polestar 2 on tour 9번 상세이미지" class=" animated fadeInUp" >
		</figure>
	--><!--		<figure class="animatedParent animateOnce">
			<img src="/admin/data/product2/" alt="Polestar 2 on tour 10번 상세이미지" class=" animated fadeInUp" >
		</figure>
	--><!--		<figure class="animatedParent animateOnce">
			<img src="/admin/data/product2/" alt="Polestar 2 on tour 11번 상세이미지" class=" animated fadeInUp" >
		</figure>
	--><!--		<figure class="animatedParent animateOnce">
			<img src="/admin/data/product2/" alt="Polestar 2 on tour 12번 상세이미지" class=" animated fadeInUp" >
		</figure>
	-->
    </section>
</div>
    </div>
</main>
        <footer class="footer animatedParent animateOnce" id="footer">
                        <a href="javascript:void(0)" class="goTop">
                <img src="/common/img/layout/go_top_icon.png" alt="상단 이동">
            </a>

            <script>
                $(document).ready(function () {
                    $('.footer .goTop').click(function () {
                        $('html, body').animate({
                            scrollTop: 0
                        }, 400);
                        return false;
                    });
                });
            </script>
                        <article class="footerArt">
                <div class="inner">
                    <div class="flexBox">
                        <div class="leftArea animated fadeInUpShort delay-250">
                            <a href="mailto:arthur@arthur.co.kr" class="popup_open" rel="contactForm">
                                <div>
                                    <h3 class="montserrat">Let's Get in Touch</h3>
                                </div>
                                <span>
                                    <div class="bg">
                                        <img src="/common/img/layout/foot_goCircle.png" alt="">
                                    </div>
                                    <img src="/common/img/layout/foot_goicon.png" alt="" class="centerImg">
                                </span>

                                <p class="animated fadeInUpShort delay-500">프로젝트 의뢰하기</p>
                            </a>
                        </div>
                        <div class="rightArea animated fadeInUpShort delay-500">
                            <div class="bdLine">
                                <div id="daumRoughmapContainer1673836719953"
                                    class="root_daum_roughmap root_daum_roughmap_landing" style="width:100%;"></div>

                                <script charset="UTF-8" class="daum_roughmap_loader_script"
                                    src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                                <!-- 3. 실행 스크립트 -->
                                <script charset="UTF-8">
                                    new daum.roughmap.Lander({
                                        "timestamp": "1673836719953",
                                        "key": "2dfn8",
                                    }).render();
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="fgnbArt">
                <div class="inner">
                    <div class="flexBox">
                        <ul class="animated fadeInUpShort delay-250">
                            <li>
                                <a href="https://www.facebook.com/2013arthur" target="_blank"><img
                                        src="/common/img/layout/foot_icon_facebook.png" alt=""></a>
                            </li>
                            <li>
                                <a href="">개인정보처리방침</a>
                            </li>
                            <!--<li>
                                <a href=""><img src="/common/img/layout/foot_icon_twit.png" alt=""></a>
                            </li>
                            <li>
                                <a href=""><img src="/common/img/layout/foot_icon_instar.png" alt=""></a>
                            </li>-->
                        </ul>
                    </div>
                    <ul class="fAddress animated fadeInUpShort delay-500">
                        <li>
                            <span class="montserrat">Address</span>
                            <p>서울특별시 서초구 신반포로322 언주빌딩 3층</p>
                        </li>
                        <li>
                            <span class="montserrat">Tel</span>
                            <p class="montserrat">02-6258-0100</p>
                        </li>
                        <li>
                            <span class="montserrat">Fax</span>
                            <p class="montserrat">02-6258-0111</p>
                        </li>
                        <li>
                            <span class="montserrat">Email</span>
                            <p class="montserrat">arthur@arthur.co.kr</p>
                        </li>
                    </ul>
                    <p class="copyright montserrat animated fadeInUpShort delay-750">© CreativeGroupArthur. All Rights
                        Reserved.</p>
                </div>
            </article>

        </footer>
        <script type='text/javascript' src='/common/js/css3-animate.js'></script>
        <script type='text/javascript' src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
        </body>

        </html>