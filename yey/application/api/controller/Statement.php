<?php

namespace app\api\controller;

use think\Controller;
use think\Request;
use think\Db;
use app\api\controller\Base;

class Statement extends Base
{
    /**
     * home Income  controller
     *
     * @return \think\Response
     */
    // get garden
     public function getTitleList()
     {
        $admin_id = I("post.admin_id");
        $where = "a.admin_id = $admin_id";
        $ji_id = Db::name('user a')
                   ->join('staff b','a.staff_id = b.staff_id','left')
                   ->field('ji_id')->find();
        $id = '';
        foreach($ji_id as $v){
          $id = $v;
        }
        $where = "p_id =$id and status = 1";
        $data = Db::name('organization')->field('id,name')->where($where)->select();
        if($data){
           rData('1',"成功",$data);
        }else{
           $msg = '获取失败';
           rData('1',"成功",$msg);
        }
     }

      //  获取一级分类
     private function getTypeShow()
     {
          $data = Db::name('garden_fen_biao')->field('id,name')->where('p_id = 0')->select();
          foreach($data as $k=>$v){
              $data[$k]['type'] = $this->getTType($v['id']);
          } 
          return $data;
     }

     //   获取二级分类
     private function getTType($id='')
     {
          $where ="p_id = $id";
          $data = Db::name('garden_fen_biao')->field('id,name as Pname ,fen as Fscore')->where($where)->select();
          return $data;
     }

     //   // 二级菜单
     private function getOnlyData($id='',$start='',$end='')
     {    
          $desc = '';
          $id =$id;
          $data = $this->getTType($id);
          foreach($data as $k=>$v){
               $desc= $this->getDesc($v['id'],$start,$end);
               foreach($desc as $kk=>$vv){
                   $data[$k]['desc'] = $vv['desc'];
                   $data[$k]['score'] = $vv['defen'];
               }
          }
          return $data;

     }

     // 获取得分 以及备注 等数据
     private function getDesc($id = '',$start='',$end='')
     {
          if(empty($start)){
              $now = date("Y-m-d" ,strtotime("now"));
              $firstDay=date('Y-m-01', strtotime(date("Y-m-d")));
              $where = "f_id = $id and (addtime >= '$firstDay' and addtime <='$now')";
            }
          if(!empty($start)){
              $where = "f_id = $id and addtime>='$start'";
          }
          if(!empty($start) && !empty($end)){
              $where = "f_id = $id and (addtime >='$start' and addtime<='$end')";
          }
          $desc = Db::name('garden_fen')->field('desc,defen')->where($where)->select();
          return $desc;
     }


     // show 
     public function show()
     {
          $start = I('post.start');
          $end = I('post.end');
          if(!empty($start)&& empty($end)){
              $data = $this->getTypeShow();
              foreach($data as $k=>$v){
                   $data[$k]['type'] = $this->getOnlyData($v['id'],$start);
              }
              if($data){
                  rData('1','成功',$data);
              }else{
                  $msg = '开始时间有问题';
                  rData('0','失败',$msg);
              }
              die;
          }
          if(!empty($start) && !empty($end)){
               $data = $this->getTypeShow();
               foreach($data as $k=>$v){
                   $data[$k]['type'] = $this->getOnlyData($v['id'],$start,$end);
               }
               if($data){
                  rData('1','成功',$data);
               }else{
                  $msg = '传递时间有问题';
                  rData('0','失败',$msg);
               }
               die;
          }
          $data = $this->getTypeShow();
          foreach($data as $k=>$v){
              $data[$k]['type'] = $this->getOnlyData($v['id']);
          }
         
          if($data){
              rData('1','成功',$data);
          }else{
              $msg = '失败';
              rData('0','失败',$msg);
          }
     }

     // 添加显示数据
     public function addShowData()
     {
         $data =$this->getTypeShow();
         if($data){
             rData('1','成功',$data);
         }else{
             $msg = '方法有问题';
             rData('0','失败',$msg);
         }
     }
    // add data
     public function create(Request $req)
     {
          $garden_id = $req->only('garden_id');
          $data = $req->except('garden_id');
          if(empty($garden_id)){
              $msg = '园区ID不能为空';
              rData('0','失败',$msg);
              die;
          }
          $count = count($data);
          $row = [];
          foreach($fake as $k=>$v){
               $v['garden_id'] = $garden_id['garden_id'];
               $v['addtime'] = date("Y-m-d" ,strtotime("now"));
               if(!empty($v['f_id'])){
                   $row[] = Db::name('garden_fen')->insert($v);
                }else{
                    $msg = '数据有问题';
                    rData('0','数据有问题',$msg);
                }   
          }
          if(count($row) === $count){
               rData('1','成功',count($row));
          }else{
              $msg = '添加失败，添加的数据格式不对';
              rData('0','失败',$msg);
          }
     }

}

