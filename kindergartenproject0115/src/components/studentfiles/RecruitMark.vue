<template>
		<el-dialog
	  :visible.sync="RecruitMarkDialogVisible"
	  center
	   width="600px"
	   height="300px">
	    <div class="marks">
	    	<h3>备注</h3>
			<div class="attendance_bottom">
				<textarea></textarea>
			</div>
			<span slot="footer" class="dialog-footer">
		    <el-button type="primary" @click="$emit('update:RecruitMarkDialogVisible',false)">保存</el-button>
		</span>
	</div>
</el-dialog>
</template>

<script>
	export default {
	name:"recruitmark",
	props:['RecruitMarkDialogVisible'],
    data() {
      return{
//    	console.log(1)
      }
    }
  };
</script>

<style scoped>
	.marks{
		width:580px;
		height:300px;
		border-radius: 5px;
		padding-left: 20px;
	}
	.marks h3{
		height: 40px;
		line-height:40px;
		font-size: 20px;
		color: #000000;
		/*background: red;*/
	}
	.marks .attendance_bottom{
		height:200px;
		/*background: blue;*/
		/*margin-top:15px;*/
	}
	.marks .attendance_bottom textarea{
		width:500px;
		height:180px;
		margin-left:40px;
	}
	.dialog-footer{
		padding-left:240px;
		text-align: center;
		/*margin-top:20px;*/
	}
	.el-button .el-button--default{
		width: 100px !important;
		text-align: center;
		margin-left:20px;
	}
	
</style>