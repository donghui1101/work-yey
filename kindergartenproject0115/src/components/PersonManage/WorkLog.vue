<template>
	<div class="workLog">
		<div class="workLog">
			<div class="sharingTitle">
				<h3>员工管理</h3>
			</div>
			<div class="workLog_content">
				<div class="header">
					<h4>任务管理</h4>
					<span>分配任务</span>
				</div>
			<div class="school">
				<div class="zhibiao">
					<h3>选择指标</h3>
					<div class="choose">
						<el-radio-group v-model="radio2">
						    <el-radio :label="3">招生指标</el-radio>
						    <el-radio :label="6">退园指标</el-radio>
						    <el-radio :label="9">利润指标</el-radio>
  						</el-radio-group>
					</div>
				</div>
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
				<h5>10月各园所教学考核评分结果</h5>
			</div>
			<div class="table">
				<table cellspacing="0" >
					<tr>
						<th colspan="3">项目</th>
						<th colspan="2">城尚城</th>
						<th colspan="2">育博源</th>
						<th colspan="2">东港园</th>
						<th colspan="2">星光园</th>
					</tr>
					<tr>
						<th colspan="2">项目</th>
						<th style="width:155px;">基础分值</th>
						<th style="width:80px;">得分</th>
						<th class="remarks" style="text-align: center;">备注</th>
						<th style="width:80px;">得分</th>
						<th class="remarks" style="text-align: center;">备注</th>
						<th style="width:80px;">得分</th>
						<th class="remarks" style="text-align: center;">备注</th>
						<th style="width:80px;">得分</th>
						<th class="remarks" style="text-align: center;">备注</th>
					</tr>
					<tr>
						<td rowspan="4" style="width:60px;">学习活动</td>
						<td style="width:70px;padding:20px 0;" class="bg">教学布置</td>
						<td style="width:80px;" class="bg">300</td>
						<td class="bg">400</td>
						<td class="remarks bg">10.10作品展示栏都及时更换本月主题</td>
						<td class="bg">100</td>
						<td class="remarks bg">10.10作品展示栏都及时更换本月主题;
							10.10作品展示栏都及时更换本月主题
						</td>
						<td class="bg">100</td>
						<td class="remarks bg">10.10作品展示栏都及时更换本月主题;
						</td>
						<td class="bg">100</td>
						<td class="bg"></td>
					</tr>
					<tr>
						<td style="padding:20px 0;">教学布置</td>
						<td>300</td>
						<td>400</td>
						<td class="remarks">10.10作品展示栏都及时更换本月主题</td>
						<td>100</td>
						<td class="remarks">10.10作品展示栏都及时更换本月主题;
							10.10作品展示栏都及时更换本月主题
						</td>
						<td>100</td>
						<td class="remarks">10.10作品展示栏都及时更换本月主题;
						</td>
						<td>100</td>
						<td>
						</td>
					</tr>
					<tr>
						<td style="width:70px;padding:20px 0;" class="bg">教学布置</td>
						<td style="width:80px;" class="bg">300</td>
						<td class="bg">400</td>
						<td class="remarks bg">10.10作品展示栏都及时更换本月主题</td>
						<td class="bg">100</td>
						<td class="remarks bg">10.10作品展示栏都及时更换本月主题;
							10.10作品展示栏都及时更换本月主题
						</td>
						<td class="bg">100</td>
						<td class="remarks bg">10.10作品展示栏都及时更换本月主题;
						</td>
						<td class="bg">100</td>
						<td class="bg"></td>
					</tr>
					<tr>
						<td style="padding:20px 0;">教学布置</td>
						<td>300</td>
						<td>400</td>
						<td class="remarks">10.10作品展示栏都及时更换本月主题</td>
						<td>100</td>
						<td class="remarks">10.10作品展示栏都及时更换本月主题;
							10.10作品展示栏都及时更换本月主题
						</td>
						<td>100</td>
						<td class="remarks">10.10作品展示栏都及时更换本月主题;
						</td>
						<td>100</td>
						<td>
						</td>
					</tr>
					
					
					
					
					
					<tr>
						<td rowspan="4" style="width:60px;">区域活动</td>
						<td style="width:70px;padding:20px 0;" class="bg">教学布置</td>
						<td style="width:80px;" class="bg">300</td>
						<td class="bg">400</td>
						<td class="remarks bg">10.10作品展示栏都及时更换本月主题</td>
						<td class="bg">100</td>
						<td class="remarks bg">10.10作品展示栏都及时更换本月主题;
							10.10作品展示栏都及时更换本月主题
						</td>
						<td class="bg">100</td>
						<td class="remarks bg">10.10作品展示栏都及时更换本月主题;
						</td>
						<td class="bg">100</td>
						<td class="bg">
						</td>
					</tr>
					<tr>
						<td style="padding:20px 0;">教学布置</td>
						<td>300</td>
						<td>400</td>
						<td class="remarks">10.10作品展示栏都及时更换本月主题</td>
						<td>100</td>
						<td class="remarks">10.10作品展示栏都及时更换本月主题;
							10.10作品展示栏都及时更换本月主题
						</td>
						<td>100</td>
						<td class="remarks">10.10作品展示栏都及时更换本月主题;
						</td>
						<td>100</td>
						<td>
						</td>
					</tr>
					<tr>
						<td style="width:70px;padding:20px 0;" class="bg">教学布置</td>
						<td style="width:80px;" class="bg">300</td>
						<td class="bg">400</td>
						<td class="remarks bg">10.10作品展示栏都及时更换本月主题</td>
						<td class="bg">100</td>
						<td class="remarks bg">10.10作品展示栏都及时更换本月主题;
							10.10作品展示栏都及时更换本月主题
						</td>
						<td class="bg">100</td>
						<td class="remarks bg">10.10作品展示栏都及时更换本月主题;
						</td>
						<td class="bg">100</td>
						<td class="bg">
						</td>
					</tr>
					<tr>
						<td style="padding:20px 0;">教学布置</td>
						<td>300</td>
						<td>400</td>
						<td class="remarks">10.10作品展示栏都及时更换本月主题</td>
						<td>100</td>
						<td class="remarks">10.10作品展示栏都及时更换本月主题;
							10.10作品展示栏都及时更换本月主题
						</td>
						<td>100</td>
						<td class="remarks">10.10作品展示栏都及时更换本月主题;
						</td>
						<td>100</td>
						<td>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	
	</div>
</div>
	
</template>

<script>
//	import FllowMark from '@/components/StudyFile/FllowMark'
	export default{
		name:"worklog",
		data(){
			return {
				 radio2: 3
			}
		},
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
	.WorkLog{
		width: 1200px;
		margin: 0 auto;
		position: relative;
		background: #f2f5f5;
		
	}

	.workLog{
		/*height:1200px;
		width:914px;*/
		position: absolute;
		top: 0;
		left: 285px;
		/*margin:0 auto;*/
		/*background: #cccccc;*/
		
	}
	.workLog_content{
		border:1px solid #CCCCCC;
		border-radius: 10px;
		margin-top:22px;
		height: 1200px;
		/*background: red;*/
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
	.choose{
		width:820px;
		height:30px;
		text-align: left;
		line-height: 30px;
		/*background: red;*/
		/*float: left;*/
	}
	.school{
		width: 100%;
		/*padding-left:15px;*/
		/*height: 180px;*/
	}
	.zhibiao{
		margin-top:10px;
	}
	.zhibiao h3{
		width:80px;
		height:30px;
		line-height: 30px;
		text-align: left;
		float: left;
		font-size:20px;
		padding-left:10px;
		/*background: blue;*/
		margin-right:20px;
	}
	.school h5{
		height:50px;
		line-height: 50px;
		font-size:30px;
		color:#353535;
		text-align: left;
	}
	.park{
		overflow: hidden;
		line-height: 40px;
		color: #353535;
		margin-top: 10px;
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
		margin-top:5px;
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
	table{
		width:914px;
		border-collapse: collapse;
		border:1px solid #C7C7CC;
		text-align: center;
	}
	table .remarks{
		width:350px;
		text-align: left;
	}
	.bg{
		background: #FAFFEE;
		font-size:15px;
		/*line-height: 30px;*/
	}
	table th{
		height:40px;
		line-height: 40px;
		border:1px solid #C7C7CC;
		color:#000000;
		font-size:16px;
		background: #dfdfdf;
	}
	table td{
		height:40px;
		border:1px solid #C7C7CC;
		color:#0e050b;
		font-size:16px;
	}
</style>