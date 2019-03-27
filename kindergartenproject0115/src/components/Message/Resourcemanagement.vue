<template>
	<div class="resourcemanagement">
		<div class="resourcemanagementContent">
			<div class="sharingTitle">
				<h3>资源管理</h3>
		</el-form-item>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>资源上传</h3>
				</div>
				<div class="resourcemanagementUpload">
					<div class="resourcemanagementUploadName">
						<span>资源名称：</span>
						<i>哈哈哈</i>
						<div>选择分类
							<select name="">
								<option value="">csd</option>
							</select>
						</div>						
					</div>
				</div>
				<div class="resourcemanagementChoice">
					<h3>上传附件</h3>
					<div class="ChaoiceImg">						
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
					<h3>封面上传</h3>
					<div class="ChaoiceImg">						
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
				</div>
				<div class="uploadTime">
					<span>上传时间：</span>
						<el-date-picker v-model="value2" type="date" placeholder="选择日期"></el-date-picker>
					<span>上传人<i>aaaa</i></span>
				</div>
				<button type="button">提交</button>
			</div>
		</div>
	</div>
</template>
api/notic/add_resources
<script>
	export default {
  		name: 'resourcemanagement',
  		data() {
      		return {
        		dialogImageUrl: '',
        		dialogVisible: false,
        		value2:'',
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
      		};
   		},
    	methods: {
	      	handleRemove(file, fileList) {
	        	console.log(file, fileList);
	      	},
	      	handlePictureCardPreview(file) {
	        	this.dialogImageUrl = file.url;
	        	this.dialogVisible = true;
	      	},
	      	uploadFile(){
	      		var cookieId = Cookies.get("cookieId");
		      	axios.post("api/index.php/api/notic/add_resources",{
		      		admin_id: cookieId,
		      		inform_title:this.formObj.inform_title,
		        	inform_desc:this.formObj.inform_desc,
		        	inform_photo:document.querySelector('.file_img').files[0]
		      	}).then(({data})=>{
		      		console.log(data);
		      	})
	      	}
    	}
	}
</script>

<style scoped lang="scss">
  	 /*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.resourcemanagement{
  		width: 1200px;
  		margin:0 auto;
  		position: relative;
  		.resourcemanagementContent{
			width:912px;
			position:absolute;
			top:0;
			left:285px;
			.resourcemanagementUpload{
				width: 100%;
				.resourcemanagementUploadName{
					font-size:16px;
					color:#333;
					margin:15px;
					div{
						margin-top: 15px;
						width: 220px;
						height: 35px;
						background: #dcdcdc;
						select{
							width:150px;
							height: 35px;
							font-size:16px;
							color: #333;
							background: #dcdcdc;						
							border: none;
							outline: none;
						}
					}					
				}
			}
			.resourcemanagementChoice{
				width:100%;
				h3{
					margin-left: 15px;
					font-size: 18px;
					color: #333;
					font-weight: normal;
				}
				.ChaoiceImg{
					margin: 10px 0 10px 15px;
					width: 220px;
					height: 148px;
					overflow: hidden;
				}
			}
			.uploadTime{
				width:100%;
				span{
					display: block;
					padding: 15px 15px;
				 	font-size: 18px;
				 	color: #333;
				}
			}
  		}
  	}
</style>