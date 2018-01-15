<?php
namespace Analyze\Action;
use Think\Action;
// 起始类
class IndexAction extends CommonAction {
    //在类初始化方法中，引入相关类库    
	public function _initialize() {
		parent::_initialize();
        //加载第三方扩展函数库
		// import('Vendor.Smarty.Smarty.class');// 导入Vendor类库包 Library/Vendor/Zend/Server.class.php
		// import("Org.Util.Date");// 导入Org类库包 Library/Org/Util/Date.class.php类库
		// import("Analyze.Util.UserUtil");// 导入 Analyze 模块下面的 Apps/Analyze/Util/UserUtil.class.php类库
		// import("@.Util.Array");// 导入当前模块下面的类库 
		// vendor('EChart.test.EChart');// 如果你的第三方类库都放在Vendor目录下面，并且都以.php为类文件后缀，也没用采用命名空间的话，那么可以使用系统内置的Vendor函数简化导入。
    }
	public function index(){
		// 起始页 请勿输出任何数据
		$this->display('main');
	}
	public function home(){
		$this->display('index');
	}
	
	public function base(){
		$this->display();
	}

	public function store(){
		$this->display();
	}

	public function area(){
		$this->display();
	}

	public function bar(){
		$this->display();
	}
	
}
?>