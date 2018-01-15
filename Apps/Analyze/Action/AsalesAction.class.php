<?php
namespace Analyze\Action;
use Think\Action;
// 售后类
class AsalesAction extends CommonAction {
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