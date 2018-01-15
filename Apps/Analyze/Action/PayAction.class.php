<?php
class PayAction extends CommonAction{
       //在类初始化方法中，引入相关类库    
       public function _initialize() {
        vendor('Alipay.Corefunction');
        vendor('Alipay.Md5function');
        vendor('Alipay.Notify');
        vendor('Alipay.Submit');    
    }


    public function index(){
        $this->display();
    }
    
    //doalipay方法
        /*该方法其实就是将接口文件包下alipayapi.php的内容复制过来
          然后进行相关处理
        */
    public function doalipay(){
        /*********************************************************
        把alipayapi.php中复制过来的如下两段代码去掉，
        第一段是引入配置项，
        第二段是引入submit.class.php这个类。
       为什么要去掉？？
        第一，配置项的内容已经在项目的Config.php文件中进行了配置，我们只需用C函数进行调用即可；
        第二，这里调用的submit.class.php类库我们已经在PayAction的_initialize()中已经引入；所以这里不再需要；
        *****************************************************/
       // require_once("alipay.config.php");
       // require_once("lib/alipay_submit.class.php");




       //这里我们通过TP的C函数把配置项参数读出，赋给$alipay_config；
       $alipay_config=C('alipay_config');  

        $total_fee = intval($_POST['fee']['0']);
        
        // var_dump($moeny);die;
        $payment_type = "1";
        //必填，不能修改
        //服务器异步通知页面路径
        $notify_url = "http://shijue.jir.cc/index.php?m=Pay&a=notifyurl";
        //需http://格式的完整路径，不能加?id=123这类自定义参数

        //页面跳转同步通知页面路径
        $return_url = "http://shijue.jir.cc/index.php?m=Pay&a=returnurl";
        //需http://格式的完整路径，不能加?id=123这类自定义参数，不能写成http://localhost/

        //商户订单号
        $out_trade_no =date('YmdHis',time()).substr(md5(session('user_id')),0,14);
        //商户网站订单系统中唯一订单号，必填

        //订单名称
        $subject = "网站充值";
        //必填
        $buyer_uid = session('user_id');

        //付款金额
        $total_fee = $total_fee;
        //必填

        //订单描述

        $body = session('user_id');
        //商品展示地址
        $show_url = "http://www.baidu.com";
        //需以http://开头的完整路径，例如：http://www.商户网址.com/myorder.html

        //防钓鱼时间戳
        $anti_phishing_key = "";
        //若要使用请调用类文件submit中的query_timestamp函数

        //客户端的IP地址
        $exter_invoke_ip = "";
        //非局域网的外网IP地址，如：221.0.0.1
        $data['uid'] = session('user_id');
        $data['money'] = $total_fee;
        $data['trade'] = $out_trade_no;
        $data['time'] = date('Y-m-d H:i:s');
        $data['subject'] = $subject;
        M('alipay') -> data($data) -> add();

        /************************************************************/

        //构造要请求的参数数组，无需改动
        $parameter = array(
                "service" => "create_direct_pay_by_user",
                "partner" => trim($alipay_config['partner']),
                "seller_email" => trim($alipay_config['seller_email']),
                "payment_type"  => $payment_type,
                "notify_url"    => $notify_url,
                "return_url"    => $return_url,
                "out_trade_no"  => $out_trade_no,
                "buyer_uid"     => $buyer_uid,
                "subject"   => $subject,
                "total_fee" => $total_fee,
                "body"  => $body,
                "show_url"  => $show_url,
                "anti_phishing_key" => $anti_phishing_key,
                "exter_invoke_ip"   => $exter_invoke_ip,
                "_input_charset"    => trim(strtolower($alipay_config['input_charset']))
        );

        //建立请求
        $alipaySubmit = new AlipaySubmit($alipay_config);
        $html_text = $alipaySubmit->buildRequestForm($parameter,"get", "确认");
        echo $html_text;
    }
    

        /******************************
        服务器异步通知页面方法
        其实这里就是将notify_url.php文件中的代码复制过来进行处理
        
        *******************************/
    function notifyurl(){
        /*
        同理去掉以下两句代码；
        */ 
        //require_once("alipay.config.php");
        //require_once("lib/alipay_notify.class.php");



        //这里还是通过C函数来读取配置项，赋值给$alipay_config
        $alipay_config=C('alipay_config');

        $alipayNotify = new AlipayNotify($alipay_config);
        $verify_result = $alipayNotify->verifyNotify();

        if($verify_result) {//验证成功
            //请在这里加上商户的业务逻辑程序代

            
            //——请根据您的业务逻辑来编写程序（以下代码仅作参考）——
            
            //获取支付宝的通知返回参数，可参考技术文档中服务器异步通知参数列表
            
            //商户订单号

            $out_trade_no = $_POST['out_trade_no'];

            //支付宝交易号

            $trade_no = $_POST['trade_no'];

            //交易状态
            $trade_status = $_POST['trade_status'];

            //用户uid
            $buyer_uid   = $_POST['buyer_uid'];

            //金额
            $money    = $_POST['total_fee'];
            if($_POST['trade_status'] == 'TRADE_FINISHED') {
                //判断该笔订单是否在商户网站中已经做过处理
                    //如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
                    //如果有做过处理，不执行商户的业务程序
                        
                //注意：
                //退款日期超过可退款期限后（如三个月可退款），支付宝系统发送该交易状态通知

                //调试用，写文本函数记录程序运行情况是否正常
                //logResult("这里写入想要调试的代码变量值，或其他运行的结果记录");
            }
            else if ($_POST['trade_status'] == 'TRADE_SUCCESS') {
                //判断该笔订单是否在商户网站中已经做过处理
                    //如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
                    //如果有做过处理，不执行商户的业务程序
                        
                //注意：
                //付款完成后，支付宝系统发送该交易状态通知

                //调试用，写文本函数记录程序运行情况是否正常
                //logResult("这里写入想要调试的代码变量值，或其他运行的结果记录");
            }
            //——请根据您的业务逻辑来编写程序（以上代码仅作参考）——

            echo "success";     //请不要修改或删除
        }
        else {
            //验证失败
            echo "fail";

            //调试用，写文本函数记录程序运行情况是否正常
            //logResult("这里写入想要调试的代码变量值，或其他运行的结果记录");
        }  
    }
    
    /*
        页面跳转处理方法；
        这里其实就是将 return_url.php这个文件中的代码复制过来，进行处理； 
    */
    function returnurl(){
        //计算得出通知验证结果
        $alipay_config = C('alipay_config');
        $alipayNotify = new AlipayNotify($alipay_config);
        $verify_result = $alipayNotify->verifyReturn();
        if($verify_result) {//验证成功
            //请在这里加上商户的业务逻辑程序代码
            
            //——请根据您的业务逻辑来编写程序（以下代码仅作参考）——
            //获取支付宝的通知返回参数，可参考技术文档中页面跳转同步通知参数列表

            //商户订单号
            $out_trade_no = $_GET['out_trade_no'];

            //支付宝交易号
            $trade_no = $_GET['trade_no'];

            //交易状态
            $trade_status = $_GET['trade_status'];

            //用户uid
            $buyer_uid   = $_GET['body'];

            //金额
            $money    = $_GET['total_fee'];

            if($_GET['trade_status'] == 'TRADE_FINISHED' || $_GET['trade_status'] == 'TRADE_SUCCESS') {
                //判断该笔订单是否在商户网站中已经做过处理
                    //如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
                    //如果有做过处理，不执行商户的业务程序
                if(M('alipay') -> where(array('uid' => $buyer_uid,'trade' => $out_trade_no,'status' => 0)) -> find()){
                        $oldTotalMoney = M('user') -> where(array('user_id' => $buyer_uid))->getField('user_money');
                        $data['tran_money'] = $_GET['total_fee'];
                        $data['user_id']   = $_GET['body'];
                        $data['tran_time']  = $_GET['notify_time'];
                        $data['tran_remark'] = '充值';
                        $data['tran_sort'] =1;
                        $data['tran_state'] = 1;
                        $data['tran_ip'] = get_client_ip();
                        $data['tran_paymodel'] = 2;
                        $mod = M('sys_tran');
                        $mod->data($data)->add();

                        $nowTotalMoney = $money+$oldTotalMoney;
                        $updata['uid'] = $buyer_uid;
                        $updata['user_money'] = $nowTotalMoney;
                        $updata['user_points'] = C('MONEY_TO_POINT')*$nowTotalMoney;

                        M('user') ->where(array('user_id' => $buyer_uid)) -> save($updata);
                        // var_dump($_GET);die();
                        M('alipay') -> where(array('uid' => $buyer_uid,'trade' => $out_trade_no)) ->setField('status',1);
                        $this->success('付款成功',U('Account/index'));
                }else{
                    $this->error('请勿重复提交',U('Account/index'));
                }
            }else {
              echo "trade_status=".$_GET['trade_status'];
            }           
            // echo "验证成功<br />";
            // sleep(5);

            //——请根据您的业务逻辑来编写程序（以上代码仅作参考）——
        }
        else {
            //验证失败
            //如要调试，请看alipay_notify.php页面的verifyReturn函数
            echo "验证失败";
        }
    }
}
?>