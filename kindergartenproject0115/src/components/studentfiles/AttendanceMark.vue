<template>
		
</template>

<script>
	export default {
	name:"attendancemark",
	props:['AttendanceMarkDialogVisible'],
    data() {
      return{
//    	console.log(1)
      }
    }
  };
</script>

<style scoped>
	.marks{
		width:340px;
		height:250px;
		border-radius: 5px;
		/*background: red;*/
		/*display: none;*/
		/*position: absolute;*/
	}
	.marks .attendance{
		/*width:340px;*/
		height:50px;
		line-height: 50px;
		/*background: blue;*/
		padding-left:35px;
	}
	.attendance>span{
		height:50px;
		float: left;
	}
	.attendance .choose{
		line-height: 50px;
		float: left;
		margin-left:20px;
	}
	.attendance .choose input{
		vertical-align: middle;
		/*float: left;*/
	}
	.attendance_bottom{
		height:150px;
		/*background: red;*/
		overflow: hidden;
		margin-bottom:10px;
	}
	.attendance_top{
		height:30px;
		line-height: 30px;
		margin-top:20px;
	}
	.attendance_left{
		float: left;
		margin-left:10px;
	}
	.attendance_left input{
		width:50px;
		height:20px;
		border-radius: 5px;
		border:1px solid #d6d6d6;
	}
	.dialog-footer{
		padding-left:100px;
		text-align: center;
	}
	.el-button .el-button--default{
		text-align: center;
		margin-left:20px;
	}
	
</style>