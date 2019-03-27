<template>
	<div class="filedtails">
		<div class="filedtailsContent">
			<div class="sharingTitle">
				<h3>保教管理</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>答案详情</h3>
					<div class="sharingLink">
						<el-button type="text" @click="dialogFormVisible = true">模板上传</el-button>
						<el-dialog title="选择模板" :visible.sync="dialogFormVisible">
							<div class="demo-input-suffix">
								<img src="../../../static/img/detail.png"/>
								<img src="../../../static/img/detail.png"/>
								<img src="../../../static/img/detail.png"/>
							</div>						
  							<div slot="footer" class="dialog-footer">
    							<el-button @click="dialogFormVisible = false">取 消</el-button>
    							<el-button type="primary" @click="dialogFormVisible = false">保 存</el-button>
  							</div>
						</el-dialog>
					</div>
				</div>
				<div class="filedtailsUpload">
					<div class="filedtailsUpload_on">
						<span>2018-2-20</span>
						<span>看看效果图</span>
						<div class="Uploadbutton">
							<div class="Uploadcontainer">
								<el-upload
  									action="https://jsonplaceholder.typicode.com/posts/"
  									list-type="picture-card"
  									:on-preview="handlePictureCardPreview"
  									:on-remove="handleRemove">
  								<i class="el-icon-plus"></i>
								</el-upload>
								<el-dialog :visible.sync="dialogVisible">
								  	<img width="100%" :src="dialogImageUrl" alt="">
								</el-dialog>
							</div>
							<div class="Uploadcontainer">
								<el-upload
  									action="https://jsonplaceholder.typicode.com/posts/"
  									list-type="picture-card"
  									:on-preview="handlePictureCardPreview"
  									:on-remove="handleRemove"
  									:limit="1">
  								<i class="el-icon-plus"></i>
								</el-upload>
								<el-dialog :visible.sync="dialogVisible">
								  	<img width="100%" :src="dialogImageUrl" alt="">
								</el-dialog>
							</div>
							<div class="Uploadcontainer">
								<el-upload
  									action="https://jsonplaceholder.typicode.com/posts/"
  									list-type="picture-card"
  									:on-preview="handlePictureCardPreview"
  									:on-remove="handleRemove"
  									:limit="1">
  								<i class="el-icon-plus"></i>
								</el-upload>
								<el-dialog :visible.sync="dialogVisible">
								  	<img width="100%" :src="dialogImageUrl" alt="">
								</el-dialog>
							</div>
						</div>
					</div>
					<div class="filedtailsUpload_on">
						<span>2018-2-20</span>
						<span>看看效果图</span>
						<div class="Uploadbutton">
							<div class="Uploadcontainer">
								<img src="../../../static/img/detail.png"/>
							</div>
							<div class="Uploadcontainer">
								<img src="../../../static/img/detail.png"/>
							</div>
							<div class="Uploadcontainer">
								<img src="../../../static/img/detail.png"/>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
export default {
  	name: 'filedtails',
  	data() {
      	return {
        	dialogImageUrl: '',
        	dialogVisible: false,
        	dialogTableVisible: false,
        	dialogFormVisible: false,
      	};
    },
    methods: {
      	handleRemove(file, fileList) {
        	console.log(file, fileList);
      	},
      	handlePictureCardPreview(file) {
        	this.dialogImageUrl = file.url;
        	this.dialogVisible = true;
      	}
    }
};
</script>

<style scoped lang="scss">
  	 /*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.filedtails{
  		width: 1200px;
  		margin: 0 auto;
  		position: relative;
  		.filedtailsContent{
  			width:912px;
  			position:absolute;
  			top:0;
  			left:285px;
  			.filedtailsUpload{
  				width: 100%;
  				.filedtailsUpload_on{
  					width:882px;
  					margin:0 auto;
  					span{
  						display: inline-block;
  						line-height:40px;
  						font-size: 18px;
  						color: #333;
  					}
  				}
  				.Uploadbutton{
  					display: flex;
  					justify-content: space-between;  					
  					.Uploadcontainer{
  					width:220px;
  					height: 148px;
  					overflow: hidden;
  				}
  				} 				
  			}
  		}
  	}
</style>
<style>
	.filedtails .el-upload--picture-card{
		width: 220px;
		border: none;
		background: #dcdcdc;
	}
	/*弹窗样式*/
	.filedtails .el-dialog {
		width:800px;
	}
	.filedtails .el-dialog__header{
		text-align: center;
		font-weight: 600;
		padding: 0;
	}
	.filedtails .el-dialog__body{
		padding: 0;
	}
	.filedtails .dialog-footer{
		text-align: center;
	}
	.filedtails .demo-input-suffix img{
		width: 250px;
		height: 150px;
		margin: 0 7px;
	}
</style>