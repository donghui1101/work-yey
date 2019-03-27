<template>
	<el-dialog
	  :visible.sync="AveragecenterDialogVisible"
	  center
	   width="460px"
	   height="608px"
	  	:before-close="handleClose"
	   >
	<div class="averageMark">
			<h3>园所对班级(平均)</h3>
			<div class="average">
				<div class="classmates" v-for="item in list2" :key="item.class_id">
					<span>选择班级</span>
					<div>{{item.class_name}}</div>
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
		name:"averageMark",
		props:['AveragecenterDialogVisible'],
		data(){
			return{
				list2:'',
			}
		},
	  	methods:{
	  		handleClose(done) {
	        this.$confirm('确认关闭？')
	          .then(_ => {
	            done();
	          })
	          .catch(_ => {});
	      },
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