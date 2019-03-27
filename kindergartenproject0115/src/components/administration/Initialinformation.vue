<template>
	<div class="initialinformation">
		<div class="initialinformationContent">
			<div class="sharingTitle">
				<h3>员工管理</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>初始信息设置</h3>
					<div class="sharingLink">
						<el-button type="text" @click="dialogFormVisible = true">添加基础信息</el-button>
							<el-dialog title="" :visible.sync="dialogFormVisible">
								<div class="demo-input-suffix">
									选择类别：
									<select name="">
										<option value="">员工基本信息</option>
										<option value="">员工基本信息</option>
										<option value="">员工基本信息</option>
										<option value="">员工基本信息</option>
										<option value="">员工基本信息</option>
										<option value="">员工基本信息</option>
									</select>
								</div>
								<div class="demo-input-suffix">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名称：
									<el-input v-model="input" placeholder="请输入内容"></el-input>
								</div>						
	  							<div slot="footer" class="dialog-footer">
	    							<el-button type="primary" @click="dialogFormVisible = false">保 存</el-button>
	  							</div>
							</el-dialog>
					</div>
				</div>
				<div class="distribution">
					<ul class="park">
						<h3>所属部门:</h3>
						<li class="style">全部</li>
						<li>人事部</li>
						<li>财务部</li>
						<li>企划部</li>
					</ul>	
					<ul class="park">
						<h3>所属园区:</h3>
						<li class="style">全部</li>
						<li>星光幼儿园</li>
						<li>第一幼儿园</li>
						<li>第一幼儿园</li>
						<li>第一幼儿园</li>
						<li>第一幼儿园</li>
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
								<el-button>成长排名</el-button>
								<el-button>所选</el-button>
							</el-row>
						</div>
					</div>			
				</div>
				<div class="initialinformationTable">
					<div class="initialinformation_basic">
						<h3>员工基本信息：</h3>
						<table class="sharingTable">
							<tr>
								<th>员工姓名</th>
								<th>性别</th>
								<th>出生日期</th>
								<th>联系方式</th>
								<th>家庭住址</th>
								<th>学历</th>
								<th>学历类型</th>
								<th>教证</th>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>
								    <el-date-picker v-model="value1" type="date" placeholder="选择日期">
								    </el-date-picker>
								</td>
								<td></td>
								<td></td>
								<td>
									<select name="">
										<option value="Undergraduate">本科</option>
										<option value="Specialty">专科</option>
										<option value="school">高中</option>
									</select>
								</td>
								<td>
									<select name="">
										<option value="Single ">单招</option>
										<option value="Unified  ">统招</option>
									</select>
								</td>
								<td>
									<select name="">
										<option value="yes">有</option>
										<option value="no">无</option>
									</select>
								</td>
							</tr>
						</table>
					</div>
					<div class="initialinformation_entry">
						<h3>职工入职信息信息：</h3>
						<table class="sharingTable">
							<tr>
								<th>入职日期</th>
								<th>所在园区</th>
								<th>所在班级</th>
								<th>任职岗位</th>
								<th>薪酬类型</th>
								<th>薪酬级别</th>
								<th>薪酬标准</th>
							</tr>
							<tr>
								<td>
									<el-date-picker v-model="value2" type="date" placeholder="选择日期">
								    </el-date-picker>
								</td>
								<td>
									<select name="">
										<option value="">第一幼儿园</option>
										<option value="">第二幼儿园</option>
										<option value="">第三幼儿园</option>
									</select>
								</td>
								<td>
								    <select name="">
								    	<option value="">10班</option>
								    	<option value="">9班</option>
								    	<option value="">8班</option>
								    	<option value="">7班</option>
								    </select>
								</td>
								<td>
									<select name="">
										<option value="">教师</option>
										<option value="">主任</option>
										<option value="">副院长</option>
										<option value="">园长</option>
									</select>
								</td>
								<td>
									<select name="">
										<option value="">管理人员</option>
										<option value="">教育人员</option>
									</select>
								</td>
								<td>
									<select name="">
										<option value="">管理人员</option>
										<option value="">教育人员</option>
									</select>
								</td>
								<td>
									<select name="">
										<option value="">管理人员</option>
										<option value="">教育人员</option>
									</select>
								</td>
							</tr>
						</table>
					</div>
					<div class="initialinformation_transfer">
						<h3>职工入职信息信息：</h3>
						<table class="sharingTable">
							<tr>
								<th>转正日期</th>
								<th>转岗日期</th>
								<th>转正岗位</th>
								<th>离职日期</th>
							</tr>
							<tr>
								<td>
									<el-date-picker v-model="value3" type="date" placeholder="选择日期">
								    </el-date-picker>
								</td>
								<td>
									<select name="">
										<option value="">第一幼儿园</option>
										<option value="">第二幼儿园</option>
										<option value="">第三幼儿园</option>
									</select>
								</td>
								<td>
								    <select name="">
								    	<option value="">10班</option>
								    	<option value="">9班</option>
								    	<option value="">8班</option>
								    	<option value="">7班</option>
								    </select>
								</td>
								<td>
									<select name="">
										<option value="">教师</option>
										<option value="">主任</option>
										<option value="">副院长</option>
										<option value="">园长</option>
									</select>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="initialinformationPreservation">
					保存
				</div>
			</div>
		</div>
	</div> 
</template>

<script>
export default {
  	name: 'initialinformation',
  	data () {
    	return {
    		input:'',
    		input21: '',
    		dialogFormVisible: false,
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
			value6: '',
			pickerOptions1: {
      			disabledDate(time) {
        			return time.getTime() > Date.now();
      			},
      			shortcuts: [{
        			text: '今天',
        			onClick(picker) {
          				picker.$emit('pick', new Date());
        			}
      			}, {
        			text: '昨天',
        			onClick(picker) {
          				const date = new Date();
          				date.setTime(date.getTime() - 3600 * 1000 * 24);
          				picker.$emit('pick', date);
        			}
      			}, {
        			text: '一周前',
        			onClick(picker) {
          				const date = new Date();
          				date.setTime(date.getTime() - 3600 * 1000 * 24 * 7);
          				picker.$emit('pick', date);
        			}
      			}]
    		},
    		value1: '',
    		value2: '',
    		value3: '',
    	}
  	}, 	
}
</script>

<style scoped lang="scss">
  	 /*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.initialinformation{
  		width: 1200px;
  		margin: 0 auto;
  		position: relative;
  		.initialinformationContent{
  			width:912px;
  			position:absolute;
  			top:0;
  			left:285px;
  			.initialinformationTable{
  				width:100%;
  				.initialinformation_basic{
  					width:912px;
  					margin-top:20px;
  					h3{
  						width: 200PX;
  						line-height:40px;
  						text-align:left;
	  					text-indent:15px;
	  					font-size:26px;
	  					color:#333;
	  					font-weight:normal;
  					}
  					table{
  						width: 750px;
  						margin-left: 15px;
  						select{
  							border: none;
  							font-size: 16px;
  						}
  					}
  				}
  				.initialinformation_entry{
  					width:912px;
  					margin-top: 20px;
  					h3{
  						line-height: 40px;
  						text-indent: 15px;
  						font-size: 26px;
  						color: #333;
  						font-weight: normal;
  					}
  					table{
  						width:720px;
  						margin-left: 15px;
  						select{
  							border: none;
  							font-size: 16px;
  						}
  					}
  				}
  				.initialinformation_transfer{
  					width: 912px;
  					margin-top: 20px;
  					h3{
  						line-height: 40px;
  						text-indent: 15px;
  						font-size: 26px;
  						color: #333;
  						font-weight: normal;
  					}
  					table{
  						width:550px;
  						margin-left: 15px;
  						select{
  							border: none;
  							font-size: 16px;
  						}
  					}
  				}
  				
  			}
  			.initialinformationPreservation{
  				width: 180px;
  				height: 68px;
  				background: #157EFB;
  				color: #fff;
  				font-size: 26px;
  				text-align: center;
  				line-height: 68px;
  				margin: 60px auto;
  				border-radius: 10px;
  			}
  			
  		}
  	}
</style>
<style>
	.initialinformation .el-date-editor--daterange{
		height: 32px;
		margin-top: 10px;
	}
	.initialinformation .el-input{
		width: 180px;
		height: 32px;
	}
	.initialinformation .el-input__inner{
		height: 32px;
	}
	.initialinformation .el-button{
		padding: 5px 10px;
		height: 32px;
	}
	.initialinformation .departureStyle{
		margin-left: 45px;
	}
		/*弹窗样式*/
	.initialinformation .el-dialog{
		width: 30%;
	}
	.initialinformation .el-dialog__header{
		text-align: center;
		font-weight: 600;
		padding: 0;
	}
	.initialinformation .demo-input-suffix{
		width:500px;
		margin-left: 20px;
	}
	.initialinformation .demo-input-suffix select{
		width: 140px;
		height: 25px;
		border: none;
		background: #dcdcdc;
	}
	.initialinformation .demo-input-suffix input{
		width: 140px;
		height: 25px;
		border: none;
		background: #dcdcdc;
	}
	.initialinformation .el-dialog__body{
		padding: 0;
	}
	.initialinformation .dialog-footer{
		text-align: center;
	}
	/*弹窗表格样式*/
	.initialinformation .el-table th {
		text-align: center;
		color: #333;
	}
	.initialinformation .el-table .cell{
		text-align: center;
	} 
</style>