<?php
// 本类由系统自动生成，仅供测试用途
require_once './flash/common/commonfunctions.class.php';
class MainajaxAction extends Action {

  /*
   * ajax请求处理类
   * */
    public function Mainajax(){

    }
    /*
     * 留言
     * */
    public function addLiuyan(){
        $username=$_POST['user'];
        $email=$_POST['email'];
        $content=$_POST['content'];
        //检查必填项
        $commonfunctions=new commonfunctions();
        $is_fill=$commonfunctions->checkEmpty(array($username,$email,$content));
        if($is_fill!='fill_success'){
            $this->error('请填写完信息！','javascript:history.go(-1)',2);
        }
        //增加留言
        $Liuyan=D('Liuyan');
        $Liuyan->addLiuyan($username,$email,$content,time());
        $this->error('留言成功！非常感谢！','javascript:history.go(-1)',2);
    }

    /*
    * 注册
    * */
    public function register(){
        $username=$_POST['username'];
        $password=$_POST['password'];

        //检查必填项
        $commonfunctions=new commonfunctions();
        $is_fill=$commonfunctions->checkEmpty(array($username,$password));
        if($is_fill!='fill_success'){
            $this->error('请填写完信息！','javascript:history.go(-1)',2);
        }
        //检测用户名
        $User=D('User');
        $is_exist=$User->checkUser($username);
        if($is_exist=='exist'){
            $this->error('该用户名已经存在，请重新注册','javascript:history.go(-1)',2);
        }else{
            //注册
            $User->register($username,$password);

            session('username',$username);
	  //  echo $_SESSION['username'].'323';
            $this->error('注册成功！',BASE_URL,2);
        }

    }

    /*
    * 登陆
    * */
    public function login(){

        $username=$_POST['username'];
        $password=$_POST['password'];

        //检查必填项
        $commonfunctions=new commonfunctions();
        $is_fill=$commonfunctions->checkEmpty(array($username,$password));
        if($is_fill!='fill_success'){
            $this->error('请填写完信息！','javascript:history.go(-1)',2);
        }
        //检测用户名
        $User=D('User');
        $is_exist=$User->checkUser($username);
        if($is_exist=='exist'){
            //检测密码是否正确
            $result=$User->checkPassword($username,$password);
            if($result==1){

                session('username',$username);

              //  $_SESSION['username'].'323';
              $this->error('登陆成功！',BASE_URL,2);
            }else{
                $this->error('密码错误，请重新填写','javascript:history.go(-1)',2);
            }

        }else{

            $this->error('该用户名不存在！请重新填写','javascript:history.go(-1)',2);
        }
    }



}