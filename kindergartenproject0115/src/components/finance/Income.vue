<template>
	<div class="income">
		<div class="incomeContent">
			<div class="sharingTitle">
				<h3>园所经营</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>单项统计</h3>
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
				<!--饼状图-->
				<div class="Piechart">
					<h3 class="title">当日实际收入</h3>
					<div id="Piechart_one" :style="{width: '228px', height: '240px'}"></div>
					<div id="Piechart_two" :style="{width: '228px', height: '240px'}"></div>
					<div id="Piechart_three" :style="{width: '228px', height: '240px'}"></div>
					<div id="Piechart_four" :style="{width: '228px', height: '240px'}"></div>
				</div>
				<!--饼状图END-->
				<div class="incomeBill">
					<div class="entering">
						<h3>当日进表收入</h3>
						<div class="details">
							<h4>集团</h4>
							<span>销售额：<i>12546.32</i></span>
						</div>
						<div class="details">
							<h4>集团</h4>
							<span>销售额：<i>12546.32</i></span>
						</div>
						<div class="details">
							<h4>集团</h4>
							<span>销售额：<i>12546.32</i></span>
						</div>
						<div class="details">
							<h4>集团</h4>
							<span>销售额：<i>12546.32</i></span>
						</div>
						<div class="details">
							<h4>集团</h4>
							<span>销售额：<i>12546.32</i></span>
						</div>
					</div>
					<div class="entering">
						<h3>当日实际支出</h3>
						<div class="details">
							<h4>集团</h4>
							<span>销售额：<i>12546.32</i></span>
						</div>
						<div class="details">
							<h4>集团</h4>
							<span>销售额：<i>12546.32</i></span>
						</div>
						<div class="details">
							<h4>集团</h4>
							<span>销售额：<i>12546.32</i></span>
						</div>
						<div class="details">
							<h4>集团</h4>
							<span>销售额：<i>12546.32</i></span>
						</div>
						<div class="details">
							<h4>集团</h4>
							<span>销售额：<i>12546.32</i></span>
						</div>
					</div>
					<div class="entering">
						<h3>当日入账支出</h3>
						<div class="details">
							<h4>集团</h4>
							<span>销售额：<i>12546.32</i></span>
						</div>
						<div class="details">
							<h4>集团</h4>
							<span>销售额：<i>12546.32</i></span>
						</div>
						<div class="details">
							<h4>集团</h4>
							<span>销售额：<i>12546.32</i></span>
						</div>
						<div class="details">
							<h4>集团</h4>
							<span>销售额：<i>12546.32</i></span>
						</div>
						<div class="details">
							<h4>集团</h4>
							<span>销售额：<i>12546.32</i></span>
						</div>
					</div>
					<div class="entering">
						<h3>销售扣减</h3>
						<div class="details">
							<h4>集团</h4>
							<span>销售额：<i>12546.32</i></span>
						</div>
						<div class="details">
							<h4>集团</h4>
							<span>销售额：<i>12546.32</i></span>
						</div>
						<div class="details">
							<h4>集团</h4>
							<span>销售额：<i>12546.32</i></span>
						</div>
						<div class="details">
							<h4>集团</h4>
							<span>销售额：<i>12546.32</i></span>
						</div>
						<div class="details">
							<h4>集团</h4>
							<span>销售额：<i>12546.32</i></span>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
	</div>	
</template>

<script>
export default {
  	name: 'income',
  	data () {
    	return {
    		input21:'',
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
	//饼状图样式
	mounted(){
    	this.drawLine_one('Piechart_one','出勤率');
    	this.drawLine_one('Piechart_two','效果图');
    	this.drawLine_one('Piechart_three','效果图');
    	this.drawLine_one('Piechart_four','效果图');
  	},
	methods: {
  		//第一个饼状图
    	drawLine_one(myID,text){
        	// 基于准备好的dom，初始化echarts实例
        	let Piechart_one = this.$echarts.init(document.getElementById(myID))
        	// 绘制图表
        	Piechart_one.setOption({        		
        		title: {
		            text: text,
		            x: 'center',
		            y: '190',
		            itemGap: 30,
		            backgroundColor: '#fff',
		            textStyle: {
		              	fontSize: 20,
		             	fontWeight: 'bolder',
		              	color: '#333'
		            }
		        },
			    series: [
			        {
			            name:'访问来源',
			            type:'pie',
			            hoverAnimation:false,
			            radius: [0, '70%'],
			            label: {
			                normal: {
			                    position: 'inner'
			                }
			            },
			            center: ['50%', '40%'],
			            labelLine: {
			                normal: {
			                    show: true
			                }
			            },
			            color:['#6699ff', '#9bc248'],
			            data:[
			                {value:335, name:'实际出勤率', selected:false},
			                {value:679, name:'预计出勤率'}
			            ]
			        },
			        {
			            name:'访问来源',
			            type:'pie',
			            radius: ['40%', '55%'],
			            label: {
			                normal: {
			                    formatter: '{a|{a}}{abg|}\n{hr|}\n  {b|{b}：}{c}  {per|{d}%}  ',
			                    backgroundColor: '#eee',
			                    borderColor: '#aaa',
			                    borderWidth: 1,
			                    borderRadius: 4
			                }
			            }
			        }
			    ]       		
        	});
     }
	}
}
</script>

<style scoped lang="scss">
  	 /*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.income{
  		width: 1200px;
  		margin: 0 auto;
  		position: relative;
  		.incomeContent{
  			width:912px;
  			position:absolute;
  			top:0;
  			left:285px;
  			.Piechart{
  				width: 912px;
  				height: 290px;
  				border: 1px solid #dcdcdc;
  				border-radius: 6px;
  				margin-top: 15px;
  				.title{
  					width:100%;
  					line-height:50px;
  					text-align:left;
  					font-size:22px;
  					text-indent:15px;
  					color:#333;
  					font-weight:normal;
  				}
  				div{
  					float:left;
  				}
  			}
  			.incomeBill{
  				width:100%;
  				height: 580px;
  				background: #fcfcfc;
  				.entering{
  					width: 912px;
  					margin-top: 36px;
  					text-align: left;
  					text-indent: 15px;
  					font-size: 22px;
  					color: #333;  					
  					overflow:hidden;
  					h3{
  						font-weight:normal;
  					}
  					div{
  						float:left;
  					}
  					.details{
  						width: 20%;
  						h4{
  							width: 100%;
							margin-top: 22px;
							margin-bottom: 22px;
							text-align: center;
							font-size: 18px;
							color: #333;
							font-weight:normal;
  						}
  						span{
  							display: inline-block;
							width: 100%;
							text-align: center;
							font-size: 14px;
							color: #666;
							i{
								font-style: normal;
							}
  						}
  					}
  				}
  			}
  		}
  	}
</style>
<style>
	.income .el-button--text{
		color: #9BC248;
		font-size: 18px;
	}
	.income .el-date-editor--daterange{
		height: 32px;
		margin-top: 10px;
	}
	.income .el-input{
		width: 180px;
		height: 32px;
	}
	.income .el-input__inner{
		height: 32px;
	}
	.income .el-button{
		padding: 5px 10px;
		height: 32px;
	}
	.income .departureStyle{
		margin-left: 45px;
	}
</style>