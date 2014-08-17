<?php
/**
 * 学习之用欢迎交流 QQ178340042.
 * User: yyy
 * Date: 14-5-12
 * Time: 下午10:01
 */
class UserModel{
    function UserModel(){

    }
    /*
     * 注册
     * */
    function register($username,$password,$create_time){
        $liuyan=M("blog_express_customer");
        $create_time=$create_time?$create_time:time();
        $liuyan->data(array('customer_name'=>$username,'customer_pass'=>md5($password),'customer_pass_init'=>$password,
            'customer_zhuceshijian'=>$create_time))->add();
    }
    /*
     * 登陆
     * */
    function checkPassword($username,$password){
        $liuyan=M("blog_express_customer");
        $row=$liuyan->where("customer_name='".$username."'")->find();
        if($row['customer_pass']==md5($password)){
            return 1;
        }else{
            return 0;
        }


    }
    /*
     * 检测用户名
     * */
    function checkUser($username){
        $liuyan=M("blog_express_customer");

        $row=$liuyan->where("customer_name='".$username."'")->find();
        if(empty($row)){
            return 'none';
        }else{
            return 'exist';
        }
    }

}