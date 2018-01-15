<?php
namespace Analyze\Action;
use Think\Action;
// 公共类
class PublicAction extends CommonAction {

	// public function index(){
	// 	$this->display('main');
	// }


	
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