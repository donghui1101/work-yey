<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:43:"./application/admin/view/techang\index.html";i:1553494602;s:78:"E:\PhpStudy\PHPTutorial\WWW\work\yey\application\admin\view\public\layout.html";i:1551152160;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link href="/public/static/css/main.css" rel="stylesheet" type="text/css">
<link href="/public/static/css/page.css" rel="stylesheet" type="text/css">
<link href="/public/static/font/css/font-awesome.min.css" rel="stylesheet" />
<!--[if IE 7]>
  <link rel="stylesheet" href="/public/static/font/css/font-awesome-ie7.min.css">
<![endif]-->
<link href="/public/static/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
<link href="/public/static/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css"/>
<style type="text/css">html, body { overflow: visible;}</style>
<script type="text/javascript" src="/public/static/js/jquery.js"></script>
<script type="text/javascript" src="/public/static/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/public/static/js/layer/layer.js"></script><!-- 弹窗js 参考文档 http://layer.layui.com/-->
<script type="text/javascript" src="/public/static/js/admin.js"></script>
<script type="text/javascript" src="/public/static/js/jquery.validation.min.js"></script>
<script type="text/javascript" src="/public/static/js/common.js"></script>
<script type="text/javascript" src="/public/static/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="/public/static/js/jquery.mousewheel.js"></script>
<script src="/public/js/myFormValidate.js"></script>
<script src="/public/js/myAjax2.js"></script>
<script src="/public/js/global.js"></script>
    <script type="text/javascript">
    function delfunc(obj){
    	layer.confirm('确认删除？', {
    		  btn: ['确定','取消'] //按钮
    		}, function(){
    		    // 确定
   				$.ajax({
   					type : 'post',
   					url : $(obj).attr('data-url'),
   					data : {act:'del',del_id:$(obj).attr('data-id')},
   					dataType : 'json',
   					success : function(data){
						layer.closeAll();
   						if(data.status==1){
                            layer.msg(data.msg, {icon: 1, time: 2000},function(){
                                location.href = '';
//                                $(obj).parent().parent().parent().remove();
                            });
   						}else{
   							layer.msg(data, {icon: 2,time: 2000});
   						}
   					}
   				})
    		}, function(index){
    			layer.close(index);
    			return false;// 取消
    		}
    	);
    }

    function selectAll(name,obj){
    	$('input[name*='+name+']').prop('checked', $(obj).checked);
    }

    function get_help(obj){

		window.open("http://www.tp-shop.cn/");
		return false;

        layer.open({
            type: 2,
            title: '帮助手册',
            shadeClose: true,
            shade: 0.3,
            area: ['70%', '80%'],
            content: $(obj).attr('data-url'),
        });
    }

    function delAll(obj,name){
    	var a = [];
    	$('input[name*='+name+']').each(function(i,o){
    		if($(o).is(':checked')){
    			a.push($(o).val());
    		}
    	})
    	if(a.length == 0){
    		layer.alert('请选择删除项', {icon: 2});
    		return;
    	}
    	layer.confirm('确认删除？', {btn: ['确定','取消'] }, function(){
    			$.ajax({
    				type : 'get',
    				url : $(obj).attr('data-url'),
    				data : {act:'del',del_id:a},
    				dataType : 'json',
    				success : function(data){
						layer.closeAll();
    					if(data == 1){
    						layer.msg('操作成功', {icon: 1});
    						$('input[name*='+name+']').each(function(i,o){
    							if($(o).is(':checked')){
    								$(o).parent().parent().remove();
    							}
    						})
    					}else{
    						layer.msg(data, {icon: 2,time: 2000});
    					}
    				}
    			})
    		}, function(index){
    			layer.close(index);
    			return false;// 取消
    		}
    	);
    }

    /**
     * 全选
     * @param obj
     */
    function checkAllSign(obj){
        $(obj).toggleClass('trSelected');
        if($(obj).hasClass('trSelected')){
            $('#flexigrid > table>tbody >tr').addClass('trSelected');
        }else{
            $('#flexigrid > table>tbody >tr').removeClass('trSelected');
        }
    }
    /**
     * 批量公共操作（删，改）
     * @returns {boolean}
     */
    function publicHandleAll(type){
        var ids = '';
        $('#flexigrid .trSelected').each(function(i,o){
//            ids.push($(o).data('id'));
            ids += $(o).data('id')+',';
        });
        if(ids == ''){
            layer.msg('至少选择一项', {icon: 2, time: 2000});
            return false;
        }
        publicHandle(ids,type); //调用删除函数
    }
    /**
     * 公共操作（删，改）
     * @param type
     * @returns {boolean}
     */
    function publicHandle(ids,handle_type){
        layer.confirm('确认当前操作？', {
                    btn: ['确定', '取消'] //按钮
                }, function () {
                    // 确定
                    $.ajax({
                        url: $('#flexigrid').data('url'),
                        type:'post',
                        data:{ids:ids,type:handle_type},
                        dataType:'JSON',
                        success: function (data) {
                            layer.closeAll();
                            if (data.status == 1){
                                layer.msg(data.msg, {icon: 1, time: 2000},function(){
                                    location.href = data.url;
                                });
                            }else{
                                layer.msg(data.msg, {icon: 2, time: 2000});
                            }
                        }
                    });
                }, function (index) {
                    layer.close(index);
                }
        );
    }
</script>  

</head>
<style>
    * {
        margin: 0;
        padding: 0;
        list-style: none;
    }


    /*设置中间鼠标点击事件*/

    .ayou_div2 {

        height: 46px;
        position: relative;
    }

    li {
        width: 129px;
        height: 44px;
        font-size: 16px;
        text-align: center;
        line-height: 44px;
        float: left;
        cursor: pointer;
    }
    /*设置显示li的样式*/
    h3{
        width: 120px;
        float: left;
        height: 44px;
        line-height: 44px;
        font-size: 16px;
    }
    .a_11 {
        background: #9bc248;
        color: #fff;
        border-bottom: none;
    }

</style>
<body style="background-color: rgb(255, 255, 255); overflow: auto; cursor: default; -moz-user-select: inherit;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page">
    <div class="fixed-bar">
        <div class="item-title">
            <div class="subject">
                <h3>特长管理</h3>
                <!--<h5>网站系统管理员列表</h5>-->
            </div>
        </div>
    </div>
    <!--&lt;!&ndash; 操作说明 &ndash;&gt;-->
    <!--<div id="explanation" class="explanation" style="color: rgb(44, 188, 163); background-color: rgb(237, 251, 248); width: 99%; height: 100%;">-->
    <!--<div id="checkZoom" class="title"><i class="fa fa-lightbulb-o"></i>-->
    <!--<h4 title="提示相关设置操作时应注意的要点">操作提示</h4>-->
    <!--<span title="收起提示" id="explanationZoom" style="display: block;"></span>-->
    <!--</div>-->
    <!--<ul>-->
    <!--<li>管理员列表管理, 可修改后台管理员登录密码和所属角色</li>-->
    <!--</ul>-->
    <!--</div>-->
    <div class="ayou_div1">

        <!--设置选项卡-->
        <div class="ayou_div2">

            <ul id="a_1">
                <h3>所属集团：</h3>
                <li class="a_11 cl" id="0" cat="ji_id">全部</li>
                <?php if(is_array($where['ji']) || $where['ji'] instanceof \think\Collection || $where['ji'] instanceof \think\Paginator): if( count($where['ji'])==0 ) : echo "" ;else: foreach($where['ji'] as $key=>$val): ?>
                    <li id="<?php echo $val['id']; ?>" cat="ji_id" class="cl"><?php echo $val['name']; ?></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </ul>
        </div>


        <!--设置选项卡-->
        <div class="ayou_div2">

            <ul id="a_2">
                <h3>所属园区/部门：</h3>
                <span id="garden">
					<li class="a_11 cl" id="0" cat="garden_id">全部</li>

						<?php if(is_array($where['garden']) || $where['garden'] instanceof \think\Collection || $where['garden'] instanceof \think\Paginator): if( count($where['garden'])==0 ) : echo "" ;else: foreach($where['garden'] as $key=>$val): ?>
							<li id="<?php echo $val['id']; ?>" cat="garden_id" class="cl"><?php echo $val['name']; ?></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</span>
            </ul>
        </div>

        <!--设置选项卡-->
        <!--<div class="ayou_div2">-->

            <!--<ul id="a_3">-->
                <!--<h3>所属班级：</h3>-->
                <!--<span id="class">-->
					<!--<li class="a_11 cl" id="0" cat="class_id">全部</li>-->

						<!--<?php if(is_array($where['class']) || $where['class'] instanceof \think\Collection || $where['class'] instanceof \think\Paginator): if( count($where['class'])==0 ) : echo "" ;else: foreach($where['class'] as $key=>$val): ?>-->
						<!--<li id="<?php echo $val['id']; ?>" cat="class_id" class="cl"><?php echo $val['name']; ?></li>-->
					<!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
					<!--</span>-->

            <!--</ul>-->
        <!--</div>-->

    </div>
    <!--马东辉的添加的代码-->
     <div><button type="button" id="cbtn">添加时间</button></div>
         <div id="boxinput" style="width:800px;height:250px;border:1px solid #eee;display: none;text-align:center">
                <div style="width:30px;height:30px;border:1px solid black;text-align:center">
                    <b id="x" style="font-size:22px;color:red">X</b></div>
                    <div style="height:35px"></div>
                <b style="font-size:22px">已有时间段：</b>
                                       <select name="time" style="width:645px;">
                                        <?php if(is_array($time) || $time instanceof \think\Collection || $time instanceof \think\Paginator): if( count($time)==0 ) : echo "" ;else: foreach($time as $key=>$v): ?>
                                             <option value="<?php echo $v['id']; ?>"><?php echo $v['time']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                <div class="height" style="height:50px;"></div>
                <b style="font-size:22px">添加时间段：</b>
                 <input id="timename" type="time" name="time" style="width:10%">—<input type="time" name="time" id="time"><br>
                <div style="height:35px"></div>
                <button type="button" id="OK">提交</button> 　　　　<button type="button" onclick="window.history.go(0)">返回</button>
         </div>

    <div class="flexigrid">
        <div class="hDiv">
            <div class="hDivBox">
                <table cellspacing="0" cellpadding="0">
                    <thead>
                    <tr>
                        <th class="sign" axis="col0">
                            <div style="width: 24px;"><i class="ico-check"></i></div>
                        </th>
                        <th align="left" abbr="article_title" axis="col3" class="">
                            <div style="text-align: left; width: 100px;" class="">特长课名称</div>
                        </th>
                        <th align="left" abbr="ac_id" axis="col4" class="">
                            <div style="text-align: left; width: 100px;" class="">授课人</div>
                        </th>
                        <th align="left" abbr="ac_id" axis="col4" class="">
                            <div style="text-align: left; width: 100px;" class="">价格</div>
                        </th>
                        <th align="left" abbr="ac_id" axis="col4" class="">
                            <div style="text-align: left; width: 100px;" class="">结算比例</div>
                        </th>
                        <th align="left" abbr="ac_id" axis="col4" class="">
                            <div style="text-align: left; width: 100px;" class="">月课时</div>
                        </th>
                        <th align="left" abbr="ac_id" axis="col4" class="">
                            <div style="text-align: left; width: 100px;" class="">配课老师</div>
                        </th>
                        <!--<th align="left" abbr="ac_id" axis="col4" class="">-->
                            <!--<div style="text-align: left; width: 100px;" class="">课程具体时间简述</div>-->
                        <!--</th>-->
                        <th align="left" abbr="ac_id" axis="col4" class="">
                            <div style="text-align: left; width: 100px;" class="">集团名称</div>
                        </th>
                        <th align="left" abbr="ac_id" axis="col4" class="">
                            <div style="text-align: left; width: 100px;" class="">园所名称</div>
                        </th>

                        <th align="center" axis="col1" class="handle">
                            <div style="text-align: center; width: 150px;">操作</div>
                        </th>
                        <th style="width:100%" axis="col7">
                            <div></div>
                        </th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="tDiv">
            <div class="tDiv2">
            <div class="fbutton">
            <a href="<?php echo U('Techang/add'); ?>">
            <div class="add" title="添加管理员">
            <span><i class="fa fa-plus"></i>特长课添加设置</span>
            </div>
            </a>
            </div>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="bDiv" style="height: auto;">
            <div id="flexigrid" cellpadding="0" cellspacing="0" border="0">
                <table>
                    <tbody id="tbd">
                    <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): if( count($data)==0 ) : echo "" ;else: foreach($data as $k=>$vo): ?>
                        <tr>
                            <td class="sign">
                                <div style="width: 24px;"><i class="ico-check"></i></div>
                            </td>
                            <td align="left" class="">
                                <div style="text-align: left; width: 100px;"><?php echo $vo['name']; ?></div>
                            </td>
                            <td align="left" class="">
                                <div style="text-align: left; width: 100px;"><?php echo $vo['ren_name']; ?></div>
                            </td>
                            <td align="left" class="">
                                <div style="text-align: left; width: 100px;"><?php echo $vo['money']; ?></div>
                            </td>
                            <td align="left" class="">
                                <div style="text-align: left; width: 100px;"><?php echo $vo['Incomep']; ?></div>
                            </td>
                            <td align="left" class="">
                                <div style="text-align: left; width: 100px;"><?php echo $vo['class_num']; ?></div>
                            </td>
                            <td align="left" class="">
                                <div style="text-align: left; width: 100px;"><?php echo $vo['ren_name2']; ?></div>
                            </td>
                            <!--<td align="left" class="">-->
                                <!--<div style="text-align: left; width: 100px;"><?php echo $vo['desc']; ?></div>-->
                            <!--</td>-->
                            <td align="left" class="">
                                <div style="text-align: left; width: 100px;"><?php echo $vo['ji_name']; ?></div>
                            </td>
                            <td align="left" class="">
                                <div style="text-align: left; width: 100px;"><?php echo $vo['garden_name']; ?></div>
                            </td>
                            <td align="center" class="handle">
                                <div style="text-align: center; width: 100px; max-width:100px;">
                                    <a class="btn red"  href="javascript:void(0)" data-url="<?php echo U('Techang/del'); ?>" data-id="<?php echo $vo['id']; ?>" onClick="delfun(this)"><i class="fa fa-trash-o"></i>删除</a>
                                    <a href="/index.php?m=Admin&c=Techang&a=XQ&id=<?php echo $vo['id']; ?>" class="btn blue"><i class="fa fa-pencil-square-o"></i>详情</a>
                                </div>
                            </td>
                            <td align="" class="" style="width: 100%;">
                                <div>&nbsp;</div>
                            </td>
                        </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="iDiv" style="display: none;"></div>
        </div>
        <!--分页位置-->
        <?php echo $page; ?> </div>
</div>
<script>

    $(document).on('click',".cl",function(){

        $(this).addClass("a_11")
        $(this).siblings().attr("class","cl")
        var cat = $(this).attr("cat");
        var id = $(this).attr("id");
        if(id =='0'){
            history.go(0)
        }
        var obj = $(".a_11");
        // console.log(obj)
        var arr=new Array();
        $(obj).each(function(i,v){
            var dat={
                id:v.id,
                type:$(this).attr("cat")
            };
            arr.push(dat)
        })
        console.log(arr);
        // return;


        if(cat=='ji_id'){
            $("#class").html('<li class="a_11 cl" id="0" cat="class_id">全部</li>');
            $.ajax({
                url:"/index.php?m=Admin&c=Assess&a=getGarden",
                data:{id:id,cat:cat},
                dataType:'json',
                success:function(res){
                    // console.log(res)
                    var st ='<li class="a_11 cl" cat="garden_id" id="0">全部</li>';
                    $.each(res,function(i,val){
                        st +=`<li id="${val.id}" cat="garden_id" class="cl">${val.name}</li>`
                    })

                    $("#garden").html(st)
                }
            })
            $.ajax({
                url:"/index.php?m=Admin&c=Assess&a=getRole",
                data:{id:id,cat:cat},
                dataType:'json',
                success:function(res){
                    // console.log(res)
                    var st ='<li class="a_11 cl" cat="o_id" id="0">全部</li>';
                    $.each(res,function(i,val){
                        st +=`<li id="${val.id}" cat="o_id" class="cl">${val.name}</li>`
                    })

                    $("#ren").html(st)
                }
            })
            $.ajax({
                url:"/index.php?m=Admin&c=Assess&a=getJiType",
                data:{id:id,status:status},
                dataType:'json',
                success:function(res){
                    var str ='<li class="a_11 cl" cat="fen_id" id="0">全部</li>';
                    $.each(res,function(i,val){
                        str +=`<li id="${val.id}" cat="fen_id" class="cl">${val.name}</li>`
                    })
                    $("#fen").html(str)
                }
            })
        }
        if(cat=='garden_id'){
            $.ajax({
                url:"/index.php?m=Admin&c=Assess&a=getClass",
                data:{id:id,cat:cat},
                dataType:'json',
                success:function(res){
                    // console.log(res)
                    var stt ='<li class="a_11 cl" cat="class_id" id="0">全部</li>';
                    $.each(res,function(i,val){
                        stt +=`<li id="${val.id}" cat="class_id" class="cl">${val.name}</li>`
                    })

                    $("#class").html(stt)
                }
            })
        }

        if(cat =='o_id'){
            var tid = $(this).html()
            $.ajax({
                url:"/index.php?m=Admin&c=Assess&a=getFenType",
                data:{tid:tid},
                type:'post',
                dataType:'json',
                success:function(res){
                    var sttt ='<li class="a_11 cl" cat="fen_id" id="0">全部</li>';
                    $.each(res,function(i,val){
                        sttt +=`<li id="${val.id}" cat="fen_id" class="cl">${val.name}</li>`
                    })
                    $("#fen").html(sttt)
                }
            })


        }
        $.ajax({
            url:"/index.php?m=Admin&c=Techang&a=getTechangData",
            data:{"arr":arr},
            type:'post',
            dataType:'json',
            success:function(res){
                var str ='';
                $.each(res,function(i,vo){
                    str +=`
                            <tr>
                            <td class="sign">
                                <div style="width: 24px;"><i class="ico-check"></i></div>
                            </td>
                            <td align="left" class="">
                                <div style="text-align: left; width: 100px;">${vo.name}</div>
                            </td>
                            <td align="left" class="">
                                <div style="text-align: left; width: 100px;">${vo.ren_name}</div>
                            </td>
                            <td align="left" class="">
                                <div style="text-align: left; width: 100px;">${vo.money}</div>
                            </td>
                            <td align="left" class="">
                                <div style="text-align: left; width: 100px;">${vo.Incomep}</div>
                            </td>
                            <td align="left" class="">
                                <div style="text-align: left; width: 100px;">${vo.class_num}</div>
                            </td>
                            <td align="left" class="">
                                <div style="text-align: left; width: 100px;">${vo.ren_name2}</div>
                            </td>

                            <td align="left" class="">
                                <div style="text-align: left; width: 100px;">${vo.ji_name}</div>
                            </td>
                            <td align="left" class="">
                                <div style="text-align: left; width: 100px;">${vo.garden_name}</div>
                            </td>
                            <td align="center" class="handle">
                                <div style="text-align: center; width: 100px; max-width:100px;">
                                    <a class="btn red"  href="javascript:void(0)" data-url="<?php echo U('Techang/del'); ?>" data-id="${vo.id}" onClick="delfun(this)"><i class="fa fa-trash-o"></i>删除</a>
                                    <a href="/index.php?m=Admin&c=Techang&a=XQ&id=${vo.id}" class="btn blue"><i class="fa fa-pencil-square-o"></i>详情</a>
                                </div>
                            </td>
                            <td align="" class="" style="width: 100%;">
                                <div>&nbsp;</div>
                            </td>
                        </tr>
                    `;
                })

                $("#tbd").html(str)
            }

        })
    })




    $(document).ready(function(){
        // 表格行点击选中切换
        $('#flexigrid > table>tbody >tr').click(function(){
            $(this).toggleClass('trSelected');
        });

        // 点击刷新数据
        $('.fa-refresh').click(function(){
            location.href = location.href;
        });

    });


    function delfun(obj) {
        // 删除按钮
        layer.confirm('确认删除？', {
            btn: ['确定', '取消'] //按钮
        }, function () {
            $.ajax({
                type: 'post',
                url: $(obj).attr('data-url'),
                data : {act:'del',id:$(obj).attr('data-id')},
                dataType: 'json',
                success: function (data) {
//                    console.log(data);return false;
                    if (data.status == 1) {
                        layer.msg(data.msg,{icon: 1,time: 1000},function () {
                            $(obj).parent().parent().parent().remove();
                        })
                    } else {
                        layer.msg(data.msg,{icon: 2,time: 2000})
                    }
                }
            })
        }, function () {
        });
    }

    $('#cbtn').click(function(){
          $('#boxinput').css('display','block');
          $('#OK').click(function(){
               var time = $('#timename').val();
               $.ajax({
                    url:'',
                    dataType:'',
                    data:'',
                    type:'',
                    success:function(msg){
                          console.log(msg)
                    }
               })
               console.log(time);
          })

    })
    $('#x').click(function(){
          $('#boxinput').css('display','none');
    })
</script>
</body>
</html>