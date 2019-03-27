<template>
	<div class="Inservice">
		<div class="InserviceContent">
			<div class="sharingTitle">
				<h3>管理</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>员工在职率</h3>
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
							<el-button>成长排名</el-button>
							<el-button>所选</el-button>
						</el-row>
					</div>
				</div>
				<div class="InserviceTable">
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
  	.Inservice{
  		width: 1200px;
  		margin: 0 auto;
  		position:relative;
  		.InserviceContent{
  			width:912px;
  			position:absolute;
  			top:0;
  			left:285px;
  			.InserviceTable{
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
	.Inservice .el-input--prefix{
		width: 180px;
	}
	.Inservice .el-input__inner{
		width: 180px;
		height: 32px;
	}
	.Inservice .el-button{
		padding: 5px 10px;
		height: 32px;
	}
	.Inservice .InserviceStyle{
		margin-left: 45px;
	}
</style>