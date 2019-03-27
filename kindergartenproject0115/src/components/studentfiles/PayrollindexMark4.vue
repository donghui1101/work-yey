<template>
		<el-dialog
	  :visible.sync="PayrollindexMarkDialogVisible"
	  center
	   width="400px"
	   height="300px">
	    <div class="marks">
	    	<h3>审批</h3>
			<div class="attendance_bottom">
				<div class="attendance_top">
					<span>标题</span>
					<input type="text" />
				</div>
				<div class="attendance_center">
					<span>备注</span>
					<textarea></textarea>
				</div>
				<div class="attendance_right">
					<span>选择审批人</span>
					<select name="">
						<option value="">财务</option>
						<option value="">xxx</option>
					</select>
					<select name="">
						<option value="">财务</option>
						<option value="">xxx</option>
					</select>
				</div>
			</div>
			<span slot="footer" class="dialog-footer">
		    <el-button @click="$emit('update:PayrollindexMarkDialogVisible',false)">取 消</el-button>
		    <el-button type="primary" @click="$emit('update:PayrollindexMarkDialogVisible',false)">提交</el-button>
		</span>
	</div>
</el-dialog>
</template>

<script>
	export default {
	name:"payrollindexmark4",
	props:['PayrollindexMarkDialogVisible'],
    data() {
      return{
//    	console.log(1)
      }
    }
  };
</script>

<style scoped>
	.marks{
		width:400px;
		height:300px;
		border-radius: 5px;
		/*padding-left: 20px;*/
	}
	.marks h3{
		height: 40px;
		line-height:40px;
		font-size: 20px;
		text-align: center;
		color: #000000;
		/*background: red;*/
	}
	.marks .attendance_bottom{
		height:200px;
		/*background: blue;*/
		padding-left:40px;
		/*margin-top:15px;*/
	}
	.attendance_top{
		height:30px;
		/*background: red;*/
		line-height: 30px;
	}
	.attendance_top span{
		float: left;
		margin-right:30px;
	}
	.attendance_top input{
		width:230px;
		height:20px;
	}
	.attendance_center{
		height:120px;
		margin-top:15px;
	}
	.attendance_center span{  
		float: left;
		width:40px;
		height:30px;
		margin-top:0;
	}
	.attendance_center textarea{
		width:280px;
		height:100px;
		/*margin-top:0;*/
		margin-left:18px;
	}
	.attendance_right{
		height:30px;
		/*background: #008000;*/
		line-height: 30px;
	}
	.attendance_right span{
		float: left;
	}
	.attendance_right select{
		width:80px;
		height:20px;
		margin-left:20px;
	}
	.dialog-footer{
		padding-left:120px;
		text-align: center;
		/*margin-top:20px;*/
	}
	.el-button .el-button--default{
		width: 100px !important;
		text-align: center;
		margin-left:20px;
	}
	
</style>