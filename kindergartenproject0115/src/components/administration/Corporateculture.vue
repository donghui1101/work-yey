<template>
	<div class="corporateculture">
		<div class="corporatecultureContent">
			<div class="sharingTitle">
				<h3>设置</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>企业文化</h3>
				</div>
				<div class="corporatecultureChange">
					<div class="corporatecultureChange_style">					
						<div>
							<span>预置内容：</span>
							<select name="">
								<option value="">早上好</option>
								<option value="">晚上好</option>
							</select>
						</div>
						<div>
							<span>投放位置app：</span>
							<select name="">
								<option value="">.....</option>
								<option value="">晚上好</option>
							</select>
						</div>
					</div>
					<div class="corporatecultureChange_style">					
						<div>
							<span>投放位置app：</span>
							<select name="">
								<option value="">.....</option>
								<option value="">晚上好</option>
							</select>
						</div>
					</div>
					<div class="corporatecultureChange_style">					
						<div class="corporatecultureColor">
							<i>选择颜色：</i>
							<span class="corporatecultureRed"></span>
							<span class="corporatecultureOrange"></span>
							<span class="corporatecultureYellow"></span>
							<span class="corporatecultureGreen"></span>
							<span class="corporatecultureCyan"></span>
							<span class="corporatecultureBlue"></span>
							<span class="corporateculturePurple"></span>
						</div>
					</div>
					<div class="corporatecultureSave">
						<button>保存</button>
					</div>
				</div>
				<div class="corporatecultureAdd">
					<h5>添加内容：</h5>
					<el-upload
  						class="avatar-uploader"
  						action="https://jsonplaceholder.typicode.com/posts/"
  						:show-file-list="false"
  						:on-success="handleAvatarSuccess"
  						:before-upload="beforeAvatarUpload">
  						<img v-if="imageUrl" :src="imageUrl" class="avatar">
  						<i v-else class="el-icon-plus avatar-uploader-icon"></i>
					</el-upload>
					<div class="corporatecultureAddto">
						<button>添加</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</template	>

<script>
export default {
  	name: 'corporateculture',
  	data() {
      	return {
        	imageUrl: ''
      	};
    },
    methods: {
      	handleAvatarSuccess(res, file) {
        	this.imageUrl = URL.createObjectURL(file.raw);
      	},
      	beforeAvatarUpload(file) {
        	const isJPG = file.type === 'image/jpeg';
        	const isLt2M = file.size / 1024 / 1024 < 2;
        if (!isJPG) {
          	this.$message.error('上传头像图片只能是 JPG 格式!');
        }
        if (!isLt2M) {
          	this.$message.error('上传头像图片大小不能超过 2MB!');
        }
        	return isJPG && isLt2M;
      	}
    }
}
</script>

<style scoped lang="scss">
  	 /*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.corporateculture{
  		width: 1200px;
  		margin: 0 auto;
  		position: relative;
  		.corporatecultureContent{
  			width:912px;
  			position:absolute;
  			top:0;
  			left:285px;
  			.corporatecultureChange{
  				width:860px;
  				margin: 0 auto;
  				.corporatecultureChange_style{
  					width:100%;
  					margin-top:20px;
  					font-size:16px;
  					color:#333;
  					select{
  						width:180px;
  						height: 25px;
  					}
  					div{
  						width: 48%;
  						display: inline-block;
  					} 
  					.corporatecultureColor{
  						width: 100%;
  						height: 50px;
  						display: flex;
  						align-items: center;
  						span{
  							display: inline-block;
  							margin-right: 15px;
  							width: 32px;
  							height: 32px;
  							border-radius: 5px; 							
  						}
  						i{
  							margin-top: 10px;
  						}
  						.corporatecultureRed{
  							background: red; 							
  						}
  						.corporatecultureOrange{
  							background: orange; 							
  						}
  						.corporatecultureYellow{
  							background: yellow; 							
  						}
  						.corporatecultureGreen{
  							background: green; 							
  						}
  						.corporatecultureCyan{
  							background: cyan; 							
  						}
  						.corporatecultureBlue{
  							background: blue; 							
  						}
  						.corporateculturePurple{
  							background: purple; 							
  						}
  					} 					
  				}
  				.corporatecultureSave{
  					width: 750px;
  					margin: 10px auto 30px;
  					text-align: right;
  					button{
  						width:100px;
  						height: 38px;
  						background: #9bc248;
  						color: #fff;
  						border: none;
  						border-radius: 6px;
  						font-size: 18px;
  					}
  				}
  			}
  			.corporatecultureAdd{
  				width: 100%;
  				border-top:1px solid #dcdcdc;
  				h5{
  					margin-top: 25px;
  					margin-left: 15px;
  					font-weight: normal;
  					color: #333;
  					font-size: 16px;
  				}
  				.corporatecultureAddto{
  					width: 750px;
  					margin: 10px auto 30px;
  					text-align: right;
  					button{
  						width: 100px;
  						height: 38px;
  						background: #9BC248;
  						color: #fff;
  						font-size: 18px;
  						border-radius: 6px;
  						border: none;
  					}
  				}
  			}
  		}
  	}
</style>
<style>
  	.corporateculture .avatar-uploader .el-upload {
	    border: 1px dashed #d9d9d9;
	    border-radius: 6px;
	    cursor: pointer;
	    position: relative;
	    overflow: hidden;
  	}
 	.corporateculture .avatar-uploader .el-upload:hover {
    	border-color: #409EFF;
  	}
  	.corporateculture .avatar-uploader-icon {
	    font-size: 28px;
	    color: #8c939d;
	    width: 178px;
	    height: 178px;
	    line-height: 178px;
	    text-align: center;
  	}
  	.corporateculture .avatar {
	    width: 178px;
	    height: 178px;
	    display: block;
  	}
  	
  	.corporateculture .el-upload--text{
  		margin-top: 30px;
  		margin-left: 50px;
  	}
</style>