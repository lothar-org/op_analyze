<?php
return array(
	//调试配置
	'SESSION_AUTO_START' => true, //是否开启session
	/* URL设置 */
	'URL_CASE_INSENSITIVE'  => false,   // 默认false 表示URL区分大小写 true则表示不区分大小写
	'URL_MODEL'             => 1,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
	// 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式，提供最好的用户体验和SEO支持
	'LOG_RECORD' => true, // 开启日志记录，SQL日志级别必须在调试模式开启下有效
	'LOG_LEVEL'  =>'EMERG,ALERT,CRIT,ERR', // 只记录EMERG ALERT CRIT ERR 错误
	'LOG_TYPE'              =>  'File', // 日志记录类型 默认为文件方式

	// 'SHOW_PAGE_TRACE'  =>true,   //显示页面Trace信息，对调试模式和部署模式均有效

)

?>