<template>
	<div class="attendancerate">
		<div class="attendancerateContent">
			<div class="sharingTitle">
				<h3>考核设置</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<span>|</span>
					<h3>考勤率设置</h3>
				</div>
				<div class="attendancerateSetup">
					<div class="attendancerateStyle">
						<span>
							<i>满勤：</i>
							<el-radio-group v-model="radio2">
							    <el-radio :label="3">是</el-radio>
							    <el-radio :label="6">不是</el-radio>
						  	</el-radio-group>
						  	<span class="reward">满勤奖励</span>
						  	<input type="text" />
						  	<span>元</span>
						</span>
					</div>
					<div class="attendancerateStyle">
						<span>
							<span>迟到：<i>1</i> 次</span>&nbsp;
						  	<input type="text" />
						  	<span>元</span>
						  	<span>&nbsp;&nbsp;&nbsp;&nbsp;说明：迟到五分钟算迟到</span>
						</span>
					</div>
					<div class="attendancerateStyle">
						<span>
							<span>早退：<i>1</i> 次</span>&nbsp;
						  	<input type="text" />
						  	<span>元</span>
						  	<span>&nbsp;&nbsp;&nbsp;&nbsp;说明：早退五分钟算早退</span>
						</span>
					</div>
					<div class="attendancerateStyle">
						<span>
							<span>事假：<i>1</i> 天</span>&nbsp;
						  	<input type="text" />
						  	<span>元</span>
						</span>
					</div>
					<div class="attendancerateStyle">
						<span>
							<span>病假：<i>1</i> 天</span>&nbsp;
						  	<input type="text" />
						  	<span>元</span>
						</span>
					</div>
				</div>
				<div class="attendancerateActual">
					<span>
						实际达成率 
						<i>&nbsp;60%</i>
					</span>
					<span>
						实际支付
						<i>&nbsp;60%</i>
					</span>
				</div>
				<div class="attendanceratePreservation">保存</div>
			</div>
		</div>
	</div>
</template>

<script>
export default {
  	name: 'attendancerate',
  	data () {
      	return {
        	radio2: 3
      	};
    }
}
</script>

<style scoped lang="scss">
  	 /*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.attendancerate{
  		width:1200px;
  		margin: 0 auto;
  		position: relative;
  		.attendancerateContent{
  			width:912px;
  			position:absolute;
  			top:0;
  			left:285px;
  			.sharingcontentTitle{
  				span{
  					margin-left:15px;
  					font-size: 30px;
  					color: #9BC248;
  				}
  			}
  			.attendancerateSetup{
  				width: 750px;
  				margin: 0 auto;
  				.attendancerateStyle{
  					width:100%;
  					height: 50px;
  					line-height: 50px;
  					font-size:16px;
  					color:#333;
  					.reward{
  						margin-left: 40px;
  					}
  					input{
  						width: 70px;
  						height: 25px;
  						border:1px solid #dcdcdc;
  						border-radius: 6px;
  					}
  				}
  			}
  			.attendancerateActual{
  				width: 750px;
  				margin: 30px auto;
  				span{
  					margin-right: 30px;
  					font-size: 16px;
  					color: #333;
  				}
  			}
  			.attendanceratePreservation{
  				width: 286px;
  				height: 50px;
  				margin: 30px auto;
  				background: #9bc248;
  				text-align: center;
  				line-height: 50px;
  				color: #fff;
  				font-size: 18px;
  				border-radius: 10px;
  			}
  		}
  	}
</style>