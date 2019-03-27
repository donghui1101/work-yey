<template>
	<div class="positionmanagement">
		<div class="positionmanagementContent">
			<div class="sharingTitle">
				<h3>职位管理</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<div class="sharingLink">
						<el-button type="text" @click="dialogFormVisible = true">添加部门</el-button>
						<el-dialog title="添加部门" :visible.sync="dialogFormVisible">
							<div class="demo-input-suffix">
								职位名称
								<el-input v-model="input" placeholder="请输入内容"></el-input>
							</div>
							<div class="demo-input-suffix">
								负责人
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
				<div class="positionmanagementTable">
					<table class="sharingTable">
						<tr>
							<th>班级名称</th>
							<th>班级人数</th>
							<th>所属幼儿园</th>
							<th>主班</th>
							<th>操作</th>
						</tr>
						<tr class="sharingTablecolor_one">
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>
								<span class="details">删除</span>
							</td>
						</tr>
						<tr class="sharingTablecolor_two">
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>
								<span class="details">删除</span>
							</td>
						</tr>
						<tr class="sharingTablecolor_one">
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>
								<span class="details">删除</span>
							</td>
						</tr>
						<tr class="sharingTablecolor_two">
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
  	name: 'employeegrowth',
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
  	.positionmanagement{
  		/*width: 1200px;
  		margin: 0 auto;
  		position: relative;*/
  		.positionmanagementContent{
  			/*width:912px;
  			position:absolute;
  			top:0;
  			left:285px;*/
  			.positionmanagementTable{
  				width:100%;
  				table{
  					width:550px;
  					margin:10px 0 15px 15px;
  					.details{
  						border:1px solid #9bc248;
  						color:#9bc248;
  					}
  				}
  			}
  		}
  	}
</style>
<style type="text/css">
	/*弹窗样式*/
	.positionmanagement .el-dialog{
		width: 30%;
	}
	.positionmanagement .el-dialog__header{
		text-align: center;
		font-weight: 600;
		padding: 0;
	}
	.positionmanagement .demo-input-suffix{
		width:500px;
		margin-left: 20px;
	}
	.positionmanagement .el-dialog__body{
		padding: 0;
	}
	.positionmanagement .dialog-footer{
		text-align: center;
	}
	/*弹窗表格样式*/
	.positionmanagement .el-table th {
		text-align: center;
		color: #333;
	}
	.positionmanagement .el-table .cell{
		text-align: center;
	} 
</style>