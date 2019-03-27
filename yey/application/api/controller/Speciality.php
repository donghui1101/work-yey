<?php

namespace app\api\controller;

use think\Controller;
use think\Request;
use think\Db;
use app\api\controller\Base;

class Speciality extends Base
{
      
    /**
     * student  speciality 
     *
     * @return \think\Response
     */
     // 筛选菜单栏
    public function getCount($money,$people,$income,$spend)
    {
           $moneySum = $money;
           $peopleSum = $people;
           $incomeSum = $income;
           $spendSum  = $spend;
           $arr = [];
           $arr['msum'] =$moneySum;
           $arr['psum'] = $peopleSum;
           $arr['isum'] = $incomeSum;
           $arr['sSum'] = $spendSum;
           if($arr){
              return  $arr;
           }else{
              return '出错了';
           }
    }
    public function getGarden()
    {
         $admin_id = I("post.admin_id");
         $res=DB::name("user_relation")->where("admin_id",$admin_id)->find();
         $ji_id = explode(",",$res['organization_id'])[0];
         $ji = DB::name("organization")->where("id",$ji_id)->find();
         $garden = DB::name("organization")->where("p_id",$ji_id)->where("status",1)->select();
         foreach ($garden as $key => $value) {
           $garden_id .= $value['id'].",";
         }
         $garden_id = rtrim($garden_id,",");
         $class = DB::name("organization")->where("status",2)->where("p_id","in",$garden_id)->select();
         $data['garden']=$garden;
         $data['class']=$class;
         $name =$this->getSpecialty();
         $data['name'] = $name;
         if($data){
             rData('1','成功',$data);
         }else{
             $msg = '数据库今天罢工';
             rData('0','失败',$msg);
         }
    }

    public function getClass(){
      $garden_id = I("post.garden_id");
      $class = DB::name("organization")->where("status",2)->where("p_id",$garden_id)->select();
      rData('1',"成功",$class);
    }

    public function showGetId($arr)
    {
         $data = $arr;
         $a = '';
         $arr= [];
         foreach($data as $k=>$g){
             $a = rtrim($g,',');
             $arr[] = explode(',',$a);

         }
         $temp = [];
         foreach($arr as $v){
              foreach($v as $kk=>$vv){
                  $temp[] = $vv;                 
              }                 
         }
         $student = array_count_values($temp);
         $res = array_unique($temp);
         $rows = [];
         foreach($res as $key=>$value){
              $rows[]= $this->getSpecialty($value); 
         };
         $base = [];
         foreach($rows as $k=>$v){
              foreach($v as $kk=>$vv){
                  array_push($base,$vv);
              }
         }
         foreach($base as $k=>$v){
            $base[$k]['peoplesum'] = array_shift($student);          
         }
         return $base; //返回每个特长的名称和学习人数
    }

    // Obtain specialty data according to conditions
    private function getShowMoney($id='')
    {
        $where = "id = $id";
        $data = Db::name('techang')->field('id,money,Incomep,spendp')->where($where)->find();
        return $data;
    }

    //  make speciality number
    public function specialtyNumber()
    {
         $SpecialtyNumber = Db::name('techang')->field('id,name')->order('id')->select();
         $SpecNumber = [];
         foreach($SpecialtyNumber as $k=>$v){
               $SpecNumber[] =$v['id'];
         }
         $number = array_pop($SpecNumber);
         $number = intval($number) +1;
         if(strlen($number) == '1'){
              $number = '0000'.$number;
         }
          if(strlen($number) == '2'){
              $number = '000'.$number;
         }
          if(strlen($number) == '3'){
              $number = '00'.$number;
         }
          if(strlen($number) == '4'){
              $number = '0'.$number;
         }
          if(strlen($number) == '5'){
              $number =$number;
         }
         return $number;
    }

   // Make a specialty name
    private function getSpecialty($id='')
    {
          if(!empty($id)){
              $where = "id = $id";
          }    
          $name = Db::name('techang')->field('id,name')->where($where)->order('id')->select();
          foreach($name as $k=>$v){
             if( strlen($v['id']) =='1'){
                  $name[$k]['name'] = '0000'.$v['id'].$v['name'];
             }
             if( strlen($v['id']) =='2'){
                  $name[$k]['name'] = '000'.$v['id'].$v['name'];
             }
             if( strlen($v['id']) =='3'){
                  $name[$k]['name'] = '00'.$v['id'].$v['name'];
             }
             if( strlen($v['id']) =='4'){
                  $name[$k]['name'] = '0'.$v['id'].$v['name'];
             }
             if( strlen($v['id']) =='5'){
                  $name[$k]['name'] =$v['id'].$v['name'];
             }
         }
         return $name;
    }

   //Get the number of people who learn this speciality
    private function getStudentSum($id='')
    { 
        $id = $id;
        $student = Db::name('student')->field('te_id')->where($where)->select();
        $array = [];
        $str = '';
        foreach($student as $k=>$v){
              foreach($v as $kk=>$vv){
                   $array[] = $v[$kk];
              }
        }
        $str = implode(',',$array);
        return  substr_count($str,$id);
    }

    // Used in screening for campus and class 
    private function getRowsData($arr)
    {
         $rows = $arr;
         foreach($rows as $kk=>$vv){
              $res = $this->getShowMoney($vv['id']);
              $rows[$kk]['money'] = $res['money'];
              $rows[$kk]['Incomep'] = $res['Incomep'];
              $rows[$kk]['spendp'] = $res['spendp'];
              $rows[$kk]['moneysum'] = intval($rows[$kk]['money']*$rows[$kk]['peoplesum']);
              $rows[$kk]['zhichu'] = round($rows[$kk]['moneysum']*$rows[$kk]['spendp'],3);
              $rows[$kk]['shouru'] = round($rows[$kk]['moneysum']*$rows[$kk]['Incomep'],3);
          }
          return $rows;
    }
    
    // class time
    private function getClassTime($id)
    {
         $param = $id;
         $res = Db::name('time')->field('id,time,status')->where('id',$id)->find();
         return $res;
    } 

   /*
        Specialty management display
   */
    public function index()
    {
          /*
              Unconditional query
         */
         $data = Db::name('techang')
                   ->field('id,name,ren_name,money,Incomep,spendp,class_num,ren_name2,desc,time_id')
                   ->order('id')
                   ->select();
             
         foreach($data as $k=>$v){
             $name =$this->getSpecialty($v['id']);
             foreach($name as $kk=>$vv){
                 $data[$k]['name'] = $vv['name'];
             }
         }
         foreach($data as $k=>$v)
         {
             $str = rtrim($v['time_id'],',');
             $arr = explode(',',$str);
             foreach($arr as $kk=>$vv){
                  $data[$k]['time'][] = $this->getClassTime($vv);
              }
         }
         if($data){
             rData('1','成功',$data);
         }else{
             $msg = '完蛋了';
             rData('0','失败',$msg);
         }
        
    }
   // Special statistics display
    public function show()
    {
         
         $garden_id = I('post.garden_id');
         $class_id= I('post.class_id');
         $speciality_id = I('post.te_id');
         $start = I('post.start');
         $end = I('post.end');
         /*
               garden  query
         */
         if(!empty($garden_id)){
              $where = "garden_id =$garden_id";
              $data = Db::name('student')->field('te_id')
                      ->where($where)->select();
              $arr = [];
              foreach($data as $k=>$v){
                   foreach($v as $kk=>$vv){
                       array_push($arr,$vv);
                   }
              }
              $rows =$this->showGetId($arr);
              $rows =$this->getRowsData($rows);
              $money = array_column($rows,'moneysum');
              $peoplesum = array_column($rows,'peoplesum');
              $zhichu = array_column($rows,'zhichu');
              $shouru = array_column($rows,'shouru');
              $moneysum = array_sum($money);
              $peoplesum = array_sum($peoplesum);
              $zhichusum = array_sum($zhichu);
              $shouru = array_sum($shouru);
              $count = $this->getCount($moneysum,$peoplesum,$zhichusum,$shouru);
              $rows['count'] = $count;
              if($rows){
                  rData('1','成功',$rows);
              }else{
                  $msg = '炸了';
                  rData('0','失败',$msg);
              }
              die;
         }
         /*
              class query
         */
         if(!empty($class_id)){
              $where = "class_id = $class_id";
              $data = Db::name('student')->field('te_id')->where($where)->select();
              $arr = [];
              foreach($data as $k=>$v){
                   foreach($v as $kk=>$vv){
                       array_push($arr,$vv);
                   }
              }
              $rows =$this->showGetId($arr);
              $rows =$this->getRowsData($rows);
              $money = array_column($rows,'moneysum');
              $peoplesum = array_column($rows,'peoplesum');
              $zhichu = array_column($rows,'zhichu');
              $shouru = array_column($rows,'shouru');
              $moneysum = array_sum($money);
              $peoplesum = array_sum($peoplesum);
              $zhichusum = array_sum($zhichu);
              $shouru = array_sum($shouru);
              $count = $this->getCount($moneysum,$peoplesum,$zhichusum,$shouru);
              $rows['count'] = $count;
              if($rows){
                  rData('1','成功',$rows);
              }else{
                  $msg = '炸了';
                  rData('0','失败',$msg);
              }
         }

           /*
             time query
           */
          if(!empty($start && empty($end))){
              $where = "a.addtime >= '$start'";
          }
          if(!empty($start) && !empty($end)){
               $where = "a.addtime >= '$start' and a.addtime <= '$end'";
              
          }

          /*
               Specialty query
          */
          
          if(!empty($speciality_id)){
             $id = $speciality_id;
             $data = [];
             $name = $this->getSpecialty($id);
             foreach($name as $k=>$v){
                 $data['id'] = $v['id'];
                 $data['name'] = $v['name'];
                 $peoplesum =$this->getStudentSum($v['id']);
                 $data['peoplesum'] = $peoplesum;
                 $money = $this->getShowMoney($v['id']);
                 $data['money'] = $money['money'];
                 $data['Incomep'] = $money['Incomep'];
                 $data['spendp'] = $money['spendp'];
                 $data['moneysum'] = intval($data['money']*$data['peoplesum']);
                 $data['zhichu'] = round($data['moneysum']*$data['spendp'],3);
                 $data['shouru'] = round($data['moneysum']*$data['Incomep'],3);
                 
             }
             if($data){
                 rData('1','成功',$data);
             }else{
                 $msg = '炸了';
                 rData('0','失败',$msg);
             }
             
          }

          /*
              Unconditional query
          */

               // 比例不能填零
         $moneysum = [];
         $peoplesum = [];
         $zhichu = [];     
         $data = Db::name('techang')
                   ->field('id,money,Incomep,spendp,class_num')
                   ->order('id')
                   ->select();
         foreach($data as$k=>$v){
               $name = $this->getSpecialty($v['id']);
               foreach($name as $kk=>$vv){
                  $data[$k]['name'] = $vv['name'];
               }
               $data[$k]['peoplesum'] =$this->getStudentSum($v['id']);
               $data[$k]['moneysum'] = intval($data[$k]['peoplesum']*$data[$k]['money']);
               $data[$k]['shouru'] =   round($data[$k]['moneysum']*$data[$k]['Incomep'],3);
               $data[$k]['zhichu'] = round($data[$k]['moneysum']*$data[$k]['spendp'],3);
         }
         $money = array_column($data,'moneysum');
         $peoplesum = array_column($data,'peoplesum');
         $zhichu = array_column($data,'zhichu');
         $shouru = array_column($data,'shouru');
         $moneysum = array_sum($money);
         $peoplesum = array_sum($peoplesum);
         $zhichusum = array_sum($zhichu);
         $shouru = array_sum($shouru);
         $count = $this->getCount($moneysum,$peoplesum,$zhichusum,$shouru);
         $data[] = $count;

         // dump($data);die;
         if($data){
             rData('1','成功',$data);
         }else{
             $msg = '完蛋了';
             rData('0','失败',$msg);
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
   // Gets the time and number
    public function getTime()
    {
         $number = $this->specialtyNumber();  
         $time = Db::name('time')->order('id')->select();
         $rTime = [];
         foreach($time as $k=>$v){
              if($v['status'] == '0'){
                    $rTime['morning'][] =$this->getClassTime($v['id']);
                    
              }
              if($v['status'] == '1'){
                   $rTime['afternone'][] =$this->getClassTime($v['id']);
              }
         }
         if($rTime){
             $rTime['number'] = $number;
             rData('1','成功',$rTime);
         }else{
             $msg = '数据库又炸了';
             rData('0','失败',$msg);
         }
    }

    // add data
    public function create(Request $req)
    {
             // 添加课程时间   多选框  获得time value 给它tp_time ID
              // $str = $req->only('Income');
              // $string= $str['Income'];
              // $pattern='/[\d]+[.]{1}[\d]*/i';
              // if(empty($string)){
              //     $msg ='失败了';
              //     rData('0','失败',$msg);
              // }
              // $str=preg_match_all($pattern, $string,$arr);
              // if($str =='0'){
              //    echo '456';  
                 
              // } 
              // $rpattern = '/[\d]*/i';
              // $stri =preg_match_all($rpattern,$string,$arr);
              // if($stri == '0'){
              //     echo '213';
              //     die;
              // } 
              // echo $str; echo $stri;
              // echo dump($arr);
              // die;
              $data = $req->only('name,ren_name,money,Income,spendp,ren_name2,class_num');
              $time = $req->only('time');
              $time = implode(',',$v).',';
              $data['time'] = $time;
              if($data){
                  $data['desc'] = $str;
                  $res = Db::name('techang')->insert($data);
                  if($res){
                       $msg = '插入成功';
                       rData('1','成功',$msg);die;
                  }else{
                       $msg = '失败了';
                       rData('0','失败',$msg);die;
                  }            
              }else{
                   $msg ='数据有问题';
                   rData('0','失败',$msg); 
              }
     }         
}
