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

<script>
	$(function () {
		//轮播图事件绑定
		// for(var i=0; i<$('#img_run li').length; i++){
		//     $('.img_ctrl').append('<div></div>');
		// }
		var imgLength = $('#img_run li').length;
		if (imgLength == 0) {
			$('.num_b').hide();
		}
		$('.num_b .all').text(imgLength);
		var imgRun = document.getElementById('img_run');
		window.imgAutoRun = Swipe(imgRun, {
			auto: 5000,
			continuous: true,
			callback: function (index, element) {
				// $('.img_ctrl').find('div').removeClass('now');
				// $($('.img_ctrl').find('div')[index]).addClass('now');
				if (imgLength == 2) {
					$('.num_b .now').text(index % 2 + 1);
				} else {
					$('.num_b .now').text(index + 1);
				}
			}
		});
	})
</script>

<body>
	<!--<div class="cheader"> <a href="javascript:window.history.back()" title="返回" class="return"></a>-->
	<div class="cheader"> <a href="{pboot:sitepath}/" title="返回" class="return"></a>
		<div class="links"> <a href="" title="商品" class="now">商品</a>
		</div>
		<div class="menu"></div>
	</div>
	<div class="viewban">
		<div id="img_run" class="viewbans swipe">
			<ul class="swipe-wrap clearfix">
				<div class="img_b"><img src="{content:ico}" alt=""></div>
			</ul>
		</div>
		<!-- <div class="img_ctrl"></div> -->
		<div class="num_b"><span class="now">1</span> / <span class="all">1</span></div>
	</div>
	<div class="vname_b">
		<div class="title">{content:title}</div>
		<div class="stitle"></div>
		<div class="icon"></div>
	</div>
	<table class="para_b">
	</table>
	<div class="cont">
		{content:content}
	</div>
	<div class="page_fy">
		<ul>
			<li>
				<div class="syt">上一条</div>
				<div class="syb"><a href="{content:prelink}">{content:pretitle}</a></div>

			</li>

			<li>
				<div class="syt">下一条</div>
				<div class="syb"><a href="{content:nextlink}">{content:nexttitle}</a></div>
			</li>
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