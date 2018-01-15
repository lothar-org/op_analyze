<?php
namespace Analyze\Action;
use Think\Action;
// 数据录入类
class GetdataAction extends CommonAction {
	public function _initialize() {
		parent::_initialize();
    }
    
	public function index(){
		$this->display();
	}
	
	public function inout(){
		$this->display();
	}
	public function left(){
		$this->display();
	}
	public function bottom(){
		$this->display();
	}

}

?>