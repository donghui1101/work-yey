<template>
	<div class="staffmanagement">
		<div class="staffmanagementContent">
			<div class="sharingTitle">
				<h3>管理</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>员工管理</h3>	
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
					<ul class="park">
						<h3>所属班级:</h3>
						<li class="style">全部</li>
						<li>小一班</li>
						<li>小二班</li>
						<li>小三班</li>
						<li>小四班</li>
						<li>小五班</li>
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
							</el-row>
						</div>
					</div>								
				</div>
				<div class="staffmanagementTable">
					<table class="sharingTable">
						<tr>
							<th><input type="radio"  /></th>
							<th>编号</th>
							<th>员工姓名</th>
							<th>职务</th>
							<th>联系方式</th>
							<th>所在园区</th>
							<th>薪酬级别</th>
							<th>薪酬标准</th>
							<th>状态</th>
							<th>最后登录时间</th>
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
							<td>Data</td>
							<td>Data</td>
							<td>
								<span class="departure">删除</span>
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
							<td>Data</td>
							<td>Data</td>
							<td>
								<span class="departure">删除</span>
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
							<td>Data</td>
							<td>Data</td>
							<td>
								<span class="departure">删除</span>
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
							<td>Data</td>
							<td>Data</td>
							<td>
								<span class="departure">删除</span>
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
							<td>Data</td>
							<td>Data</td>
							<td>
								<span class="departure">删除</span>
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
							<td>Data</td>
							<td>Data</td>
							<td>
								<span class="departure">删除</span>
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
  	name: 'staffmanagement',
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
  	.staffmanagement{
  		width:1200px;
  		margin: 0 auto;
  		position: relative;
  		.staffmanagementContent{
  			width:912px;
  			position:absolute;
  			top:0;
  			left:285px;
  			.staffmanagementTable{
  				width:100%;
  				table{
  					width:885px;
  					margin: 15px auto;
  				}
  			}
  		}
  	}
</style>
<style>
	.staffmanagement .el-date-editor--daterange{
		height: 32px;
		margin-top: 10px;
	}
	.staffmanagement .el-input{
		width: 180px;
		height: 32px;
	}
	.staffmanagement .el-input__inner{
		height: 32px;
	}
	.staffmanagement .el-button{
		padding: 5px 10px;
		height: 32px;
	}
	.staffmanagement .departureStyle{
		margin-left: 45px;
	}
</style>