<?php
namespace Analyze\Action;
use Think\Action;
// Ajax类
class AjaxAction extends Action {

	public function getRegion(){
		$Region=M("region");
		$map['pid']=$_REQUEST["pid"];
		$map['type']=$_REQUEST["type"];
		$list=$Region->where($map)->select();
		echo json_encode($list);
	}


	public function regetRegion(){
		$Region=M("region");
		$maps['pid']=$_REQUEST["pid"];
		$maps['type']=$_REQUEST["type"];
		$list=$Region->where($maps)->select();
		echo json_encode($list);
	}	
	public function getClass(){
		$Region=M("classify");
		$map['pid']=$_GET["ids"];
		// $pid = $Region -> where(array('cid' =>$id)) -> getField('pid');
		$list=$Region->where($map)->select();
		$this->ajaxReturn($list);		
	}	

}

?>