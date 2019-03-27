<template>
	<el-dialog
	  :visible.sync="MoneycenterDialogVisible"
	  center
	   width="460px"
	   height="608px">
	<div class="averageMark">
			<h3>园所对班级(定义金额)</h3>
			<div class="average">
				<div class="classmates">
					<span>选择渠道</span>
					<div>拉取财务选择的</div>
					<!--<input type="text" placeholder="拉取财务选择的" class="channel" readonly  unselectable="on"/>-->
				</div>
				<div class="classmates">
					<span>均摊纬度</span>
					<div>如果平均会自动选择班级</div>
					<!--<input type="text" placeholder="如果平均会自动选择班级" class="Latitude" readonly  unselectable="on"/>-->
				</div>
				<div class="classmates">
					<span>支出项</span>
					<div>如果平均会自动选择班级</div>
					<!--<input type="text" placeholder="如果平均会自动选择班级" class="expenses" readonly  unselectable="on"/>-->
				</div>
				<div class="classmates">
					<span>常规</span>
					<div>如果平均会自动选择班级</div>
					<!--<input type="text" placeholder="如果平均会自动选择班级" class="conventional" readonly  unselectable="on"/>-->
				</div>
				<div class="classmates">
					<span>均摊(总额)</span>
					<div>如果平均会自动选择班级</div>
					<!--<input type="text" placeholder="如果平均会自动选择班级" class="share" readonly  unselectable="on"/>-->
				</div>
				<div class="classmates">
					<span>均摊时间</span>
					<div>如果平均会自动选择班级</div>
					<!--<input type="text" placeholder="如果平均会自动选择班级" class="shareTime" readonly  unselectable="on"/>-->
				</div>
				<div class="classmates">
					<span>均摊(月均摊)</span>
					<div>如果平均会自动选择班级</div>
					<!--<input type="text" placeholder="如果平均会自动选择班级" class="monthShare" readonly  unselectable="on"/>-->
				</div>
				<div class="chooseClass">
					<span>选择班级</span>
					<div>
						<div class="choose">
							<input type="checkbox" value=""/>小一班
							<input type="text" value=""/>
						</div>
						<div class="choose">
							<input type="checkbox" value=""/>小一班
							<input type="text" value=""/>
						</div>
					</div>
					<div>
						<div class="choose">
							<input type="checkbox" value=""/>小一班
							<input type="text" value=""/>
						</div>
						<div class="choose">
							<input type="checkbox" value=""/>小一班
							<input type="text" value=""/>
						</div>
					</div>
					<div>
						<div class="choose">
							<input type="checkbox" value=""/>小一班
							<input type="text" value=""/>
						</div>
						<div class="choose">
							<input type="checkbox" value=""/>小一班
							<input type="text" value=""/>
						</div>
					</div>
		  		<!--<el-checkbox-group v-model="checkList">
				    <el-checkbox label="小一班"></el-checkbox>
				    <el-checkbox label="小一班"></el-checkbox>
		  		</el-checkbox-group>
		  		<el-checkbox-group v-model="checkList">
				    <el-checkbox label="小一班">
				    	<!--<input type="text" value="" />
				    </el-checkbox>
				    
				    <el-checkbox label="小一班">
				    	<!--<input type="text" value="" />
				    </el-checkbox>
				    
		  		</el-checkbox-group>-->
				</div>
				<div class="classmates">
					<span>添加人</span>
					<div>如果平均会自动选择班级</div>
					<!--<input type="text" placeholder="如果平均会自动选择班级" class="addName" readonly  unselectable="on"/>-->
				</div>
				<div class="classmates">
					<span>添加时间</span>
					<div>如果平均会自动选择班级</div>
					<!--<input type="text" placeholder="如果平均会自动选择班级" class="addTime" readonly  unselectable="on"/>-->
				</div>
				<button type="button" class="averageSubmit">提交</button>
			</div>
		</div>
</el-dialog>
</template>

<script>
	import axios from 'axios';
	import Cookies from 'js-cookie' 
	export default{
		name:"moneyMark",
		props:['MoneycenterDialogVisible'],
		data(){
			return{
				list2:'',
				checkList:''
			}
		},
	  	methods:{
	  		getListb() {
			     var cookieId = Cookies.get("cookieId");
			     axios.post("api/index.php/api/Custody/info", {
			       admin_id: cookieId
			     })
			       .then(({data})=>{
  				console.log(data,6666);
  				this.list2=data.data;
  			})
		   }
  		},
	  	created(){
	  		this.getListb();
	  	}
	}
</script>

<style scoped>
	.averageMark{
	width:400px ;
	height:608px;
	box-sizing: border-box;
	/*background: red;*/
}
.averageMark h3{
	font-weight:900;
	text-align: center;
}
.classmates{
	display: flex;
	margin-top: 20px;
}
.average{
	width: 100%;
	/*padding:20px 35px 35px 20px;*/
	border:1px solid #000000;
}
.classmates span{
	width: 100px;
	height: 30px;
	line-height: 20px;
	display: inline-block;
	/*border: 1px solid red;*/
	color: #000000;
	font-weight: 700;
	text-align: right;
}
.classmates div{
	margin-left: 20px;
	width: 200px;
	height: 20px;
	border: 1px solid #000000;
	color: #000000;
	text-align: center;
}
.average button{
	width: 120px;
	height: 30px;
	margin-top: 20px;
	margin-left: 125px;
	background: green;
	border: 0;
	border-radius: 5px;
	font-size: 20px;
	color: #ffffff;
}
.el-dialog .el-dialog--center{
		width:400px !important;
		height:650px !important;
		padding: 0;
	}
	.el-dialog__body{
		padding: 0 !important;
	}
</style>