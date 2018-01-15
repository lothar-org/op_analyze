<?php

return array(
	//'配置项'=>'配置值'
	'APP_STATUS'			=> 'debug', //应用调试模式状态
	// 'SHOW_ERROR_MSG'        =>  true,    // 关闭调试模式后仍能显示错误信息

	// 'DEFAULT_M_LAYER'		=> 'Logic', // 更改默认的模型层名称为Logic
	'DEFAULT_V_LAYER'       => 'Tpl', // 默认的视图层View名称更改为Tpl
	'TMPL_TEMPLATE_SUFFIX'	=> '.dwt',//模板文件的默认后缀.html改为.dwt
	// 'TMPL_FILE_DEPR'		=> '_',//简化目录结构
	// 'VIEW_PATH'				=> './Tpl/',//单独定义视图目录位置
	// 'DEFAULT_THEME'			=> 'default',//设置默认的模板主题

	'TMPL_PARSE_STRING'		=> array(
		// '__PUBLIC__'	=> '/Common', // 更改默认的/Public 替换规则
		'__CSS__'		=> '/Public/'.$Think.MODULE_NAME.'/css', // 增加新的CSS样式类库路径替换规则
		'__IMG__'		=> '/Public/Analyze/images', // 增加新的IMAGES图片类库路径替换规则
		'__JS__'		=> '/Public/Analyze/js', // 增加新的JS类库路径替换规则
		'__PLUG__'		=> '/Public/plugins', // 增加新的插件类库路径替换规则
		'__UP__'		=> '/Uploads', // 增加新的上传路径替换规则
		// '--PUBLIC--'	=> '__PUBLIC__', // 采用新规则输出`__PUBLIC__`字符串
	),

	// 'LAYOUT_ON'				=> true,//模板布局开关
	// 'LAYOUT_NAME'			=> 'layout',//设置布局入口文件名

	//

);