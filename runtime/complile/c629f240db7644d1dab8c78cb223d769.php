<!DOCTYPE html>
<html>

<head>
	<title>{pboot:pagetitle}</title>
	<meta name="keywords" content="{pboot:pagekeywords}">
	<meta name="description" content="{pboot:pagedescription}">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
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

<body style="background-color:#f5f5f5;">
	<div class="header">
		<a href="{pboot:sitepath}/" title="返回首页" class="return"></a>
		<!-- <div class="title">意式咖啡机</div> -->
		<a href="#menu" class="menu"></a>
		<nav id="menu">
			<ul>
				<li><a href="{pboot:sitepath}/">全部分类</a></li>
				{pboot:nav parent=0 num=4}
				<li id='1'><a href="[nav:link]">[nav:name]</a></li>
				{/pboot:nav}
			</ul>

		</nav>
	</div>
	<div class="bg_b"><a href="{pboot:sitepath}/" title=""><img src="{label:banner1}" alt=""></a></div>
	<div class="nav">
		{pboot:sort scode=1,2}
		<a href="[sort:link]" title="[sort:name]">[sort:name]</a>
		{/pboot:sort}
	</div>
	<div class="pros_col">
		{pboot:list scode='{sort:scode}' num='3'} 
		<div class="col">
			<a href="[list:link]" title="[list:title]">
				<div class="img"><img src="[list:ico]" alt="" /></div>
				<div class="title">[list:title len=6 more='...']</div>
			</a>
		</div>
		{/pboot:list}
	</div>
	<div class="prolist">
		{pboot:list num='10'} 
		<a class="item" href="[list:link]" title="[list:title]">
			<div class="img" style="background-image:url([list:ico]);"></div>
			<div class="name">[list:title]</div>
			<div class="info">
				<div class="stitle"></div>
				<div class="icon"></div>
			</div>
			{/pboot:list}
	</div>
	<div class='paging'> 
		<a class="prev" href="{page:pre}"><</a>
		<span class="current">{page:current}</span> 
		<a class="next" href="{page:next}">></a>
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