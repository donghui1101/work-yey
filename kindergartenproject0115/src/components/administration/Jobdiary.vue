<template>
	<div class="jobdiary">
		<div class="jobdiaryContent">
			<div class="sharingTitle">
				<h3>人事管理</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>工作日志</h3>
				</div>
				<div class="distribution">
					<ul class="park">
						<li>部门</li>
						<li>人事部职务</li>
						<li>姓名</li>
						<li>手机端</li>
					</ul>
				</div>
				<div class="jobdiaryToday">
					<h5>今日工作内容简述：</h5>
					<textarea name="" rows="" cols=""></textarea>
				</div>
				<div class="jobdiaryToday">
					<h5>明日工作计划：</h5>
					<textarea name="" rows="" cols=""></textarea>
				</div>				
			</div>
			<div class="jobdiaryPreservation">
				<button class="jobdiaryPreservation_yes">保存</button>
				<button>取消</button>
			</div>
		</div>
	</div>
</template>

<script>
export default {
  	name: 'jobdiary'
};
</script>

<style scoped lang="scss">
  	 /*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.jobdiary{
  		width:1200px;
  		margin: 0 auto;
  		position: relative;
  		.jobdiaryContent{
  			width:912px;
  			position:absolute;
  			top:0;
  			left:285px;
  			.jobdiaryToday{
  				margin-top: 10px;
  				margin-left: 15px;
  				h5{
  					font-size:18px;
  					color:#333;
  					font-weight: normal;
  				}
  				textarea{
  					width: 650px;
  					height: 200px;
  					background: #dcdcdc;
  					border: none;
  					resize:none;
  					margin-top: 10px;
  				}
  			}
  			.jobdiaryPreservation{
  				margin-top: 50px;
  				text-align: center;
  				button{
  					width: 120px;
  					height: 38px;
  					margin: 0 15px;
  					border: none;
  					border-radius: 8px;
  					font-size: 16px;  					
  					}
  				.jobdiaryPreservation_yes{
  					background: #157EFB;
  					color: #fff;
  				}
  			}
  		}
  	}
</style>