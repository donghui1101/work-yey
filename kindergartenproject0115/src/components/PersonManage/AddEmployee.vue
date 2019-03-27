<template>
	<div class="addEmployee">
		<div class="addemployee">
			<div class="header">
				<h4>添加员工</h4>
			</div>
			<div class="school">
				<ul class="park">
					<h3>所属园区:</h3>
					<li class="one">全部</li>
					<li>星光幼儿园</li>
					<li>第一幼儿园</li>
					<li>第一幼儿园</li>
					<li>第一幼儿园</li>
					<li>第一幼儿园</li>
				</ul>
				<ul class="park">
					<h3>所属班级:</h3>
					<li class="one">全部</li>
					<li>小一班</li>
					<li>小一班</li>
					<li>小一班</li>
					<li>小一班</li>
					<li>小一班</li>
				</ul>
			</div>
		</div>
		<div class="employeeManage">
			<h3>员工管理</h3>
			<div class="employeemessage">
				<h4>员工基本信息</h4>
				<div class="employeemessage_top">
					<div class="employeemessage_top1"><span>姓名</span><input type="text" style="width:140px;"/></div>
					<div class="employeemessage_top1" style="width:280px;">
						<span>出生日期</span>
						<div class="date">
							<input type="text"/></div>
						</div>
					<div class="employeemessage_top1" style="margin-left:50px;"><span>性别</span>
						<el-checkbox-group v-model="checkList">
				    		<el-checkbox label="男">男</el-checkbox>
				    		<el-checkbox label="女">女</el-checkbox>
  						</el-checkbox-group>
					</div>
				</div>
				<div class="employeemessage_top">
					<div class="employeemessage_top1" style="width:380px;"><span>联系方式</span><input type="text" style="width:270px;"/></div>
					<div class="employeemessage_top1" style="width:472px;">
						<span>家庭住址</span>
						<input type="text" style="width:300px;"/>
				</div>
				<div class="employeemessage_top">
					<span>学历</span>
					<el-select v-model="value" placeholder="请选择" style="height: 40px;">
				    <el-option
				      v-for="item in options"
				      :key="item.value"
				      :label="item.label"
				      :value="item.value">
				    </el-option>
				  </el-select>
				</div>
			</div>
		</div>
	</div>
</div>
</template>

<script>
//	import FllowMark from '@/components/StudyFile/FllowMark'
	export default{
		name:"worklog",
		data() {
	      return {
	         checkList: ['复选框 A'],
	         options: [{
	          value: '选项1',
	          label: '黄金糕'
	        }, {
	          value: '选项2',
	          label: '双皮奶'
	        }, {
	          value: '选项3',
	          label: '蚵仔煎'
	        }, {
	          value: '选项4',
	          label: '龙须面'
	        }, {
	          value: '选项5',
	          label: '北京烤鸭'
	        }],
//	        value: ''
		      };
    	},
		methods:{
//			open(){
//				var btn1=document.getElementsByClassName('btn1');
//	    		var mark=document.getElementsByClassName('mark');
//			    btn1.click=function(){
//		            if(mark.style.display=='block'){ // == 判断div.display是否为显示
//		                    mark.style.display='none'; //= 赋值也可了解成改变
//		                }
//		                else{
//		                  mark.style.display='block';
//		             }
//	        	}
//			}
}
//	components:{
//		FllowMark
//	},

}
</script>

<style scoped>
	*{
		margin:0;
		padding:0;
	}
	.addEmployee{
		height:1200px;
		width:914px;
		/*background: red;*/
		border:1px solid #CCCCCC;
		border-radius: 10px;
		margin:0  auto;
		position: absolute;
		top:100px;
		left:365px;
	}
	.addemployee{
		height:210px;
		background: red;
		border:1px solid #CCCCCC;
		border-radius: 10px;
	}
	.header{
		width:914px;
		height:68px;
		line-height: 68px;
		border-bottom:1px solid #cccccc;
	}
	.header h4{
		line-height: 68px;
		font-size:30px;
		color:#353535;
		width:;
		float: left;
		font-family: "MicrosoftYaHeiLight";
		padding-left:15px;
	}
	.header span{
		float: right;
		margin-right:20px;
		font-size:20px;
		color:#9BC248;
	}
	.school{
		width: 100%;
		/*height: 180px;*/
	}
	.school h5{
		height:50px;
		line-height: 50px;
		font-size:30px;
		color:#353535;
	}
	.park{
		overflow: hidden;
		line-height: 40px;
		color: #353535;
		margin-top: 25px;
	}
	.park>h3{
		display: inline-block;
		font-size: 26px;
		float: left;
		padding:0 15px 0 10px;	
		font-weight: normal;
	}
	.park>li{
		float: left;
		font-size: 20px;
		padding:0 15px 0 10px;	
	}
	.employeeManage{
		height:600px;
		background: pink;
		border:1px solid #CCCCCC;
		border-radius: 10px;
		margin-top:15px;
		
	}
	.employeeManage h3{
		height:60px;
		line-height: 60px;
		/*background: red;*/
		border-bottom:1px solid #BFBFBF;
		padding-left:15px;
		font-size:30px;
	}
	.employeemessage{
		height: 220px;
		/*background: red;*/
		padding-left:60px;
	}
	.employeemessage h4{
		font-size:18px;
		height:20px;
		line-height: 20px;
		border-left:2px solid #9BC248;
		padding-left:15px;
		margin:20px 0;
	}
	.employeemessage_top{
		width:100%;
		height:40px;
		margin-top:20px;
		/*background: red;*/
	}
	.employeemessage_top1{
		width:100%;
		/*background: blue;*/
		width:200px;
		float: left;
		/*margin-left:10px;*/
		height:38px;
		line-height:38px;
		/*padding-left:60px;*/ 
	}
	.employeemessage_top1 span{
		float: left;
	}
	.employeemessage_top1 input{
		width:200px;
		height:38px;
		background: none;
		border-radius: 5px;
		border:0;
		border:1px solid #D9D9D9;
		margin-left:10px;
		font-size:16px;
	}
	.employeemessage_top1 .date{
		float: left;
	}
	.employeemessage_top span{
		float: left;
	}
	.el-input__inner{
		width:200px;
		height:50px;
		background: none;
		height: 40px;
	}
	.el-input .el-input--suffix{
		display: block;
		height:40px;
		margin-top:68px;
	}
</style>