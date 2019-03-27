<template>
	<div class="farmmanagement">
		<div class="farmmanagementContent">
			<div class="sharingTitle">
				<h3>园所管理</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<div class="sharingLink">
						<span>
							<el-button type="text" @click="dialogFormVisible = true">添加班级</el-button>
							<el-dialog title="添加班级" :visible.sync="dialogFormVisible">
								<div class="demo-input-suffix">
									所属幼儿园
									<el-input v-model="input" placeholder="请输入内容"></el-input>
								</div>
								<div class="demo-input-suffix">
									班级名称
									<el-input v-model="input" placeholder="请输入内容"></el-input>
								</div>						
	  							<div slot="footer" class="dialog-footer">
	    							<el-button @click="dialogFormVisible = false">取 消</el-button>
	    							<el-button type="primary" @click="dialogFormVisible = false">确 定</el-button>
	  							</div>
							</el-dialog>							
						</span>
						<span>
							<el-button type="text" @click="dialogFormVisible_one = true">添加幼儿园</el-button>
							<el-dialog title="添加幼儿园" :visible.sync="dialogFormVisible_one">
								<div class="demo-input-suffix">
									幼儿园名称
									<el-input v-model="input" placeholder="请输入内容"></el-input>
								</div>					
	  							<div slot="footer" class="dialog-footer">
	    							<el-button @click="dialogFormVisible_one = false">取 消</el-button>
	    							<el-button type="primary" @click="dialogFormVisible_one = false">确 定</el-button>
	  							</div>
							</el-dialog>	
						</span>
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
				</div>
				<div class="farmmanagementTable">
					<table class="sharingTable">
						<tr>
							<th>幼儿园名称</th>
							<th>班级</th>
							<th>主班</th>
							<th>操作</th>
						</tr>
						<tr class="sharingTablecolor_one">
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
						</tr>
						<tr class="sharingTablecolor_one">
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
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
export default {
  	name: 'employeegrowth',
  	data () {
  		return{
  			input:'',
  			dialogTableVisible: false,
        	dialogFormVisible: false,
        	dialogFormVisible_one:false,
        	
  		}
  	}
}
</script>

<style scoped lang="scss">
	/*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.farmmanagement{
  		width:1200px;
  		margin: 0 auto;
  		position: relative;
  		.farmmanagementContent{
  			width:912px;
  			position:absolute;
  			top:0;
  			left:285px;
  			.sharingLink{
  				span{
  					margin-left:15px;
  				}
  			}
  			.farmmanagementTable{
  				width:100%;
  				table{
  					width:500px;
  					margin: 10px 0 15px 15px;
  				}
  			}
  		}
  	}
</style>
<style type="text/css">
	/*弹窗样式*/
	.farmmanagement .el-dialog{
		width: 30%;
	}
	.farmmanagement .el-dialog__header{
		text-align: center;
		font-weight: 600;
		padding: 0;
	}
	.farmmanagement .demo-input-suffix{
		width:500px;
		margin-left: 20px;
	}
	.farmmanagement .el-dialog__body{
		padding: 0;
	}
	.farmmanagement .dialog-footer{
		text-align: center;
	}
	/*弹窗表格样式*/
	.farmmanagement .el-table th {
		text-align: center;
		color: #333;
	}
	.farmmanagement .el-table .cell{
		text-align: center;
	} 
</style>