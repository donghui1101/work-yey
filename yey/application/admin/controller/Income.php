<?php

namespace  app\admin\controller;

use think\Controller;
use think\Db;
use app\admin\controller\Base;
class Income extends Controller{
    public function page($table,$limitSize,$where,$get){
        $count = Db::name($table)->where($where)->count("*");
        $pageSize = $limitSize;
        $pageCount = ceil($count/$pageSize);
        $page = $get;
        $pageLimit = ($page-1)*$pageSize;
        $data["pageCount"] = $pageCount;
        $data['pageLimit'] = $pageLimit;
        $data['pageSize'] = $pageSize;
        $data['pageUp'] = $page-1<1?1:$page-1;
        $data['pageNe'] = $page+1>$pageCount?$pageCount:$page+1;
        return $data;
    }

    //ajax获取数据动态
    public function getindexData(){
        $arr = $_POST['arr'];
        $where = "1=1 and tp_money.ie_status=1";
        foreach ($arr as $key => $value) {
            if($value['id']!=0){
                $where.=" and tp_money.".$value['type']."=".$value['id'];
            }
        }
        $data  = Db::name("money")
            ->join('organization a','tp_money.class_id = a.id','left')
            ->join('organization b','tp_money.garden_id = b.id','left')
            ->join("organization c",'tp_money.ji_id = c.id','left')
            ->join("cause",'tp_money.cause_id = cause.id','left')
            ->join("student",'tp_money.student_id = student.id','left')

            ->where($where)
            ->field('money,tp_money.status,ie_status,tp_money.addtime,cause.name as cause_name,c.name as jituan_name,b.name as garden_name,a.name as class_name,principal,student.name as student_name,channel')
            ->select();
        return json_encode($data);
    }
    public function index(){
        $where ="1=1 and ie_status = 1";
        $get =isset($_GET['page'])?$_GET['page']:1;
        if(request()->isAjax()){
            $data = $_POST;
            if(!empty($data["garden"])){
                $where .= " and tp_money.garden_id = {$data['garden']}";
            }
            if(!empty($data["ie_status"])){
                if($data["ie_status"] == 2){
                    $where .= " and tp_money.ie_status = 0";
                }else{
                    $where .= " and tp_money.ie_status = {$data['ie_status']}";
                }
            }
            if(!empty($data["time"])){
                $where .= " and tp_money.addtime = '{$data['time']}'";
            }
        }
        $page = $this->page("money","7",$where,$get);
        $this->assign("page",$page);
        $list  = Db::name("money")
            ->join('organization a','tp_money.class_id = a.id','left')
            ->join('organization b','tp_money.garden_id = b.id','left')
            ->join("organization c",'tp_money.ji_id = c.id','left')
            ->join("cause",'tp_money.cause_id = cause.id','left')
            ->join("student",'tp_money.student_id = student.id','left')

            ->where($where)
            ->field('money,tp_money.status,ie_status,tp_money.addtime,cause.name as cause_name,c.name as jituan_name,b.name as garden_name,a.name as class_name,principal,student.name as student_name,channel')
            ->select();
        if(request()->isAjax()){
            $li["page"] = $page;
            $li["data"] = $list;
            return json_encode($li);die;
        }
        $data = Db::name("money")
            ->join("organization c",'tp_money.ji_id = c.id','left')
            ->field('c.name as jituan_name,sum(money) as money,c.id,ie_status')
            ->group('c.name,c.id,ie_status')
            ->select();
        $res=[];
        foreach ($data as $key=>$v){
            $res[$v['id']]['jituan_name']=$v['jituan_name'];
            if($v['ie_status']==0){
                $res[$v['id']]['zhichu']=$v['money'];
            }else{
                $res[$v['id']]['shouru']=$v['money'];
            }
        }
        $CauseList = Db::name('cause')->where('status=1')->order('id')->select();
        $this->assign('causelist',$CauseList);
        $this->assign('data',$res);
//        $garden = Db::name("organization")->where("status","1")->select();
        $ji=Db::name("organization")->where("p_id",0)->select();
        $this->assign("ji",$ji);
//        $this->assign("garden",$garden);
        $this->assign('list',$list);
        $cause = Db::table("tp_cause")->select();
//        dump($list);die;
        $this->assign('cause',$cause);
        return $this->fetch();
    }

    public function getCause()
    {
          //马东辉的代码
        $arr = []; 
        $CauseName = I('get.causename');
        if(!empty($CauseName)){
            $rows = Db::name('cause')->where("name ='$CauseName'")->select();
            if($rows){
                 $arr['status'] =250;
                 $arr['msg'] = '已有缴费类型';
                 echo json_encode($arr);die;
            }else{
                $data['name'] =$CauseName;
                $data['status'] = 1;
                $data['addtime'] =date("Y-m-d" ,strtotime("now"));;
                $res = Db::name('cause')->insert($data);
            }
        }
        else{
             $res = false;
        }
        if($res){
            $arr['status'] = 1;
            $arr['msg'] = '添加成功';
            echo json_encode($arr);
        }else{
            $arr['status'] = 0;
            $arr['msg'] = '添加失败';
            echo  json_encode($arr);
        }
    }
}

?>