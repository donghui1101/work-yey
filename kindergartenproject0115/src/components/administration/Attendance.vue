<template>
	<div class="attendance">
		<div class="attendanceContent">
			<div class="sharingTitle">
				<h3>管理</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>员工考勤率</h3>
					<div class="sharingLink">
						<button class="expenditureDistribution" v-model="gardent_id" @click="AttendanceMarkDialogVisible = true,getAttdetail(gardent_id)">添加员工考勤记录</button>
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
						<div class="sharingInput">
							<el-row>
								<el-input
								    placeholder="请输入内容"
								    prefix-icon="el-icon-search"
								    v-model="input21">
								</el-input>
								<el-button class="departureStyle">搜索</el-button>
								<el-button>成长排名</el-button>
								<el-button>所选</el-button>
							</el-row>
						</div>
					</div>			
				</div>
				<div class="attendanceTable">
					<table class="sharingTable">
						<tr>
							<th><input type="radio"  /></th>
							<th>编号</th>
							<th>员工姓名</th>
							<th>职务</th>
							<th>所在班级/部门</th>
							<th>所在园区</th>
							<th>状态</th>
							<th>入职时间</th>
							<th>操作</th>
						</tr>
						<tr class="sharingTablecolor_one" v-for="item in AttendancestaffList">
							<td><input type="radio"  @change="getAttendancestaff()"/></td>
							<td>{{item.staff_id}}</td>
							<td>{{item.staff_name}}</td>
							<td>{{item.position_name}}</td>
							<td>{{item.class_name}}</td>
							<td>{{item.garden_name}}</td>
							<td>{{item.staff_status_name}}</td>
							<td>{{item.entry_date}}</td>
							<td>
								<span class="departure"   @click="AttendanceShowDialogVisible=true,Attdetail(item.staff_id)">详情</span>							
							</td>
						</tr>
					</table>
				</div>
				<el-dialog
					  :visible.sync="AttendanceShowDialogVisible"
					  center
					   width="380px"
					   height="250px">
					    <div class="marks">
							<div class="attendance">
								<el-radio v-model="radio2" label="0">全勤</el-radio>
				  			<el-radio v-model="radio2" label="1">未全勤</el-radio>
							</div>
							<div class="attendance_bottom">
								<div class="attendance_top">
									<div class="attendance_left" v-for="item in AttendancestaffDetailList">
										<span>{{item.vname}}</span>
										<input type="text" />
										<span>次</span>
									</div>
								</div>
							</div>
					</div>
				</el-dialog>
				<el-dialog
					  :visible.sync="AttendanceMarkDialogVisible"
					  center
					   width="380px"
					   height="250px">
					    <div class="marks">
							<div class="attendance">
								<el-radio v-model="radio2" label="0">全勤</el-radio>
				  			<el-radio v-model="radio2" label="1">未全勤</el-radio>
							</div>
							<div class="attendance_bottom">
								<div class="attendance_top">
									<div class="attendance_left" v-for="(item,index) in getAttdetailList">
										<span v-model="arr[index]">{{item.vname}}</span>
										<input type="text" v-model="desc[index] "/>
										<span>次</span>
									</div>
								</div>
							</div>
							<span slot="footer" class="dialog-footer">
						    <el-button @click="AttendanceMarkDialogVisible=false">取 消</el-button>
						    <el-button type="primary" @click="AttendanceMarkDialogVisible=false,addAttendanceDetail()">完成</el-button>
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
import AttendanceMark from '@/components/studentfiles/AttendanceMark'
export default {
  	name: 'attendance',
  	data(){
      	return {
      		input21: '',
      		staffid:'',
      		gardent_id:'',
      		staffId:[],
      		arr:[],
      		desc:[],
      		garendList:[],
    			positionList:[],
    			getAttdetailList:[],
      		radio2:'',
      		AttendancestaffList:[],
      		AttendancestaffDetailList:[],
      		AttendanceMarkDialogVisible:false,
      		AttendanceShowDialogVisible:false
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
   	//获取员工考勤
   	getAttendancestaff(){
// 		alert(id);
      var cookieId = Cookies.get("cookieId");
      axios.post("/api/index.php/api/Personne/Attendancestaff", {
        admin_id: cookieId
      })
        .then((
          body
        ) => {
        	console.log(body,8888);
          this.AttendancestaffList=body.data.data;
          this.AttendancestaffList.map((current,index) => {
    				this.staffid=current.staff_id
//						console.log(current.staff_id,77777999999)
    				this.staffId.push(current.staff_id);
//  				console.log(this.staffId,77777999999);
    			})
        })
    },
    //详情
    Attdetail(id){
    	alert(id);
      var cookieId = Cookies.get("cookieId");
      console.log(this.staffid,6666);
      axios.post("/api/index.php/api/Personne/info", {
        admin_id: cookieId,
        id:id
      }).then(({data})=>{
      	console.log(data,88889999);
          this.AttendancestaffDetailList=data.data;
      })
    },
    //获取假期类型
    getAttdetail(id){
//		alert(this.garden_id)
      var cookieId = Cookies.get("cookieId");
//    console.log(this.staffid,6666);
      axios.post("/api/index.php/api/Personne/Vacationtype", {
        admin_id: cookieId,
        garden_id:id
      })
        .then((
          body
        ) => {
        	this.getAttdetailList=body.data.data;
        	 this.getAttdetailList.map((current,index) => {
////        	console.log(current.v_id,77777)
////  				this.v_id=current.v_id
    				this.arr.push(current.id);
//  				console.log(this.arr);
//  			})
        })
        	console.log(body,8888999911111);
        })
    },
    //添加考勤统计
    addAttendanceDetail(){
//  	let v_id=this.v_id;
    	let desc=this.desc;
    	var cookieId = Cookies.get("cookieId");
    	axios.post("/api/index.php/api/Personne/addAttendance",{
    		admin_id: cookieId,
    		id:this.staffId,
    		vid:this.arr,
    		desc:desc,
    		status:this.radio2
    	}).then(({data})=>{
    		console.log(data,999999)
    	})
    }
   },
   created(){
   	this.getAttendancestaff();
// 	this. getAttdetail();
   	this.getGraden();
   }
}
</script>

<style scoped lang="scss">
  	 /*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.attendance{
  		width: 1200px;
  		margin: 0 auto;
  		position: relative;
  		.attendanceContent{
  			width:912px;
  			position:absolute;
  			top:0;
  			left:285px;
  			.sharingLink{
  				a{
  					color:#9BC248;
  				}
  			}
  			.attendanceTable{
  				width: 100%;
  				table{
  					width: 885px;
  					margin: 15px auto;					
  				}
  			}
  		}
  	}
</style>
<style>
	.attendance .el-date-editor--daterange{
		height: 32px;
		margin-top: 10px;
	}
	.attendance .el-input{
		width: 180px;
		height: 32px;
	}
	.attendance .el-input__inner{
		height: 32px;
	}
	.attendance .el-button{
		padding: 5px 10px;
		height: 32px;
	}
	.attendance .departureStyle{
		margin-left: 45px;
	}
	.sharingTablecolor_one span{
		cursor: pointer;
	}
</style>
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