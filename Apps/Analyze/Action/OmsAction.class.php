<?php
namespace Analyze\Action;
use Think\Action;
// 订单类
class OmsAction extends CommonAction {
	public function _initialize() {
		parent::_initialize();
    }
    
	public function index(){
		$this->display();
	}
	
	public function top(){
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