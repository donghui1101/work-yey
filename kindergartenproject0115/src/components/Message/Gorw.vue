<template>
	<div class="Gorw">
		<div class="gorw">
			<div class="sharingTitle">
				<h3>经营</h3>
			</div>
			<div class="gorw_content">
				<div class="header">
					<h3>工作任务</h3>
				</div>
				<div class="content">
					<div class="title"><span>标题 :</span><input type="text"></div>
					<div class="content1">
						<span>内容 :</span>
						<textarea></textarea>
					</div>
					<div class="choose">
						<span>通知选择 :</span>
						<select name="" class="choose1">
							<option value="1">全部</option>
							<option value="2"></option>
							<option value="3"></option>
							<option value="4"></option>
						</select>
					</div>
					<div class="btn"><button>提交</button></div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default{
		name:"gorw",
		data() {
	      return {
	        
	      }
    	}
  	}
</script>

<style scoped>
	*{
		margin:0;
		padding:0;
	}
	.Gorw{
		width: 1200px;
		margin: 0 auto;
		position: relative;
		background: #f2f5f5;
		
	}

	.gorw{
		height:1200px;
		width:914px;
		position: absolute;
		top: 0;
		left: 285px;
		/*margin:0 auto;*/
		/*background: #cccccc;*/
		
	}
	.gorw_content{
		border:1px solid #CCCCCC;
		border-radius: 10px;
		margin-top:22px;
		height: 921px;
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
		height:850px;
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
		height:42px;
		margin-left:30px;
		margin-top:34px;
		/*background: red;*/
	}
	.choose .choose1{
		width:280px;
		height:34px;
		border-radius: 6px;
		padding-left:10px;
		margin-top:0px;
		margin-left:45px;
	}
	.choose span{
		float:left;
		font-size:26px;
		color:#353535;
		line-height:42px;
		font-family: "MicrosoftYaHeiLight";
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