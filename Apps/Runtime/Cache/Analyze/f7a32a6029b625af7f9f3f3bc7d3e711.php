<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>数据概况</title>
    <link rel="stylesheet" type="text/css" href="/Public/Analyze/css/style.css">
    	<link type="text/css" rel="stylesheet" href="/Public/Analyze/css/default.css" />
	<script type="text/javascript" src="/Public/Analyze/js/jquery-1.11.3.min.js"></script>
	<!-- 选项卡 -->
	<script type="text/javascript" src="/Public/Analyze/js/jquery.SuperSlide.js"></script>
	<!-- 日历 -->
	<script type="text/javascript" src="/Public/plugins/laydate/laydate.js"></script>
	<!-- EChart -->
	<script type="text/javascript" src="/Public/plugins/EChart/echarts.min.js"></script>
	<script type="text/javascript" src="/Public/plugins/EChart/china.js"></script>

</head>

<body>
<div class="place">
    <span>位置：</span>
    <ul class="placeul">
        <li><a href="#">首页</a></li>
        <li><a href="#">数据概况</a></li>
    </ul>
</div>

<div class="mainbox">
<div class="mainleft">
<div class="leftinfo" style="height:auto">

    <div class="listtitle"><a href="#" class="more1">更多</a>数据统计</div> 
    <div class="maintj"> 
    <div id="main" style="height:500px;width:700px;"></div>
    </div>
    <script type="text/javascript">
    // var json_data = [
    //     [120, 132, 101, 134, 90, 230, 210, 210],
    //     [220, 182, 191, 234, 290, 330, 310, 310],
    //     [150, 232, 201, 154, 190, 330, 410, 410],
    //     [320, 332, 301, 334, 390, 330, 320, 320],
    //     [820, 932, 901, 934, 1290, 1330, 1320, 1320],
    //     [820, 932, 901, 934, 1290, 1330, 1320, 1320],
    // ]
    // var title_text = '折线图';
    // var legend_data = ['入库量','出库量','商品数','库存商品金额','仓库变量1','仓库变量2'];
    // var xAxis_data = ['周一','周二','周三','周四','周五','周六','周日','预期'];
    // var yAxis_name = '销售额';
    // var series_type = 'line';
    // var series_stack = '总量';


    // var myChart = echarts.init(document.getElementById('main'));
    // option = {
    //     title: {
    //         text: title_text
    //     },
    //     tooltip: {
    //         trigger: 'axis'
    //     },
    //     legend: {
    //         data:legend_data
    //     },
    //     grid: {
    //         left: '3%',
    //         right: '4%',
    //         bottom: '5%',
    //         containLabel: true
    //     },
    //     xAxis: {
    //         type: 'category',
    //         boundaryGap: false,
    //         data: xAxis_data
    //     },
    //     yAxis: {
    //         name: yAxis_name,
    //         type: 'value'
    //     },
    //     // 右侧
    //     toolbox: {
    //         show: true,
    //         orient: 'vertical',
    //         left: 'right',
    //         top: 'center',
    //         feature: {
    //             dataView: {readOnly: false},
    //             restore: {},
    //             saveAsImage: {}
    //         }
    //     },
    //     series: [
    //         {
    //             name:legend_data[0],
    //             type:series_type,
    //           //  stack: series_stack,
    //             data:json_data[0]
    //         },
    //         {
    //             name:legend_data[1],
    //             type:series_type,
    //           //  stack: series_stack,
    //             data:json_data[1]
    //         },
    //         {
    //             name:legend_data[2],
    //             type:series_type,
    //            // stack: series_stack,
    //             data:json_data[2]
    //         },
    //         {
    //             name:legend_data[3],
    //             type:series_type,
    //           //  stack: series_stack,
    //             data:json_data[3]
    //         },
    //         {
    //             name:legend_data[4],
    //             type:series_type,
    //           //  stack: series_stack,
    //             data:json_data[4]
    //         },
    //         {
    //             name:legend_data[5],
    //             type:series_type,
    //           //  stack: series_stack,
    //             data:json_data[5]
    //         }
    //     ]
    // };
    // myChart.setOption(option); 
    </script>
    
</div>
<!--leftinfo end-->
</div>
<!--mainleft end-->
</div>
<script type="text/javascript">
    var json_data = [
        {"title":"衬衫","value":5,"value1":15,"value2":15},
        {"title":"羊毛衫","value":15,"value1":15,"value2":15},
        {"title":"雪纺衫","value":25,"value1":25,"value2":16},
        {"title":"裤子","value":45,"value1":15,"value2":15},
        {"title":"高跟鞋","value":15,"value1":25,"value2":15},
        {"title":"袜子","value":15,"value1":25,"value2":15}
    ];

    var col_title = ""; //标题的列名,固定为第一列
    var col_data = [] ; // 从第二列开始, 为值字段 , ["value","value1"];
    var col_data_name =[]; // 从第二列开始, 为值字段 , ["销量","值二"];

    var chart_title =new Array(); //标题娄组
    var chart_data = new Array(); //值数组

    //列标题,列字段名取值
    var col = 0;
    for(var key in json_data[0]){
        if(col==0)
            col_title = key;
        else {
            col_data.push(key);
            col_data_name.push(key);
        }
        col++;
    }

    //给值字段赋值
    for(var i =0;i<col_data.length;i++){
        chart_data[i] = {
            "name": col_data_name[i],
            "type":"bar",
            "data": [] //[5, 20, 40, 10, 10, 20]
        };
    }

    //填入标题及各值的数据
    for(var i=0;i<json_data.length;i++){
        chart_title.push(json_data[i]["title"]);
        for(var j =0;j<col_data.length;j++){
            var col_name = col_data[j];
            chart_data[j].data.push(json_data[i][col_name]);
            //chart_data[1].data.push(json_data[i]["value1"]);
        };
    };

// var arr = new Array(3);
// arr[0] = "George"
// arr[1] = "John"
// arr[2] = "Thomas"
// document.write(arr.push('123'))+ "<br />"
// document.write(col_name)
// alert(chart_data);
console.log(chart_data)

    var myChart = echarts.init(document.getElementById('main'));
    option = {
        // title: {
        //     text: title_text
        // },
        tooltip: {
            // trigger: 'axis',
            show: true
        },
        legend: {
            data:col_data_name
        },
        xAxis: {
            type: 'category',
            data: chart_title
        },
        yAxis: {
            // name: '销量',
            type: 'value'
        },
        series: chart_data
    };
    myChart.setOption(option); 
</script>
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