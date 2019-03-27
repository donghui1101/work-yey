<template>
	<div class="PatrolLog">
		<div class="patrolLog">
			<div class="sharingTitle">
				<h3>巡园日志</h3>
			</div>
			<div class="patrolLog_content">
				<div class="top">
					<h3>巡园日志</h3>
					<div class="top_right">
					<span>2018.11.08</span>
					<span>部门</span>
					<span>主管</span>
					</div>
				</div>
				<div class="content">
					<div class="content_left">
						<div class="contnet_left_top">
							<h4><img src="../../../static/img/teacher.png"/>教学布置</h4>
							<span>NO.1</span>
						</div>
						<div class="picture">
							<img src="../../../static/img/detail.png">
							<img src="../../../static/img/detail.png">
						</div>
						<div class="explain">
							<h6>说明 :</h6>
							<p>展示栏没有标题名称,月、周计划没有标识</p>
						</div>
						<div class="explain">
							<h6>建议 :</h6>
							<p>展示栏没有标题名称,月、周计划没有标识展示栏没有标题名称,月、周计划没有标识</p>
						</div>
						<div class="explain1">
							<h6>专项跟进 :</h6>
							<p></p>
						</div>
						<div class="explain1">
							<h6>教学助理 :</h6>
							<p></p>
						</div>
					</div>
				</div>
				
				
				
				<div class="content">
					<div class="content_left">
						<div class="contnet_left_top">
							<h4><img src="../../../static/img/betweenclass.png"/>教学布置</h4>
							<span>NO.1</span>
						</div>
						<div class="picture">
							<img src="../../../static/img/detail.png">
							<img src="../../../static/img/detail.png">
						</div>
						<div class="explain">
							<h6>说明 :</h6>
							<p>展示栏没有标题名称,月、周计划没有标识</p>
						</div>
						<div class="explain">
							<h6>建议 :</h6>
							<p>展示栏没有标题名称,月、周计划没有标识展示栏没有标题名称,月、周计划没有标识</p>
						</div>
						<div class="explain1">
							<h6>专项跟进 :</h6>
							<p></p>
						</div>
						<div class="explain1">
							<h6>教学助理 :</h6>
							<p></p>
						</div>
					</div>
				</div>
				
				
				
				<div class="content">
					<div class="content_left">
						<div class="contnet_left_top">
							<h4><img src="../../../static/img/betweenclass.png"/>教学布置</h4>
							<span>NO.1</span>
						</div>
						<div class="picture">
							<img src="../../../static/img/detail.png">
							<img src="../../../static/img/detail.png">
						</div>
						<div class="explain">
							<h6>说明 :</h6>
							<p>展示栏没有标题名称,月、周计划没有标识</p>
						</div>
						<div class="explain">
							<h6>建议 :</h6>
							<p>展示栏没有标题名称,月、周计划没有标识展示栏没有标题名称,月、周计划没有标识</p>
						</div>
						<div class="explain1">
							<h6>专项跟进 :</h6>
							<p></p>
						</div>
						<div class="explain1">
							<h6>教学助理 :</h6>
							<p></p>
						</div>
					</div>
				</div>
				
				
				<div class="content">
					<div class="content_left">
						<div class="contnet_left_top">
							<h4><img src="../../../static/img/betweenclass.png"/>教学布置</h4>
							<span>NO.1</span>
						</div>
						<div class="picture">
							<img src="../../../static/img/detail.png">
							<img src="../../../static/img/detail.png">
						</div>
						<div class="explain">
							<h6>说明 :</h6>
							<p>展示栏没有标题名称,月、周计划没有标识</p>
						</div>
						<div class="explain">
							<h6>建议 :</h6>
							<p>展示栏没有标题名称,月、周计划没有标识展示栏没有标题名称,月、周计划没有标识</p>
						</div>
						<div class="explain1">
							<h6>专项跟进 :</h6>
							<p></p>
						</div>
						<div class="explain1">
							<h6>教学助理 :</h6>
							<p></p>
						</div>
					</div>
				</div>
			</div>
	</div>
	</div>
	
</template>

<script>
	export default{
		name:"patrollog"
	}
</script>

<style scoped>
	*{
		margin:0;
		padding:0;
	}
	.PatrolLog{
		width: 1200px;
		margin: 0 auto;
		position: relative;
		background: #f2f5f5;
		
	}

	.patrolLog{
		/*height:951px;*/
		width:914px;
		position: absolute;
		top: 0;
		left: 285px;
		/*margin:0 auto;*/
		/*background: #cccccc;*/
		
	}
	.patrolLog_content{
		/*border:1px solid #CCCCCC;*/
		border-radius: 10px;
		margin-top:22px;
	}
	/*.patrolLog{
		height:1200px;
		width:914px;
		/*background: red;*/
		/*border:1px solid #CCCCCC;
		border-radius: 10px;
		margin:0  auto;
		position: absolute;
		top:100px;
		left:365px;
	}*/
	.top{
		width:886px;
		height:50px;
		/*background: red;*/
		line-height:50px ;
		padding-left:25px;
		border-radius: 10px;
		border:1px solid #E2E2E2;
	}
	.top h3{
		width:300px;
		float: left;
		text-align: left;
		text-align: left;
		/*background: red;*/
	}
	.top_right{
		float: right;
	}
	.top_right span{
		margin-right:20px;
	}
	.top>span{
		margin-right:30px;
	}
	.content{
		width:445px;
		height:653px;
		border-radius: 10px;
		border:1px solid #E2E2E2;
		float: left;
		margin-left:10px;
		margin-top:15px;
	}
	.content_left{
		width:445px;
	}
	.contnet_left_top{
		height:50px;
		line-height: 50px;
		padding-left: 15px;
		border-bottom:1px solid #E2E2E2;
	}
	.contnet_left_top span{
		float: right;
		font-size:24px;
		margin-right:30px;
	}
	.contnet_left_top h4{
		width:340px;
		height:50px;
		float: left;
		font-size:27px;
		color:#353535;
		text-align: left;
		font-weight: 300;
	}
	.contnet_left_top h4 img{
		width:28px;
		height:28px;
		margin-right:10px;
		display: inline-block;
		vertical-align: middle;
	}
	.contnet_left_top span{
		width:50px;
		height:50px;
		float: right;
		margin-right:10px;
	}
	.content .picture{
		width:450px;
		height:170px;
		/*background: red;*/
		padding-top:10px;
	}
	.content .picture img{
		width: 209px;
		height:154px;
		float: left;
		margin-left:10px;
	}
	.explain{
		height:60px;
		/*background: red;*/
		margin-top:5px;
		padding-left:10px;
	}
	.explain h6{
		height:30px;
		line-height: 30px;
		font-size:20px;
		text-align: left;
	}
	.explain p{
		height:30px;
		line-height: 30px;
		text-align: left;
		font-size:18px;
	}
	.explain1 {
		margin-top:30px;
		/*height:30px;*/
		padding-left:10px;
		/*line-height: 30px;*/
		font-size:20px;
	}
	.explain1 h6{
		height:30px;
		line-height: 30px;
		font-size:20px;
		text-align: left;
	}
</style>