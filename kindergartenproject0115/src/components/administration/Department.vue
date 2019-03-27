<template>
	<div class="department">
		<div class="departmentContent">
			<div class="sharingTitle">
				<h3>部门管理</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<div class="sharingLink">
						<el-button type="text" @click="dialogFormVisible = true">添加部门</el-button>
						<el-dialog title="添加部门" :visible.sync="dialogFormVisible">
							<div class="demo-input-suffix">
								名称：
								<el-input v-model="input" placeholder="请输入内容"></el-input>
							</div>
							<div class="demo-input-suffix">
								负责人
								<el-input v-model="input" placeholder="请输入内容"></el-input>
							</div>
							<div class="demo-input-suffix">
								上级负责人
								<el-input v-model="input" placeholder="请输入内容"></el-input>
							</div>						
  							<div slot="footer" class="dialog-footer">
    							<el-button @click="dialogFormVisible = false">取 消</el-button>
    							<el-button type="primary" @click="dialogFormVisible = false">确 定</el-button>
  							</div>
						</el-dialog>
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
				<div class="departmentTable">
					<table class="sharingTable">
						<tr>
							<th>班级名称</th>
							<th>班级人数</th>
							<th>所属幼儿园</th>
							<th>主任</th>
							<th>操作</th>
						</tr>
						<tr>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>
								<span class="details">删除</span>
							</td>
						</tr>
						<tr>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>
								<span class="details">删除</span>
							</td>
						</tr>
						<tr>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>
								<span class="details">删除</span>
							</td>
						</tr>
						<tr>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>
								<span class="details">删除</span>
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
  	name: 'inservice',
  	data () {
  		return{
  			input:'',
  			dialogTableVisible: false,
        	dialogFormVisible: false
  		}
  	}
}
</script>

<style scoped lang="scss">
  	 /*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.department{
  		/*width: 1200px;
  		margin: 0 auto;
  		position: relative;*/
  		.departmentContent{
  			/*width:912px;
  			position:absolute;
  			top:0;*/
  			/*left:285px;*/
  			.departmentTable{
  				width: 100%;
  				table{
  					width:750px;
  					margin: 15px auto;
  				}
  			}
  		}
  	}
</style>
<style type="text/css">
	/*弹窗样式*/
	.department .el-dialog{
		width: 30%;
	}
	.department .el-dialog__header{
		text-align: center;
		font-weight: 600;
		padding: 0;
	}
	.department .demo-input-suffix{
		width:500px;
		margin-left: 20px;
	}
	.department .el-dialog__body{
		padding: 0;
	}
	.department .dialog-footer{
		text-align: center;
	}
	/*弹窗表格样式*/
	.department .el-table th {
		text-align: center;
		color: #333;
	}
	.department .el-table .cell{
		text-align: center;
	} 
</style>