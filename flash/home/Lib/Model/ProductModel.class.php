<?php
/**
 * 学习之用欢迎交流 QQ178340042.
 * User: yyy
 * Date: 14-5-12
 * Time: 下午10:01
 */
class ProductModel{
    function ProductModel(){

    }
    /*
     * 获取列表
     * */
    function getList($page_id=1,$sc_arr=array()){
        $page_id=$page_id?$page_id:1;
        $Product = M("flash_product");
        $totalnum=$Product->count();
        $item=3;
        $total_page=intval(($totalnum-1)/$item)+1;
        require_once './flash/common/Pager.class.php';
        $script=BASE_URL.'/index.php/Index/index/p/';
        $start=($page_id-1)*$item;

        $Pager=new Pager($script,$totalnum,$page_id,$item);
        $pagebar = $Pager->outputPaginationCourse2014();
        $list=$Product->order("orderlist asc")->limit($start,$item)->select();

        return array('list'=>$list,'pagebar'=>$pagebar);
    }

    /*
     * 获得详情
     * */
     function getDetail($id=1){
         $id=$id?$id:1;
         $Product = M("flash_product");
         $detail=$Product->where("id=".$id)->find();
         //转化为百分数
        // $detail['height']=intval(96*$detail['height']/$detail['width']);
         return $detail;
     }



}