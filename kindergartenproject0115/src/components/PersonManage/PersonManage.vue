<template>
	<div class="PersonManage">
		<div class="personManage">
		<div class="sharingTitle">
			<h3>人事管理</h3>
		</div>
		<div class="content_personManage">
			<div class="header">
			<h4>初始化信息设置</h4>
		</div>
	<div class="school">
		<ul class="park">
			<h3>所属园区:</h3>
			<li class="one">全部</li>
			<li>星光幼儿园</li>
			<li>第一幼儿园</li>
			<li>第一幼儿园</li>
			<li>第一幼儿园</li>
			<li>第一幼儿园</li>
		</ul>
		<ul class="park">
			<h3>所属班级:</h3>
			<li class="one">全部</li>
			<li>小一班</li>
			<li>小一班</li>
			<li>小一班</li>
			<li>小一班</li>
			<li>小一班</li>
		</ul>
		<div class="search">
			<div class="date">
				时间
				<span>1999-05-04</span>~
				<span>1999-05-06</span>
			</div>
			<div class="search_content">
				<img src="../../../static/img/search.png" />
				<input type="text" placeholder="输入关键词搜索"/>
			</div>
			<a href="javascript:;">搜索</a>
		</div>
	</div>
	<div class="content">
		<div class="content_top">
			<dl>
				<dt><img src="../../../static/img/header.png"/></dt>
				<dd>阿萌</dd>
			</dl>
			<dl>
				<dt><img src="../../../static/img/header.png"/></dt>
				<dd>阿萌</dd>
			</dl>
			<dl>
				<dt><img src="../../../static/img/header.png"/></dt>
				<dd>阿萌</dd>
			</dl>
			<dl>
				<dt><img src="../../../static/img/header.png"/></dt>
				<dd>阿萌</dd>
			</dl>
			<dl>
				<dt><img src="../../../static/img/header.png"/></dt>
				<dd>阿萌</dd>
			</dl>
			<dl>
				<dt><img src="../../../static/img/header.png"/></dt>
				<dd>阿萌</dd>
			</dl>
		</div>
		<div class="content_top">
			<dl>
				<dt><img src="../../../static/img/header.png"/></dt>
				<dd>阿萌</dd>
			</dl>
			<dl>
				<dt><img src="../../../static/img/header.png"/></dt>
				<dd>阿萌</dd>
			</dl>
			<dl>
				<dt><img src="../../../static/img/header.png"/></dt>
				<dd>阿萌</dd>
			</dl>
			<dl>
				<dt><img src="../../../static/img/header.png"/></dt>
				<dd>阿萌</dd>
			</dl>
			<dl>
				<dt><img src="../../../static/img/header.png"/></dt>
				<dd>阿萌</dd>
			</dl>
			<dl>
				<dt><img src="../../../static/img/header.png"/></dt>
				<dd>阿萌</dd>
			</dl>
		</div>
		<div class="content_top">
			<dl>
				<dt><img src="../../../static/img/header.png"/></dt>
				<dd>阿萌</dd>
			</dl>
			<dl>
				<dt><img src="../../../static/img/header.png"/></dt>
				<dd>阿萌</dd>
			</dl>
			<dl>
				<dt><img src="../../../static/img/header.png"/></dt>
				<dd>阿萌</dd>
			</dl>
			<dl>
				<dt><img src="../../../static/img/header.png"/></dt>
				<dd>阿萌</dd>
			</dl>
			<dl>
				<dt><img src="../../../static/img/header.png"/></dt>
				<dd>阿萌</dd>
			</dl>
			<dl>
				<dt><img src="../../../static/img/header.png"/></dt>
				<dd>阿萌</dd>
			</dl>
		</div>
	</div>
	</div>
	</div>
	</div>
</div>
</template>

<script>
//	import FllowMark from '@/components/StudyFile/FllowMark'
	export default{
		name:"personmanage",
		methods:{
//			open(){
//				var btn1=document.getElementsByClassName('btn1');
//	    		var mark=document.getElementsByClassName('mark');
//			    btn1.click=function(){
//		            if(mark.style.display=='block'){ // == 判断div.display是否为显示
//		                    mark.style.display='none'; //= 赋值也可了解成改变
//		                }
//		                else{
//		                  mark.style.display='block';
//		             }
//	        	}
//			}
}
//	components:{
//		FllowMark
//	},

}
</script>

<style scoped>
	*{
		margin:0;
		padding:0;
	}
	.PersonManage{
		width: 1200px;
		margin: 0 auto;
		position: relative;
		/*background: #f2f5f5;*/
		
	}

	.personManage{
		height:951px;
		width:912px;
		position: absolute;
		top: 0;
		left: 285px;
		/*margin:0 auto;*/
		/*background: #cccccc;*/
		
	}
	.content_personManage{
		border:1px solid #CCCCCC;
		border-radius: 10px;
		margin-top:22px;
	}
	.header{
		width:914px;
		height:68px;
		line-height: 68px;
		margin-top:15px;
		border-bottom:1px solid #cccccc;
	}
	.header h4{
		line-height: 68px;
		font-size:30px;
		color:#353535;
		width:;
		float: left;
		font-family: "MicrosoftYaHeiLight";
		padding-left:30px;
	}
	.header span{
		float: right;
		margin-right:20px;
		font-size:20px;
		color:#9BC248;
	}
	.school{
		width: 100%;
		/*height: 180px;*/
	}
	.park{
		overflow: hidden;
		line-height: 40px;
		color: #353535;
		margin-top: 25px;
	}
	.park>h3{
		display: inline-block;
		font-size: 20px;
		float: left;
		padding:0 15px 0 10px;	
		font-weight: normal;
	}
	.park>li{
		float: left;
		font-size: 16px;
		/*color:#ffffff;*/
		padding:0 15px 0 10px;	
		border-radius: 5px;
	}
	.park .one{
		color:#ffffff;
		height:25px;
		line-height: 25px;
		background: #9BC248;
		margin-top:8px;
	}
	.search{
		width:100%;
		height:40px;
		background:#F0F4F7 ;
	}
	.search_content{
		width:350px;
		height:30px;
		line-height: 30px;
		/*background: red;*/
		/*background: #ffffff;*/
		/*float: left;*/
		/*margin-top:-20px;*/
		color:#494A4A;
		font-size:15px;
		margin-top:5px;
		margin-left:500px;
	}
	.search_content img{
		width:20px;
		height:20px;
		margin-top:-2px;
		vertical-align: middle;
		/*float: right;*/
		/*margin-right:200px;*/
	}
	.search input{
		/*padding-left:50px;*/
		width:300px;
		height:26px;
		line-height: 1;
		border:0;
		color:#D5D5D5;
		margin-top:8px;
		font-size:15px;
	}
	.search a{
		float:right;
		height:40px;
		line-height:40px ;
		color:#000000;
		font-size:20px;
		margin-top: -30px;
		text-decoration: none;
	}
	.date{
		width:352px;
		line-height: 40px;
		float: left;
		/*background: blue;*/
	}
	.date span{
		display: inline-block;
		width:150px;
	}
	.content_top{
		height:140px;
		margin-top:15px;
		/*background: red;*/
	}
	.content_top dl{
		width:130px;
		height:130px;
		float: left;
		text-align: center;
		margin-left:10px;
	}
	.content_top dl dd{
		color:#353535;
		font-size:16px;
		margin-top:10px;
	}
	.content_top dl img{
		width:100px;
		height:100px;
	}
</style>
	