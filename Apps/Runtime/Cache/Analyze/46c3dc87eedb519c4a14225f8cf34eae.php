<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>导入</title>
<link rel="stylesheet" href="/Public/Analyze/css/daoru.css" />
<script src="/Public/Analyze/js/jquery-1.11.3.min.js"></script>
</head>

<body>
<form action="" name="form" method="post" enctype="multipart/form-data">
	<div class="upload">
		选择表
		<select name="select" id="select">
        	<option>--请选择--</option>
        	<option value="1">店铺</option>
          	<option value="2">订单</option>
          	<option value="3">商品</option>
          	<option value="4">仓库</option>
        </select>
        <span id="tool"></span>
    </div>
    <div >
    	搜索项目：<input type="text" autocomplete="off" id="search" />
    </div>
    <div class="file">
    	选择文件：<input type="file" onchange="up(this)" id="opc" name="file" /><input type="text" id="show" />
    </div>
    <input id="submit" type="submit"/>
</form>
<script>
//上传获得value在另一个input显示
function up(obj){
	document.getElementById("show").value=obj.files[0].name;
}

$("#search").keyup(function(){
	var s =$("#search").val();
	var l =$("#select option").length;
	for (i=0;i<l;i++){
		var c=$("#select option").get(i).innerHTML;
		if(s==c){
			$("#select option").get(i).setAttribute("selected","selected");
			$("#tool").html(c+"必须是中文或者数字字母，下划线");
			break;
		}
	}
});

$("#select").change(function(){
	var con=$("#select option:selected").val();
	// $.ajax({
	// 	url:,
	// 	data:,
	// 	success:function(data) {
	// 		// body...
	// 	}
	// })
	switch(con){
		case '1':
			var txt = '包含字段：店铺id、店铺名、';break;
		case '2':
			var txt = '包含字段：订单id、订单号、成交时间、';break;
		case '3':
			var txt = '包含字段：商品id、品类id、品牌id、';break;
		case '4':
			var txt = '包含字段：仓库id、仓库名、库存、';break;
	}
	$("#tool").html(txt);		
});

$("#select").bind("click",function(){
	$("#select option").get(0).setAttribute("disabled","disabled");
});


</script>
</body>
</html>