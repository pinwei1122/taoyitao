<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>{pboot:pagetitle}</title>
    <meta name="keywords" content="{pboot:pagekeywords}">
    <meta name="description" content="{pboot:pagedescription}">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <link rel="stylesheet" type="text/css" href="static/css/base.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="static/css/index.css" media="screen" />
    <link type="text/css" rel="stylesheet" href="static/css/jquery.mmenu.all.css" />
    <script type="text/javascript" src="static/js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="static/js/screensize.js"></script>
    <script type="text/javascript" src="static/js/swipe.js"></script>
    <script type="text/javascript" src="static/js/jquery.mmenu.all.min.js"></script>
    <link rel="stylesheet" type="text/css" href="static/css/subpage.css" />

</head>

<script type="text/javascript" src="static/js/form.js"></script>

<script type="text/javascript">
    $(function () {
        $("#menu").mmenu({
            offCanvas: {
                position: "right"
            },
            navbar: {
                title: '分类'
            },
            navbars: [{
                position: 'top',
                content: [
                    'prev',
                    'title',
                    'close'
                ]
            }]
        });
    });
</script>

<body>
    <div class="header">
        <a href="{pboot:sitepath}/" title="返回首页" class="return"></a>
    </div>
    <div class="allpage">
        <div class="title">在线留言</div>
        <div class="content">
            <!-- <center>留言/预约</center> -->
            <p class="red_alert"></p>
            <ul class="login">
                <form method="post" action="{pboot:msgaction}" name="form1" class="msgForm">
                    <li>
                        <input class="login_input" name="msg_title" type="text" id="title" placeholder="标题" />
                    </li>
                    <li>
                        <textarea class="login_textarea" name="content" id="content" cols="30" rows="10"
                            placeholder="内容"></textarea>
                    </li>
                    <li>
                        <input class="login_input" name="mobile" type="text" id="mobile" placeholder="手机" />
                    </li>
                    <li>
                        <input class="login_input pin_width" id="valid" name="checkcode" type="text" maxlength="4"
                            placeholder="请输入验证码" />
                            <img title="点击刷新" src="{pboot:checkcode}" onclick="this.src='{pboot:checkcode}?'+Math.round(Math.random()*10);" class="login_pin" />
                    </li>
                    <li>
                        <input class="login_btn theme-color" id="baidu-book" type="submit" value="提   交" />
                    </li>
                </form>
            </ul>
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
  0 => 'D:/xampp/htdocs/template/default/html/foot.html',
); ?>