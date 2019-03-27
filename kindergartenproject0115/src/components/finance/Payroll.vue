<template>
	<div class="payrolln">
		<div class="payrollnContent">
			<div class="sharingTitle">
				<h3>财务管理</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>工资表</h3>					
					<div class="sharingLink">
						<!--<button></button>-->
						<button>导出工资表</button>
						<button>发放</button>
						<button>生成</button>
						<button @click="PayrollindexMarkDialogVisible =true">审批</button>
						<button @click="ThreedialogFormVisible =true">填写</button>
					</div>					
				</div>
				<div class="InserviceTable">
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
							<th>招生补贴</th>
							<th>特长补贴</th>
							<th>跟校车补贴</th>
							<th>节日福利</th>
							<th>成长奖金</th>
							<th>加班补贴</th>
							<th>其他应发</th>
							<th>保险扣款</th>
							<th>个税扣款</th>
							<th>其他应扣</th>
							<th>操作</th>
						</tr>
						<tr class="sharingTablecolor_one">
							<td><input type="radio" /></td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>
								<span class="departure">生成</span>
								<span class="details">发放</span>
							</td>
						</tr>
						<tr class="sharingTablecolor_two">
							<td><input type="radio" /></td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>
								<span class="departure">生成</span>
								<span class="details">发放</span>
							</td>
						</tr>
						<tr class="sharingTablecolor_one">
							<td><input type="radio" /></td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>
								<span class="departure">生成</span>
								<span class="details">发放</span>
							</td>
						</tr>
						<tr class="sharingTablecolor_two">
							<td><input type="radio" /></td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>
								<span class="departure">生成</span>
								<span class="details">发放</span>
							</td>
						</tr>
					</table>
				</div>
				<PayrollindexMark4 :PayrollindexMarkDialogVisible.sync="PayrollindexMarkDialogVisible"></PayrollindexMark4>
				<PayrollThree :ThreedialogFormVisible.sync="ThreedialogFormVisible"></PayrollThree>
			</div>	
		</div>
	</div>	
</template>

<script>
import PayrollindexMark4 from '@/components/studentfiles/PayrollindexMark4'
import PayrollThree from '@/components/studentfiles/PayrollThree'
export default {
  	name: 'payroll'	,
  	data(){
  		return{
  			input:'',
  			PayrollindexMarkDialogVisible:false,
  			ThreedialogFormVisible:false
  		}
  	},
  	components:{
  		PayrollindexMark4,
  		PayrollThree
  	},
}
</script>

<style scoped lang="scss">
  	 /*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.payrolln{
  		/*width: 1200px;
  		margin: 0 auto;
  		position:relative;*/
  		.payrollnContent{
  			/*width:912px;
  			position:absolute;
  			top:0;
  			left:285px;*/
  			.sharingLink{
  				button{
  					margin-left:15px;
  				}
  			}
  			.InserviceTable{
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