<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>顶部</title>
    
	    <link href="/Public/Analyze/css/style.css" rel="stylesheet" type="text/css" />
    <script language="JavaScript" src="/Public/Analyze/js/old/jquery.js"></script>
		<script type="text/javascript" src="/Public/Analyze/js/old/jsapi.js"></script>
	<script type="text/javascript" src="/Public/Analyze/js/old/format+zh_CN,default,corechart.I.js"></script>        
	<script type="text/javascript" src="/Public/Analyze/js/old/jquery.gvChart-1.0.1.min.js"></script>

	<script type="text/javascript" src="/Public/Analyze/js/old/jquery.ba-resize.min.js"></script>

	<link href="/Public/Analyze/css/select.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/Public/Analyze/js/old/jquery.idTabs.min.js"></script>
	<script type="text/javascript" src="/Public/Analyze/js/old/select-ui.min.js"></script>
	<script type="text/javascript" src="/Public/plugins/editor/kindeditor.js"></script>

    <style type="text/css">
        .user a{display: inline-block; margin-right: 5px; font-style: normal; line-height: 30px; font-size: 14px; color: #b8ceda;} 
    </style>
    <script type="text/javascript">
    $(function(){	
    	//顶部导航切换
    	$(".nav li a").click(function(){
    		$(".nav li a.selected").removeClass("selected")
    		$(this).addClass("selected");
    	})
    })	
    </script>
    <base target="rightFrame" />
</head>

<body style="background:url(/Public/Analyze/images/topbg.gif) repeat-x;">
    <div class="topleft">
        <a href="<?php echo U('Index/main');?>" target="_parent"><img src="/Public/Analyze/images/logo.png" title="系统首页" /></a>
    </div>

    <ul class="nav">
        <li><a href="<?php echo U('Uimaker/index');?>" class="selected"><img src="/Public/Analyze/images/icon01.png" title="工作台" /><h2>工作台</h2></a></li>
        <li><a href="<?php echo U('Uimaker/imgtable');?>"><img src="/Public/Analyze/images/icon02.png" title="模型管理" /><h2>模型管理</h2></a></li>
        <li><a href="<?php echo U('Uimaker/imglist');?>" ><img src="/Public/Analyze/images/icon03.png" title="模块设计" /><h2>模块设计</h2></a></li>
        <li><a href="<?php echo U('Uimaker/tools');?>" ><img src="/Public/Analyze/images/icon04.png" title="常用工具" /><h2>常用工具</h2></a></li>
        <li><a href="<?php echo U('Uimaker/computer');?>"><img src="/Public/Analyze/images/icon05.png" title="文件管理" /><h2>文件管理</h2></a></li>
        <li><a href="<?php echo U('Uimaker/tab');?>" ><img src="/Public/Analyze/images/icon06.png" title="系统设置" /><h2>系统设置</h2></a></li>
    </ul>

    <div class="topright">  
        <ul>
            <li><span><img src="/Public/Analyze/images/help.png" title="帮助"  class="helpimg"/></span><a href="<?php echo U('Public/help');?>">帮助</a></li>
            <li><a href="#">书签</a></li>
            <li><a href="#">导入导出</a></li>
            <li><select id="sel">
                <option value="1">ALL</option>
                <option value="1">A店</option>
                <option value="2">B店</option>
                <option value="3">C店</option>
                <option value="4">D店</option>
            </select></li>
            <li><a>全局分类</a>
                <ul>
                    <li><a href="#">冰箱</a></li>
                    <li><a href="#">空调</a></li>
                    <li><a href="#">电灯</a></li>
                </ul>
            </li>
            <li><a href="/">缓存</a></li>
            <li><a href="/">刷新</a></li>
        </ul>

        <div class="user">
            <span>admin</span>
            <i>消息</i>
            <b>5</b>
            <i><a href="<?php echo U('Uimaker/loginout');?>" target="_parent">退出</a></i>
        </div>
    </div>
</body>
</html>