<?php

namespace app\api\controller;

use think\Controller;
use think\Request;
use think\Db;
use app\api\controller\Base;

class Joblog extends Base
{
    /**
     * home Income  controller
     *
     * @return \think\Response
     */
      public function getStaffData()
      {
           $admin_id = I('post.admin_id');
           $where = "a.admin_id = $admin_id";
           $data = [];
           
           $data['name'] = Db::name('user a')
                           ->join('staff b','a.staff_id = b.staff_id')
                           ->join('organization c','b.o_id = c.id')
                           ->join('organization d','c.p_id = d.id')
                           ->field('b.staff_id,b.staff_name,c.name as positionname,d.name as department')->where($where)->find();
           if($data){
               rData('1','成功',$data);
           }else{
               $msg = 'mei了';
               rData('0','失败',$msg);
           }
      }
      

      public function create()
      { 
          $data = input();
          $res = [];
          foreach($data as $k=>$v){
                $res[]=$trim($v);
          } 
          if($res){
              $msg = '服务器内部错误';
              rData('500','失败',$msg);die;
          }
          $res['addtime'] = date("Y-m-d" ,strtotime("now"));
          $rows = Db::name('work_log')->insert($res);
          if($rows){
               rData('1','成功',$rows);
          }else{
              $msg = '服务器内部错误';
               rData('0','失败',$msg);
          }
      }
 
}