<template>
	<div class="backbone">
		<div class="backboneContent">
			<div class="sharingTitle">
				<h3>管理</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>骨干成长率</h3>
					<div class="sharingLink">
						<a href="">导出</a>
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
						<h3>所属职位:</h3>
						<li class="style">全部</li>
						<li>主班</li>
						<li>分园长</li>
						<li>见习园长</li>
						<li>园长助理</li>
						<li>厨师长</li>
					</ul>				
					<div class="sharingTime">
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
				<div class="backboneTable">
					<table class="sharingTable">
						<tr>
							<th><input type="radio"  /></th>
							<th>编号</th>
							<th>员工姓名</th>
							<th>职务</th>
							<th>所在班级/部门</th>
							<th>所在园区</th>
							<th>状态</th>
							<th>入职时间</th>
							<th>操作</th>
						</tr>
						<tr class="sharingTablecolor_one">
							<td><input type="radio"  /></td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>
								<span class="departure">晋升</span>
								<span class="details">详情</span>
							</td>
						</tr>
						<tr class="sharingTablecolor_two">
							<td><input type="radio"  /></td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>
								<span class="departure">晋升</span>
								<span class="details">详情</span>
							</td>
						</tr>
						<tr class="sharingTablecolor_one">
							<td><input type="radio"  /></td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>
								<span class="departure">晋升</span>
								<span class="details">详情</span>
							</td>
						</tr>
						<tr class="sharingTablecolor_two">
							<td><input type="radio"  /></td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>
								<span class="departure">晋升</span>
								<span class="details">详情</span>
							</td>
						</tr>
						<tr class="sharingTablecolor_one">
							<td><input type="radio"  /></td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>
								<span class="departure">晋升</span>
								<span class="details">详情</span>
							</td>
						</tr>
						<tr class="sharingTablecolor_two">
							<td><input type="radio"  /></td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>
								<span class="departure">晋升</span>
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
  	name: 'backbone',
  	data() {
      	return {
      		input21: ''
      	}
   }
}
</script>

<style scoped lang="scss">
  	 /*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.backbone{
  		width: 1200px;
  		margin: 0 auto;
  		position:relative;
  		.backboneContent{
  			width:912px;
  			position:absolute;
  			top:0;
  			left:285px;
  			.sharingLink{
  				a{
  					color:#9BC248;
  				}
  			}
  			.backboneTable{
  				width:100%;
  				overflow-x: scroll;
  				table{
  					width:885px;
  					margin: 15px auto;
  				}
  			}
  		}
  	}
</style>
<style>
	.backbone .el-date-editor--daterange{
		height: 32px;
		margin-top: 10px;
	}
	.backbone .el-input{
		width: 180px;
		height: 32px;
	}
	.backbone .el-input__inner{
		height: 32px;
	}
	.backbone .el-button{
		padding: 5px 10px;
		height: 32px;
	}
	.backbone .departureStyle{
		margin-left: 45px;
	}
</style>