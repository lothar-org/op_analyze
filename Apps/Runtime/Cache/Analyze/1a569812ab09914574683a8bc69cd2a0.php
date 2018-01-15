<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>演示模板</title>
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
    <span>商品分析</span>
  </div>
  <div class="selectdate">
        <div class="selectdate_left lf">
            <span></span><a href="#" class="on">&nbsp;&nbsp;今天统计</a><span> | </span><a href="#">昨日统计</a><span> | </span><a href="#">过去7天</a><span> | </span><a href="#">过去30天</a><span> | </span><a href="#">过去60天</a> 
        </div>
        <div class="selectdate_right rt">
            <form id="form1" name="form1" method="get" action="">      
                开始时间&nbsp;<input name="starttime" type="text" id="starttime" class="inline laydate-icon"/>&nbsp;结束时间&nbsp;<input name="endtime" type="text" id="endtime" class="inline laydate-icon"/>              <input type="submit"  value="分析" class="submit">
            </form>
        </div>
  </div>
  <div class="top-data-box">
    <div class="top-data-title">今日播报&nbsp;[&nbsp;<span style="color:#FF6D06;">官网演示</span>&nbsp;]&nbsp;&nbsp;开始统计于：2013-04-27，稳定运行：1228&nbsp;天</div>
    <ul class="clearfix">
        <li class="lf" style="width:14.3%;">
            <div class="top-data-data tc">
                <p class="f14">订单数</p>
                <p class="color">327</p>
            </div>
        </li>
        <li class="lf" style="width:14.28%;">
            <div class="top-data-data tc">
                <p class="f14">销量</p>
                <p class="color">304</p>
            </div>
        </li>
        <li class="lf" style="width:14.28%;">
            <div class="top-data-data tc">
                <p class="f14">销售额</p>
                <p class="color">156</p>
            </div>
        </li>
        <li class="lf" style="width:14.28%;">
            <div class="top-data-data tc">
                <p class="f14">库存</p>
                <p class="color">172</p>
            </div>
        </li>
        <li class="lf" style="width:14.28%;">
            <div class="top-data-data tc">
                <p class="f14">品类</p>
                <p class="color">40</p>
            </div>
        </li>
        <li class="lf" style="width:14.28%;">
            <div class="top-data-data tc">
                <p class="f14">品牌</p>
                <p class="color">55</p>
            </div>
        </li>
        <li class="lf" style="width:14.28%;">
            <div class="top-data-data tc">
                <p class="f14">型号</p>
                <p class="color">9</p>
            </div>
        </li>
    </ul>
</div>
<div class="condition">
    <div class="shop">
        <p class="lf">门店：</p>
        <ul>
            <li class="lf"><a href="#" class="on">门店1</a></li>
            <li class="lf"><a href="#">门店1</a></li>
            <li class="lf"><a href="#">门店1</a></li>
            <li class="lf"><a href="#">门店1</a></li>
            <li class="lf"><a href="#">门店1</a></li>
            <li class="lf"><a href="#">门店1</a></li>
            <li class="lf"><a href="#">门店1</a></li>
            <li class="lf"><a href="#">门店1</a></li>
            <li class="lf"><a href="#">门店1</a></li>
            <li class="lf"><a href="#">门店1</a></li>
        </ul>
        <select class="rt" style="border:1px solid #CCC;">
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
            <option>门店1</option>
        </select>
    </div>
    <div class="category">
        <p class="lf">品类：</p>
        <ul>
            <li class="lf"><a href="#" class="on">空调</a></li>
            <li class="lf"><a href="#">冰洗</a></li>
            <li class="lf"><a href="#">白小</a></li>
            <li class="lf"><a href="#">彩电</a></li>
            <li class="lf"><a href="#">手机</a></li>
            <li class="lf"><a href="#">数码</a></li>
            <li class="lf"><a href="#">电脑</a></li>
            <li class="lf"><a href="#">吸尘器</a></li>
            <li class="lf"><a href="#">剃须刀</a></li>
        </ul>   
        <select class="rt" style="border:1px solid #CCC;">
            <option>电饭煲</option>
            <option>电熨斗</option>
            <option>VR</option>
        </select>
    </div>
    <div class="brand">
        <p class="lf">品牌：</p>
        <ul>
            <li class="lf"><a href="#" class="on">联想</a></li>
            <li class="lf"><a href="#">海尔</a></li>
            <li class="lf"><a href="#">海信</a></li>    
        </ul>   
        <select class="rt" style="border:1px solid #CCC;">
            <option>长虹</option>
            <option>苹果</option>
            <option>索尼</option>
            <option>三星</option>
            <option>技嘉</option>
        </select>
    </div>
     <div class="model">
        <p class="lf">机型：</p>
        <ul>
            <li class="lf"><a href="#">常规机</a></li>
            <li class="lf"><a href="#" class="on">工程机</a></li>
            <li class="lf"><a href="#">特价机</a></li>
        </ul>   
        <select class="rt" style="border:1px solid #CCC;">
            <option>团购机</option>
            <option selected="selected">定制机</option>
            <option>主推机</option>
            <option>样机</option>
        </select>
    </div>
</div>
<div class="slideTxtBox">
            <div class="hd">
                <!-- 下面是前/后按钮代码，如果不需要删除即可 -->
                <!--span class="arrow"><a class="next"></a><a class="prev"></a></span-->
                <ul><li class="">地图</li><li class="">柱状图</li><li class="on">饼状图</li></ul>
            </div>
            <div class="bd">
                <ul style="display: none;">
                    <li>
                        <div id="main" style="height:500px;width:900px;margin:0 auto;"></div>
<script type="text/javascript">
    
var myChart = echarts.init(document.getElementById('main')); 
function randomData() {
    return Math.round(Math.random()*1000);
}

 var option = {
    title: {
        text: 'iphone销量',
        subtext: '纯属虚构',
        left: 'center'
    },
    tooltip: {
        trigger: 'item'
    },
    legend: {
        orient: 'vertical',
        left: 'left',
        data:['iphone3','iphone4','iphone5']
    },

        dataRange: {
        min: 0,
        max: 2500,
        x: 'left',
        y: 'bottom',
        text:['高','低'],           // 文本，默认为数值文本
        calculable : true,
        // color:['#000','#ddd'] //渐变色彩空间
    },
   toolbox: {
        show: true,
        orient: 'vertical',
       left: 'right',
        top: 'center',
        feature: {
            dataView: {readOnly: false},
            restore: {},
            saveAsImage: {}
        }
    },
    series: [
        {
            name: 'iphone3',
            type: 'map',
            mapType: 'china',
            roam: false,
            label: {
                normal: {
                    show: true
                },
                emphasis: {
                    show: true
                }
            },
            data:[
                {name: '北京',value: randomData() },
                {name: '天津',value: randomData() },
                {name: '上海',value: randomData() },
                {name: '重庆',value: randomData() },
                {name: '河北',value: randomData() },
                {name: '河南',value: randomData() },
                {name: '云南',value: randomData() },
                {name: '辽宁',value: randomData() },
                {name: '黑龙江',value: randomData() },
                {name: '湖南',value: randomData() },
                {name: '安徽',value: randomData() },
                {name: '山东',value: randomData() },
                {name: '新疆',value: randomData() },
                {name: '江苏',value: randomData() },
                {name: '浙江',value: randomData() },
                {name: '江西',value: randomData() },
                {name: '湖北',value: randomData() },
                {name: '广西',value: randomData() },
                {name: '甘肃',value: randomData() },
                {name: '山西',value: randomData() },
                {name: '内蒙古',value: randomData() },
                {name: '陕西',value: randomData() },
                {name: '吉林',value: randomData() },
                {name: '福建',value: randomData() },
                {name: '贵州',value: randomData() },
                {name: '广东',value: randomData() },
                {name: '青海',value: randomData() },
                {name: '西藏',value: randomData() },
                {name: '四川',value: randomData() },
                {name: '宁夏',value: randomData() },
                {name: '海南',value: randomData() },
                {name: '台湾',value: randomData() },
                {name: '香港',value: randomData() },
                {name: '澳门',value: randomData() }
            ]
        },
        {
            name: 'iphone4',
            type: 'map',
            mapType: 'china',
            label: {
                normal: {
                    show: true
                },
                emphasis: {
                    show: true
                }
            },
            data:[
                {name: '北京',value: randomData() },
                {name: '天津',value: randomData() },
                {name: '上海',value: randomData() },
                {name: '重庆',value: randomData() },
                {name: '河北',value: randomData() },
                {name: '安徽',value: randomData() },
                {name: '新疆',value: randomData() },
                {name: '浙江',value: randomData() },
                {name: '江西',value: randomData() },
                {name: '山西',value: randomData() },
                {name: '内蒙古',value: randomData() },
                {name: '吉林',value: randomData() },
                {name: '福建',value: randomData() },
                {name: '广东',value: randomData() },
                {name: '西藏',value: randomData() },
                {name: '四川',value: randomData() },
                {name: '宁夏',value: randomData() },
                {name: '香港',value: randomData() },
                {name: '澳门',value: randomData() }
            ]
        },
        {
            name: 'iphone5',
            type: 'map',
            mapType: 'china',
            label: {
                normal: {
                    show: true
                },
                emphasis: {
                    show: true
                }
            },
            data:[
                {name: '北京',value: randomData() },
                {name: '天津',value: randomData() },
                {name: '上海',value: randomData() },
                {name: '广东',value: randomData() },
                {name: '台湾',value: randomData() },
                {name: '香港',value: randomData() },
                {name: '澳门',value: randomData() }
            ]
        }
    ]
};

        // 为echarts对象加载数据 
        myChart.setOption(option); 
    </script>
                    </li>
                </ul>
                <ul style="display: none;">
                    <li>
                        <div id="main1" style="height:500px;width:900px; margin:0 auto;"></div>
<script>
var myChart = echarts.init(document.getElementById('main1'));
//app.title = '柱状图框选';

var xAxisData = [];
var data1 = [];
var data2 = [];
var data3 = [];
var data4 = [];

for (var i = 0; i < 10; i++) {
    xAxisData.push('Class' + i);
    data1.push((Math.random() * 2).toFixed(2));
    data2.push(-Math.random().toFixed(2));
    data3.push((Math.random() * 5).toFixed(2));
    data4.push((Math.random() + 0.3).toFixed(2));
}
//正常时样式和强调时样式
var itemStyle = {
    normal: {
    },
    emphasis: {
        barBorderWidth: 1,
        shadowBlur: 10,
        shadowOffsetX: 0,
        shadowOffsetY: 0,
        shadowColor: 'rgba(0,0,0,0.5)'
    }
};

option = {
   // backgroundColor: '#eee',
    //头部数据
    legend: {
        data: ['bar', 'bar2', 'bar3', 'bar4'],
        align: 'left',
        left: 10
    },
    //功能栏目
    brush: {
        toolbox: ['rect', 'polygon', 'lineX', 'lineY', 'keep', 'clear'],
        xAxisIndex: 0
    },
    toolbox: {
        feature: {
            magicType: {
                type: ['stack', 'tiled']
            },
            dataView: {}
        }
    },
    tooltip: {},
    xAxis: {
        data: xAxisData,//数组
        name: 'X Axis',
        silent: false,
        axisLine: {onZero: true},//显示坐标线
        splitLine: {show: false},
        splitArea: {show: false}
    },
    yAxis: {
        inverse: true,//未知，估计反转之类
        splitArea: {show: false}//显示分块
    },
    //绘图网格
    grid: {
        left: 100 //左边距离
    },
    //范围
     // dataRange: {
      //  min: 0,
      //  max: 2500,
      //  x: 'left',
       // y: 'bottom',
       // text:['高','低'],           // 文本，默认为数值文本
       // calculable : true,
        //color:['#000','#ddd']
   // },
    dataRange: {   //visualMap
        type: 'continuous',
        dimension: 1,
        text: ['High', 'Low'],
        inverse: false,
        itemHeight: 200,
        calculable: true,
        min: -2,
        max: 6,
        top: 60,
        left: 10,
        inRange: {
            colorLightness: [0.4, 0.8]//亮度
        },
        //没选中图形
        outOfRange: {
            color: '#bbb'
        },
    
        controller: {
            inRange: {
                color: '#2f4554'
            }
        }
    },
    series: [
        {
            name: 'bar',
            type: 'bar',//图表类型
            stack: 'one',
            itemStyle: itemStyle,
            data: data1
        },
        {
            name: 'bar2',
            type: 'bar',
            stack: 'one',
            itemStyle: itemStyle,
            data: data2
        },
        {
            name: 'bar3',
            type: 'bar',
            stack: 'two',
            itemStyle: itemStyle,
            data: data3
        },
        {
            name: 'bar4',
            type: 'bar',
            stack: 'two',
            itemStyle: itemStyle,
            data: data4
        }
    ]
};
//圈选引发动作
myChart.on('brushSelected', renderBrushed);

function renderBrushed(params) {
    var brushed = [];
    var brushComponent = params.batch[0];

    for (var sIdx = 0; sIdx < brushComponent.selected.length; sIdx++) {
        var rawIndices = brushComponent.selected[sIdx].dataIndex;
        brushed.push('[Series ' + sIdx + '] ' + rawIndices.join(', '));
    }

    myChart.setOption({
        title: {
            backgroundColor: '#333',
            text: 'SELECTED DATA INDICES: \n' + brushed.join('\n'),
            bottom: 0,
            right: 0,
            width: 100,
            textStyle: {
                fontSize: 12,
                color: '#fff'
            }
        }
    });
};
 myChart.setOption(option); 
</script>
                    
                    </li>
                </ul>
                <ul style="display: block;">
                    <li>
                        <div id="main2" style="height:500px;width:900px; margin:0 auto;"></div>
<script>
var myChart = echarts.init(document.getElementById('main2'));

option = {
    //悬浮框
    tooltip: {
        trigger: 'item',//触发类型
        formatter: "{a} <br/>{b}: {c} ({d}%)"//显示格式<br/>换行
    },
    legend: {
        orient: 'vertical',//布局方式
        x: 'left',
        data:['空调','营销','季节','冰洗','白小','彩电','手机','数码','电脑','其他']
    },
    series: [
        {
            name:'销售额',
            type:'pie',
            selectedMode: 'single',//选中模型single multiple
            radius: [0, '30%'],

            label: {
                normal: {
                    position: 'inner'
                }
            },
            labelLine: {
                normal: {
                    show: false
                }
            },
            data:[
                {value:555, name:'空气', selected:true},//默认选择
                {value:679, name:'营销'},
                {value:1548, name:'季节'}
            ]
        },
        {
            name:'销售额',
            type:'pie',
            radius: ['40%', '55%'],

            data:[
                {value:335, name:'空调'},
                {value:310, name:'冰洗'},
                {value:234, name:'白小'},
                {value:135, name:'彩电'},
                {value:1048, name:'手机'},
                {value:251, name:'数码'},
                {value:147, name:'电脑'},
                {value:102, name:'其他'}
            ]
        }
    ]
};
 myChart.setOption(option); 
</script>
                    
                    </li>
                </ul>
            </div>
        </div>
  <!--地图-->
  <script>
        
  </script>          
  <script>
    //选项卡
     jQuery(".slideTxtBox").slide( {trigger:"click" });
     //日历
    !function(){
    laydate.skin('molv');//切换皮肤，请查看skins下面皮肤库
    //laydate({elem: '#demo'});//绑定元素
}();

//日期范围限制
var start = {
    elem: '#starttime',
    format: 'YYYY-MM-DD',
    max: laydate.now(-1), //设定最大日期为当前日期
   // max: '2099-06-16', //最大日期
    istime: true,
    istoday: false,
    choose: function(datas){
         end.min = datas; //开始日选好后，重置结束日的最小日期
         end.start = datas //将结束日的初始值设定为开始日
    }
};

var end = {
    elem: '#endtime',
    format: 'YYYY-MM-DD',
    max: laydate.now(-1),
   // max: '2099-06-16',
    istime: true,
    istoday: false,
    choose: function(datas){
        start.max = datas; //结束日选好后，充值开始日的最大日期
    }
};
laydate(start);
laydate(end);
  </script>


<table>
    <thead>
        <th>今日播报</th>
        <th>今日播报</th>
        <th>今日播报</th>
        <th>今日播报</th>
        <th>今日播报</th>
        <th>今日播报</th>
    </thead>
    <tbody>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
    </tbody>
</table>
</body>
</html>