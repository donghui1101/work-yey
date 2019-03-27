<template>
	<div class="expenditure">
		<div class="expenditureContent">
			<div class="sharingTitle">
				<h3>园所经营</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>支出数据</h3>
					<div class="sharingLink">
					</div>
				</div>
				<div class="distribution">
					<ul class="park" >
						<h3>所属园区:</h3>
						<li class="style">全部</li>
						<li v-for="item in gardenList" @click="ClassList(item.id)" :key="item.id">{{item.name}}</li>
					</ul>
					<ul class="park">
						<h3>所属班级:</h3>
						<li class="style">全部</li>
						<li v-for="items in classList" :key="items.id" >{{items.name}}</li>
					</ul>
					<ul class="park">
						<h3>资金渠道:</h3>
						<li>支付宝</li>
						<li>微信</li>
						<li>银行卡</li>
					</ul>	
					<ul class="park">
						<h3>均摊维度:</h3>
						<li>平均</li>
						<li>定义金额</li>
						<li>学生人数</li>
						<li>自定义</li>
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
				<div class="expenditureText">
					<h3>支出明细表</h3>
				</div>		
				<div class="expenditureTable">
					<table class="sharingTable">
						<table>
							<tr>
							<th colspan="3" v-for="item in showList" :key="item.id" @click="MoneycenterDialogVisible = true">{{item.name}}</th>					
							<th colspan="3">合计</th>
						</tr>
						<tr>
							<td rowspan="2">常规</td>
							<td colspan="2">均摊</td>
							</tr>
						<tr>						
							<td>总额</td>
							<td>月均额</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						</table>
						</tr>
					</table>
				</div>
				
			</div>
			<AverageMark :AveragecenterDialogVisible.sync="AveragecenterDialogVisible"></AverageMark>
			<MarkMoney :MoneycenterDialogVisible.sync="MoneycenterDialogVisible"></MarkMoney>
		</div>
	</div>
	
</template>

<script>
import axios from 'axios';
import Cookies from 'js-cookie' 
import AverageMark from '@/components/finance/AverageMark'
import MarkMoney from '@/components/finance/MarkMoney'

export default {
  	name: 'expenditure',
  	components:{
			AverageMark,
			MarkMoney
		},
  	data () {
    	return {
    		AveragecenterDialogVisible:false,
    		MoneycenterDialogVisible:false,
    		showList:'',
    		garden:[],
    		list1:[],
    		list2:[],
    		activeList:[],
      	gardenList:[],
      	classList:[],
    		//expenditure:'',
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
  		show(){
  		var cookieId=Cookies.get("cookieId");
  			axios.post("api/index.php/api/Custody/cost",{
  				admin_id:cookieId
  			}).then(({data})=>{
  				console.log(data,8888);
  				this.showList=data.data;
  			})
  		},
  			ActiveList(){
    		var cookieId=Cookies.get("cookieId");
    		axios.post("/api/index.php/api/base/getJT",{
//  			garden_id:id,
    			admin_id:cookieId
    		}).then(({data})=>{
    			this.activeList=data.data.class;
    			this.gardenList=data.data.garden;
    			console.log(data);
    			console.log(data.data.class);
    		})
    	},
    	ClassList(id){
    		var cookieId=Cookies.get("cookieId");
    		axios.post("/api/index.php/api/base/getclass",{
    			garden_id:id,
    			admin_id:cookieId
    		}).then(({data})=>{
    			this.classList=data.data;
//  			console.log(data.data);
    		})
//  			
  
    	}
  	},
  	created(){
  		this.show();
  		this.ActiveList();
     	this.ClassList();
  	}
}

</script>

<style scoped lang="scss">
  	 /*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.expenditure{
  		width:1200px;
  		margin: 0 auto;
  		position:relative;
  		.expenditureContent{
  			width: 912px;
			position: absolute;
			top: 0;
			left: 285px;
			.sharingLink{
				a{
					color:#9bc248;
				}
			}
			.expenditureText{
				width: 100%;
				text-align: left;
				line-height: 98px;
				text-indent: 15px;
				font-size: 26px;
				color: #333;
				h3{
					width: 200px;
					font-weight: normal;
				}
			}
			.expenditureTable{
				width: 100%;
				overflow-x:scroll;
				table{
					width:3138px;
				}
			}
  		}
  	}
</style>
<style>
	.distribution li{
		cursor:pointer;
	}
	.expenditure .el-button--text{
		color: #9BC248;
		font-size: 18px;
	}
	.expenditure .el-date-editor--daterange{
		height: 32px;
		margin-top: 10px;
	}
	.expenditure .el-input{
		width: 180px;
		height: 32px;
	}
	.expenditure .el-input__inner{
		height: 32px;
	}
	.expenditure .el-button{
		padding: 5px 10px;
		height: 32px;
	}
	.expenditure .departureStyle{
		margin-left: 45px;
	}
	.expenditure .el-checkbox-group{
		margin-left: 15px !important;
}
</style>