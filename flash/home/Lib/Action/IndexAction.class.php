<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
       // $GetContents=D("GetContents");
      //  $arr_target = $GetContents->getVideoArr();
     //   $arr_picturl= $GetContents->getVideoPicArr();
       // print_r($arr_picturl);
     //   $this->assign("video_arr",$arr_target);
     //   $this->assign("arr_picturl",$arr_picturl);

        //获取列表
        $page_id=$_GET['p'];
        $Product = D("Product");
        $list=$Product->getList($page_id);
       // print_r($list);
        $this->assign('list',$list['list']);
        //print_r($list['list']);
        $this->assign('pagebar',$list['pagebar']);
       // echo session('username');

        $this->display("index");
    }
    /*
     * 默认详情页
     * */
    public function viewDetail(){
        $id=$_GET['id'];
        $Product = D("Product");
        $detail=$Product->getDetail($id);
        $this->assign('detail',$detail);
       //  print_r($detail);
        $this->display('artists');
    }
    /*
     * 留言
     * */
    public function liuyan(){

        //  print_r($detail);
        $this->display('contact');
    }

    /*
     * 注册
     * */
    public function register(){


        $this->display('register');
    }

    /*
     * 登陆
     * */
    public function login(){


        $this->display('login');
    }

}