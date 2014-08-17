<?php
/**
 * 学习之用欢迎交流 QQ178340042.
 * User: yyy
 * Date: 14-5-12
 * Time: 下午10:01
 */
class GetContentsModel{
    function GetContentsModel($a){

    }
    /*
     * 获得优酷视频列表
     * */
    public function getVideoArr(){
        $file = file_get_contents("http://www.soku.com/search_video/q_xiaoy%E8%A7%A3%E8%AF%B4%E9%AD%94%E5%85%BD%E4%BA%89%E9%9C%B8");
        preg_match_all('/http:\/\/v.youku.com\/v_show\/id_.*\.html/', $file,$arr);
        $arr=array_unique($arr[0]);
        $arr_target = array();
        foreach($arr as $v){
            preg_match('/id_.*\.html/', $v,$arr_temp);
            $arr2=explode(".",$arr_temp[0]);
            $arr2=explode("_",$arr2[0]);
            $arr_target[]=$arr2[1];
        }
        return $arr_target;
    }
    /*
     * 获得优酷视频图片列表
     * */
    public function getVideoPicArr(){
        $file = file_get_contents("http://www.soku.com/search_video/q_xiaoy%E8%A7%A3%E8%AF%B4%E9%AD%94%E5%85%BD%E4%BA%89%E9%9C%B8");
        preg_match_all('/http:\/\/g.*\.ykimg\.com.*\"/', $file,$arr);
      //  print_r($arr);
        $arr=array_unique($arr[0]);
        $arr_target = array();
        foreach($arr as $v){
            $arr2=explode("\"",$v);
            $arr_target[]= $arr2[0];
        }
        return $arr_target;
    }





}