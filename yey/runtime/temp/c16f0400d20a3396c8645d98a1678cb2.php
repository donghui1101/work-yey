<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:48:"./application/admin/view/shan\qian_food_add.html";i:1551152146;s:78:"E:\PhpStudy\PHPTutorial\WWW\work\yey\application\admin\view\public\layout.html";i:1551152160;}*/ ?>
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
<body style="background-color: #FFF; overflow: auto;">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page">
    <div class="fixed-bar">
        <div class="item-title"><a class="back" href="javascript:history.back();" title="返回列表"><i class="fa fa-arrow-circle-o-left"></i></a>
            <div class="subject">
                <h3>营养膳食--添加菜品</h3>
                <h5>添加菜谱资料</h5>
            </div>
        </div>
    </div>
    <form class="form-horizontal" id="form" method="post" action="/index.php?m=Admin&c=Shan&a=qian_food_add" enctype="multipart/form-data">
        <div class="ncap-form-default">
        	  <dl class="row">
                <dt class="tit">
                    <label for="user_name"><em>*</em>所属园所</label>
                </dt>
                <dd class="opt">
                    <select name="garden_id[]" class="sell">
                        <option value="0">请选择...</option>
                    	<?php if(is_array($garden) || $garden instanceof \think\Collection || $garden instanceof \think\Paginator): if( count($garden)==0 ) : echo "" ;else: foreach($garden as $key=>$val): ?>
                    		<option value="<?php echo $val['id']; ?>"><?php echo $val['name']; ?></option>
                    	<?php endforeach; endif; else: echo "" ;endif; ?>
                    	
                    	
                    </select>
                    <span class="err" id="err_user_name"></span>
                    <p class="notic">所属园所</p>
                </dd>
            </dl>
            
           <!--  <dl class="row">
                <dt class="tit">
                    <label for="user_name"><em>*</em>饭点类型</label>
                </dt>
                <dd class="opt">
                    <select name="eat_time_type">
                    	<option value="1">早餐食谱</option>
                    	<option value="2">早点食谱</option>
                    	<option value="3">午餐食谱</option>
                    	<option value="4">午点食谱</option>
                    	<option value="5">晚餐食谱</option>
                    </select>
                    <span class="err" id="err_user_name"></span>
                    <p class="notic">食谱类型</p>
                </dd>
            </dl> -->
            <dl class="row">
                <dt class="tit">
                    <label for="user_name"><em>*</em>食谱类型</label>
                </dt>
                <dd class="opt">
                    <select name="menu_type">
                    	<?php if(is_array($menu) || $menu instanceof \think\Collection || $menu instanceof \think\Paginator): if( count($menu)==0 ) : echo "" ;else: foreach($menu as $key=>$val): ?>
                    		<option value="<?php echo $val['id']; ?>"><?php echo $val['name']; ?></option>
                    	<?php endforeach; endif; else: echo "" ;endif; ?>
                    	
                    	
                    </select>
                    <span class="err" id="err_user_name"></span>
                    <p class="notic">食谱类型</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="email"><em>*</em>食谱名称</label>
                </dt>
                <dd class="opt">
                   <input type="text" name="name" maxlength="18"  class="input-txt">
                    <span class="err" id="err_email"></span><p class="notic">食谱名称</p>
                </dd>

            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="password"><em>*</em>选择食材</label>
                </dt>
                <dd class="opt">
                    <select name="food_cai[]">
                    	<?php if(is_array($cai) || $cai instanceof \think\Collection || $cai instanceof \think\Paginator): if( count($cai)==0 ) : echo "" ;else: foreach($cai as $key=>$val): ?>
                    		<option value="<?php echo $val['id']; ?>"><?php echo $val['name']; ?></option>
                    	<?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <input type="text" name="ke[]">克
                    <input type="text" name="hl[]">ml
                    <button class="cai" type="button">＋</button>
                    <span class="err" id="err_password"></span><p class="notic">选择食材</p>
                </dd>

            </dl>
             <dl class="row">
                <dt class="tit">
                    <label for="password"><em>*</em>上传图片</label>
                </dt>
                <dd class="opt">
                    <input type="file" name="file">
                    <span class="err" id="err_password"></span><p class="notic">食品图片</p>
                </dd>

            </dl>
            
            <div class="bot"><a href="JavaScript:void(0);" onclick="adsubmit();" class="ncap-btn-big ncap-btn-green" id="submitBtn">确认提交</a></div>
        </div>
    </form>
</div>
<script type="text/javascript">


  $(document).on('click',".cai",function(){
	  	var type = $(this).html();
	  	
	  	if(type=="＋"){
	  		$(this).html("-")
	  		var clone=$(this).parent().parent().clone()
	  		$(this).parent().parent().after(clone)
	  		$(this).html("＋")
	  	}else{
	  		$(this).parent().parent().remove()
	  	}
  })

    function adsubmit(){
        $("#form").submit();
    }

 $(document).on('change','.sell',function(){
        var id = $(this).val();
        if(id==0){
            return false;
        }
        var obj =$(this);
        $.ajax({
            url:"/index.php?m=Admin&c=Organization&a=getji",
            dataType:'json',
            data:{id:id},
            success:function(res){
                 obj.nextAll().remove();
                 if(res.state==0){
                    return false;
                 }
                 var sel="<select  name='garden_id[]'><option value='0'>请选择...</option>";
                     //json的循环
                    $(res.data).each(function(key,val){
                        //自增的id                     市或区的名称
                        sel+="<option value='"+val.id+"'>"+val.name+"</option>";
                    })
                    sel+="</select>";
                    //后面追加
                    obj.after(sel);
            }

        })
        //传值
       
        })      
</script>
</body>
</html>