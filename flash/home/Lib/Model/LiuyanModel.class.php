<?php
/**
 * 学习之用欢迎交流 QQ178340042.
 * User: yyy
 * Date: 14-5-12
 * Time: 下午10:01
 */
class LiuyanModel{
    function LiuyanModel(){

    }
    /*
     * 增加留言
     * */
    function addLiuyan($username,$email,$content,$create_time){
        $liuyan=M("flash_liuyan");
        $create_time=$create_time?$create_time:time();
        $liuyan->data(array('username'=>$username,'email'=>$email,'content'=>$content,'create_time'=>$create_time))->add();
    }

}