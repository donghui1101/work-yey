<template>
	<div class="indicators">
		<div class="indicatorsContent">
			<div class="sharingTitle">
				<h3></h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>管理指标</h3>
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
						<li>1111</li>
						<li>分园长</li>
						<li>见习园长</li>
						<li>园长助理</li>
						<li>厨师长</li>
					</ul>	
					<ul class="park">
						<h3>排名:</h3>
						<li>利润指标达成率</li>
						<li>出勤率</li>
						<li>离职率</li>
						<li>晋升率</li>
						<li>在职率</li>
					</ul>
				</div>
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
				<div class="indicatorsPiechart">
					<div class="indicatorsPiechart_one">
						<div id="one" :style="{width: '300px', height: '240px'}"></div>
					</div>
					<div class="indicatorsPiechart_two">
						<div id="two" :style="{width: '300px', height: '240px'}"></div>
						<div id="three" :style="{width: '300px', height: '240px'}"></div>
						<div id="four" :style="{width: '300px', height: '240px'}"></div>
					</div>
					<div class="indicatorsPiechart_two">
						<div id="five" :style="{width: '300px', height: '240px'}"></div>
						<div id="six" :style="{width: '300px', height: '240px'}"></div>
						<div id="seven" :style="{width: '300px', height: '240px'}"></div>
					</div>
					<div class="indicatorsPiechart_two">
						<div id="nine" :style="{width: '300px', height: '240px'}"></div>
						<div id="ten" :style="{width: '300px', height: '240px'}"></div>
						<div id="eleven" :style="{width: '300px', height: '240px'}"></div>
					</div>
					<div class="indicatorsPiechart_two">
						<div id="twelve" :style="{width: '300px', height: '240px'}"></div>
						<div id="thirteen" :style="{width: '300px', height: '240px'}"></div>
						<div id="fourteen" :style="{width: '300px', height: '240px'}"></div>
					</div>
					<div class="indicatorsPiechart_one">
						<div id="fifteen" :style="{width: '300px', height: '240px'}"></div>
					</div>
				</div>
			</div>	
		</div>
	</div>	
</template>

<script>
export default {
  	name: 'indicators', 	
  	data() {
      return {
      	input21: '',
        pickerOptions2: {
          shortcuts: [{
            onClick(picker) {
              const end = new Date();
              const start = new Date();
              start.setTime(start.getTime() - 3600 * 1000 * 24 * 7);
              picker.$emit('pick', [start, end]);
            }
          }, {
            onClick(picker) {
              const end = new Date();
              const start = new Date();
              start.setTime(start.getTime() - 3600 * 1000 * 24 * 30);
              picker.$emit('pick', [start, end]);
            }
          }, {
            onClick(picker) {
              const end = new Date();
              const start = new Date();
              start.setTime(start.getTime() - 3600 * 1000 * 24 * 90);
              picker.$emit('pick', [start, end]);
            }
          }]
        },
        value6: '',
        value7: ''
      };
    } ,
	//饼状图样式
	mounted(){
    	this.drawLine_one('one','利润指标达成率','实际','预计');
    	this.drawLine_one('two','出勤率','实际','预计');
    	this.drawLine_one('three','成长率','实际','预计');
    	this.drawLine_one('four','离职率','实际','预计');
    	this.drawLine_one('five','晋升率','实际','预计');
		this.drawLine_one('six','在职率','实际','预计');
		this.drawLine_one('seven','骨干生成率','实际','预计');
		this.drawLine_one('nine','招生率','实际','预计');
		this.drawLine_one('ten','特长率','实际','预计');
		this.drawLine_one('eleven','出勤率','实际','预计');
		this.drawLine_one('twelve','退园率','实际','预计');
		this.drawLine_one('thirteen','安全率','实际','预计');
		this.drawLine_one('fourteen','家长投诉率','实际','预计');
		this.drawLine_one('fifteen','管理指标达成率','实际','预计');
  	},
	methods: {
  		//第一个饼状图
    	drawLine_one(myID,text,actual,estimate){
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
			            center: ['52%', '40%'],
			            labelLine: {
			                normal: {
			                    show: true
			                }
			            },
			            color:['#6699ff', '#9bc248'],
			            data:[
			                {value:335, name:actual, selected:false},
			                {value:679, name:estimate}
			            ]
			        },
			        {
			            name:'访问来源',
			            type:'pie',
			            radius: ['40%', '55%'],
			            label: {
			                normal: {
			                    formatter: '{a|{a}}{abg|}\n{hr|}\n  {b|{b}：}{c}  {per|{d}%}  ',
			                    backgroundColor: '#9966ff',
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
  	.indicators{
  		width: 1200px;
  		margin: 0 auto;
  		position:relative;
  		.indicatorsContent{
  			width:912px;
  			position:absolute;
  			top:0;
  			left:285px;
  			.indicatorsPiechart_two{
  				div{
  					display:inline-block;
  				}
  			}
  		}
  	}
</style>
<style>
	.indicators .el-date-editor--daterange{
		height: 32px;
		margin-top: 10px;
	}
	.indicators .el-input{
		width: 180px;
		height: 32px;
	}
	.indicators .el-input__inner{
		height: 32px;
	}
	.indicators .el-button{
		padding: 5px 10px;
		height: 32px;
	}
	.indicators .departureStyle{
		margin-left: 45px;
	}
</style>