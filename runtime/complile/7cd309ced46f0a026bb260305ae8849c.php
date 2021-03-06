<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{pboot:pagetitle}</title>
    <meta name="keywords" content="{pboot:pagekeywords}">
    <meta name="description" content="{pboot:pagedescription}">

    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/font-awesome.min.css">
    <link rel="stylesheet" href="static/css/owl.carousel.css">
    <link rel="stylesheet" href="static/css/owl.theme.css">
    <link rel="stylesheet" href="static/css/nivo-lightbox.css">
    <link rel="stylesheet" href="static/css/nivo-lightbox-theme.css">
    <link rel="stylesheet" href="static/css/animate.css">
    <link rel="stylesheet" href="static/css/style.css">


    <script src="static/js/modernizr.custom.js"></script>
    <script type="text/javascript" src="static/js/jquery-1.10.2.min.js"></script>
</head>

<body>

    <a href="" id="back-to-top" class="top"><i class="fa fa-chevron-up"></i></a>
    <section id="header" class="header">
        <div class="top-bar">
            <div class="container">
                <div class="navigation" id="navigation-scroll">
                    <div class="row">
                        <div class="col-md-11 col-xs-10">
                            <a href="{pboot:sitepath}/"><span id="logo"><strong class="strong"></strong>{pboot:companyname}</span></a>
                        </div>
                        <div class="col-md-1 col-xs-2">
                            <p class="nav-button">
                                <button id="trigger-overlay" type="button">
                                    <i class="fa fa-bars"></i>
                                </button>
                            </p>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.navigation -->
            </div>
            <!--/.container-->
        </div>
        <!--/.top-bar-->

        <div class="container">
            <div class="starting">
                <div class="row">
                    <div class="col-md-6">
                        <img class="screen" src="{label:ewm}" alt="LUCY"
                            class="wow flipInY animated animated"> </div>
                    <div class="col-md-6">
                        <div class="banner-text">
                            <h2 class="animation-box wow bounceIn animated"><strong class="strong">{pboot:companyname}</strong><br>
                                每天都是双十一<br>邀请码：{label:yaoqing}</h2>
                            <p>
                                汇聚全网优惠券让你不仅省钱，还赚钱每天都是双十一
                            </p>
                            <a href="{label:and}" target="_blank" class="btn btn-download wow animated fadeInLeft">
                                <i class="fa fa-android pull-left"></i>
                                <strong>Get it on</strong>
                                <br>Google Play </a>
                            <a href="{label:ios}" class="btn btn-download wow animated fadeInRight">
                                <i class="fa fa-apple pull-left"></i>
                                <strong>Get it on</strong>
                                <br>App store </a>
                        </div> <!-- /.banner-text -->
                    </div>
                </div>
            </div>
            <!-- /.starting -->
        </div>
        <!-- /.container -->
    </section>
    {pboot:sort scode=1}
    <div id="video" class="wrapper">
        <div class="container">
            <h2 class="animation-box wow bounceIn animated">[sort:name]</h2>
            <div class="virticle-line"></div>
            <div class="circle"></div>
            <img src="[sort:ico]" alt="feature"
                class="video img-responsive animation-box wow animated bounceInDown">
            <p>
               [sort:description]
            </p>
        </div> <!-- /.container -->
    </div> <!-- /#video -->

    <section id="bigfeatures" class="img-block-3col wrapper">

        <div class="container">

            <div class="row">
                
                <div class="col-sm-4">
                    <ul class="item-list-right item-list-big">
                        {pboot:list scode='1' num=2} 
                        <li class="wow fadeInLeft animated"> <i {pboot:if([list:i]==1)}class="fa fa-film"{else}class="fa fa-bolt" {/pboot:if}></i>
                            <h3>[list:title]</h3>
                            [list:content]
                        </li>
                        {/pboot:list}
                    </ul>
                </div>
                
                <div class="col-sm-4 col-sm-push-4">
                    <ul class="item-list-left item-list-big">
                        {pboot:list scode='1' num=2 start=3} 
                        <li class="wow fadeInRight animated"> <i {pboot:if([list:i]==1)}class="fa fa-life-ring"{else}class="fa fa-lock" {/pboot:if}></i>
                            <h3>[list:title]</h3>
                            [list:content]
                        </li>
                        {/pboot:list}
                    </ul>
                </div>
                <div class="col-sm-4 col-sm-pull-4 text-center">
                    <div class="animation-box wow bounceIn animated">
                        <img class="highlight-left wow animated" src="static/picture/spark.png" height="192" width="48"
                            alt="">
                        <img class="highlight-right wow animated" src="static/picture/spark.png" height="192" width="48"
                            alt="">
                        <img class="screen" src="[sort:pic]" alt="" height="581" width="300">
                    </div>
                </div>
            </div>
        </div> <!-- /.container -->
    </section> <!-- /#bigfeatures -->

    {/pboot:sort}
    <div id="speciality" class="wrapper">
        <div class="container">
            <h2 class="animation-box wow bounceIn animated">特点</h2>
            <div class="virticle-line"></div>
            <div class="circle"></div>
            <div class="row">
                {pboot:list scode='2' num='3'} 
                <div class="col-sm-4 wow animated fadeInLeft">
                    <div class="special-icon">
                        {pboot:if([list:i]==1)} 
                        <i class="fa fa-rocket"></i>
                        {/pboot:if}
                        {pboot:if([list:i]==2)} 
                        <i class="fa fa-usd"></i>
                        {/pboot:if}
                        {pboot:if([list:i]==3)} 
                        <i class="fa fa-cogs"></i>
                        {/pboot:if}
                    </div>
                    <h3>[list:title]</h3>
                    [list:content]
                </div>
                {/pboot:list}
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /#speciality -->


    <!-- HHHHHHHHHHHHHHHHHH        Features         HHHHHHHHHHHHHHHH -->
    <section id="features" class="wrapper features">
        <div class="container">
            {pboot:sort scode=3}
            <div class="row">
                <div class="col-md-6 col-sm-6 wow animated fadeInLeft">
                    <img src="[sort:ico]" alt="" class="pull-right left-img">
                </div>
                <div class="col-md-6 col-sm-6 wow animated fadeInRight">
                    <div class="features-list">
                        <h3>[sort:name]</h3>
                        <p>
                            [sort:description]
                        </p>
                        <ul class="right">
                            {pboot:list scode='[sort:scode]' num='8'} 
                            <li class="li"><i class="fa fa-chevron-right"></i> [list:title]</li>
                            {/pboot:list}
                        </ul>
                    </div> <!-- .features-list -->
                </div>
            </div>
            {/pboot:sort}
            {pboot:sort scode=43}
            <div class="row">
                <div class="col-md-6 col-sm-6 wow animated fadeInLeft">
                    <div class="features-list-left">
                        <h3>[sort:name]</h3>
                        <p>
                            [sort:description]
                        </p>
                        <ul class="left">
                            {pboot:list scode='[sort:scode]' num='8'} 
                            <li class="li">[list:title] <i class="fa fa-chevron-left"></i></li>
                            {/pboot:list}
                        </ul>
                    </div> <!-- .features-list -->
                </div>
                <div class="col-md-6 col-sm-6 wow animated fadeInRight">
                    <img src="[sort:ico]" alt="" class="pull-left right-img">
                </div>
            </div>
            {/pboot:sort}
        </div> <!-- /.container -->
    </section> <!-- /#features -->


    <section id="gallery" class="wrapper">
        <div class="container">
            <h2 class="animation-box wow bounceIn animated">成功案例</h2>
            <div class="virticle-line"></div>
            <div class="circle"></div>
            <div class="row">
                <div class="col-xs-12">
                    <div id="screenshots" class="owl-carousel owl-theme">
                        {pboot:list scode='5' num='12'} 
                        <a href="javascript:;" class="item wow flipInY animated animated"
                            data-lightbox-gallery="screenshots">
                            <img src="[list:ico]" class="img_res wow animated zoomIn" alt="">
                        </a>
                        {/pboot:list}
                    </div>
                    <div class="customNavigation row">
                        <a class="btn prev gallery-nav wow animated bounceInLeft"><i class="fa fa-chevron-left"></i></a>
                        <a class="btn next gallery-nav wow animated bounceInRight"><i
                                class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonial" class="wrapper">
        <div class="container">
            <div class="row main_content">
                <div class="col-md-8 col-md-offset-2">
                    <div id="client-speech" class="owl-carousel owl-theme">
                        {pboot:list scode='6' num='3'} 
                        <div class="item wow animated bounceInUp animated">
                            <!-- <img class="img-circle img-responsive center-block test-img" src="img/test1.png" alt="text"> -->
                            <p class="client-comment text-center">
                                [list:content drophtml=1]
                            </p>
                            <div class="row text-center">
                                <p class="client-name text-center">[list:title]</p>
                            </div>
                        </div>
                        {/pboot:list}
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- clients -->

    <div id="team" class="wrapper">
        <div class="container-fluid">
            <h2 class="animation-box wow bounceIn animated">{pboot:companyname}视频介绍</h2>
            <div class="virticle-line"></div>
            <div>
                <embed src="{label:video}"
                    allowfullscreen="true" quality="high" width="480" height="400" align="middle"
                    allowscriptaccess="always" type="application/x-shockwave-flash">
            </div>
            <img src="static/picture/icon-m.png" alt="icon-m" class="icon-m">
        </div>
    </div>

    <section id="contact" class="wrapper">
        <div class="container">
            <!-- /.row -->
            <form class="row form wrapper" method="post" action="{pboot:msgaction}">
                <h3>给我们留言</h3>
                <div class="col-sm-4 col-xs-12 form-group">
                    <label class="sr-only">名字</label>
                    <input name="name" class="form-control" type="text" placeholder="名字">
                </div> <!-- /.form-group -->
                <div class="col-sm-4 col-xs-12 form-group">
                    <label class="sr-only">邮件地址</label>
                    <input name="email" class="form-control" type="email" placeholder="邮件地址">
                </div> <!-- /.form-group -->
                <div class="col-sm-4 col-xs-12 form-group">
                    <label class="sr-only">你的地址</label>
                    <input name="website" class="form-control" type="text" placeholder="你的地址">
                </div> <!-- /.form-group -->
                <div class="row">
                    <div class="col-md-12 col-xs-12 form-group">
                        <label class="sr-only">您的留言</label>
                        <textarea class="message form-control" placeholder="您的留言" name="content"></textarea>
                    </div> <!-- /.form-group -->
                    <input class="btn btn-sub" type="submit" value="提交">
                </div>
            </form> <!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /#contact -->

    <!-- HHHHHHHHHHHHHHHHHH        Footer          HHHHHHHHHHHHHHHH -->

    <section id="footer" class="wrapper">
        <div class="container text-center">
            <div class="footer-logo">
                <h2 class="text-center animation-box wow bounceIn animated">{pboot:companyname}</h2>
            </div>
            <div class="copyright">
                <div class="credits">
                    {pboot:sitecopyright}
                </div>
            </div>
        </div><!-- container -->
    </section>

    <div class="overlay overlay-hugeinc">
        <button type="button" class="overlay-close">Close</button>
        <nav>
            <ul>
                <li class="hideit"><a href="#">主页</a></li>
                <li class="hideit"><a href="#bigfeatures">功能介绍</a></li>
                <li class="hideit"><a href="#speciality">特点</a></li>
                <li class="hideit"><a href="#gallery">成功案例</a></li>
                <li class="hideit"><a href="#testimonial">Testimonial</a></li>
                <!-- <li class="hideit"><a href="#team">Team</a></li> -->
                <li class="hideit"><a href="#footer">联系我们</a></li>
            </ul>
        </nav>
    </div>
    <script src="static/js/jquery-1.11.2.min.js"></script>
    <script src="static/js/wow.min.js"></script>
    <script src="static/js/owl-carousel.js"></script>
    <script src="static/js/nivo-lightbox.min.js"></script>
    <script src="static/js/smoothscroll.js"></script>
    <!--<script src="js/jquery.ajaxchimp.min.js"></script>-->
    <script src="static/js/bootstrap.min.js"></script>
    <script src="static/js/classie.js"></script>
    <script src="static/js/script.js"></script>
    <script>
        new WOW().init();
    </script>
    <script>
        $(document).ready(function () {
            $(".hideit").click(function () {
                $(".overlay").hide();
            });
            $("#trigger-overlay").click(function () {
                $(".overlay").show();
            });
        });
    </script>
    <script>
        $(document).ready(function () {

            var kawa = $('.top-bar');
            var back = $('#back-to-top');
            function scroll() {
                if ($(window).scrollTop() > 700) {
                    kawa.addClass('fixed');
                    back.addClass('show-top');

                } else {
                    kawa.removeClass('fixed');
                    back.removeClass('show-top');
                }
            }

            document.onscroll = scroll;
        });
    </script>
    <!--HHHHHHHHHHHH        Smooth Scrooling     HHHHHHHHHHHHHHHH-->
    <script>
        $(function () {
            $('a[href*=#]:not([href=#])').click(function () {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
    </script>


    <div class="container"></div>

    <!-- 客服部分 -->
    <div style="right:-230px;" class="contactusdiyou">
        <div class="hoverbtn">
            <span>联</span><span>系</span><span>我</span><span>们</span>
            <img class="hoverimg" src="static/picture/hoverbtnbg.gif" height="9" width="13">
        </div>
        <div class="conter">
            <div class="con1">
                <dl class="fn_cle">
                    <dt><img src="static/picture/tel.png" height="31" width="31"></dt>
                    <dd class="f1">咨询热线：</dd>
                    <dd class="f2"><span class="ph_num">{pboot:companymobile}</span></dd>
                </dl>
            </div>
            <div class="blank0"></div>
            <div class="qqcall">
                <dl class="fn_cle">
                    <dt><img src="static/picture/zxkfqq.png" height="31" width="31"></dt>
                    <dd class="f1 f_s14">在线客服：</dd>
                    <dd class="f2 kefuQQ">
                        <span>客服一</span>
                        <a target="_blank" href="http://wpa.qq.com/pa?p=1:{label:qq1}:1"></a>
                        <span>客服二</span>
                        <a target="_blank" href="http://wpa.qq.com/pa?p=1:{label:qq2}:1"></a>
                    </dd>
                </dl>
                <div class="blank0"></div>
            </div>
            <div class="blank0"></div>
            <div class="weixincall">
                <dl class="fn_cle">
                    <dt><img src="static/picture/weixin.png" height="31" width="31"></dt>
                    <dd class="f1">官方微信客服：</dd>
                    <dd class="f3"><img src="{pboot:companyweixin}" height="73" width="73"></dd>
                </dl>
            </div>
            <div class="blank0"></div>
            <div class="dytimer">
                <span style="font-weight: bold;">公司官网：</span>
                <span><a href="">{pboot:sitedomain}</a></span>
            </div>
        </div>
    </div>

    <div class="diyoumask"></div>

    <script type="text/javascript">
        $(function () {
            $(".contactusdiyou").hover(function () {
                $(".hoverimg").attr("src", "images/hoverbtnbg1.gif");
                $('.diyoumask').fadeIn();
                $('.contactusdiyou').animate({ right: '0' }, 300);
            }, function () {
                $(".hoverimg").attr("src", "images/hoverbtnbg.gif");
                $('.contactusdiyou').animate({ right: '-230px' }, 300, function () { });
                $('.diyoumask').fadeOut();
            });
        });
    </script>
</body>

</html><?php return array (
); ?>