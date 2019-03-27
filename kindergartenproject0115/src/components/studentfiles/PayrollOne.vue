<template>
	<div class="payroll_one">
		<div class="payroll_oneContent">
						<el-dialog title="" :visible.sync="dialogFormVisible">
							<div class="demo-input-suffix">
								<h3>选择项目：</h3>
								<div class="demo-input-suffix_one">
									<el-checkbox-group v-model="checkList">
									    <el-checkbox label="招生补贴"></el-checkbox>
									    <el-checkbox label="跟校车补贴"></el-checkbox>
									    <el-checkbox label="成长奖金"></el-checkbox>
									    <el-checkbox label="保险扣款"></el-checkbox>
									    <el-checkbox label="加班补贴"></el-checkbox>
									</el-checkbox-group>
								</div>
								<div class="demo-input-suffix_one">
									<el-checkbox-group v-model="checkList">
									    <el-checkbox label="特长补贴"></el-checkbox>
									    <el-checkbox label="节日福利"></el-checkbox>
									    <el-checkbox label="其他应发"></el-checkbox>
									    <el-checkbox label="个税扣款"></el-checkbox>
									    <el-checkbox label="其他应扣"></el-checkbox>
									</el-checkbox-group>
								</div>
							</div>
							<div class="demo-input-suffix">
								<h3>导入工资表：</h3>
								<div class="demo-input-suffix_one">
									<el-checkbox-group v-model="checkList">
									    <el-checkbox label="1"></el-checkbox>
									    <el-checkbox label="2"></el-checkbox>
									    <el-checkbox label="3"></el-checkbox>
									    <el-checkbox label="4"></el-checkbox>
									    <el-checkbox label="5"></el-checkbox>
									</el-checkbox-group>
								</div>
								<div class="demo-input-suffix_one">
									<el-checkbox-group v-model="checkList">
									    <el-checkbox label="6"></el-checkbox>
									    <el-checkbox label="7"></el-checkbox>
									    <el-checkbox label="8"></el-checkbox>
									    <el-checkbox label="9"></el-checkbox>
									    <el-checkbox label="10"></el-checkbox>
									</el-checkbox-group>
								</div>
							</div>						
  							<div slot="footer" class="dialog-footer">
    							<el-button @click="$emit('update:dialogFormVisible',false)">取 消</el-button>
    							<el-button type="primary" @click="YuComputerdialogFormVisible =true;$emit('update:dialogFormVisible',false)">保 存</el-button>
  							</div>
					</el-dialog>
					
		</div>
		<YuComputer :YuComputerdialogFormVisible.sync="YuComputerdialogFormVisible"></YuComputer>
	</div>
</template>

<script>
import YuComputer from '@/components/studentfiles/YuComputer'
export default {
  	name: 'payrollone',
  	props:['dialogFormVisible'],
  	components:{
  		YuComputer
  	},
//	methods:{
//		fn(){
//			
//		}
//	},
  	data () {
  		return{
  			input:'',
  			YuComputerdialogFormVisible:false,
        	checkList: ['选中且禁用','复选框 A']
        	
  		}
  	}
}
</script>

<style scoped lang="scss">
	/*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.payroll_one{
  		width:1200px;
  		margin: 0 auto;
  		position:relative;
  		.payroll_oneContent{
  			width:912px;
  			position:absolute;
  			top:0;
  			left:285px;
  		}
  	}
</style>
<style type="text/css">
	/*弹窗样式*/
	.payroll_one .el-dialog{
		width: 40%;
	}
	.payroll_one .el-dialog__header{
		text-align: center;
		font-weight: 600;
		padding: 0;
	}
	.payroll_one .demo-input-suffix{
		width:500px;
		margin-left: 20px;
		margin-top: 20px;
	}
	.payroll_one .demo-input-suffix h3{
		line-height:50px;
	}
	.payroll_one .demo-input-suffix .demo-input-suffix_one{
		width:49%;
		display: inline-block;
	}
	.payroll_one .el-dialog__body{
		padding: 0;
	}
	.payroll_one .dialog-footer{
		text-align: center;
	}
	/*弹窗表格样式*/
	.payroll_one .el-table th {
		text-align: center;
		color: #333;
	}
	.payroll_one .el-table .cell{
		text-align: center;
	} 
	.payroll_one .el-checkbox+.el-checkbox{
		display: block;
		margin: 0;
	}
</style>