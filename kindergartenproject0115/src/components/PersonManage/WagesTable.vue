<template>
	<div class="WagesTable">
		<div class="wagesTable">
			<div class="sharingTitle">
					<h3>工资表设置</h3>
			</div>
			<div class="wagesTable_content">
				<div class="wagesTable_top">
					<el-checkbox-group v-model="checkList">
					    <el-checkbox label="排名"></el-checkbox>
					    <el-checkbox label="完成情况"></el-checkbox>
		  			</el-checkbox-group>
				</div>
				<div class="wages">
					<div class="wages1">
						 <span>绩效工资</span>
						 <input type="text" />
					</div>
					<div class="wages1">
						 <span>基础工资</span>
						 <input type="text" />
					</div>
				</div>
				<!----选择计算项目----->
				<div class="computer">
					<h6>选择计算项目</h6>
					<div class="computer_top">
						<el-checkbox-group v-model="checkList">
						    <el-checkbox label="利润指标达成率">利润指标达成率<input type="text"/></el-checkbox>
						    <el-checkbox label="管理指标达成率">管理指标达成率<input type="text"/></el-checkbox>
		  				</el-checkbox-group>
		  			<span>两项加一快必须100%</span>
					</div>
					<div class="computer_top">
						<el-checkbox-group v-model="checkList">
						    <el-checkbox label="利润指标成率">利润指标达成率<input type="text"/></el-checkbox>
						    <el-checkbox label="管理工作达成率">管理工作达成率<input type="text"/></el-checkbox>
						    <el-checkbox label="家长投诉率">家长投诉率<input type="text"/></el-checkbox>
		  				</el-checkbox-group>
					</div>
					
					<div class="computer_top1">
						<el-checkbox-group v-model="checkList">
						    <el-checkbox label="安全率">安全率<input type="text"/></el-checkbox>
						    <el-checkbox label="退园率">退园率<input type="text"/></el-checkbox>
						    <el-checkbox label="骨干生成率">骨干生成率<input type="text"/></el-checkbox>
		  				</el-checkbox-group>
					</div>
					
					
					<div class="computer_top1">
						<el-checkbox-group v-model="checkList">
						    <el-checkbox label="招生率">招生率<input type="text"/></el-checkbox>
						    <el-checkbox label="晋升率">晋升率<input type="text"/></el-checkbox>
						    <el-checkbox label="出勤率">出勤率<input type="text"/></el-checkbox>
		  				</el-checkbox-group>
					</div>
					
					
					<div class="computer_top1">
						<el-checkbox-group v-model="checkList">
						    <el-checkbox label="成长率">成长率<input type="text"/></el-checkbox>
						    <el-checkbox label="特长率">特长率<input type="text"/></el-checkbox>
						    <el-checkbox label="在职率">在职率<input type="text"/></el-checkbox>
		  				</el-checkbox-group>
					</div>
					
					<div class="computer_top1">
						<el-checkbox-group v-model="checkList">
						    <el-checkbox label="离职率">离职率<input type="text"/></el-checkbox>
		  				</el-checkbox-group>
					</div>
				</div>
				<!----绩效发放设置----->
				<div class="performance">
					<h6>绩效发放</h6>
					<div class="paiming">
						<div class="paiming_top">
							<span>第一名</span><input type="text"/><span class="span2">倍</span>
						</div>
						<div class="paiming_top">
							<span>第二名</span><input type="text"/><span class="span2">倍</span>
						</div>
						<div class="paiming_top">
							<span>第三名</span><input type="text"/><span class="span2">倍</span>
						</div>
					</div>
					<div class="paiming">
						<div class="paiming_top">
							<span>第三名~第十名</span><input type="text"/><span class="span2">倍</span>
						</div>
						<div class="paiming_top">
							<span>第十名~第二十名</span><input type="text"/><span class="span2">倍</span>
						</div>
					</div>
					<div class="paiming">
						<div class="paiming_top">
							<span>第二十名~第三十名</span><input type="text"/><span class="span2">倍</span>
						</div>
					</div>
					<el-row>
					  <el-button type="success">添加</el-button>
					</el-row>
				</div>
				<!------完成率发放设置------>
				<div class="Complete">
					<div class="complete">
					<h6>完成率发放设置</h6>
					<div class="complete_left">
						<h6>利率指标达成</h6>
						<div class="complete_left1"><span>实际达成</span><input type="text"/><span>%</span></div>
						<div class="complete_left1"><span>实际达成</span><input type="text"/><span>%</span></div>
						<div class="complete_left1"><span>实际达成</span><input type="text"/><span>%</span></div>
						<div class="complete_left1"><span>实际达成</span><input type="text"/><span>%</span></div>
						<div class="complete_left1"><span>实际达成</span><input type="text"/><span>%</span></div>
						<div class="complete_left1"><span>实际达成</span><input type="text"/><span>%</span></div>
						<div class="complete_left1"><span>实际达成</span><input type="text"/><span>%</span></div>
						<div class="complete_left1"><span>实际达成</span><input type="text"/><span>%</span></div>
						<el-row>
					  		<el-button type="success">添加</el-button>
						</el-row>
					</div>
				</div>
				<div class="complete">
					<h6></h6>
					<div class="complete_left">
						<h6>管理指标达成</h6>
						<div class="complete_left1"><span>实际达成</span><input type="text"/><span>%</span></div>
						<div class="complete_left1"><span>实际达成</span><input type="text"/><span>%</span></div>
						<div class="complete_left1"><span>实际达成</span><input type="text"/><span>%</span></div>
						<div class="complete_left1"><span>实际达成</span><input type="text"/><span>%</span></div>
						<div class="complete_left1"><span>实际达成</span><input type="text"/><span>%</span></div>
						<div class="complete_left1"><span>实际达成</span><input type="text"/><span>%</span></div>
						<div class="complete_left1"><span>实际达成</span><input type="text"/><span>%</span></div>
						<div class="complete_left1"><span>实际达成</span><input type="text"/><span>%</span></div>
						<el-row>
					  		<el-button type="success">添加</el-button>
						</el-row>
					</div>
				</div>
				</div>
				<div class="btn"><button>保存</button></div>
			</div>
		</div>
	</div>
</template>

<script>
	export default{
		name:"wagestable",
		 data() {
	      return {
	         checkList: ['复选框 A','管理指标达成率']
	      };
    	}
	}
</script>

<style scoped>
	*{
		margin:0;
		padding:0;
	}
	.WagesTable{
		width: 1200px;
		margin: 0 auto;
		position: relative;
		background: #f2f5f5;
		
	}

	.wagesTable{
		/*height:951px;*/
		width:912px;
		position: absolute;
		top: 0;
		left: 285px;
		/*margin:0 auto;*/
		/*background: #cccccc;*/
		
	}
	.wagesTable_content{
		height:962px;
		border:1px solid #CCCCCC;
		border-radius: 10px;
		margin-top:22px;
	}
	/*.wagesTable{
		height:1200px;
		width:914px;
		/*background: red;
		border:1px solid #CCCCCC;
		border-radius: 10px;
		margin:0  auto;
		position: absolute;
		top:100px;
		left:365px;
	}*/
	.wagesTable input{
		width:75px;
		height:20px;
		color:#666666;
		font-size:16px;
		border-radius: 5px;
		margin-left:15px;
		border:1px solid #CCCCCC;
	}
	.wagesTable_top{
		padding-left:10px;
		margin:20px 0;
	}
	.wagesTable_top .el-checkbox{
		margin-right:35px;
		font-size:18px;
		color:#666666;
	}
	.wagesTable .wages{
		height:30px;
		/*background: red;*/
		font-size:;
	}
	.wagesTable .wages .wages1{
		margin-left:10px;
		float: left;
	}
	.wagesTable .wages .wages1 span{
		color:#666666;
		font-size:16px;
	}
	.computer{
		padding-left:10px;
		/*margin-top:20px;*/
	}
	.computer h6{
		font-size:18px;
		color:#222222;
		height:40px;
		line-height: 40px;
		text-align: left;
	}
	.computer_top{
		height:25px;
		margin-top:15px;
	}
	.computer_top .el-checkbox{
		margin-right:20px;
	}
	.el-checkbox-group{
		text-align: left;
	}
	.computer_top .el-checkbox-group{
		/*width:500px;*/
		float: left;
	}
	.computer_top .computer_top span{
		float: left;
	}
	.computer_top .checkbox__label{
		float: left;
	}
	
	
	
	.computer_top1{
		height:25px;
		margin-top:15px;
	}
	.computer_top1 .el-checkbox{
		margin-right:83px;
	}
	.computer_top1 .el-checkbox-group{
		/*width:500px;*/
		float: left;
	}
	.computer_top1 .computer_top span{
		float: left;
	}
	.computer_top1 .checkbox__label{
		float: left;
	}
	.computer_top1 .el-checkbox-group{
		margin-right:20px;
	}
	
	
	.performance{
		margin-top:15px;
		padding-left:10px;
		height:200px;
		/*background: red;*/
	}
	.performance h6{
		font-size:18px;
		color:#222222;
		height:40px;
		line-height: 40px;
		text-align: left;
	}
	.paiming{
		height:23px;
		margin-top:10px;
	}
	.performance .paiming_top{
		float: left;
		margin-right:88px;
	}
	.performance .paiming_top input{
		width:75px;
		height:20px;
		color:#666666;
		font-size:16px;
		border-radius: 5px;
		margin-left:15px;
		border:1px solid #CCCCCC;
	}
	.performance .paiming_top .span2{
		margin-left:15px;
	}
	.performance .el-button--success{
		width:100px;
		height:38px;
		float: right;
		margin-right:-280px;
		margin-top:15px;
	}
	.Complete{
		height:270px;
		margin-top:20px;
	}
	.complete {
		width:402px;
		height:270px;
		/*background: red;*/
		padding-left:10px;
		float: left;
		/*margin-right:10px;*/
	}
	.complete_left h6{
		color: #606266;
		height:40px;
		line-height: 40px;
		text-align: left;
	}
	.complete_left .el-row{
		height:0;
	}
	.complete>h6{
		font-size:18px;
		color:#222222;
		height:40px;
		line-height: 40px;
		text-align: left;
	}
	.complete_left1{
		float: left;
		margin-right:25px;
		margin-top:10px;
	}
	.complete .el-button--success{
		width:100px;
		height:38px;
		float: right;
		margin-top:15px;
		margin-right:50px;
	}
	.el-row{
		height:40px;
		width:420px;
	}
	.btn{
		width:100%;
		/*margin:0 auto;*/
		height:38px;
		margin-top:50px;
		/*background: red;*/
	}
	.btn button{
		width:300px;
		height:38px;
		margin:0 auto;
		margin-left:300px;
		border-radius: 10px;
		background: #9BC248;
		border:0;
		color:#ffffff;
	}
</style>