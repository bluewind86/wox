<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/reset.css" />
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/bluewind.css" />
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/style.css" />
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/qtip2/jquery.qtip.css" />
<!--[if lte IE 7]><script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/lte-ie7.js"></script><![endif]-->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery-1.7.2.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/common.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/qtip2/jquery.qtip.js"></script>
</head>

<body>
<div id="navbar" class="nav-h bg-blue">
	<div class="container">
        <a href="" class="logo">BLUEWIND!</a>
        <a href="" class="toggle-nav"><i class="icon-reorder"></i></a>
        <ul class="nav">
            <li><a href="" class="">首页</a></li>
            <li><a href="">系统</a></li>
            <li class="dropdown">
                <a href="">UI元素<i class="arrow"></i></a>
                <ul class="">
                    <li><a href="">基本元素</a></li>
                    <li><a href="">按钮</a></li>
                    <li><a href="">tab切换</a></li>
                    <li><a href="">图标</a></li>
                    <li><a href="">布局</a></li>
                    <li><a href="">其他</a></li>
                </ul>
            </li>
            <li><a href="">表格</a></li>
            <li><a href="">表单</a></li>
            <li><a href="">示例页面</a></li>
        </ul>
    </div>
</div>
<div class="container">
	<!--main content-->
    <div id="main">
        <!--sidebar-->
        <div class="sidebar ">
            <div class="side-search">
                <form class="search">
                    <input type="text" value="搜索..." class="keyword">
                    <a href="#" class="submit"><i class="icon-search-2"></i></a>
                </form>
            </div>
        	
            <ul class="side-nav mt15 clear">
                <li><a href=""><i class="icon-home-2"></i><span>管理首页</span></a></li>
                <li class="current">
                	<a href=""><i class="icon-desktop"></i><span>UI元素</span><i class="icon-right icon-angle-right"></i></a>
                    <ul class="sub-menu">
                    	<li class="current"><a href=""><b></b>概览</a></li>
                        <li><a href=""><b></b>tab切换</a></li>
                        <li><a href=""><b></b>按钮</a></li>
                        <li><a href=""><b></b>icon图标</a></li>
                    </ul>
                </li>
                <li><a href=""><i class="icon-edit"></i><span>表单</span></a></li>
                <li><a href=""><i class="icon-table-2"></i><span>表格</span></a></li>
            </ul>
        </div>
        <!--/sidebar-->
        <!--主内容-->
        <div class="content">
        	<div class="breadcrumbs">
            	<ul class="breadcrumb">
                	<li><a href=""><i class="icon-home"></i>主页</a></li>
                    <li>UI基本元素</li>
                </ul>
            </div>
			<div class="wrap">
                <div class="page-header">
                    <h3>UI基本元素</h3>
                </div>
                <div class="grid12">
                    <div class="unit12">
                        <div class="box">
                            <div class="box-title"><h4>盒子</h4></div>
                            <div class="box-content">
                                <blockquote>
                                    <p>"blockquote"水平描述列表将会对过长而无法在左栏中完全显示的列名截断掉一部分。而在较窄的视口（宽度）中，会改变成垂直(形式)表述，来适应当前屏幕。</p>
                                    <small>——陈震</small>
                                </blockquote>
                                <hr>
                                <dl class="dl-horizontal">
                                    <dt><code>dl-horizontal</code>dl-horizontal这是标题</dt>
                                    <dd><code>dd</code>这是描述，这是描述这是描述这是描述</dd>
                                    <dd><code>dd</code>这是描述2这是描述2这是描述2这是描述2</dd>
                                    <dd><code>dd</code>这是描述3这是描述3这是描述3这是描述3</dd>
                                </dl>
                                <hr>
                                <dl>
                                    <dt>dl标签，这里是title</dt>
                                    <dd>这是描述，这是dd</dd>
                                    <dd>这是描述2这是描述2这是dd</dd>
                                </dl>
                                <hr>
                                <pre>                  <code>pre</code>通过加入text-overflow，水平描述列表将会对过长而无法在左栏中完全显示的列名截断掉一部分。而在较窄的视口（宽度）中，会改变成垂直(形式)表述，来适应当前屏幕。
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="unit6 mt10">
                    	<div class="box" style="margin-right: 10px;">
                        	<div class="box-title"><h4>head标签</h4></div>
                            <div class="box-content">
                            	<table>
                                	<thead>
                                    	<tr><th>标签</th><th>样式</th></tr>
                                    </thead>
                                    <tbody>
                                    	<tr>
                                        	<td><code>h1</code></td>
                                            <td><h1>h1标签</h1></td>
                                        </tr>
                                    	<tr>
                                        	<td><code>h2</code></td>
                                            <td><h2>h2标签</h2></td>
                                        </tr>
                                    	<tr>
                                        	<td><code>h3</code></td>
                                            <td><h3>h3标签</h3></td>
                                        </tr>
                                        <tr>
                                        	<td><code>h4</code></td>
                                            <td><h4>h4标签</h4></td>
                                        </tr>
                                        <tr>
                                        	<td><code>h5</code></td>
                                            <td><h5>h5标签</h5></td>
                                        </tr>
                                        <tr>
                                        	<td><code>h6</code></td>
                                            <td><h6>h6标签</h6></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="unit6 mt10">
                    	<div class="box">
                        	<div class="box-title"><h4>HTML标签</h4></div>
                            <div class="box-content">
                            	<table>
                                	<thead>
                                    	<tr><th>标签</th><th>样式</th></tr>
                                    </thead>
                                    <tbody>
                                    	<tr>
                                        	<td><code>em</code></td>
                                            <td><em>em标签</em></td>
                                        </tr>
                                    	<tr>
                                        	<td><code>strong</code></td>
                                            <td><strong>strong标签</strong></td>
                                        </tr>
                                    	<tr>
                                        	<td><code>del</code></td>
                                            <td><del>del标签</del></td>
                                        </tr>
                                        <tr>
                                        	<td><code>mark</code></td>
                                            <td><mark>mark标签</mark></td>
                                        </tr>
                                        <tr>
                                        	<td><code>sup上标</code></td>
                                            <td><sup>sup标签</sup></td>
                                        </tr>
                                        <tr>
                                        	<td><code>cite</code></td>
                                            <td><cite>cite标签</cite></td>
                                        </tr>
                                        <tr>
                                        	<td><code>abbr</code></td>
                                            <td><abbr title="computer">abbr标签</abbr></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="grid12">
                	<div class="unit6">
                    	<div class="box">
                        	<div class="box-title"><h4>tip插件</h4></div>
                            <div class="box-content">
                            	<p>qtip2插件qtip2插件qtip2插件qtip2插件qtip2插件qtip2插件qtip2插件qtip2插件qtip2插件qtip2插件.</p>
                            	<p class="text-center">
                              		<a href="" class="button metro">上</a>
                                    <a href="" class="button metro">下</a>
                                    <a href="" class="button metro">左</a>
                                    <a href="" class="button metro">右</a>
                              	</p>  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <!--/主内容-->
    </div>
    <!--/main content-->
</div>
</body>
</html>
