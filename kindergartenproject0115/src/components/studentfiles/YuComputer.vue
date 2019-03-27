<template>
	<div class="yucomputer">
		<div class="yucomputerContent">
						<el-dialog title="" :visible.sync="YuComputerdialogFormVisible">
							<div class="demo-input-suffix">
								<h3>选择幼儿园：</h3>
								<div class="demo-input-suffix_one">
									<el-checkbox-group v-model="radio1">
									     	<el-radio v-model="radio1" label="1">第一幼儿园</el-radio>
  											<el-radio v-model="radio1" label="2">第二幼儿园</el-radio>
  											<el-radio v-model="radio1" label="3">第三幼儿园</el-radio>
									</el-checkbox-group>
								</div>
								<div class="demo-input-suffix_one">
									<el-checkbox-group v-model="radio1">
									    	<el-radio v-model="radio1" label="4">第四幼儿园</el-radio>
  											<el-radio v-model="radio1" label="5">第五幼儿园</el-radio>
  											<el-radio v-model="radio1" label="6">第六幼儿园</el-radio>
									</el-checkbox-group>
								</div>
							</div>
							<div class="demo-input-suffix">
								<h3>选择幼儿园：</h3>
								<div class="demo-input-suffix_one">
									<el-checkbox-group v-model="radio2">
									     	<el-radio v-model="radio2" label="1">人事部</el-radio>
  											<el-radio v-model="radio2" label="2">人事部</el-radio>
  											<el-radio v-model="radio2" label="3">人事部</el-radio>
									</el-checkbox-group>
								</div>
								<div class="demo-input-suffix_one">
									<el-checkbox-group v-model="radio2">
									    	<el-radio v-model="radio2" label="4">人事部</el-radio>
  											<el-radio v-model="radio2" label="5">人事部</el-radio>
  											<el-radio v-model="radio2" label="6">人事部</el-radio>
									</el-checkbox-group>
								</div>
							</div>						
  							<div slot="footer" class="dialog-footer">
    							<el-button @click="YuComputerdialogFormVisible = false">取 消</el-button>
    							<el-button type="primary" @click="$emit('update:YuComputerdialogFormVisible',false);$router.push('/Payroll')">保 存</el-button>
  							</div>
					</el-dialog>					
			</div>
	</div>
</template>

<script>

export default {
  	name: 'yucomputer',
  	props:['YuComputerdialogFormVisible'],
  	data () {
  		return{
  			input:'',
  			radio: '1',
  			radio: '2',
  			radio2:'',
  			radio1:'',
        	checkList: ['选中且禁用','复选框 A']
        	
  		}
  	}
}
</script>

<style scoped lang="scss">
	/*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.yucomputer{
  		/*width:1200px;
  		margin: 0 auto;
  		position:relative;*/
  		.yucomputerContent{
  			/*width:912px;
  			position:absolute;
  			top:0;
  			left:285px;*/
  		}
  	}
</style>
<style type="text/css">
	/*弹窗样式*/
	.yucomputer .el-dialog{
		width: 40%;
	}
	.yucomputer .el-dialog__header{
		text-align: center;
		font-weight: 600;
		padding: 0;
	}
	.yucomputer .demo-input-suffix{
		width:80%;
		margin-left: 20px;
		margin-top: 20px;
	}
	.yucomputer .demo-input-suffix h3{
		line-height:50px;
	}
	.yucomputer .demo-input-suffix .demo-input-suffix_one{
		width:65%;
		margin: 10px auto;
		display:flex ;
		justify-content:space-around;		
	}
	.yucomputer .el-dialog__body{
		padding: 0;
	}
	.payroll_one .dialog-footer{
		text-align: center;
	}
	/*弹窗表格样式*/
	.yucomputer .el-table th {
		text-align: center;
		color: #333;
	}
	.yucomputer .el-table .cell{
		text-align: center;
	} 
	.yucomputer .el-checkbox+.el-checkbox{
		display: block;
		margin: 0;
	}
</style>