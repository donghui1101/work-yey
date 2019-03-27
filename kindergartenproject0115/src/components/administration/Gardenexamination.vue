<template>
	<div class="gardenexamination">
		<div class="gardenexaminationContent">
			<div class="sharingTitle">
				<h3>员工管理</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>园长考核</h3>
					<div class="sharingLink">
						<el-button type="text">评分</el-button>
						<el-button type="text">打记录</el-button>
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
					<ul class="park">
						<h3>所属职位:</h3>
						<li class="style">全部</li>
						<li>主任</li>
						<li>分园长</li>
						<li>见习园长</li>
						<li>园长助理</li>
						<li>厨师长</li>
					</ul>
					<ul class="park">
						<h3>园长排名</h3>
						<li>总排名</li>
						<li>教育教学</li>
						<li>日常管理</li>
						<li>招生宣传</li>
						<li>卫生保健</li>
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
				<div class="gardenexaminationTable">
					<table class="sharingTable">
						<tr>
							<th><input type="radio" name="" id="" value="" /></th>
							<th>编号</th>
							<th>员工姓名</th>
							<th>职务</th>
							<th>联系方式</th>
							<th>所在校区</th>
							<th>状态</th>
							<th>评分</th>
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
								<span class="details">评分</span>
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
								<span class="details">评分</span>
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
								<span class="details">评分</span>
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
								<span class="details">评分</span>
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
								<span class="details">评分</span>
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
								<span class="details">评分</span>
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
  	name: 'gardenexamination',
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
  	.gardenexamination{
  		width: 1200px;
  		margin: 0 auto;
  		position:relative;
  		.gardenexaminationContent{
  			width:912px;
  			position:absolute;
  			top:0;
  			left:285px;
  			.gardenexaminationTable{
  				width: 100%;
  				margin-top: 15px;
  				table{
  					width:774px;
  					margin: 0 auto;
  				}
  			}
  			
  		}
  	}
</style>
<style>
	.gardenexamination .el-button--text{
		color: #9BC248;
		font-size: 18px;
	}
	.gardenexamination .el-input--prefix{
		width: 180px;
	}
	.gardenexamination .el-input__inner{
		width: 180px;
		height: 32px;
	}
	.gardenexamination .el-button{
		padding: 5px 10px;
		height: 32px;
	}
	.gardenexamination .InserviceStyle{
		margin-left: 45px;
	}
</style>