<template>
	<div class="payrollindex">
		<div class="payrollindexContent">
			<div class="sharingTitle">
				<h3>财务管理</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>工资表</h3>					
					<div class="sharingLink">
						<button @click="dialogFormVisible =true" >新建工资表</button>
						<button>导出工资表</button>
						<button>发放</button>
						<button>生成</button>
						<button @click="PayrollindexMarkDialogVisible =true">审批</button>
						<button>填写</button>
					</div>					
				</div>
				<PayrollindexMark4 :PayrollindexMarkDialogVisible.sync="PayrollindexMarkDialogVisible"></PayrollindexMark4>
				<PayrollOne :dialogFormVisible.sync="dialogFormVisible "></PayrollOne>
				<!--<PayrollThree :dialogFormVisible.sync="dialogFormVisible "></PayrollThree>-->
			</div>				
		</div>
	</div>	
</template>

<script>
	import PayrollindexMark4 from '@/components/studentfiles/PayrollindexMark4'
	import PayrollOne from '@/components/studentfiles/PayrollOne'
//	import PayrollThree from '@/components/studentfiles/PayrollThree'
export default {
  	name: 'payroll',
  	components:{
  		PayrollindexMark4,
  		PayrollOne
//		PayrollThree
  	},
  	data(){
  		return{
  			PayrollindexMarkDialogVisible:false,
  			dialogFormVisible:false
  		}
  	}
}
</script>

<style scoped lang="scss">
  	 /*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.payrollindex{
  		width: 1200px;
  		margin: 0 auto;
  		position:relative;
  		.payrollindexContent{
  			width:912px;
  			position:absolute;
  			top:0;
  			left:285px;
  			.sharingLink{
  				span{
  					margin-left:15px;
  				}
  			} 			
  		}
  	}
</style>