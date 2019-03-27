<?php
namespace app\api\controller;

use think\Controller;
use app\api\controller\Base;
use think\Db;



class Custody extends controller{
    
    /**
     * 出入库
     */
    public function index(){
        
        $status = I('post.status');
        $data['name'] = I('post.name');
        $data['garden_id'] = $this->garden_id;
        if(empty($data['name'])){
            rData(1,'商品名称/机构ID不能为空');
        }
        $data =DB::name("custody")->insert($data);
        if($data){
            $wuzi_id = Db::name('custody')->getLastInsID();
            $link['number'] =I('post.number');
            $link['admin_id'] =I('post.userID');
            $link['addtime'] = time();
            $link['status'] =I('post.status');
            $link['wuzi_id'] =$wuzi_id;
            $link = DB::name("custody_detail")->insert($link);
            if($link){
                rData(200,'出入库成功');
            }
        }else{
            rData(2,'出入库失败，请检查数据');
        }
    }
    
    
    
    
    /**
     * 库存详情数据
     */
    
    public function custs(){
        
        $data = Db::name("organization")->field('id,name')->where('status'==1)->select();
        $garden_id = $this->garden_id;
        $name = I('post.name');
        $start = I('post.start');
        $end = I('post.end');
        $where= "";
        if(!empty($start)){
            $where = "b.addtime <= '$start' or b.addtime >= '$end'";
        }
        if(!empty($garden_id)){
            //$where['garden_id'] = $garden_id;
            $where .= "and garden_id = '$garden_id'";
        }
        if(!empty($name)){
            //$where['a.name'] = ['like',"%".$name."%"];
            $where = "a.name LIKE '%{$name}%'";
        }
        if(!empty($start) || !empty($name)){
            $where = "b.addtime <= '$start' or b.addtime >= '$end' and a.name LIKE '%{$name}%'";
        }
        
        $date = Db::name('custody a')
            ->join('custody_detail b','a.id = b.wuzi_id')
            ->join('user c','c.admin_id = b.admin_id')
            ->join('organization d','d.id = a.garden_id')
            //->field("a.name,a.garden_id,b.status,b.number,b.addtime,b.admin_id,c.user_name,d.name sname")
            ->field("a.name,b.status,b.number,b.addtime,b.admin_id,c.user_name,d.name sname")
            ->where($where)
            ->select();
            foreach ($date as $vo){
                $vo['addtime'] = date('Y-m-d', $vo['addtime']); 
                $a[] = $vo;
            }
        $a['Park'] = $data;
        rData(200,"成功",$a);
    }
    
    
    
    /**
     * 任务管理
     */
    public function task(){
        
        $data = I("post.");
        $data['time'] = time();
        $res = DB::name("task_or")->insert($data);
        rData(200,"成功");
    }
    
    
    
    /**
     * 任务管理展示
     */
    public function exhibition(){
        
        $Park = Db::name("organization")->where('status = 1')->field('id,name')->select();
        $parkID = I('post.parkID');
        $where = "status = 2";
        if(!empty($parkID)){
            $where .= " and p_id = '$parkID'";
        }
        $Class = Db::name("organization")->where($where)->field('id,name')->select();
        $classID = I('post.classID');
        $times = time();
        $where = "a.time <= '$times'";
        $start = I('post.start');
        $end = I('post.end');
        if(!empty($start)){
            $where = "a.time <= '$end'";
        }
        if(!empty($classID)){
            $where .= "and a.garden_id = '$parkID' and a.classID = '$classID'";
        }
        $security = Db::name('task_or a')
        ->join('task b','a.task_id = b.id')
        ->field('b.id,b.name,a.yu,a.shi,a.time')->where($where)->select();
        foreach($security as $k=>$v){
            if($v['id']=1 && $v['id']<5 ){
                 $arr[] = $v;
            }
        }
        $data['Park'] = $Park;
        $data['Class'] = $Class;
        $data['arr'] = $arr;
        rData(200,"成功",$data);
     }
     
     
     
     
     /**
      * 支出管理
      */
     public function expenditure(){
         
         $getJT = $this->getJT();
         
     }
     
     
     /**
      * 获取费用列表
      */
     public function cost(){
         
         $data = Db::name('cause')->where('status = 2')->field('id,name')->select();
         if($data) rData(200,"成功",$data);
         rData(1,"失败");
     }
     
     
     /**
      * 
      * 增加支出费用
      */
     public function addcost(){
         
         $post = I('post.');
         if(!empty($post)){
             $post['ie_status'] = '0';
             $post['addtime'] = date('Y-m-d');
             $data = Db::name('money')->insert($post);
             if($data) rData(200,"成功");
             rData(1,"失败，请检查数据");
         }
         rData(1,"失败，数据有误，请检查数据");
     }
}