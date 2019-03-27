<template>
	<div class="revenuemanagement">
		<div class="revenuemanagementContent">
			<div class="sharingTitle">
				<h3>园所经营</h3>
				
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>收入数据</h3>
					<div class="sharingLink">
						<span class="plan">计划平均托费：<i>56205442元</i></span>
						<span class="actual">实际平均托费：<i>56205442元</i></span>
					</div>
					
				</div>
				<div class="distribution">
					<ul class="park">
						<h3>所属园区:</h3>
						<li class="style">全部</li>
						<li>星光幼儿园</li>
						<li>第一幼儿园</li>
						<li>第一幼儿园</li>
						<li>第一幼儿园</li>
						<li>第一幼儿园</li>
					</ul>
					<ul class="park">
						<h3>所属班级:</h3>
						<li class="style">全部</li>
						<li>小一班</li>
						<li>小一班</li>
						<li>小一班</li>
						<li>小一班</li>
						<li>小一班</li>
					</ul>	
					<ul class="park">
						<h3>资金渠道:</h3>
						<li>支付宝</li>
						<li>微信</li>
						<li>银行卡</li>
					</ul>
					<div class="sharingTime">
						<div class="sharingDate">
							<span class="demonstration">时间</span>
						    <el-date-picker
						      v-model="value6"
						      type="daterange"
						      range-separator="~"
						      start-placeholder="开始日期"
						      end-placeholder="结束日期">
						    </el-date-picker>
						</div>
						<div class="sharingInput">
							<el-row>
								<el-input
								    placeholder="请输入内容"
								    prefix-icon="el-icon-search"
								    v-model="input21">
								</el-input>
								<el-button class="departureStyle">搜索</el-button>
							</el-row>
						</div>
					</div>			
				</div>
				<div class="revenuemanagementTable">
					<div class="revenuemanagementTable_one">
						<h3>收入管理</h3>
						<table class="sharingTable">
							<tr>
								<th rowspan="3">班级</th>
								<th rowspan="3">缴费学生</th>
								<th colspan="3">应收托儿费</th>							
								<th colspan="3">应收伙食费</th>							
								<th colspan="3">车费</th>							
								<th colspan="3">特长费</th>							
								<th colspan="3">书费</th>							
								<th colspan="3">多项经营费</th>							
								<th colspan="3">其他收入</th>							
							</tr>
							<tr>							
								<th rowspan="2">常规</th>
								<th colspan="2">均摊</th>							
								<th rowspan="2">常规</th>
								<th colspan="2">均摊</th>							
								<th rowspan="2">常规</th>
								<th colspan="2">均摊</th>							
								<th rowspan="2">常规</th>
								<th colspan="2">均摊</th>							
								<th rowspan="2">常规</th>
								<th colspan="2">均摊</th>							
								<th rowspan="2">常规</th>
								<th colspan="2">均摊</th>							
								<th rowspan="2">常规</th>
								<th colspan="2">均摊</th>							
							</tr>
							<tr>																					
								<th>金额</th>
								<th>月均额</th>							
								<th>金额</th>
								<th>月均额</th>							
								<th>金额</th>
								<th>月均额</th>							
								<th>金额</th>
								<th>月均额</th>							
								<th>金额</th>
								<th>月均额</th>							
								<th>金额</th>
								<th>月均额</th>							
								<th>金额</th>
								<th>月均额</th>
							</tr>
							<tr class="sharingTablecolor_one">
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
								<td>Data</td>
								<td>Data</td>
								<td>Data</td>
							</tr>
							<tr class="sharingTablecolor_two">
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
								<td>Data</td>
								<td>Data</td>
								<td>Data</td>
							</tr>
							<tr class="sharingTablecolor_one">
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
								<td>Data</td>
								<td>Data</td>
								<td>Data</td>
							</tr>
							<tr class="sharingTablecolor_two">
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
								<td>Data</td>
								<td>Data</td>
								<td>Data</td>
							</tr>
							<tr class="sharingTablecolor_one">
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
								<td>Data</td>
								<td>Data</td>
								<td>Data</td>
							</tr>
							<tr class="sharingTablecolor_two">
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
								<td>Data</td>
								<td>Data</td>
								<td>Data</td>
							</tr>
							<tr class="sharingTablecolor_one">
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
								<td>Data</td>
								<td>Data</td>
								<td>Data</td>
							</tr>
							<tr class="sharingTablecolor_two">
								<td>&nbsp;</td>
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
								<td></td>
								<td></td>
							</tr>
							<tr class="sharingTablecolor_one">
								<td>&nbsp;</td>
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
								<td></td>
								<td></td>
							</tr>
						</table>
					</div>
					<div class="revenuemanagementTable_two">
						<h3>收入管理</h3>
						<table class="sharingTable">
							<tr>
								<th rowspan="2">定金</th>
								<th colspan="2">抵定金</th>							
								<th colspan="2">返托费负数</th>							
								<th colspan="2">返餐费</th>							
								<th colspan="2">返车费</th>							
								<th colspan="2">返特长</th>							
								<th colspan="2">返监控</th>							
								<th colspan="2">返定金</th>							
								<th colspan="2">其他返费</th>							
							</tr>
							<tr>
								<th>实退</th>
								<th>抵费</th>
								<th>实退</th>
								<th>抵费</th>
								<th>实退</th>
								<th>抵费</th>
								<th>实退</th>
								<th>抵费</th>
								<th>实退</th>
								<th>抵费</th>
								<th>实退</th>
								<th>抵费</th>
								<th>实退</th>
								<th>抵费</th>
								<th>实退</th>
								<th>抵费</th>
							</tr>
							<tr class="sharingTablecolor_one">
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
							</tr>
							<tr class="sharingTablecolor_two">
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
							</tr>
							<tr class="sharingTablecolor_one">
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
							</tr>
							<tr class="sharingTablecolor_two">
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
							</tr>
							<tr class="sharingTablecolor_one">
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
							</tr>
							<tr class="sharingTablecolor_two">
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
							</tr>
							<tr class="sharingTablecolor_one">
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
							</tr>
							<tr class="sharingTablecolor_two">
								<td>&nbsp;</td>
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
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="sharingTablecolor_one">
								<td>&nbsp;</td>
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
				<div class="totalcost">
					<h3>合计：</h3>
					<span>实际收入金额：<i>2354元</i></span>
					<span>财务报表销售额：<i>1325元</i></span>
				</div>
			</div>		
		</div>
	</div>	
</template>

<script>
export default {
  	name: 'revenuemanagement',
  	data () {  		
    	return {
    		checkList: ['复选框 A'],
  			input21: '',
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
  	methods:{
//		enter(){
//			this.$bus.$emit('show','false');
//			alert(1111);
//		}
  	}
}
</script>

<style scoped lang="scss">
  	 /*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.revenuemanagement{
  		width: 1200px;
		margin: 0 auto;
		position: relative;
		.revenuemanagementContent{
			width: 912px;
			position: absolute;
			top: 0;
			left: 285px;
			.sharingLink{
				span{
					color:#333;
					i{
						font-style:normal;
					}
				}
				a{
					color: #9BC248;
				}
			}
			.revenuemanagementTable{
				width:100%;
				.revenuemanagementTable_one{
					width:100%;
					overflow-x: scroll;
					h3{
						width: 100%;
						text-align: left;
						text-indent: 15px;
						line-height: 40px;
						font-weight: normal;
						font-size: 22px;
						color: #353535;
					}
					table{
						width:1690px;
						border-radius: 6px;
					}
				}
				.revenuemanagementTable_two{
					width:100%;
					overflow-x: scroll;
					h3{
						width: 100%;
						text-align: left;
						text-indent: 15px;
						line-height: 40px;
						font-weight: normal;
						font-size:22px;
						color: #353535;
					}
					table{
						width:1178px;
						border-radius: 6px;
					}
				}
			}
			.totalcost{
				width: 100%;
				text-align: left;
				margin-top: 15px;
				margin-bottom: 15px;
				h3{
					display: inline-block;
					margin-left: 20px;
					font-size: 26px;
					color: #333;
				}
				span{
					display:inline-block ;
					font-size: 20px;
					color: #666;
					margin-left: 40px;
					i{
						font-style: normal;
					}
				}
			}
		}
  	}
</style>
<style>
	.revenuemanagement .el-button--text{
		color: #9BC248;
		font-size: 18px;
	}
	.revenuemanagement .el-date-editor--daterange{
		height: 32px;
		margin-top: 10px;
	}
	.revenuemanagement .el-input{
		width: 180px;
		height: 32px;
	}
	.revenuemanagement .el-input__inner{
		height: 32px;
	}
	.revenuemanagement .el-button{
		padding: 5px 10px;
		height: 32px;
	}
	.revenuemanagement .departureStyle{
		margin-left: 45px;
	}
	.revenuemanagement .el-checkbox-group{
		margin-left: 15px !important;
}
</style>