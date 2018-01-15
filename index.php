<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',true);

// 定义应用目录
define('APP_PATH','./Apps/');
// 定义公共模块 Common
// define('COMMON_PATH','./Apps/Common/');

// 应用运行时目录（可写）
// define('RUNTIME_PATH', './Runtime/');

// 引入ThinkPHP入口文件
define('THINK_PATH', realpath('./TP').'/');
require THINK_PATH.'ThinkPHP.php';
// require './TP/ThinkPHP.php';




// 亲^_^ 后面不需要任何代码了 就是如此简单



// 更多配置


// 目录安全文件
// define('DIR_SECURE_FILENAME', 'default.html');//修改默认的index.html
// define('BUILD_DIR_SECURE', false);//关闭
// define('APP_STATUS','office');//加载位于 Apps/Common/Conf/office.php 配置的文件

// 定义存储类型和应用模式为SAE（用于支持SAE平台）
// define('STORAGE_TYPE','sae');
// define('APP_MODE','sae');



?>