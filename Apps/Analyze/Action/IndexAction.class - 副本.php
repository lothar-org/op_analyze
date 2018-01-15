<?php
namespace Analyze\Action;
use Think\Action;
class IndexAction extends Action {
    public function _empty($name){
    //把所有城市的操作解析到city方法
    	$this->city($name);
    }
    //注意 city方法 本身是 protected 方法
    protected function city($name){
    //和$name这个城市相关的处理
    	echo '当前城市' . $name;
    }

    public function index(){
    	$model = C('URL_MODEL',33);
    	echo $model;
    	echo C('URL_MODEL');

		// 读取数据库中的配置（假设有一个config表用于保存配置参数）
    	// $config =   M('Config')->getField('name,value');

    	// $is = M('admin');
		// D('admin'); //实例化UserModel
		// D('admin','Logic'); //实例化UserLogic
		// D('admin','Service'); //实例化UserService

		// 导入Org类库包 Library/Org/Util/Date.class.php第三方类库
		// import("Org.Util.Date");
		//如果你的第三方类库都放在Vendor目录下面，并且都以.php为类文件后缀，也没用采用命名空间的话，那么可以使用系统内置的Vendor函数简化导入。
		// Vendor('Zend.Filter.Dir');

        $this->show('改变了命名空间');
        // $this->ajaxReturn($data,'xml');//默认json格式，这里自定义为xml
        $this->display('gvChart');
    }

    public function gvChart(){
        echo "string";
        $this->display();
        // $this->display(T('Analyze@Index/gvChart'));//T函数用于生成模板文件名
        // $content = $this->fetch('Index:gvChart');//获取渲染内容
        // $this->show($content, 'utf-8', 'text/xml');//渲染输出
    }
}