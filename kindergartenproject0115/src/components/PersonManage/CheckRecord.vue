<template>
	<div class="checkRecord">
		<div class="header">
			<h4>幼儿考勤记录</h4>
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
			<div class="search_content">
				<img src="../../../img/search.png" />
				<input type="text" placeholder="输入关键词搜索"/>
			</div>
			<a href="javascript:;">搜索</a>
		</div>
	</div>
	<div class="table">
		<table cellspacing="0">
			<tr>
				<th><input type="radio" /></th>
				<th>编号</th>
				<th>学生姓名</th>
				<th>所在班级</th>
				<th>所在园区</th>
				<th>状态</th>
				<th>操作</th>
			</tr>
			<tr class="colour_one">
				<td><input type="radio" /></td>
				<td>1</td>
				<td>xxx</td>
				<td>小一班</td>
				<td>星光幼儿园</td>
				<td>请假</td>
				<td>
					<el-row>
					  <el-button size="small" round @click="centerDialogVisible = true">详情</el-button>
				</el-row>
			</td>
			</tr>
			<tr class="colour_two">
				<td><input type="radio" /></td>
				<td>1</td>
				<td>xxx</td>
				<td>小一班</td>
				<td>星光幼儿园</td>
				<td>请假</td>
				<td>
					<el-row>
					  <el-button size="small" round @click="centerDialogVisible = true">详情</el-button>
				</el-row>
			</td>
			</tr>
			<tr class="colour_one">
				<td><input type="radio" /></td>
				<td>1</td>
				<td>xxx</td>
				<td>小一班</td>
				<td>星光幼儿园</td>
				<td>请假</td>
				<td>
					<el-row>
					  <el-button size="small" round @click="centerDialogVisible = true">详情</el-button>
				</el-row>
			</td>
			</tr>
			<tr class="colour_two">
				<td><input type="radio" /></td>
				<td>1</td>
				<td>xxx</td>
				<td>小一班</td>
				<td>星光幼儿园</td>
				<td>请假</td>
				<td>
					<el-row>
					  <el-button size="small" round @click="centerDialogVisible = true">详情</el-button>
				</el-row>
			</td>
			</tr>
			<tr class="colour_one">
				<td><input type="radio" /></td>
				<td>1</td>
				<td>xxx</td>
				<td>小一班</td>
				<td>星光幼儿园</td>
				<td>请假</td>
				<td>
					<el-row>
					  <el-button size="small" round @click="centerDialogVisible = true">详情</el-button>
				</el-row>
			</td>
			</tr>
			<tr class="colour_two">
				<td><input type="radio" /></td>
				<td>1</td>
				<td>xxx</td>
				<td>小一班</td>
				<td>星光幼儿园</td>
				<td>请假</td>
				<td>
					<el-row>
					  <el-button size="small" round @click="centerDialogVisible = true">详情</el-button>
				</el-row>
			</td>
			</tr>
		</table>
	</div>
</div>
</div>
</template>

<script>
//	import FllowMark from '@/components/StudyFile/FllowMark'
	export default{
		name:"checkrecord",
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
	.checkRecord{
		height:951px;
		width:914px;
		/*background: red;*/
		border:1px solid #CCCCCC;
		border-radius: 10px;
		margin:0  auto;
		position: absolute;
		top:100px;
		left:365px;
	}
	.header{
		width:914px;
		height:68px;
		line-height: 68px;
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
		font-size: 26px;
		float: left;
		padding:0 15px 0 10px;	
		font-weight: normal;
	}
	.park>li{
		float: left;
		font-size: 20px;
		padding:0 15px 0 10px;	
	}
	.search{
		width:100%;
		height:40px;
		background:#F0F4F7 ;
	}
	.search_content{
		width:350px;
		height:30px;
		background: #ffffff;
		float: left;
		/*margin-top:5px;*/
		color:#494A4A;
		font-size:15px;
		/*margin-right:30px;*/
		margin-top:5px;
		margin-left:500px;
	}
	.search_content img{
		width:20px;
		height:20px;
		margin-top:5px;
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
		font-size:15px;
	}
	.search a{
		float:right;
		height:40px;
		line-height:40px ;
		color:#000000;
		font-size:20px;
		text-decoration: none;
	}
	table{
		width:914px;
		border-collapse: collapse;
		border:1px solid #C7C7CC;
		text-align: center;
	}
	table th{
		height:40px;
		border:1px solid #C7C7CC;
		color:#000000;
		font-size:16px;
	}
	table td{
		height:40px;
		border:1px solid #C7C7CC;
		color:#0e050b;
		font-size:16px;
	}
</style>