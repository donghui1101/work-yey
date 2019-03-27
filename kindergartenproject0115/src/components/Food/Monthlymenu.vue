<template>
	<div class="monthlymenu">
		<div class="monthlymenuContent">
			<div class="sharingTitle">
				<h3>菜谱管理</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>已添加月菜谱</h3>
					<div class="sharingLink">
						<el-date-picker v-model="value1" type="date" placeholder="选择日期"></el-date-picker>
					</div>
				</div>
				<div class="monthlymenuAdded">
					<div>
						<h3>第一周</h3>
						<span>
							<img src="../../../static/img/maozi.png" alt="" />
							<i>制作人</i>
						</span>
						<h4>杨思思</h4>
					</div>
					<div>
						<h3>第二周</h3>
						<span>
							<img src="../../../static/img/maozi.png" alt="" />
							<i>制作人</i>
						</span>
						<h4>杨思思</h4>
					</div>
					<div>
						<h3>第三周</h3>
						<span>
							<img src="../../../static/img/maozi.png" alt="" />
							<i>制作人</i>
						</span>
						<h4>杨思思</h4>
					</div>
					<div>
						<h3>第四周</h3>
						<span>
							<img src="../../../static/img/maozi.png" alt="" />
							<i>制作人</i>
						</span>
						<h4>杨思思</h4>
					</div>
				</div>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>已添加月菜谱</h3>
					<div class="sharingLink">
						<el-date-picker v-model="value2" type="date" placeholder="选择日期"></el-date-picker>
					</div>
				</div>
				<div class="monthlymenuAdded">
					<div>
						<h3>第一周</h3>
						<span>
							<img src="../../../static/img/maozi.png" alt="" />
							<i>制作人</i>
						</span>
						<h4>杨思思</h4>
					</div>
					<div>
						<h3>第二周</h3>
						<span>
							<img src="../../../static/img/maozi.png" alt="" />
							<i>制作人</i>
						</span>
						<h4>杨思思</h4>
					</div>
					<div>
						<h3>第三周</h3>
						<span>
							<img src="../../../static/img/maozi.png" alt="" />
							<i>制作人</i>
						</span>
						<h4>杨思思</h4>
					</div>
					<div>
						<h3>第四周</h3>
						<span>
							<img src="../../../static/img/maozi.png" alt="" />
							<i>制作人</i>
						</span>
						<h4>杨思思</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
export default {
  	name: 'monthlymenu',
  	data() {
      return {
        pickerOptions1: {
          disabledDate(time) {
            return time.getTime() > Date.now();
          },
          shortcuts: [{
            text: '今天',
            onClick(picker) {
              picker.$emit('pick', new Date());
            }
          }, {
            text: '昨天',
            onClick(picker) {
              const date = new Date();
              date.setTime(date.getTime() - 3600 * 1000 * 24);
              picker.$emit('pick', date);
            }
          }, {
            text: '一周前',
            onClick(picker) {
              const date = new Date();
              date.setTime(date.getTime() - 3600 * 1000 * 24 * 7);
              picker.$emit('pick', date);
            }
          }]
        },
        value1: '',
        value2: '',
      };
    }
}
</script>

<style scoped lang="scss">
	/*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.monthlymenu{
  		width: 1200px;
  		margin: 0 auto;
  		position: relative;
  		.monthlymenuContent{
  			width:912px;
  			position:absolute;
  			top:0;
  			left:285px;
  			.sharingcontent{
  				border: none;
  				.sharingcontentTitle{
  					border:none;
  				}
  			}
  			.monthlymenuAdded{
  				width: 100%;
  				margin: 20px 0;
  				display :flex; 
				align-items:center; 
				justify-content:space-around; 
  				div{
  					width:189px;
  					height: 184px;
  					border-radius: 10px;
  					box-shadow: 0px 0px 50px #dcdcdc;
  					
  					h3{
  						width:100%;
  						line-height:60px;
  						text-align: center;
  						border-bottom: 1px solid #a1cb46;
  					}
  					span{
  						display: block;
  						width:100%;
  						line-height: 60px;
  						text-align: center;
  						font-size:18px;
  						color: #333;
  					}
  					h4{
  						text-align: center;
  						font-weight: normal;
  						font-size: 24px;
  						color: #333;
  					}
  				}
  			}
  		}
  	}
</style>
<style>
	.monthlymenu .el-input__inner{
		border: none;
	}
</style>