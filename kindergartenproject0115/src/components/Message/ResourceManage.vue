<template>
	<div class="Notice">
		<div class="notice">
			<div class="sharingTitle">
				<h3>经营</h3>
			</div>
			<div class="notice_content">
				<div class="header">
					<h3>通知公告</h3>
				</div>
			<div class="content">
				<div class="title"><span>标题 :</span><input type="text"></div>
				<div class="content1">
					<span>内容 :</span>
					<textarea></textarea>
				</div>
				<div class="choose">
					<span>图片:</span>
					<div class="Uploadcontainer">
						<el-upload
			  				action="https://jsonplaceholder.typicode.com/posts/"
						    list-type="picture-card"
						    :on-preview="handlePictureCardPreview"
						   :on-remove="handleRemove" style="margin-left: 45px;margin-right: 15px;">
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
						   :on-remove="handleRemove" style="margin:0 15px;">
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
						   :on-remove="handleRemove" style="margin:0 15px;">
					  		<i class="el-icon-plus"></i>
						</el-upload>
						<el-dialog :visible.sync="dialogVisible">
						  <img width="100%" :src="dialogImageUrl" alt="">
						</el-dialog>
					</div>
				</div>
				<div class="btn"><button>提交</button></div>
			</div>
		</div>
	</div>	
</div>
</div>
</template>

<script>
	export default{
		name:"Notice",
		data() {
	      return {
	        dialogImageUrl: '',
	        dialogVisible: false
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
	}
</script>

<style scoped>
	*{
		margin:0;
		padding:0;
	}
	.Notice{
		width: 1200px;
		margin: 0 auto;
		position: relative;
		background: #f2f5f5;
		
	}

	.notice{
		height:1200px;
		width:914px;
		position: absolute;
		top: 0;
		left: 285px;
		/*margin:0 auto;*/
		/*background: #cccccc;*/
		
	}
	.notice_content{
		border:1px solid #CCCCCC;
		border-radius: 10px;
		margin-top:22px;
		height: 923px;
		/*background: red;*/
	}
	.header{
		width:914px;
		height:68px;
	}
	.header h3{
		line-height: 68px;
		font-size:30px;
		color:#353535;
		font-family: "MicrosoftYaHeiLight";
		padding-left:30px;
		text-align: left;
	}
	.content{
		width:914px;
		height:852px;
		border-top:1px solid #CCCCCC;
		background: #F2F2F2;
		font-size:26px;
		color:#353535;
		font-family: "MicrosoftYaHeiLight";
	}
	.content .title{
		height:31px;
		margin-left:85px;
		margin-top:26px;
		text-align: left;
	}
	.title span{
		float: left;
		/*margin-top:0*/
	}
	.title input{
		width:277px;
		height:31px;
		border:1px solid #CCCCCC;
		border-radius: 6px;
		margin-left:38px;
		background: #ffffff;
	}
	.content textarea{
		width:622px;
		height:179px;
		border:1px solid #CCCCCC;
		border-radius: 6px;
		margin-left:-56px;
		background: #ffffff;
		border-radius: 6px;
		/*margin-top:34px;*/
	}
	.content .content1{
		/*height:179px;*/
		margin-left:80px;
		margin-top:34px;
	}
	.content1 span{
		float: left;
	}
	.choose{
		height:118px;
		margin-left:80px;
		margin-top:34px;
		display: flex;
		/*background: red;*/
	}
	.choose .el-upload{
		margin-left:0;
	}
	 .el-upload--picture-card{
		margin: 0 10px !important;
	}
	.choose span{
		float: left;
	}
	.choose1{
		height:42px;
		margin-left:30px;
		margin-top:34px;
		/*background: red;*/
	}
	.choose1 .choose2{
		width:280px;
		height:34px;
		border-radius: 6px;
	}
	.choose1 span{
		float:left;
		font-size:26px;
		color:#353535;
		line-height:42px;
		font-family: "MicrosoftYaHeiLight";
	}
	.Uploadcontainer{
		width:220px;
		height: 148px;
		overflow: hidden;
		margin-left:20px;
  	}
	.btn{
		width:160px;
		height:44px;
		margin:0 auto;
	}
	.btn button{
		width:160px;
		height:44px;
		background:#157efb ;
		color:#ffffff;
		text-align: center;
		border-radius: 6px;
		border:0;
		margin-top:140px;
	}
</style>