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
				<div class="title"><span>标题 :</span><input type="text" v-model="formObj.d_title"></div>
				<div class="content1">
					<span>内容 :</span>
					<textarea v-model="formObj.d_desc"></textarea>
				</div>
				<div class="choose">
					<span>图片:</span>
					<div class="Uploadcontainer">
						<div class="fileimg">
							     <span>
							           <i>+</i>
							     </span>
							     <input class="file_img" 
									type="file" 
									v-on:change="uploadFile($event)" 
									name="fileTrans" 
									ref="file" 
									value="" 
									accept="image/gif, 
									image/jpeg, image/png"/> 
								<img class="preview" :src="imageUrl"/>
						</div>
					</div>
					<div class="Uploadcontainer">
						<div class="fileimg">
							     <span>
							           <i>+</i>
							     </span>
							     <input class="file_img" 
									type="file" 
									v-on:change="uploadFile($event)" 
									name="fileTrans" 
									ref="file" 
									value="" 
									accept="image/gif, 
									image/jpeg, image/png"/> 
									     <img class="preview" :src="imageUrl"/>
							</div>
					</div>
					<div class="Uploadcontainer">
						<div class="fileimg">
							     <span>
							           <i>+</i>
							     </span>
							     <input class="file_img" 
									type="file" 
									v-on:change="uploadFile($event)" 
									name="fileTrans" 
									ref="file" 
									value="" 
									accept="image/gif, 
									image/jpeg, image/png"/> 
									     <img class="preview" :src="imageUrl"/>
									</div>
					</div>
				</div>
				<div class="choose1">
							<span>通知选择 :</span>
							<select name="" class="choose2" v-model="formObj.gardent_id">
								<option value="1" v-for="item in JurisdictionList">{{item.addr_id}}</option>
							</select>
							<select name="" class="choose2" v-model="formObj.class_id">
								<option value="1" v-for="item in JurisdictionList">{{item.id}}</option>
							</select>
							<select name="" class="choose2" v-model="formObj.student_id">
								<option value="1" v-for="item in JurisdictionList">{{item.p_id}}</option>
							</select>
						</div>
				<div class="btn"><button>提交</button></div>
			</div>
		</div>
	</div>	
</div>
</div>
</template>

<script>
	import Cookies from 'js-cookie'
  import axios from 'axios';
	export default{
		name:"Notice",
		data() {
	      return {
	        imageUrl: '',
	        dialogVisible: false,
	        JurisdictionList:[],
	        formObj:{
	        	inform_title:'',
	        	inform_desc:'',
	        	inform_photo:'',
	        	gardent_id:'',
	        	class_id:'',
	        	student_id:''
	        }
	      };
    	},
//  	api/Notic/addDynamic
	    methods: {
	      handleRemove(file, fileList) {
	        console.log(file, fileList);
	      },
	      handlePictureCardPreview(file) {
	        this.dialogImageUrl = file.url;
	        this.dialogVisible = true;
	      },
	      uploadFile(ev){
	           var that = this;
	           const file = document.querySelector('.file_img');
	           const fileObj = file.files[0];
	           const windowURL = window.URL || window.webkitURL;
	           const img = document.querySelector('.preview');
	                if(file && fileObj) {
	                  const dataURl = windowURL.createObjectURL(fileObj);
	                  this.imageUrl = dataURl;
	                  console.log(document.querySelector('.file_img').files[0])
									} 
					},
					uploadData(){
	      	this.$refs['fromline'].resetFields();
	      	var cookieId = Cookies.get("cookieId");
	      	axios.post("api/index.php/api/Notic/add_notic",{
	      		admin_id: cookieId,
	      		inform_title:this.formObj.inform_title,
	        	inform_desc:this.formObj.inform_desc,
	        	inform_photo:document.querySelector('.file_img').files[0],
	        	gardent_id:this.formObj.gardent_id,
	        	student_id:this.formObj.student_id,
	        	class_id:this.formObj.class_id
	      	}).then(({data})=>{
	      		console.log(data);
	      	})
	      },
	       //联动
	      Jurisdiction(){
	      	var cookieId = Cookies.get("cookieId");
	      	axios.post("api/index.php/api/Notic/Jurisdiction",{
	      		admin_id: cookieId,
	      	}).then(({data})=>{
	      		this.JurisdictionList=data.data;
	      		console.log(data,666);
	      	})
	      }
	    },
	    created(){
	    	this.Jurisdiction();
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
		margin-left:45px;
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
		width:180px;
		height:34px;
		border-radius: 6px;
		padding-left:10px;
		margin-top:0px;
		margin-left:36px;
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
	.fileimg{
        position: relative;
    }
  .fileimg span{
		width: 99px;
		height: 99px;
		display: inline-block;
		box-sizing: border-box;
		position: absolute;
		left: 0;
		top: 0;
		}
  .file_img{
      position: absolute;
      width: 100px;
      height: 100px;
      left: 0;
      top: 0;
      opacity:0;
      z-index: 10;
      border: 0;
  }
  .preview{
      width: 100px;
      height:100px;
      /*border-radius:50%;*/ 
      position: absolute;
      left: 0;
      top: 0;
  }
.fileimg span i{
    font-size: 60px;
    font-weight: bold;
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
    margin:20px 30px;
   }
</style>