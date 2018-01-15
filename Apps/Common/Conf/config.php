<?php
return array(
	//'配置项'=>'配置值'

	// 'URL_CASE_INSENSITIVE'	=>  true, //为true时表示URL地址不区分大小写
	// 'URL_MODEL'				=> '2', //URL模式 普通模式=>0,PATHINFO=>1(默认),REWRITE=>2,兼容=>3
	// 'URL_PATHINFO_DEPR'		=>'-',// 更改PATHINFO模式参数分隔符
	// 'URL_HTML_SUFFIX' => 'html|shtml|xml',//伪静态后缀
	// 'URL_DENY_SUFFIX' => 'pdf|ico|png|gif|jpg', // URL禁止访问的后缀设置,URL_DENY_SUFFIX的优先级比URL_HTML_SUFFIX要高。

	// 'SESSION_AUTO_START'	=> true, //是否开启session

	'DEFAULT_C_LAYER'		=> 'Action', //重新定义控制器名 Controller =>Action 

	// 'MODULE_DENY_LIST'		=> array('Common','Runtime'),// 设置禁止访问的模块列表,设置后，模块不能通过URL直接访问，事实上，可能我们只是在该模块下面放置一些公共的接口文件，因此都是内部调用即可。
	// 'MODULE_ALLOW_LIST'		=> array('Home','Analyze');// 设置允许访问的模块列表
	// 'MULTI_MODULE'			=>  false,// 关闭多模块访问,你的应用仅用一个模块就可以完成时
	// 'URL_MODULE_MAP'		=>    array('test'=>'analyze'),//模块映射 'MODULE_ALLOW_LIST' => array('Home','Test'),
	'DEFAULT_MODULE'		=> 'Analyze', //默认模块

	// 'TMPL_L_DELIM'			=> '<{',//模板默认左标签 {
	// 'TMPL_R_DELIM'			=> '}>',//模板默认左标签 }



	//加载扩展配置文件
	'LOAD_EXT_CONFIG'		=> 'db,user,tags', //自动加载应用公共配置目录下面的配置文件Apps/Common/Conf/user.php和 Apps/Common/Conf/db.php。如果实在模块中配置则加载相应模块的
	// 'LOAD_EXT_CONFIG' => array('USER'=>'user','DB'=>'db'), //如果是这种,则最终获取用户参数的方式改成：C('USER.USER_AUTH_ID');

	// 命名空间禁用
	// 'APP_USE_NAMESPACE'		=> false,// 但继承和调用核心类和系统类的时候，仍然需要使用命名空间。

	//开启SQL解析缓存
	// 'DB_SQL_BUILD_CACHE'	=> true,
	// 'DB_SQL_BUILD_QUEUE'	=> 'xcache',//SQL缓存方式
	// 'DB_SQL_BUILD_LENGTH'	=> 20, // SQL缓存的队列长度

	//静态缓存

	// 输入过滤
	// 'DEFAULT_FILTER'		=>  'strip_tags',//全局过滤，I()函数默认的过滤方法是htmlspecialchars

	//使用Smarty模板引擎
	// 'TMPL_ENGINE_TYPE'		=> 'Smarty',
	// 'TMPL_ENGINE_CONFIG'	=> array(
	// 	'plugins_dir'	=> './Application/Smarty/Plugins/',
	// ),

);