<?php

namespace app\api\controller;

use think\Controller;
use think\Request;
use think\Db;
use app\api\controller\Base;

class Spare extends Base
{
    /**
     * garden_spare  controller
     *
     * @return \think\Response
     */
    private function getData($where)
    {
        $where = $where;
        $list = DB::name("garden_spare")
            ->field('cash,card,alipay,deduction,silver,weixin,expend,transfer,chu_money,yu_money,addtime')->where($where)->paginate($pagesize,true);
         if(empty($list)){              
              return '啥都没有';
         }else{
              return $list;
         }    
    }
    public function getlistdata()
   {
      $admin_id = I("get.admin_id");
      $res=DB::name("user_relation")->where("admin_id",$admin_id)->find();
      //集团id
      $ji_id = explode(",",$res['organization_id'])[0];
      $ji = DB::name("organization")->where("id",$ji_id)->find();
      //园所
      $garden = DB::name("organization")->where("p_id",$ji_id)->where("status",1)->select();
      foreach ($garden as $key => $value) {
        $garden_id .= $value['id'].",";
      }
      $garden_id = rtrim($garden_id,",");
      $class = DB::name("organization")->where("status",2)->where("p_id","in",$garden_id)->select();
      $data['ji']=$ji;
      $data['garden']=$garden;
      if($data){
         rData('1','成功',$data);
      }else{
         $msg = '不好了！数据库要炸了';
         rData('0','失败',$msg);
      }
      
   }


    public function index()
    {
        /* show index*/ 
        /*
           Conditional query
        */
         $ji_id =I('get.ji_id');
         $garden_id = I('get.garden_id');
         $where = '';
         if(!empty($ji_id)){
             $where = "ji_id = $ji_id";
             $list = $this->getData($where);
             if($list){
                rData('1','成功',$list);
             }else{
                $msg ='getdata 方法有问题';
                rData('0','失败',$msg);
             }
         }

         if(!empty($garden_id)){  
            $where = "garden_id = $garden_id";
            $list = $this->getData($where);
            if($list){
               rData('1','成功',$list);
            }else{
               $msg ='getdata 方法有问题';
               rData('0','失败');
            }
         }
         if(!empty(I('get.pagesize'))){
           $pagesize =  I('get.pagesize');
         }else{
            $pagesize = 2;
         }

         $list = DB::name("garden_spare")
            ->field('cash,card,alipay,deduction,silver,weixin,expend,transfer,chu_money,yu_money,addtime')->where($where)->paginate($pagesize,true);
         if(empty($list)){              
              rData('0','数据库又和你开了个玩笑',$list);
         }else{
             rData('1','成功',$list);
         }    
   }

   

    /**
     * .
     *
     * @return \think\Response
     */
    /*
         add data
    */

    public function create(Request $request)
    {
          //organization   id   
          $data= $request->except('admin_id');
          if(!empty($data)){
              $data['addtime'] = date("Y-m-d" ,strtotime("now"));
              $res =  DB::name("garden_spare")->insert($data);
           }  
          if($res){
              rData('1','成功',$ji);
          }else{
              rData('0','数据库看你不顺眼了',$ji);
          }
    }

}
