<?php
namespace Analyze\Action;
use Think\Action;
header('Content-Type:text/html;charset=UTF-8');
// 业务基控制器
//基础调用文件
class CommonAction extends Action {
	function _initialize() {
     // 地址栏图标
        //从本地
        // $favicon = '__PUBLIC__/'.$Think.MODULE_NAME.'images/logo/favicon.ico';
        // $this->assign('favicon',$favicon);
        //从数据库中
        // $i = M('config')->field('value')->where('id=4')->find();
        // $favicon = '__ROOT__'.$i['value'];
        // $this->assign('favicon',$favicon);

        //加载扩展函数库
        // Load('extend');
        // vendor('sliver.upload');

        // $re=str_repeat('&nbsp;', 4);
        // $this->assign('repeat',$re);

	    //管理员登陆的信息,用于登录状态判断
        // $uid= session('admin_id');
        // $ip = get_client_ip();
        // $this->assign('uid',$uid);
        // $this->assign('ip',$ip);
        

        // 管理员信息
        // $this->assign('admin_name',session('admin_name'));
       
        // if (cookie('admin_pic')) {
        //    $this->assign('face',cookie('admin_pic'));
        // } else {
        //    $this->assign('face','userFace64.gif');
        // }

        // $map['admin_id'] = session('admin_id');
        // $admin = M('sys_admin')->where($map)->find();
        // $lasttime = date("Y-m-d H:i:s",$admin['lasttime']);
        // // var_dump($lasttime);die();
        // $this->assign('lasttime',$lasttime);
        // $this->assign('admin',$admin);
     
        // 网站信息
        // $site = M('sys_config');

        // $title = $site->where('id=2')->getField('value');
        // $this->assign('title',$title);

        
	}

    /*
     自定义分页
    */
    public function pages($m,$where,$order,$p,$num,$list,$page){
        $User = M($m); // 实例化User对象
        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $li = $User->where($where)->order($order)->page($p.','.$num)->select();
        $this->assign($list,$li);// 赋值数据集
        import("ORG.Util.Page");// 导入分页类
        $count      = $User->where($where)->count();// 查询满足要求的总记录数
        $Page       = new Page($count,$num);// 实例化分页类 传入总记录数和每页显示的记录数

                // $page -> setConfig('header','个会员');
                $Page -> setConfig('prev', "∧");//(对thinkphp自带分页的格式进行自定义▲▼)
                $Page -> setConfig('next','∨');
                $Page -> setConfig('first','首');
                $Page -> setConfig('last','尾');
                $Page -> setConfig('theme',"%first% %upPage% %linkPage% %downPage% %end% ");

        $show       = $Page->show();// 分页显示输出
        $this->assign($page,$show);// 赋值分页输出

    }

    public function pages2($m,$where,$order,$p,$num,$list,$page){
        
        $User= new Model('opus');

        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $li = $User->table("sj_t_opus as a")
                     //->join("right join sj_t_classify as b on a.opus_category=b.path")
                     ->where('a.opus_category like "'.$where.'%" OR opus_sort LIKE  "'.$where.'%"')
                     ->order('a.opus_updatetime DESC')
                     ->limit('0,15')
                     ->select();        

        import('ORG.Util.Page');// 导入分页类
        //$count      = $User->where('opus_category="'.$where.'"')->count();// 查询满足要求的总记录数
        $Page       = new Page(count($li),15);// 实例化分页类 传入总记录数和每页显示的记录数
        // $page -> setConfig('header','个会员');
        $Page -> setConfig('prev', "＜");//(对thinkphp自带分页的格式进行自定义▲▼)
        $Page -> setConfig('next','＞');
        $Page -> setConfig('first','首');
        $Page -> setConfig('last','尾');
        $Page -> setConfig('theme',"%first% %upPage% %linkPage% %downPage% %end%");

        $this->assign($list,$li);// 赋值数据集
        $show = $Page->show();// 分页显示输出
        $this->assign($page,$show);// 赋值分页输出
        
        //var_dump($li);
    }

}
?>
