<template>
	<div class="report">
		<div class="reportContent">
			<div class="sharingTitle">
				<h3>园所经营</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>财务报表</h3>
					<div class="sharingLink">
						<el-button type="text" @click="addReportcenterVisible = true">添加报表</el-button>
						<el-dialog title="添加报表" :visible.sync="addReportcenterVisible">
							<div class="demo-input-suffix">
								<span>所在园区</span>
								<select name="" @change="classDetail(garendId)" v-model="garendId">
									<option  v-for="item in list1"  :value="item.id">{{item.name}}</option>
								</select>
							</div>
							<div class="demo-input-suffix">
								<span>所在班级</span>
								<select name="">
									<option value="1" v-for="item in listdetail" v-model="className">{{item.name}}</option>
								</select>
							</div>
							<div class="demo-input-suffix">
								<select name="" @change="getCost" ref="inputSelect">
									<option value="0">变动费</option>
									<option value="1">固定费</option>
								</select>
							</div>
							<div class="demo-input-suffix">
								<select  @change="getcost(costId)" v-model="costId">
									<option value="1" v-for="item in Cost" :key="item.id" :value="item.id">{{item.name}}</option>
								</select>
							</div>
							<div class="demo-input-suffix" v-for="(item,index) in cost">
									<span v-model="t_id">{{item.name}}</span>
								<el-input  placeholder="请输入内容" ref="detail"  v-model="input1[index]"></el-input>
							</div>			
  							<div slot="footer" class="dialog-footer">
    							<el-button @click="addReportcenterVisible = false">取 消</el-button>
    							<el-button type="primary" @click="addReportcenterVisible= false,addCost()">确 定</el-button>
  							</div>
						</el-dialog>
					</div>
				</div>
				<div class="distribution">
					<ul class="park">
						<h3>所属园区:</h3>
						<li class="style">全部</li>
						<li v-for="item in list1" @click="classDetail(item.id)">{{item.name}}</li>
					</ul>
					<ul class="park">
						<h3>所属园区:</h3>
						<li class="style">全部</li>
						<li v-for="item in listdetail">{{item.name}}</li>
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
				<div class="bill">
					<div class="bill_one">
						<div class="one_1" v-for="items in getList">
							<div class="bilie">
								<span v-if="items.zb!=null">占比:</span>
								<span>{{items.zb}}</span>
							</div>
							
							<h3 class="mony">{{items.money||items.num}}</h3>
							<span class="text">{{items.name}}</span>
						</div>
					</div>
				</div>
				<div class="histogram">
					<div id="myChart_one" :style="{width: '882px', height: '466px'}"></div>
					<div id="myChart_two" :style="{width: '882px', height: '466px'}"></div>
					<div id="myChart_three" :style="{width: '882px', height: '466px'}"></div>
					<div id="myChart_fout" :style="{width: '882px', height: '466px'}"></div>
				</div>
			</div>
			
		</div>
	</div>
</template>

<script>
import Cookies from 'js-cookie'
import axios from 'axios'
export default {
  	name: 'report',
  	data () {
    	return {
    		myChart:"",
    		input21: '',
    		input1:[],
    		input2:'',
    		garendId:'',
    		costId:'',
    		arr1:[],
    		garden_id:'',
    		class_id:'',
    		className:'',
    		list1:[],
        list2:[],
        Cost:[],
        cost:[],
        Income:[],
        listdetail:[],
        getList:[],
        arr:[],
        addReportcenterVisible:false,
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
	//柱状图样式
	mounted(){
    	this.drawLine('myChart_one','应收 金额/元');
    	this.drawLine('myChart_two','返费 金额/元');
    	this.drawLine('myChart_three','变动费 金额/元');
    	this.drawLine('myChart_fout','固定费 金额/元');
    	this.Interests();
  	},
  	methods: {
  		//第一个柱状图
    	drawLine(reportMyID,title){
        	// 基于准备好的dom，初始化echarts实例
         this.myChart = this.$echarts.init(document.getElementById(reportMyID))
        	// 绘制图表
      this.myChart.setOption({
//      		console.log(111)
		 		color: ['#a1cb46'],
				title: {
		            text: title,
		            x: '16',
		            y: '20',
		            itemGap: 30,
		            backgroundColor: '#fff',
		            textStyle: {
		              	fontSize: 24,
		              	fontWeight: 'bolder',
		              	color: 'rgb(51,51,51)'
		            }
		        },
//		        legend: {
//			        x:'285',
//			        y:'20',
//			        data:['应收金额','应收净额','占比'],
////			        alin
//			        textStyle:{
//			        	fontSize:20,
//			        	color:'#333333'
//			        }
//			    },
		    	grid: {
			    	top:'20%',
			        left: '2%',
			        right: '2%',
			        bottom: '3%',
			        containLabel: true
		    	},
		    	xAxis : [
			        {
			            type : 'category',
			            data : this.Income.name,
			            axisTick: {
			                alignWithLabel: true
			            },
			            axisLabel: {
	                        show: true,
	                        textStyle: {
	                            color: '#000',
	                            fontSize:16,
	                        }
	            		}
			        }
		    	],
			    yAxis : [
			        {
			            max:'300000',
	            		min:'0',
	            		axisLabel: {
	                        show: true,
	                        textStyle: {
	                            color: '#000',
	                            fontSize:16,
	                        }
	            		}
			        }
			    ],
			    series : [
			        {
			        	name:'应收金额',
			            type:'bar',
			            barWidth: '30%',
			            data:[10000, 52000, 200000, 234000, 190000, 100000, 200000]
			        },
			    ]
		    });
		   console.log(this.charts);
},
		 getListb(){
      var cookieId = Cookies.get("cookieId");
      axios.post("/api/index.php/api/base/getJT", {
        admin_id: cookieId
      })
        .then((
          body
        ) => {
          this.list1 = body.data.data.garden;
          this.listdetail = body.data.data.class;
          console.log(body.data.data,8888)
					this.list1.map((current,index) => {
    				this.garendId=current.id
    			})

        })
    },
    classDetail(id){
    	alert(11111);
    	var cookieId = Cookies.get("cookieId");
    	axios.post("/api/index.php/api/base/getclass",{
    		admin_id: cookieId,
    		garden_id:id
    	}).then(({data})=>{
    		this.listdetail=data.data;
    		this.listdetail.map((current,index) => {
    				this.className=current.id
    			})
    		console.log(data,8888999);
    	})
    },
    	//第一个柱状图END
    //财务报表方块
    chooseDate(){
    	var cookieId = Cookies.get("cookieId");
    	axios.post("/api/index.php/api/FinancialStatement/get_Border_Interests",{
    		admin_id: cookieId,
    		garden_id:this.garden_id,
    		class_id:this.class_id,
    		start:this.value6,
    		end:this.value6,
    	}).then(({data})=>{
    		this.getList=data;
    		console.log(data,8888999);
    	})
    },
    	//第一个柱状图END
    	 //应收金额
    Interests(){
    	console.log(9999, this.myChart.setOption);
    	var cookieId = Cookies.get("cookieId");
    	axios.post("/api/index.php/api/FinancialStatement/income",{
    		admin_id: cookieId,
    		f_id:this.garden_id,
    		class_id:this.class_id,
    		start:this.value6,
    		end:this.value6,
    	}).then(({data})=>{
    		this.Income=data.data;
    console.log(8888888,this.myChart);
    		console.log(data,77777799999);
    	})
    },
    getCost(){
    	let value = this.$refs.inputSelect.value
    	var cookieId = Cookies.get("cookieId");
    	axios.post("/api/index.php/api/cost/getcost",{
    		admin_id: cookieId,
    		status:value,
//  		s_id:
    	}).then(({data})=>{
    		this.Cost=data.data;
    		this.Cost.map((current,index) => {
    				this.costId=current.id
    			})
//  console.log(8888888,this.myChart);
    		console.log(data,7777779999988888);
    	})
    },
    getcost(id){
    	let value = this.$refs.inputSelect.value
    	var cookieId = Cookies.get("cookieId");
    	axios.post("/api/index.php/api/cost/getcost",{
    		admin_id: cookieId,
    		status:value,
    		t_id:id
    	}).then(({data})=>{
    		this.cost=data.data;
    		this.cost.map((current,index) => {
    				this.t_id=current.id
    			})
//  console.log(8888888,this.myChart);
    		console.log(data,7777779999988888);
    	})
    },
    addCost(){
    	let i = this.input1;
    	let value = this.$refs.inputSelect.value
    	var cookieId = Cookies.get("cookieId");
    	for(var j in this.cost){
    		this.arr1.push(this.cost[j].id)
    	}
//	for(var i in this.list){
//		this.arr.push(this.list[i].id);
//		console.log(this.arr,6666);
//	}
    	axios.post("/api/index.php/api/cost/createcost",{
    		admin_id: cookieId,
    		garden_id:this.garendId,
    		class_id:this.className,
    		status:value,
    		f_id:this.arr1,
    		money:i
    	}).then(({data})=>{
    		this.cost=data.data;
//  console.log(8888888,this.myChart);
    		console.log(data,7777779999988888);
    	})
    }
	},
	created(){
	    this.getListb();
	    this.chooseDate();
	    this.Interests();
//	    this.getcost();
	  }
}
</script>
<style scoped lang="scss">
  	 /*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.report{
  		width: 1200px;
  		margin: 0 auto;
  		position: relative;
  		.reportContent{
			width: 912px;
			position: absolute;
			top: 0;
			left: 285px;
			.bill{
				width: 100%;
				height: 472px;
				background: #FCFCFC;
				.bill_one{
					width:890px;
					margin:15px auto 0;
					overflow:hidden;
					div{
						float:left;
						text-align: center;
					}
					.one_1{
						width:272px;
						height: 208px;
						background: #fff;
						border-radius: 5px;
						box-shadow: 10px 10px 10px #f2f2f2;
					}
					.bilie{
						width:100%;
						line-height: 30px;
						text-align: center;
						color: red;
					}
					.mony{
						height:35px;
						margin-top:54px;
						font-size: 36px;
						color: #a1cb46;
					}
					.text{
						display: block;
						font-size: 36px;
						margin-top: 30px;
						color: #181818;
					}
					.one_2{
						width: 272px;
						height: 208px;
						background: #fff;
						border-radius: 5px;
						box-shadow: 10px 10px 10px #f2f2f2;
						margin-left: 35px;
						margin-right: 35px;
					}
				}
			}
		}
  	}
</style>
<style>
	.distribution li{
		cursor: pointer;
	}
	.report .el-button--text{
		color: #9BC248;
		font-size: 18px;
	}
	.report .el-date-editor--daterange{
		height: 32px;
		margin-top: 10px;
	}
	.report .el-input{
		width: 180px;
		height: 32px;
	}
	.report .el-input__inner{
		height: 32px;
	}
	.report .el-button{
		padding: 5px 10px;
		height: 32px;
	}
	.report .departureStyle{
		margin-left: 45px;
	}
	.add{
		width:150px;
		display: inline-block;
		line-height: 60px;
		color:#9BC248;
		font-size:25px;
		float: right;
		cursor: pointer;
	}
</style>
