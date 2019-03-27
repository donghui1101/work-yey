<template>
	<div class="payroll_three">
		<div class="payroll_threeContent">
						<el-dialog title="" :visible.sync="ThreedialogFormVisible">
							<div class="demo-input-suffix">
								<h3>选择项目：</h3>
								<div class="payroll_threePopuptable">
									<table class="sharingTable">
										<tr>
											<th><input type="radio" name="" id="" value="" /></th>
											<th>编号</th>
											<th>员工姓名</th>
											<th>职务</th>
											<th>联系方式</th>
											<th>所在园区</th>
											<th>薪酬级别</th>
											<th>薪酬标准</th>
											<th>实发</th>
											<th>基本工资</th>
											<th>绩效工资</th>
										</tr>
										<tr class="sharingTablecolor_one">
											<td>
												<input type="radio" name="" id="" value="" />
											</td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
										<tr class="sharingTablecolor_two">
											<td>
												<input type="radio" name="" id="" value="" />
											</td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
										<tr class="sharingTablecolor_one">
											<td>
												<input type="radio" name="" id="" value="" />
											</td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
										<tr class="sharingTablecolor_two">
											<td>
												<input type="radio" name="" id="" value="" />
											</td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
									</table>
								</div>
								
							</div>
							<div class="demo-input-suffix">
								<span>招生补贴 </span>
								<el-input v-model="input" placeholder=""></el-input>
								<span>特长补贴 </span>
								<el-input v-model="input" placeholder=""></el-input>
								<span>跟校车补贴 </span>
								<el-input v-model="input" placeholder=""></el-input>
								<span>节日福利 </span>
								<el-input v-model="input" placeholder=""></el-input>
							</div>	
							<div class="demo-input-suffix">
								<span>成长奖金 </span>
								<el-input v-model="input" placeholder=""></el-input>
								<span>加班补贴 </span>
								<el-input v-model="input" placeholder=""></el-input>
								<span>其他应发 </span>
								<el-input v-model="input" placeholder=""></el-input>
								<span>保险扣款 </span>
								<el-input v-model="input" placeholder=""></el-input>
							</div>
							<div class="demo-input-suffix">
								<span>个税扣款 </span>
								<el-input v-model="input" placeholder=""></el-input>
								<span>保险扣款 </span>
								<el-input v-model="input" placeholder=""></el-input>
								<span>其他应扣 </span>
								<el-input v-model="input" placeholder=""></el-input>
							</div>
  							<div slot="footer" class="dialog-footer">
  								<el-button @click="$emit('update:ThreedialogFormVisible',false)">取 消</el-button>
    							<el-button type="primary" @click="$emit('update:ThreedialogFormVisible',false);$router.push('/Payroll')">保 存</el-button>
  							</div>
					</el-dialog>				
			</div>
	</div>
	</div>	
</template>

<script>
//import PayrollOne from '@/components/studentfiles/PayrollOne'	
export default {
  	name: 'payrollthree',
	props:['ThreedialogFormVisible'],
	methods:{
		
	},
//	components:{
//		PayrollOne
//	},
  	data () {
  		return{
  			input:''
  		}
  	}
}
</script>

<style scoped lang="scss">
  	 /*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.payroll_three{
  		width: 1200px;
  		margin: 0 auto;
  		position:relative;
  		.payroll_threeContent{
  			width:912px;
  			position:absolute;
  			top:0;
  			left:285px;
  			.sharingLink{
  				span{
  					margin-left:15px;
  				} 				
  			}
  			.payroll_threePopuptable{
				width:90%;
				table{
					width: 100%;
				}
			}
  			.payroll_threeTable{
  				width: 100%;
  				margin: 15px 0 15px 0px;
  				overflow-x:scroll ;
  				table{
  					width:1780px;
  				}
  			}
  			
  		}
  	}
</style>
<style type="text/css">
	/*弹窗样式*/
	.payroll_three .el-dialog{
		width: 50%;
	}
	.payroll_three .el-dialog__header{
		text-align: center;
		font-weight: 600;
		padding: 0;
	}
	.payroll_three .demo-input-suffix{
		width:100%;
		margin-left: 20px;
		margin-top: 20px;
	}
	.payroll_three .demo-input-suffix h3{
		line-height:50px;
	}
	.payroll_three .el-dialog__body{
		padding: 0;
	}
	.payroll_three .dialog-footer{
		text-align: center;
	}
	/*弹窗表格样式*/
	.payroll_three .el-table th {
		text-align: center;
		color: #333;
	}
	.payroll_three .el-table .cell{
		text-align: center;
	} 
	.payroll_three .el-checkbox+.el-checkbox{
		display: block;
		margin: 0;
	}
	.payroll_three .el-input__inner{
		height:20px;	
	}
	.payroll_three .el-input{
		width:13%;
		display: inline-block;
		margin:0 25px 0 5px;
	}
</style>