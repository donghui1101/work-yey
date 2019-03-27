<template>
	<div class="task">
		<div class="taskContent">
			<div class="reportTop">
				<h3></h3>
			</div>
			<h3 class="taskContentH3">任务管理</h3>
			<div class="content">				
				<div class="taskSchool">
					<ul class="park">
						<h3>园所:</h3>
						<li class="one">全部</li>
						<li>星光幼儿园</li>
						<li>第一幼儿园</li>
						<li>第一幼儿园</li>
						<li>第一幼儿园</li>
						<li>第一幼儿园</li>
					</ul>
					<ul class="park">
						<h3>班级:</h3>
						<li class="one">全部</li>
						<li>小一班</li>
						<li>小一班</li>
						<li>小一班</li>
						<li>小一班</li>
						<li>小一班</li>
					</ul>
					<div class="time">
						<div class="date">
							<span>时间</span>
							<template class="date_a">
							  	<div class="block">
							    	<el-date-picker
								      	v-model="value6"
								      	type="daterange"
								      	range-separator="~"
								      	start-placeholder="开始日期"
								      	end-placeholder="结束日期">
							    	</el-date-picker>
							  	</div>
							</template>						
						</div>
					</div>
				</div>
				<div class="taskTable">
					<table cellspacing="0">
						<tr>
							<th><input type="radio" /></th>
							<th>部门</th>
							<th>责任人</th>
							<th>购置时间</th>
							<th>资产</th>
							<th>数量</th>
							<th>半价</th>
							<th>核销数量</th>
						</tr>
						<tr class="colour_one">
							<td><input type="radio" /></td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
						</tr>
						<tr class="colour_two">
							<td><input type="radio" /></td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
						</tr>
						<tr class="colour_one">
							<td><input type="radio" /></td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
						</tr>
						<tr class="colour_two">
							<td><input type="radio" /></td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
						</tr>
						<tr class="colour_one">
							<td><input type="radio" /></td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
						</tr>
						<tr class="colour_two">
							<td><input type="radio" /></td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
						</tr>
						<tr class="colour_one">
							<td><input type="radio" /></td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
						</tr>
						<tr class="colour_two">
							<td><input type="radio" /></td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
							<td>111</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="submission">提交审核</div>	
		</div>
	</div>
</template>

<script>
export default {
  	name: 'task',
  	data () {
    	return {
    		pickerOptions2: {
	          		shortcuts: [{
	//          		text: '最近一周',
	    				onClick(picker) {
				      		const end = new Date();
				     		const start = new Date();
				     		start.setTime(start.getTime() - 3600 * 1000 * 24 * 7);
				     		picker.$emit('pick', [start, end]);
			    		}
			  		}, {
	//          		text: '最近一个月',
					    onClick(picker) {
					      	const end = new Date();
					      	const start = new Date();
					      	start.setTime(start.getTime() - 3600 * 1000 * 24 * 30);
					      	picker.$emit('pick', [start, end]);
					    }
					}, {
	//          		text: '最近三个月',
	    				onClick(picker) {
	      					const end = new Date();
	      					const start = new Date();
	     		 			start.setTime(start.getTime() - 3600 * 1000 * 24 * 90);
	      					picker.$emit('pick', [start, end]);
	    				}
	  				}]
				},
				value6: ''
    	}
  	},
}
</script>

<style>
	.task{
		width:1200px;
		margin: 0 auto;
		position: relative;
	}
	.taskContent{
		width: 912px;
		position: absolute;
		top: 0;
		left: 285px;
	}
	.reportTop{
		width: 917px;
		height: 68px;
		background: #9bc248;
		line-height: 68px;
	}
	.reportTop>h3{
		width: 150px;
		font-size: 26px;
		color: #fff;		
	}
	.taskContentH3{
		width: 916px;
		height: 86px;
		text-align: left;
		line-height: 86px;
		font-weight: normal;
		text-align: left;
		text-indent: 15px;
		font-size: 26px;
		border:1px solid #dcdcdc;
		background: #fafafa;
		margin-top: 15px;
	}
	.content{
		width: 914px;
		margin-top: 22px;
		border: 1px solid #dedede;
		border-radius: 5px;
	}
	.taskSchool{
		width: 100%;
		height: 172px;
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
	.one{
		font-size: 18px;
		color: #fff;
		background: #9BC248;
		border-radius: 5px;
	}
	.time{
		width: 100%;
		height: 53px;
		background: #f0f4f7;
		margin-top: 15px;
		overflow: hidden;
	}
	.date{
		width: 305px;
		height: 53px;
		line-height: 53px;
		margin-left: 60px;
		text-align: left;
		position: relative;
		float: left;
	}
	.date>span{
		font-size: 20px;
		color: #353535;
	}
	.block{
		position: absolute !important;
		right: 0 !important;
		top: 0 !important;
	}
	.el-input__inner{
		width: 240px !important;
	}
	.el-picker-panel{
		position: absolute !important;
		top: 50% !important;
		left: 438px !important;
		margin-top: -162px;
	}
	.taskTable{
		margin-top: 20px;
	}
	.taskTable table{
		width:885px;
		height: 310px;
		margin: 0 auto 15px;
		border: 1px solid #dcdcdc;				
	}
	.taskTable table tr th{
		border: 1px solid #dcdcdc;
		background: #e4e9ec;
		font-size: 16px;
		color: #353535;
	}
	.taskTable table tr td{
		border: 1px solid #dcdcdc;
		font-size: 14px;
		color: #353535;
	}
	.colour_one>td{
		background: #faffee;
	}
	.colour_two>td{
		background: #fff;
	}
	.submission{
		width: 160px;
		height: 44px;
		margin: 155px auto 0;
		background: #157efd;
		border-radius:6px ;
		line-height: 44px;
		color: #fff;
		font-size: 14px;
	}
</style>