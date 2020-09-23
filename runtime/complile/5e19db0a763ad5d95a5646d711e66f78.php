<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>{pboot:pagetitle}</title>
    <meta name="keywords" content="{pboot:pagekeywords}">
    <meta name="description" content="{pboot:pagedescription}">
    <link rel="stylesheet" type="text/css" href="static/css/style.css" />

    <script type="text/javascript" src="static/js/jquery-1.3.2.min.js"></script>

    <script src="static/js/jquery.sochange.js" type="text/javascript"></script>

    <script type="text/javascript" src="static/js/msclass.js"></script>

    <script src="static/js/jq_scroll.js" type="text/javascript"></script>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <!--top-->
    <div id="top">
        <div class="top">
            <div class="top">
                <div class="logo"><a href="{pboot:sitepath}/"><img src="{pboot:sitelogo}" /></a></div>
                <div class="top_right">
                    <div class="top_right_top">
                        <div class="tel"><a href="{pboot:sitepath}/">English</a> | <a href="{pboot:sitepath}/">español</a></div>
                        <div class="ser">
                            <form action="{pboot:scaction}" method="post" name="searchForm" onSubmit="return CheckForm();">
                                <input type="image" class="ser_btn_left" src="static/images/search_kuan_2.png" />
                                <input value="Keyword" name="keyword" id="keyword" onfocus="this.value=''" type="text"
                                    class="Itext" />
                                <input type="image" class="ser_btn" src="static/images/search_kuan.png" />
                            </form>
                        </div>
                    </div>
                    <div class="menu">
                        <ul>
                            <li><a href="{pboot:sitepath}/" id="yishi">HOME</a></li>
                            {pboot:nav parent=0}
                            <li><a href="[nav:link]" id="yishi">[nav:name]</a>
                                <div class="mainNav">
                                    <div class="mainNav_left">
                                        {pboot:2nav parent=[nav:scode]}
                                        <div class="mainNav_lanmu"><a href="[2nav:link]" title="[2nav:name]">[2nav:name]</div>
                                        {/pboot:2nav}

                                    </div>
                                    <div class="mainNav_right">
                                        <a href="[nav:link]"><img src="[nav:ico]" width="232" height="173" />
                                            <p>
                                                <h4 class="color1">[nav:name]</h4>
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            {/pboot:nav}
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div style="clear:both;"></div>
<!--contemt-->
<div id="products">
    <div class="products">
        <div class="products_kuan">
            <div class="products_left">
    <div class="products_bt">
        <h4>{sort:topname}</h4>
    </div>
    {pboot:nav parent={sort:tcode}}
    <div class="products_lanmu"><a href="[nav:link]" class="leftarricon {pboot:if([nav:scode]=={sort:scode})}po{/pboot:if}" title="[nav:name]">[nav:name]</a></div>
    {/pboot:nav}
</div>
            <div class="products_right">
                <div class="products_right_weizi">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your present position: {pboot:position separator='<span>>></span>' indextext="HOME"}</div>
                <div class="products_cp" style="color:#cccccc;">
                    {content:content}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="web_info">
    <!--<div class="head_b"></div>-->
    <div class="item">
        <div class="icon_tel"><img src="static/picture/foot_icon06.png" alt="" /></div>
        <div class="msg">{pboot:companymobile} / {pboot:companyphone}</div>
    </div>
    <!--    <div class="item"><div class="icon_email"><img src="static/picture/foot_icon07.png" alt="" /></div><div class="msg"></div></div>-->
    <div class="item">
        <div class="icon_addr"><img src="static/picture/foot_icon08.png" alt="" /></div>
        <div class="msg">{pboot:companyaddress}</div>
    </div>
</div>
<div class="footer">
    <a href="{pboot:sitepath}/" title="返回首页"
        style="background-image:url(static/images/1cf3778d924f97466e1f6831c065a555.png); background-size:0.34rem 0.34rem;">
        <span>返回首页</span>
    </a><a href="tel:{pboot:companyphone}" title="一键咨询"
        style="background-image:url(static/images/68d411b8783e49ff6d9153946f145886.png); background-size:0.34rem 0.34rem;">
        <span>一键咨询</span>
    </a>
    <a href="/?pages_5/" title="在线咨询"
        style="background-image:url(static/images/12cd12102d48899fdf25adc26d5011fb.png); background-size:0.34rem 0.34rem;">
        <span>在线咨询</span>
    </a> <a href="/?pages_5/" title="我要留言"
        style="background-image:url(static/images/b495323c83559b192e14bcfd41582ae9.png); background-size:0.34rem 0.34rem;">
        <span>我要留言</span>
    </a></div>
</div>
</body>

</html><?php return array (
  0 => 'D:/xampp/htdocs/template/default/html/head.html',
  1 => 'D:/xampp/htdocs/template/default/html/left.html',
  2 => 'D:/xampp/htdocs/template/default/html/pos.html',
  3 => 'D:/xampp/htdocs/template/default/html/foot.html',
); ?>