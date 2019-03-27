<template>
	<!--<div>-->
		<el-dialog
	  :visible.sync="centerDialogVisible"
	  center
	   width="365px"
	   height="365px">
	    <div class="marks">
			<h3>跟进痕迹</h3>
			<div class="enter">入园意向</div>
			<ul>
				<li>强烈</li>
				<li>正常</li>
				<li>放弃园所</li>
			</ul>
			<h4>备注</h4>
			<div class="remarks">
				<textarea></textarea>
			</div>
			<span slot="footer" class="dialog-footer">
		    <el-button @click="$emit('update:centerDialogVisible',false)">取 消</el-button>
		    <el-button type="primary" @click="$emit('update:centerDialogVisible',false)">确 定</el-button>
		</span>
	</div>
</el-dialog>
<!--</div>-->
</template>

<script>
	export default {
	name:"fllowmark",
	props:['centerDialogVisible'],
    data() {
      return{
//    	console.log(1)
      }
    }
  };
</script>

<style scoped>
	.marks{
		width:365px;
		height:365px;
		border-radius: 5px;
		/*background: red;*/
		/*display: none;*/
		/*position: absolute;*/
	}
	.marks h3{
		text-align: center;
		height:60px;
		line-height: 60px;
		/*background: blue;*/
		font-size:25px;
	}
	.marks .enter{
		height:40px;
		padding-left:30px;
		font-size:26px;
		color:#222222;
	}
	.marks ul{
		font-size:22px;
		color:#363636;
		height:40px;
		line-height: 40px;
		/*background: orange;*/
		padding-left:30px;
	}
	.marks ul li{
		float: left;
		margin-left:30px;
	}
	.marks h4{
		height:35px;
		padding-left:30px;
		font-size:26px;
		color:#222222;
		font-weight: 100;
	}
	.remarks{
		margin-left:78px;
		height:150px;
	}
	.marks textarea{
		width:200px;
		height:130px;
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