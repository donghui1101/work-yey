<template>
	<div class="chieflog">
		<div class="chieflogContent">
			<div class="sharingTitle">
				<h3>管理</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>园长日志</h3>
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
				<div class="sharingTime">
					<div class="sharingInput">
						<el-row>
							<el-input
							    placeholder="请输入内容"
							    prefix-icon="el-icon-search"
							    v-model="input21">
							</el-input>
							<el-button class="InserviceStyle">搜索</el-button>
						</el-row>
					</div>
				</div>
				<div class="chieflogTable">
					<table class="sharingTable">
						<tr>
							<th><input type="radio" name="" id="" value="" /></th>
							<th>编号</th>
							<th>员工姓名</th>
							<th>职务</th>
							<th>联系方式</th>
							<th>所在校区</th>
							<th>状态</th>
							<th>最后登录时间</th>
							<th>操作</th>
						</tr>
						<tr class="sharingTablecolor_one">
							<td><input type="radio" name="" id="" value="" /></td>
							<td></td>
							<td></td>
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
  	name: 'inservice',
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
  	.chieflog{
  		width: 1200px;
  		margin: 0 auto;
  		position:relative;
  		.chieflogContent{
  			width:912px;
  			position:absolute;
  			top:0;
  			left:285px;
  			.chieflogTable{
  				width: 100%;
  				margin-top: 15px;
  				table{
  					width:885px;
  					margin: 0 auto;
  				}
  			}
  			
  		}
  	}
</style>
<style>
	.chieflog .el-input--prefix{
		width: 180px;
	}
	.chieflog .el-input__inner{
		width: 180px;
		height: 32px;
	}
	.chieflog .el-button{
		padding: 5px 10px;
		height: 32px;
	}
	.chieflog .InserviceStyle{
		margin-left: 45px;
	}
</style>