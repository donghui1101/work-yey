<template>
	<div class="Application">
		<div class="application">
			<div class="sharingTitle">
				<h3>经营</h3>
			</div>
			<div class="application_content">
				<div class="header">
					<h3>工作申请</h3>
				</div>
				<div class="content">
					<div class="title"><span>事项 :</span><input type="text"></div>
					<div class="content1">
						<span>描述 :</span>
						<textarea></textarea>
					</div>
					<div class="choose">
						<span>添加附件:</span>
						<div class="Uploadcontainer">
							<el-upload
							  class="upload-file"
							  drag
							  :action="doUpload"
							  :before-upload="beforeUpload"
							  ref="newupload"
							  multiple
							  :auto-upload="false">
							  <i class="el-icon-upload"></i>
							  <div class="el-upload__text">将文件拖到此处，或<em>点击上传</em></div>
							</el-upload>
						</div>
					</div>
					<div class="examine">
						<span>审批人 :</span>
						<span class="name">xxx</span>
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
		name:"Application",
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
	.Application{
		width: 1200px;
		margin: 0 auto;
		position: relative;
		background: #f2f5f5;
		
	}

	.application{
		height:1200px;
		width:914px;
		position: absolute;
		top: 0;
		left: 285px;
		/*margin:0 auto;*/
		/*background: #cccccc;*/
		
	}
	.application_content{
		border:1px solid #CCCCCC;
		border-radius: 10px;
		margin-top:22px;
		height: 922px;
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
		margin-left:38px;
		background: #ffffff;
		border-radius: 6px;
		/*margin-top:34px;*/
	}
	.content .content1{
		/*height:179px;*/
		margin-left:80px;
		margin-top:34px;
		text-align: left;
	}
	.content1 span{
		float: left;
		height:30px;
		margin-top:0;
	}
	.choose{
		height:150px;
		margin-left:30px;
		margin-top:34px;
		text-align: left;
		/*background: red;*/
	}
	.choose .choose1{
		width:280px;
		height:34px;
		border-radius: 6px;
		padding-left:10px;
		margin-top:0px;
		margin-left:38px;
	}
	.choose span{
		float:left;
		font-size:26px;
		color:#353535;
		line-height:42px;
		margin-right:42px;
		font-family: "MicrosoftYaHeiLight";
	}
	.choose .Uploadcontainer{
		width:220px;
		height: 148px;
		overflow: hidden;
		margin-left:20px;
  	}
	.examine{
		width:846px;
		background: #F2F2F2;
		font-size:26px;
		color:#353535;
		font-family: "MicrosoftYaHeiLight";
		margin-left:68px;
		text-align: left;
		margin-top:30px;
	}
	.examine .name{
		margin-left:15px;
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