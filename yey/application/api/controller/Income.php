<?php

namespace app\api\controller;

use think\Controller;
use think\Request;
use think\Db;
use app\api\controller\Base;

class Income extends Base
{
    /**
     * home Income  controller
     *
     * @return \think\Response
     */

    public function getlistData()
   {   
        /*
               Get the filter menu
        */ 
         $list = $this->getJT();

   }

   private  function getTitleList()
   {
       $datalist = [];
       $data = DB::name('money c')
                  ->join('cause d','c.cause_id = d.id')
                  ->field('name')
                  ->order('d.id')->select();
       foreach($data as $v){
           $datalist[][] = '应收'.$v['name'];
       }
       foreach($data as $v){
           $datalist[][] ='返回'.$v['name'];
       }
       // dump($datalist);die;
        return $datalist;
   }
   
     private function getStudentInfo()
     {
        $data = DB::name('organization b')
                ->join('student a','b.id = a.class_id')
                ->field('b.id as studentid,b.name as studentname')
                ->where($where)->select();
        return $data;
           
     }
    private function getWhere($where ='')
    {

         $data = DB::name('student b')
                      ->join('money a','a.student_id = b.id')
                      ->field('b.id as studentid,b.name as studentname')
                      ->where($where)->select();
         foreach($data as $k => $v){
                 $student_id = $v['studentid'];
                 $money = $this->getStudentMoney($student_id);
                 $data[$k]['money'] = $money;
                 // $data = array_unique($v);
         } 
         // dump($data);die;

        return $data;
              
       
    }
    
    private  function getStudentMoney($studentid='')
    {
        $where ="student_id = $studentid and a.ie_status='1'";
        $rows = Db::name('money a')
              ->join('cause b','a.cause_id = b.id')
              ->field('money,a.status,a.addtime,a.average,a.refund,a.difei,b.name as causename,a.ie_status,a.state')->where($where)->order('b.id')->select();
        $zhichu =[]; //拿到支出费用数据
        foreach($rows as $k=>$v){
             if($v['state'] =='0'){
                 $zhichu['money'][] = $v;
             }
        }
        $shouru = []; //拿到收入费用数据
        foreach($rows as $k=>$v){
             if($v['state'] =='1'){
                $shouru['money'][] =$v;
             } 
        }
        $arr = [];
        array_push($arr,$shouru); //把收入和支出压入同一个数组
        array_push($arr,$zhichu);
        $money = [];
        foreach($arr as $v){
            foreach($v as $vo){
                foreach($vo as $val){
                     if($val['state'] == '1'){
                         $val['causename'] ='应收'.$val['causename'];
                         $money[$val['causename']] = $val;
                     }
                     if($val['state'] == '0'){
                         $val['causename'] ='返回'.$val['causename'];
                         $money[$val['causename']] = $val;
                     }
                }
            }
        }
         // dump($money);die;  //拿到应收 和 应支出
        $ret = [];
        $titlelist = $this->getTitleList();
        // dump($titlelist);die;
        foreach($titlelist as $k=>$v){
            foreach($v as $kk=>$vv){
                 $ret[$vv][] = array($money[$vv]);
                 // $ret[$vv] = array($money[$vv]);
            }
        }
        return $ret;
    }
  
    public function index()
    {
         
          $start =I('get.start');
          $end  = I('get.end');
          $name = I('get.name');
          $garden_id  =I('get.garden_id');
          $class_id = I('get.class_id');
           /*
                 筛选查询
           */
            //  garden_id query
           if(!empty($garden_id)){
                 $where = "c.id = '$garden_id'";
                 $data = Db::name('student a')
                         ->join('organization b','a.class_id = b.id')
                         ->join('organization c','c.id=a.garden_id')
                         ->field('a.id as studentid,a.name as studentname,b.name as classname')
                         ->where($where)->select();             
                 foreach($data as $k => $v){
                       $student_id = $v['studentid'];
                       $money = $this->getStudentMoney($student_id);
                       $data[$k]['money'] = $money;                
                 }  
               
                 if($data){
                      rData('1','成功',$data);
                 }else{
                      rData('0','无数据');
                 }die;     
            }
           // /* 
           // class_id query
           // */
           if(!empty($class_id)){
                $where = "a.class_id = '$class_id'";  
                $data = Db::name('student a')
                         ->join('organization b','a.class_id = b.id')
                         ->join('organization c','c.id=a.garden_id')
                         ->field('a.id as studentid,a.name as studentname,b.name as classname')
                         ->where($where)->select();
               foreach($data as $k => $v){
                       $student_id = $v['studentid'];
                       $money = $this->getStudentMoney($student_id);
                       $data[$k]['money'] = $money;                
               } 
                if($data){
                     rData('1','成功',$data);
                }else{
                     rData('0','无数据');
                }die;                    
           }

          //  /*
          //    time query
          // */
          if(!empty($start && empty($end))){
              $where = "a.addtime >= '$start' and ie_status =1";
              $rows = Db::name('money a')
                     ->join('organization b','a.class_id =b.id ')
                     ->join('student c','a.student_id = c.id')
                     ->field('c.id as studentid,b.name as classname,c.name as studentname')
                     ->where($where)
                     ->order('c.id')
                     ->select();
              // dump($rows);
              // foreach($rows as $k=>$v){
              //     dump($v);
              // }die;
              $data = [];      
              foreach($rows as $k => $v){
                       $student_id =$v['studentid'];
                       $money = $this->getStudentMoney($student_id);
                       $data[][]= $v;
                       // $data[] = $v[$money];
                       // $data[][]
                       // $data['data']['money'] = $money;                
               }
              // $data =$this->getWhere($where); 
               if($data){
                     rData('1','成功',$data);
               }else{
                     rData('0','使劲再来一次就好了');
               }die; 
          }
          if(!empty($start) && !empty($end)){
               $where = "a.addtime >= '$start' and a.addtime <= '$end'";
               $data =$this->getWhere($where);
               if($data){
                     rData('1','成功',$data);
               }else{
                     rData('0','无数据');
               }die; 
          }
          /*
              name query
          */
          if(!empty($name)){
               $where = "name like '%$name%'";
               $data =$this->getWhere($where);
               if($data){
                     rData('1','成功',$data);
               }else{
                     rData('0','无数据');
               }die; 
          }
          /*
               get data
          */
            $data = Db::name('student a')
                    ->join('organization b','a.class_id = b.id')
                    ->field('b.name as classname,a.name as studentname,a.id as studentid')
                    ->select();
            foreach($data as $k => $v){
                $student_id = $v['studentid'];
                $money = $this->getStudentMoney($student_id);
                $data[$k]['money'] = $money;                
            }
           
            
            if($data){
               rData('1','成功',$data);
            }else{
               rData('0','无数据');
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
          //获取园所ID 班级ID  学生ID  缴费项目ID    
          // 月费还是年费的状态 0是常规 1是年费     根据操作人ID找出名字
          $ie_status = 1;  // 收入支出状态  1 为收入
          $status = I('post.status');
          $principal = I('post.principal');
          $where = "id = $principal";
          $name = Db::name('garden_class')->where($where)->field('name')->select();
          if($status == '0'){
                 $data = input();
                 $data['ie_status'] = $ie_status;
                 $data['principal'] = $name[0]['principal'] ;   //负责人姓名   不知道哪个表
                 $data['addtime'] = date("Y-m-d" ,strtotime("now"));
                 $res = Db::name('money')->insert($data);
                 if($res){
                     rData('1','成功');
                 }else{
                     rData('0','库看你不顺眼就不让你插入');
                 }
           }      

          if($status == '1'){
                 $data = input();
                 $data['ie_status'] = $ie_status;
                 $data['addtime'] = date("Y-m-d" ,strtotime("now"));
                 $data['principal'] = $name[0]['principal'];
                 $res = Db::name('money')->insert($data);
                 if($res){
                     rData('1','成功');
                 }else{
                     rData('0','库看你不顺眼就不让你插入');
                 }
           }   
    }
   public function getMoney()
   {
       $money = Db::name('money')->sum('money');
       if($money){
           rData('1','成功',$money);
       }else{
           $data = '获取数据失败';
           rData('0','失败',$data);
       }
   }
}