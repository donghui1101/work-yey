<?php

namespace app\api\controller;

use think\Controller;
use think\Request;
use think\Db;
use app\api\controller\Base;

class Patrollog extends Base
{
    /**
     * home Income  controller
     *
     * @return \think\Response
     */
      public function getCates()
      {
          $data = Db::name('gardenlog_cates')->select();
          if($data){ 
              rData('1','成功',$data);
          }else{
              $msg = '数据类别获取失败';
              rData('0','失败',$msg);
          }
      }

      public function index()
      {
          $data = Db::name('gardenlog_cates')->select();
          $img = [];
          $time = date("Y-m-d" ,strtotime("now"));
          foreach($data as $k=>$v){   
              $where = "cates_id ={$v['cates_id']}";
              $dataLog = Db::name('garden_xun_log')->field('desc,sug,genjin,img,assistant')->where($where)->select();
                 foreach($dataLog as $key=>$val){
                      $temp = $val['img'];
                      $img =explode('@',$temp);
                      // dump($img);die;
                      $dataLog[$key]['img'] = $img; 
                 }
              $data[$k]['data'] = $dataLog;
          }
          if($data){
              rData('1','成功',$data);
          }else{
              $msg = '有问题找辉哥，辉哥帮你打它^_^';
              rData('0','失败乃成功之母',$msg);
          }
      }
      

      public function create(Request $req)
      { 
          //需要获取园区ID  集团ID
           $admin_id = I('post.admin_id');
           $Mfiles = $req->file('files');
           $file = $req->file('Oimg');
           $files = $req->file('Timg');
           // if(!empty($Mfiles)){
           //      $path = [];
           //      foreach($Mfiles as $k=$v){
           //      $info = $v->move(ROOT_PATH . 'public' . DS . 'jpg');
           //      $path[] = $info->getSaveName();
           // }else{
           //      $msg = '缺图片';
           //      rData('0','图片没有上传',$msg);
           // }
           // $strPath = implode(',',$path);
           // $data['img'] = $strPath;
           // }
           if(!empty($file)){
               $info = $file->move(ROOT_PATH . 'public' . DS . 'jpg');
           }
           if(!empty($files)){
               $Tinfo = $file->move(ROOT_PATH . 'public' . DS . 'jpg');
           }
           if(empty($file)&&empty($files)){
               $msg = '图片为空';
               rData('0','失败',$msg);
           }
           $imgPath = $info->getSaveName().'@'.$Tinfo->getSaveName();
           $data['img'] = $imgPath;
           $data = $req->only('cates_id,desc,sug,genjin,assistant');
           $data['addtime'] = date("Y-m-d" ,strtotime("now"));
           if($data){
               $msg ='添加成功';
               rData('1','添加成功',$msg);
           }else{
               $msg = '添加失败';
               rData('0','添加失败',$msg);
           }
      }
}