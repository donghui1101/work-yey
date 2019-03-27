<template>
	<div class="LogManage">
		<div class="logManage">
			<div class="sharingTitle">
				<h3>人事管理</h3>
			</div>
			<div class="logManage_content">
				<div class="header">
					<h4>工作日志</h4>
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
							<img src="../../../static/img/search.png" />
							<input type="text" placeholder="输入关键词搜索"/>
						</div>
						<a href="javascript:;">搜索</a>
					</div>
				</div>
				<div class="content">
					<table>
						<tr>
							<th>园长</th>
							<th>在籍人数</th>
							<th>出勤人数</th>
							<th>出勤率</th>
							<th>看园人数</th>
							<th>新入人数</th>
							<th>本月新入</th>
						</tr>
						<tr>
							<td colspan="5">开源准备</td>
							<td colspan="2">结果</td>
						</tr>
						<tr>
							<td colspan="5" style="text-align: left;">1.到岗第一时间更换衣服及室内鞋，开窗通风</td>
							<td colspan="2">是</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
</div>
	
</template>

<script>
//	import FllowMark from '@/components/StudyFile/FllowMark'
	export default{
		name:"logmanage",
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
	.LogManage{
		width: 1200px;
		margin: 0 auto;
		position: relative;
		background: #f2f5f5;
		
	}

	.logManage{
		/*height:1000px;*/
		width:912px;
		position: absolute;
		top: 0;
		left: 285px;
		/*margin:0 auto;*/
		/*background: #cccccc;*/
		
	}
	.logManage_content{
		border:1px solid #CCCCCC;
		border-radius: 10px;
		margin-top:22px;
		height: 900px;
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
		width:912px;
		border-collapse: collapse;
		border:1px solid #C7C7CC;
		text-align: center;
		margin-top: 30px;
	}
	table th{
		height:40px;
		line-height: 40px;
		border:1px solid #C7C7CC;
		color:#000000;
		font-size:16px;
		background: #faffee;
	}
	table td{
		height:40px;
		line-height: 40px;
		border:1px solid #C7C7CC;
		color:#0e050b;
		font-size:16px;
	}
</style>