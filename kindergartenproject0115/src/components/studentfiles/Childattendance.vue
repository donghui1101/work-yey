<template>
	<div class="childattendance">
		<div class="childattendanceContent">
			<div class="sharingTitle">
				<h3></h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>幼儿考勤记录</h3>
					<div class="sharingLink">
						<el-button type="text" @click="dialogFormVisible = true">矫正</el-button>
						<el-dialog title="" :visible.sync="dialogFormVisible">
							<div class="sharingTable">
							  	<table border="" cellspacing="" cellpadding="">
							  		<tr>
							  			<th></th>
							  			<th>1号</th>
							  			<th>1号</th>
							  			<th>1号</th>
							  			<th>1号</th>
							  			<th>1号</th>
							  			<th>1号</th>
							  			<th>1号</th>
							  			<th>1号</th>
							  			<th>1号</th>
							  			<th>1号</th>
							  			<th>1号</th>
							  			<th>1号</th>
							  			<th>1号</th>
							  			<th>1号</th>
							  			<th>1号</th>
							  			<th>1号</th>
							  		</tr>
							  		<tr>
							  			<td>张三</td>
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
							  		<tr>
							  			<td>张三</td>
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
							  		<tr>
							  			<td>张三</td>
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
							  		<tr>
							  			<td>张三</td>
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
							  	</table>
							</div>
							<div slot="footer" class="dialog-footer">
    							<el-button @click="dialogFormVisible = false">取 消</el-button>
    							<el-button type="primary" @click="dialogFormVisible = false;dialogFormVisible_one = true">保 存</el-button>
  							</div>
						</el-dialog>				 		
					</div>
				</div>
				<!--第二个弹窗-->								
				<el-dialog title="审批" :visible.sync="dialogFormVisible_one">
					<div class="demo-input-suffix">
						<h3>标题</h3>
						<div>
							<span>备注</span>
							<textarea name="" rows="" cols=""></textarea>
						</div>
					</div>
					<div class="demo-input-suffix">
						<span>选择审批人</span>
						<select name="">
							<option value="">财务</option>
							<option value="">财务</option>
							<option value="">财务</option>
						</select>
						<select name="">
							<option value="">财务</option>
							<option value="">财务</option>
							<option value="">财务</option>
						</select>
					</div>
					<div slot="footer" class="dialog-footer">
    					<el-button @click="dialogFormVisible_one = false">取 消</el-button>
    					<el-button type="primary" @click="dialogFormVisible_one = false">保 存</el-button>
  					</div>														
				</el-dialog>
				<!--第二个弹窗END-->																																				
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
						<h3>所属职位:</h3>
						<li class="style">全部</li>
						<li>主班</li>
						<li>分园长</li>
						<li>见习园长</li>
						<li>园长助理</li>
						<li>厨师长</li>
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
				<div class="childattendanceTable">
					<table class="sharingTable">
						<tr>
							<th><input type="radio" name="" id="" value="" /></th>
							<th>编号</th>
							<th>学生姓名</th>
							<th>所在班级</th>
							<th>所在园区</th>
							<th>状态</th>
							<th>操作</th>
						</tr>
						<tr class="sharingTablecolor_one">
							<td><input type="radio" name="" id="" value="" /></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<span class="details">详情</span>
							</td>
						</tr>
						<tr class="sharingTablecolor_two">
							<td><input type="radio" name="" id="" value="" /></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<span class="details">详情</span>
							</td>
						</tr>
						<tr class="sharingTablecolor_one">
							<td><input type="radio" name="" id="" value="" /></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<span class="details">详情</span>
							</td>
						</tr>
						<tr class="sharingTablecolor_two">
							<td><input type="radio" name="" id="" value="" /></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<span class="details">详情</span>
							</td>
						</tr>
						<tr class="sharingTablecolor_one">
							<td><input type="radio" name="" id="" value="" /></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<span class="details">详情</span>
							</td>
						</tr>
						<tr class="sharingTablecolor_two">
							<td><input type="radio" name="" id="" value="" /></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<span class="details">详情</span>
							</td>
						</tr>
					</table>					
				</div>
			</div>	
		</div>
	</div>	
</template>

<script>
export default {
  	name: 'departure', 	
  	data() {
      return {
      	input21: '',
      	input10:'',
      	dialogTableVisible: false,
        dialogFormVisible: false,
        dialogFormVisible_one:false,
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
    } 	
}
</script>

<style scoped lang="scss">
  	 /*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.childattendance{
  		width: 1200px;
  		margin: 0 auto;
  		position:relative;
  		.childattendanceContent{
  			width:912px;
  			position:absolute;
  			top:0;
  			left:285px;
  			.sharingLink{
  				table{
  					width:100%;
  				}
  			}
  			.childattendanceTable{
  				width: 100%;
  				margin-top: 15px;
  				margin-bottom: 15px;
  				table{
  					width:770px;
  					margin:0 auto;
  				}
  			}
  		}
  	}
</style>
<style>
	.childattendance .el-button--text{
		color: #9BC248;
		font-size: 18px;
	}
	.childattendance .el-date-editor--daterange{
		height: 32px;
		margin-top: 10px;
	}
	.childattendance .el-input{
		width: 180px;
		height: 32px;
	}
	.childattendance .el-input__inner{
		height: 32px;
	}
	.childattendance .el-button{
		padding: 5px 10px;
		height: 32px;
	}
	.childattendance .departureStyle{
		margin-left: 45px;
	}
	/*弹窗样式*/
	.childattendance .el-dialog__header{
		text-align: center;
		font-weight: 600;
		padding: 0;
	}
	.childattendance .demo-input-suffix{
		width:500px;
		margin: 10px auto;
	}
	.childattendance .demo-input-suffix div{
		display: flex;
		align-items:flex-start;
		margin-top: 15px;
	}
	.childattendance .demo-input-suffix div textarea{
		margin-left: 15px;
		width: 450px;
		height: 150px;
		resize:none ;
	}
	.childattendance .demo-input-suffix select {
		width: 80px;
		height: 25px;
		margin-left: 15px;
		border: none;
		background: #dcdcdc;
	}
	.childattendance .el-dialog__body{
		padding: 0;
	}
	.childattendance .dialog-footer{
		text-align: center;
	}
	/*弹窗表格样式*/
	.childattendance .el-table th {
		text-align: center;
		color: #333;
	}
	.childattendance .el-table .cell{
		text-align: center;
	} 
</style>