<template>
	<div class="ReplaceCai">
		<div class="replaceCai">
			<div class="sharingTitle">
				<h3>菜品管理</h3>
			</div>
			<div class="replaceCai_bottom">
			<div class="header">
				<h3>替换菜品</h3>
			</div>
			<div class="top">
				<div class="data">111</div>
				<div class="replace">确认替换</div>
			</div>  
			<div class="change">
				<ul>
					<li>星期一</li>
					<li>星期二</li>
					<li>星期三</li>
					<li>星期四</li>
					<li>星期五</li>
				</ul>
				<div class="content">
					<div class="moring">
						<h3>早餐食谱</h3>
						<div class="moring1">
							<img  src="../../../static/img/food1.png"/>
							<div class="moring1_bottom">
								<span>米饭</span>
								<a href="javascript:;">单个替换</a>
							</div>
						</div>
						<div class="moring1">
							<img  src="../../../static/img/food1.png"/>
							<div class="moring1_bottom">
								<span>米饭</span>
								<a href="javascript:;">单个替换</a>
							</div>
						</div>
						<div class="moring1">
							<img  src="../../../static/img/food1.png"/>
							<div class="moring1_bottom">
								<span>米饭</span>
								<a href="javascript:;">单个替换</a>
							</div>
						</div>
						<div class="moring1">
							<img  src="../../../static/img/food1.png"/>
							<div class="moring1_bottom">
								<span>米饭</span>
								<a href="javascript:;">单个替换</a>
							</div>
						</div>
					</div>
					
					
					
					<div class="moring">
						<h3>早点食谱</h3>
						<div class="moring1">
							<img  src="../../../static/img/food1.png"/>
							<div class="moring1_bottom">
								<span>米饭</span>
								<a href="javascript:;">单个替换</a>
							</div>
						</div>
						<div class="moring1">
							<img  src="../../../static/img/food1.png"/>
							<div class="moring1_bottom">
								<span>米饭</span>
								<a href="javascript:;">单个替换</a>
							</div>
						</div>
						<div class="moring1">
							<img  src="../../../static/img/food1.png"/>
							<div class="moring1_bottom">
								<span>米饭</span>
								<a href="javascript:;">单个替换</a>
							</div>
						</div>
						<div class="moring1">
							<img  src="../../../static/img/food1.png"/>
							<div class="moring1_bottom">
								<span>米饭</span>
								<a href="javascript:;">单个替换</a>
							</div>
						</div>
					</div>
					
					
					
					
					<div class="moring">
						<h3>午餐食谱</h3>
						<div class="moring1">
							<img  src="../../../static/img/food1.png"/>
							<div class="moring1_bottom">
								<span>米饭</span>
								<a href="javascript:;">单个替换</a>
							</div>
						</div>
						<div class="moring1">
							<img  src="../../../static/img/food1.png"/>
							<div class="moring1_bottom">
								<span>米饭</span>
								<a href="javascript:;">单个替换</a>
							</div>
						</div>
						<div class="moring1">
							<img  src="../../../static/img/food1.png"/>
							<div class="moring1_bottom">
								<span>米饭</span>
								<a href="javascript:;">单个替换</a>
							</div>
						</div>
						<div class="moring1">
							<img  src="../../../static/img/food1.png"/>
							<div class="moring1_bottom">
								<span>米饭</span>
								<a href="javascript:;">单个替换</a>
							</div>
						</div>
					</div>
					
					
					
					<div class="moring">
						<h3>午点食谱</h3>
						<div class="moring1">
							<img  src="../../../static/img/food1.png"/>
							<div class="moring1_bottom">
								<span>米饭</span>
								<a href="javascript:;">单个替换</a>
							</div>
						</div>
						<div class="moring1">
							<img  src="../../../static/img/food1.png"/>
							<div class="moring1_bottom">
								<span>米饭</span>
								<a href="javascript:;">单个替换</a>
							</div>
						</div>
						<div class="moring1">
							<img  src="../../../static/img/food1.png"/>
							<div class="moring1_bottom">
								<span>米饭</span>
								<a href="javascript:;">单个替换</a>
							</div>
						</div>
						<div class="moring1">
							<img  src="../../../static/img/food1.png"/>
							<div class="moring1_bottom">
								<span>米饭</span>
								<a href="javascript:;">单个替换</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</template>

<script>
	export default{
		name:"replace-cai"
	}
</script>

<style scoped>
	*{
		margin:0;
		padding:0;
	}
	.ReplaceCai{
		width: 1200px;
		margin: 0 auto;
		position: relative;
		background: #f2f5f5;
		
	}
	.replaceCai{
		height:951px;
		width:912px;
		position: absolute;
		top: 0;
		left: 285px;
		
	}
	.replaceCai_bottom{
		/*height:500px;*/
		/*border:1px solid #CCCCCC;*/
		/*border-radius: 10px;*/
		margin-top:20px;
		background: #fafafa;
	}
	.header{
		height:30px;
		text-align: left;
		line-height: 30px;
		text-indent: 15px;
	}
	.header h3{
		color:#000000;
	}
	.top{
		height:35px;
		line-height: 35px;
		background: #A1CB46;
	}
	.top .data{
		float:left;
	}
	.top .replace{
		float:right;
		color:#ffffff;
		margin-right:15px;
	}
	.replaceCai .content{
		width: 910px;
		height:1200px;
		/*background: red;*/
	}
	.change ul{
		height:35px;
		line-height: 35px;
		border:1px solid #cccccc;
		display: flex;
		justify-content: space-around;
        align-items: center;
	}
	.change ul li{
		float: left;
		color:#000000;
	}
	.moring{
		width:912px;
		height:266px;
		padding-left:8px;
		/*padding-right:20px;*/
		margin-top:25px;
		/*background: orange;*/
	}
	.moring h3{
		height:40px;
		color:#000000;
		font-size:20px;
		line-height: 40px;
		padding-left:20px;
		background: #FFFFFF;
		text-align: left;
		margin-bottom:5px;
	}
	.moring1{
		width:210px;
		height:233px;
		float: left;
		background: #F2F2F2;
		margin-right:15px;
		text-align: center;
		background: #ffffff;
		box-shadow: 10px 10px 10px #F2F2F2, 
	}
	.moring1_bottom{
		padding-left:20px;
		padding-right:20px;
		margin-top:20px;
	}
	.moring1 img{
		display: inline-block;
		width:187px;
		height:160px;
	}
	.moring1 span{
		float: left;
	}
	.moring1 a{
		width:80px;
		height:20px;
		line-height: 20px;
		border-radius: 10px;
		color:#ffffff;
		float: right;
		font-size:12px;
		background: #A1CB46;
		text-decoration: none;
	}
</style>