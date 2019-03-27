<template>
	<div class="employeeproomtion">
		<div class="employeeproomtionContent">
			<div class="sharingTitle">
				<h3>管理</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>员工晋升率</h3>
					<div class="sharingLink">
						<button @click="EmployeepromotionMarkDialogVisible =true">导出</button>
					</div>
				</div>
				<div class="distribution">
					<ul class="park">
						<h3>所属园区:</h3>
						<li class="style">全部</li>
						<li v-for="item in garendList" @click="getPosition(item.id)">{{item.name}}</li>
					</ul>
					<ul class="park">
						<h3>所属职位:</h3>
						<li class="style">全部</li>
						<li v-for="items in positionList">{{items.name}}</li>
					</ul>				
					<div class="sharingTime">
						<div class="sharingDate">
							<span class="demonstration">时间</span>
						    <el-date-picker
						      v-model="value6"
						      type="daterange"
						      range-separator="~"
						      start-placeholder="开始日期"
						      end-placeholder="结束日期">
						    </el-date-picker>
						</div>
						<div class="sharingInput">
							<el-row>
								<el-input
								    placeholder="请输入内容"
								    prefix-icon="el-icon-search"
								    v-model="input21">
								</el-input>
								<el-button class="departureStyle" @click="EmployeePromotion">搜索</el-button>
								<el-button>成长排名</el-button>
								<el-button>所选</el-button>
							</el-row>
						</div>
					</div>
				</div>
				<div class="employeeproomtionTable">
					<table class="sharingTable">
						<tr>
							<th><input type="radio"  /></th>
							<th>编号</th>
							<th>员工姓名</th>
							<th>职务</th>
							<th>所在园区</th>
							<th>状态</th>
							<th>晋升时间</th>
							<th>晋升次数</th>
							<th>操作</th>
						</tr>
						<tr class="sharingTablecolor_one" v-for="item in PromotionList">
							<td><input type="radio"  /></td>
							<td>{{item.staff_id}}</td>
							<td>{{item.staff_name}}</td>
							<td>{{item.position_name}}</td>
							<td>{{item.class_name}}</td>
							<td>{{item.staff_status_name}}</td>
							<td>{{item.promote_time}}</td>
							<td>{{item.promote_number}}</td>
							<td>
								<span class="departure" @click="EmployeepromotionMarkDialogVisible=true,PromotionPosition()">晋升</span>
								<span class="details">详情</span>
							</td>
						</tr>
					</table>
				</div>
				<el-dialog
	  :visible.sync="EmployeepromotionMarkDialogVisible"
	  center
	   width="340px"
	   height="250px">
	    <div class="marks">
	    	<h3>晋升职位</h3>
			<div class="attendance_bottom">
				<div class="attendance_top">
						<span v-for="item in PositionList">{{item.name}}</span>
				</div>
			</div>
			<span slot="footer" class="dialog-footer">
		    <el-button @click="EmployeepromotionMarkDialogVisible=false">取 消</el-button>
		    <el-button type="primary" @click="EmployeepromotionMarkDialogVisible=false">完成</el-button>
		</span>
	</div>
</el-dialog>
			</div>
		</div>
	</div>	
</template>

<script>
import axios from 'axios';
import Cookies from 'js-cookie'
//	import EmployeepromotionMark from '@/components/studentfiles/EmployeepromotionMark'
export default {
  	name: 'employeeproomtion',
  	data () {
    	return {
    		input21:'',
    		garendList:[],
    		positionList:[],
    		PositionList:[],
    		PromotionList:[],
    		EmployeepromotionMarkDialogVisible:false,
    		pickerOptions2: {
	          		shortcuts: [{
	//          		text: '最近一周',
	    				onClick(picker) {
				      	const end = new Date();
				     		const start = new Date();
				     		start.setTime(start.getTime() - 3600 * 1000 * 24 * 7);
				     		picker.$emit('pick', [start, end]);
			    		}
			  		}, {
	//          		text: '最近一个月',
					    onClick(picker) {
					      	const end = new Date();
					      	const start = new Date();
					      	start.setTime(start.getTime() - 3600 * 1000 * 24 * 30);
					      	picker.$emit('pick', [start, end]);
					    }
					}, {
	//          		text: '最近三个月',
	    				onClick(picker) {
	      					const end = new Date();
	      					const start = new Date();
	     		 			start.setTime(start.getTime() - 3600 * 1000 * 24 * 90);
	      					picker.$emit('pick', [start, end]);
	    				}
	  				}]
				},
				value6: ''
    	}
  	}, 
  	methods:{
  		//获取所属园区/所属职位
			getGraden(){
				var cookieId = Cookies.get("cookieId");
				axios.post("/api/index.php/api/Personne/Permissions",{
					admin_id: cookieId
				}).then(({data})=>{
					this.garendList=data.data;
					this.garendList.map((current,index) => {
    				this.gardent_id=current.id
    			})
					console.log(data,8888);
					console.log(this.gardent_id,87)
				})
			},
			//获取所属职位
			getPosition(id){
				var cookieId = Cookies.get("cookieId");
				axios.post("/api/index.php/api/Personne/Permissions",{
					admin_id: cookieId,
					garden_id:id
				}).then(({data})=>{
					this.positionList=data.data;
					this.positionList.map((current,index) => {
    				this.post_id=current.id
    			})
					console.log(data,88889999);
				})
			},
			//获取员工晋升统计
			EmployeePromotion(){
				var start=this.value6[0];
				var end=this.value6[1];
				var cookieId = Cookies.get("cookieId");
				axios.post("/api/index.php/api/Personne/promotion",{
					admin_id: cookieId,
					gardent_id:this.gardent_id,
					post_id:this.post_id,
					start:start,
					end:end,
					name:this.input21
				}).then(({data})=>{
					this.PromotionList=data.data;
					console.log(data,8888999911112222);
				})
			},
//			获取晋升职位
			PromotionPosition(){
				var cookieId = Cookies.get("cookieId");
				axios.post("/api/index.php/api/Personne/position",{
					admin_id: cookieId
				}).then(({data})=>{
					this.PositionList=data.data;
					console.log(data,8888999911112222);
				})
			}
  	},
  	created(){
  		this.getGraden();
  		this.EmployeePromotion();
  	}
}
</script>

<style scoped lang="scss">
  	 /*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
	.employeeproomtion{
		width:1200px;
		margin: 0 auto;
		position: relative;
		.employeeproomtionContent{
			width: 912px;
			position: absolute;
			top: 0;
			left: 285px;
			.sharingLink{
				a{
					color:#9BC248;
				}
			}
			.employeeproomtionTable{
				width: 100%;
				table{
					width:885px;
					margin: 15px auto;
				}
			}
		}
	}
</style>
<style>
	.sharingTablecolor_one span{
		cursor: pointer;
	}
	.distribution li{
		cursor: pointer;
	}
	.employeeproomtion .el-date-editor--daterange{
		height: 32px;
		margin-top: 10px;
	}
	.employeeproomtion .el-input{
		width: 180px;
		height: 32px;
	}
	.employeeproomtion .el-input__inner{
		height: 32px;
	}
	.employeeproomtion .el-button{
		padding: 5px 10px;
		height: 32px;
	}
	.employeeproomtion .departureStyle{
		margin-left: 45px;
	}
</style>
<style scoped>
	.marks{
		width:320px;
		height:250px;
		border-radius: 5px;
		padding-left: 20px;
		/*background: red;*/
		/*display: none;*/
		/*position: absolute;*/
	}
	.marks h3{
		height: 40px;
		line-height:40px;
		/*background: red;*/
	}
	.marks .attendance_bottom{
		width: 266px;
		height:140px;
		/*background: blue;*/
		/*margin-top:15px;*/
	}
	.marks .attendance_top{
		height:30px;
		line-height: 30px;
	}
	.marks .attendance_top span{
		margin-right:35px;
	} 
	.dialog-footer{
		padding-left:48px;
		text-align: center;
	}
	.el-button .el-button--default{
		text-align: center;
		margin-left:20px;
	}
	
</style>