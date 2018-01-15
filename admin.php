<?php
// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

define('BIND_MODULE','Analyze');// 绑定Analyze模块到当前入口文件
define('BIND_CONTROLLER','Index'); // 绑定Index控制器到当前入口文件