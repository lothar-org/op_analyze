<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>左侧菜单</title>

    
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


    <script type="text/javascript">
    $(function(){
        //导航切换
        $(".menuson li").click(function(){
            $(".menuson li.active").removeClass("active")
            $(this).addClass("active");
        });

        $('.title').click(function(){
            var $ul = $(this).next('ul');
            $('dd').find('ul').slideUp();
            if($ul.is(':visible')){
                $(this).next('ul').slideUp();
            }else{
                $(this).next('ul').slideDown();
            }
        });
    })
    </script>
<base target="rightFrame" />
</head>

<body style="background:#f0f9fd;">
    <div class="lefttop"><span></span><a href="<?php echo U('Uimaker/model');?>">模型参考</a></div>

    <dl class="leftmenu">
        <dd>
            <div class="title"><span><img src="/Public/Analyze/images/leftico01.png" /></span>总体概况</div>
            <ul class="menuson">
                <li class="active"><cite></cite><a href="<?php echo U('Index/home');?>">首页</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Index/base',array('test'=>666));?>">数据概况</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Index/store');?>">各店铺销售趋势分析</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Index/area');?>">各区域销售分析</a><i></i></li>
            </ul>
        </dd>

        <dd>
            <div class="title"><span><img src="/Public/Analyze/images/leftico02.png" /></span>仓库管理（WMS）</div>
            <ul class="menuson">
                <li><cite></cite><a href="<?php echo U('Wms/index');?>">数据概况</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Wms/index');?>">趋势图</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Wms/index');?>">仓库透视表</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Wms/index');?>">库存明细报表</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Wms/index');?>">库存安全分析</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Wms/index',array('alert'=>'yes'));?>">库存预警/预期进货</a><i></i></li>
            </ul>
        </dd>

        <dd>
            <div class="title"><span><img src="/Public/Analyze/images/leftico03.png" /></span>店铺分析</div>
            <ul class="menuson">
                <li><cite></cite><a href="<?php echo U('Store/index');?>">数据概况</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Store/index');?>">趋势图</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Store/index');?>">透视表</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Oms/index');?>">订单列表</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Oms/index');?>">订单明细</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Oms/index');?>">集中度分析</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Store/index');?>">店铺比较</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Store/index');?>">毛利分析</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Store/index');?>">店铺打分</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Store/index');?>">店铺坪效</a><i></i></li>
            </ul>
        </dd>
 
        <dd>
            <div class="title"><span><img src="/Public/Analyze/images/leftico04.png" /></span>商品分析</div>
            <ul class="menuson">
                <li><cite></cite><a href="<?php echo U('Goods/index');?>">商品列表</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Goods/index');?>">单品分析</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Goods/index');?>">对比分析</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Goods/index');?>">象限分析</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Goods/index');?>">毛利分析</a><i></i></li>
            </ul>
        </dd>

        <dd>
            <div class="title"><span><img src="/Public/Analyze/images/leftico04.png" /></span>物流分析</div>
            <ul class="menuson">
                <li><cite></cite><a href="<?php echo U('Logistics/index');?>">数据概况</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Logistics/index');?>">配送趋势</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Logistics/index');?>">配送区域分析</a><i></i></li>
            </ul>
        </dd>

        <dd>
            <div class="title"><span><img src="/Public/Analyze/images/leftico04.png" /></span>售后明细</div>
            <ul class="menuson">
                <li><cite></cite><a href="<?php echo U('Asales/index');?>">备件库清单</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Asales/index');?>">返修发货清单</a><i></i></li>
            </ul>
        </dd>

        <dd>
            <div class="title"><span><img src="/Public/Analyze/images/leftico04.png" /></span>营销策略</div>
            <ul class="menuson">
                <li><cite></cite><a href="<?php echo U('Market/index');?>">营销策略</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Market/index');?>">单图报表</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Market/index');?>">往期对比</a><i></i></li>
            </ul>
        </dd>

        <dd>
            <div class="title"><span><img src="/Public/Analyze/images/leftico04.png" /></span>数据录入</div>
            <ul class="menuson">
                <li><cite></cite><a href="<?php echo U('Getdata/index');?>">手动录入</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Getdata/inout');?>">导入导出</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Getdata/index');?>">SQL</a><i></i></li>
            </ul>
        </dd>

        <dd>
            <div class="title"><span><img src="/Public/Analyze/images/leftico04.png" /></span>系统设置</div>
            <ul class="menuson">
                <li><cite></cite><a href="<?php echo U('Sys/index');?>">管理员</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Sys/index');?>">管理员分组</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Sys/index');?>">管理员密码</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Sys/index');?>">统一参数调度</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Sys/index');?>">备忘录</a><i></i></li>
            </ul>
        </dd>
    </dl>

    <!-- <dl class="leftmenu">
        <dd>
            <div class="title"><span><img src="/Public/Analyze/images/leftico01.png" /></span>总体概况</div>
            <ul class="menuson">
                <li class="active"><cite></cite><a href="<?php echo U('Index/home');?>">首页</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Index/base');?>">数据概况</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Index/store');?>">各店铺销售趋势分析</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Index/area');?>">各区域销售分析</a><i></i></li>
            </ul>
        </dd>

        <dd>
            <div class="title"><span><img src="/Public/Analyze/images/leftico02.png" /></span>店铺数据</div>
            <ul class="menuson">
                <li><cite></cite><a href="<?php echo U('Store/index');?>">数据概况</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Store/index');?>">毛利分析</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Store/index');?>">店铺打分</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Store/index');?>">店铺坪效</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Store/index');?>">店铺比较</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Store/index');?>">品类、品牌</a><i></i></li>
            </ul>
        </dd>

        <dd>
            <div class="title"><span><img src="/Public/Analyze/images/leftico03.png" /></span>商品数据</div>
            <ul class="menuson">
                <li><cite></cite><a href="<?php echo U('Goods/index');?>">数据概况</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Goods/index');?>">商品毛利分析</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Goods/index');?>">对比分析</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Goods/index');?>">型号</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Goods/index');?>">库存安全分析</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Goods/index');?>">季度榜单</a><i></i></li>
            </ul>
        </dd>
 
        <dd>
            <div class="title"><span><img src="/Public/Analyze/images/leftico04.png" /></span>营销策略</div>
            <ul class="menuson">
                <li><cite></cite><a href="<?php echo U('Market/index');?>">营销策略</a><i></i></li>
            </ul>
        </dd>

        <dd>
            <div class="title"><span><img src="/Public/Analyze/images/leftico04.png" /></span>数据录入</div>
            <ul class="menuson">
                <li><cite></cite><a href="<?php echo U('Getdata/index');?>">手动录入</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Getdata/inout');?>">文件导入</a><i></i></li>
            </ul>
        </dd>

        <dd>
            <div class="title"><span><img src="/Public/Analyze/images/leftico04.png" /></span>系统设置</div>
            <ul class="menuson">
                <li><cite></cite><a href="<?php echo U('Sys/index');?>">统一参数调度</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Sys/index');?>">管理员分组</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Sys/index');?>">管理员权限</a><i></i></li>
                <li><cite></cite><a href="<?php echo U('Sys/index');?>">管理员密码</a><i></i></li>
            </ul>
        </dd>

    </dl> -->


</body>
</html>