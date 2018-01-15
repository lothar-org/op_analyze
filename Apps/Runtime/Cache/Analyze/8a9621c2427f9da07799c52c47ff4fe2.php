<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>参考模型</title>
<link href="/Public/Analyze/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Public/Analyze/js/old/jquery.js"></script>
<script type="text/javascript" src="/Public/Analyze/js/old/jsapi.js"></script>
<script type="text/javascript" src="/Public/Analyze/js/old/format+zh_CN,default,corechart.I.js"></script>        
<script type="text/javascript" src="/Public/Analyze/js/old/jquery.gvChart-1.0.1.min.js"></script>
<script type="text/javascript" src="/Public/Analyze/js/old/jquery.ba-resize.min.js"></script>

<script type="text/javascript">
    gvChartInit();
    jQuery(document).ready(function(){

         jQuery('#myTable6').gvChart({  
             chartType: 'PieChart',  
             gvSettings: {  
                 vAxis: { title: 'No of players' },  
                 hAxis: { title: 'Month' },  
                 width: 720,  
                 height: 300  
             }  
         });

         jQuery('#myTable1').gvChart({  
             chartType: 'AreaChart',  
             gvSettings: {  
                 vAxis: { title: '金额' },  
                 hAxis: { title: '月份' },  
                 width: 720,  
                 height: 300  
             }  
         });
           
         jQuery('#myTable2').gvChart({  
             chartType: 'LineChart',  
             gvSettings: {  
                 vAxis: { title: '金额' },  
                hAxis: { title: '月份' },  
                 width: 720,  
                 height: 300  
             }  
         });  
           
         jQuery('#myTable3').gvChart({  
             chartType: 'BarChart',  
             gvSettings: {  
                 vAxis: { title: '金额' },  
                 hAxis: { title: '月份' },  
                width: 720,  
                 height: 300  
             }  
         });  
  
         jQuery('#myTable4').gvChart({  
             chartType: 'ColumnChart',  
             gvSettings: {  
                 vAxis: { title: '金额' },  
                 hAxis: { title: '月份' },  
                 width: 720,  
                 height: 300  
             }  
         });  
  
         jQuery('#myTable5').gvChart({  
             chartType: 'PieChart',  
             gvSettings: {  
                 vAxis: { title: '金额' },  
                 hAxis: { title: '月份' },  
                 width: 720,  
                 height: 300  
             }  
         });  


    });
</script>
</head>

<body>
<div class="place">
    <span>位置：</span>
    <ul class="placeul">
        <li><a href="#">首页</a></li>
        <li><a href="#">工作台</a></li>
    </ul>
</div>

<div class="mainbox">
<div class="mainleft">
<div class="leftinfo">

    <div class="listtitle"><a href="#" class="more1">更多</a>数据统计</div>
        
    <div class="maintj">  
        <table id='myTable6'>
            <caption>饼状图 - 每月销售额占比</caption>
            <thead>
                <tr>
                    <th></th>
                    <th>Jan</th>
                    <th>Feb</th>
                    <th>Mar</th>
                    <th>Apr</th>
                    <th>May</th>
                    <th>Jun</th>
                    <th>Jul</th>
                    <th>Aug</th>
                    <th>Sep</th>
                    <th>Oct</th>
                    <th>Nov</th>
                    <th>Dec</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>2010</th>
                    <td>125</td>
                    <td>185</td>
                    <td>327</td>
                    <td>359</td>
                    <td>376</td>
                    <td>398</td>
                    <td>545</td>
                    <td>567</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
            </tbody>
        </table>  
        <div title="Title1" style="padding: 10px;"> 
            <h2 id="area"> 区域报表 </h2> 
            <table id='myTable1'> 
                <caption> 报表分析 </caption> 
                <thead> <tr> <th> </th> <th> 一月 </th> <th> 二月 </th> <th> 三月 </th> <th> 四月 </th> <th> 五月 </th> <th> 六月 </th> <th> 七月 </th> <th> 八月 </th> <th> 九月 </th> <th> 十月 </th> <th> 十一月 </th> <th> 十二月 </th> </tr> </thead> 
                <tbody> <tr> <th> 实际完成 </th> <td> 900 </td> <td> 600 </td> <td> 327 </td> <td> 359 </td> <td> 376 </td> <td> 398 </td> <td> 60 </td> <td> 50 </td> <td> 404 </td> <td> 700 </td> <td> 200 </td> <td> 500 </td> </tr> <tr> <th> 计划任务 </th> <td> 1167 </td> <td> 1110 </td> <td> 691 </td> <td> 165 </td> <td> 135 </td> <td> 157 </td> <td> 139 </td> <td> 136 </td> <td> 938 </td> <td> 1120 </td> <td> 55 </td> <td> 55 </td> </tr> </tbody> 
            </table> 
        </div> 

        <div title="Title2" style="padding: 10px;"> 
            <h2 id="line"> LineChart </h2> 
            <table id='myTable2'> 
                <caption> 报表分析 </caption> 
                <thead> <tr> <th> </th> <th> 一月 </th> <th> 二月 </th> <th> 三月 </th> <th> 四月 </th> <th> 五月 </th> <th> 六月 </th> <th> 七月 </th> <th> 八月 </th> <th> 九月 </th> <th> 十月 </th> <th> 十一月 </th> <th> 十二月 </th> </tr> </thead> 
                <tbody> <tr> <th> 实际完成 </th> <td> 900 </td> <td> 600 </td> <td> 327 </td> <td> 359 </td> <td> 376 </td> <td> 398 </td> <td> 60 </td> <td> 50 </td> <td> 404 </td> <td> 700 </td> <td> 200 </td> <td> 500 </td> </tr> <tr> <th> 计划任务 </th> <td> 1167 </td> <td> 1110 </td> <td> 691 </td> <td> 165 </td> <td> 135 </td> <td> 157 </td> <td> 139 </td> <td> 136 </td> <td> 938 </td> <td> 1120 </td> <td> 55 </td> <td> 55 </td> </tr> </tbody> 
            </table> 
        </div> 

        <div title="Title3" style="padding: 10px;"> 
            <h2 id="bar"> BarChart </h2> 
            <table id='myTable3'> 
                <caption> 报表分析 </caption> 
                <thead> <tr> <th> </th> <th> 一月 </th> <th> 二月 </th> <th> 三月 </th> <th> 四月 </th> <th> 五月 </th> <th> 六月 </th> <th> 七月 </th> <th> 八月 </th> <th> 九月 </th> <th> 十月 </th> <th> 十一月 </th> <th> 十二月 </th> </tr> </thead> 
                <tbody> <tr> <th> 实际完成 </th> <td> 900 </td> <td> 600 </td> <td> 327 </td> <td> 359 </td> <td> 376 </td> <td> 398 </td> <td> 60 </td> <td> 50 </td> <td> 404 </td> <td> 700 </td> <td> 200 </td> <td> 500 </td> </tr> <tr> <th> 计划任务 </th> <td> 1167 </td> <td> 1110 </td> <td> 691 </td> <td> 165 </td> <td> 135 </td> <td> 157 </td> <td> 139 </td> <td> 136 </td> <td> 938 </td> <td> 1120 </td> <td> 55 </td> <td> 55 </td> </tr> </tbody> 
            </table> 
        </div> 

        <div title="Title4" style="padding: 10px;"> 
            <h2 id="column"> ColumnChart </h2> 
            <table id='myTable4'> 
                <caption> 报表分析 </caption> 
                <thead> <tr> <th> </th> <th> 一月 </th> <th> 二月 </th> <th> 三月 </th> <th> 四月 </th> <th> 五月 </th> <th> 六月 </th> <th> 七月 </th> <th> 八月 </th> <th> 九月 </th> <th> 十月 </th> <th> 十一月 </th> <th> 十二月 </th> </tr> </thead> 
                <tbody> <tr> <th> 实际完成 </th> <td> 900 </td> <td> 600 </td> <td> 327 </td> <td> 359 </td> <td> 376 </td> <td> 398 </td> <td> 60 </td> <td> 50 </td> <td> 404 </td> <td> 700 </td> <td> 200 </td> <td> 500 </td> </tr> <tr> <th> 计划任务 </th> <td> 1167 </td> <td> 1110 </td> <td> 691 </td> <td> 165 </td> <td> 135 </td> <td> 157 </td> <td> 139 </td> <td> 136 </td> <td> 938 </td> <td> 1120 </td> <td> 55 </td> <td> 55 </td> </tr> </tbody> 
            </table> 
        </div> 

        <div title="Title5" style="padding: 10px;"> 
            <h2 id="pie"> PieChart </h2> 
            <table id='myTable5'> 
                <caption> 报表分析 </caption> 
                <thead> <tr> <th> </th> <th> 一月 </th> <th> 二月 </th> <th> 三月 </th> <th> 四月 </th> <th> 五月 </th> <th> 六月 </th> <th> 七月 </th> <th> 八月 </th> <th> 九月 </th> <th> 十月 </th> <th> 十一月 </th> <th> 十二月 </th> </tr> </thead> 
                <tbody> <tr> <th> 2010 </th> <td> 125 </td> <td> 185 </td> <td> 327 </td> <td> 359 </td> <td> 376 </td> <td> 398 </td> <td> 0 </td> <td> 0 </td> <td> 0 </td> <td> 0 </td> <td> 0 </td> <td> 0 </td> </tr> </tbody> 
            </table> 
        </div> 
    </div>
    
</div>
<!--leftinfo end-->
</div>
<!--mainleft end-->
</div>

</body>
<script type="text/javascript">
    setWidth();
    $(window).resize(function(){
        setWidth(); 
    });
    function setWidth(){
        var width = ($('.leftinfos').width()-12)/2;
        $('.infoleft,.inforight').width(width);
    }
</script>
</html>