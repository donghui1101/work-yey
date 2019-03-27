<template>
	<div class="headexamination">
		<div class="headexaminationContent">
			<div class="sharingTitle">
				<h3>员工管理</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>园所考核</h3>
					<div class="sharingLink">
						<el-button type="text">评分</el-button>
						<el-button type="text" @click="hidd()">打分记录</el-button>
					</div>
					<div class="dafenRecord" v-if="isShow">
						<div class="dafenRecord_top">
							<span>园长给</span>
							<span>主班</span>
							<span>打了<i class="color">10</i>次</span>
							<span><i class="color">300</i>分</span>
						</div>
						<div class="dafenRecord_top">
							<span>园长给</span>
							<span>主班</span>
							<span>打了<i class="color">10</i>次</span>
							<span><i class="color">300</i>分</span>
						</div>
						<div class="dafenRecord_top">
							<span>园长给</span>
							<span>主班</span>
							<span>打了<i class="color">10</i>次</span>
							<span><i class="color">300</i>分</span>
						</div>
						<div class="dafenRecord_top">
							<span>园长给</span>
							<span>主班</span>
							<span>打了<i class="color">10</i>次</span>
							<span><i class="color">300</i>分</span>
						</div>
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
				<div class="headexaminationTable">
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
  	name: 'headexamination',
  	data() {
	    return {
	      	input21: '',
	      	isShow:false
	    }
  	},
  	methods:{
		hidd:function(){
//			alert(1111);
//			this.isShow=!this.isShow
			if(this.isShow===false){
				this.isShow=true;
			}else{
				this.isShow=false;
			}
		}
  	}
//	mounted(){
//		this.hidd();
//	}
}
</script>

<style scoped lang="scss">
  	 /*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.headexamination{
  		width: 1200px;
  		margin: 0 auto;
  		position:relative;
  		.headexaminationContent{
  			width:912px;
  			position:absolute;
  			top:0;
  			left:285px;
  			.headexaminationTable{  
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
	*{
		margin:0;
		padding:0;
	}
	.sharingcontentTitle{
		position: relative;
	}
	.dafenRecord{
		width: 200px;
		height:177px;
		background: #ffffff;
		position: absolute;
		top:64px;
		right:0;
		box-shadow: 0 0 15px #DCDCDC;
		/*display: none;*/
  	}
  	.dafenRecord span{
  		font-size:13px;
		color:#000000;
		margin-left:5px;
  	}
  	.dafenRecord_top{
  		height:20px;
  		line-height: 20px;
  		margin-top:5px;
  	}
  	.dafenRecord_top .color{
  		color:red;
  	}
	.headexamination .el-button--text{
		color: #9BC248;
		font-size: 18px;
	}
	.headexamination .el-input--prefix{
		width: 180px;
	}
	.headexamination .el-input__inner{
		width: 180px;
		height: 32px;
	}
	.headexamination .el-button{
		padding: 5px 10px;
		height: 32px;
	}
	.headexamination .InserviceStyle{
		margin-left: 45px;
	}
</style>