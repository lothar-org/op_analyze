<?php
namespace Analyze\Action;
use Think\Action;
class UimakerAction extends CommonAction {

	public function index(){
		$this->display('default');
	}
	
	public function imgtable(){
		$this->display();
	}
	
	public function imglist(){
		$this->display();
	}
	
	public function tools(){
		$this->display();
	}
	
	public function computer(){
		$this->display();
	}

	public function tab(){
		$this->display();
	}

	public function model(){
		$this->display();
	}

	public function loginout(){
		$this->display('login');
	}


	
}

?>