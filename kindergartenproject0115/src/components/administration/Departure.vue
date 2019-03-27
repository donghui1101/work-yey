<template>
	<div class="departure">
		<div class="departureContent">
			<div class="sharingTitle">
				<h3>员工管理</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>员工离职率</h3>
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
				</div>
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
							<el-button class="departureStyle" @click="EmployeeLeave">搜索</el-button>
							<el-button>成长排名</el-button>
							<el-button>所选</el-button>
						</el-row>
					</div>
				</div>
				<div class="departureTable">
					<table class="sharingTable">
						<tr>
							<th><input type="radio" name="" id="" value="" /></th>
							<th>编号</th>
							<th>员工姓名</th>
							<th>职务</th>
							<th>所在班级/部门</th>
							<th>所在校区</th>
							<th>状态</th>
							<th>离职时间</th>
							<th>操作</th>
						</tr>
						<tr class="sharingTablecolor_one" v-for="item in EmployeeList">
							<td><input type="radio" name="" id="" value="" /></td>
							<td>{{item.staff_id}}</td>
							<td>{{item.staff_name}}</td>
							<td>{{item.position_name}}</td>
							<td>{{item.class_name}}</td>
							<td>{{item.garden_name}}</td>
							<td>{{item.staff_status_name}}</td>
							<td>{{item.dimission_date}}</td>
							<td>
								<span class="departure" @click="deletePosition(item.staff_id)">删除</span>
							</td>
						</tr>
					</table>					
				</div>
			</div>	
		</div>
	</div>	
</template>

<script>
import axios from 'axios';
import Cookies from 'js-cookie'
export default {
  	name: 'departure', 	
  	data() {
      return {
      	input21: '',
      	gardent_id:'',
      	post_id:'',
      	garendList:[],
    		positionList:[],
    		EmployeeList:[],
        pickerOptions2: {
          shortcuts: [{
            onClick(picker) {
              const end = new Date();
              const start = new Date();
              start.setTime(start.getTime() - 3600 * 1000 * 24 * 7);
              picker.$emit('pick', [start, end]);
            }
          }, {
            onClick(picker) {
              const end = new Date();
              const start = new Date();
              start.setTime(start.getTime() - 3600 * 1000 * 24 * 30);
              picker.$emit('pick', [start, end]);
            }
          }, {
            onClick(picker) {
              const end = new Date();
              const start = new Date();
              start.setTime(start.getTime() - 3600 * 1000 * 24 * 90);
              picker.$emit('pick', [start, end]);
            }
          }]
        },
        value6: '',
        value7: ''
      };
    },
    methods:{
    	//获取所属园区/所属职位
			getGraden(id){
				var cookieId = Cookies.get("cookieId");
				axios.post("/api/index.php/api/Personne/Permissions",{
					admin_id: cookieId
				}).then(({data})=>{
					this.garendList=data.data;
					this.garendList.map((current,index) => {
    				this.gardent_id=current.id
    			})
					console.log(data,8888);
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
			//获取员工离职统计
			EmployeeLeave(){
				var start=this.value6[0];
				var end=this.value6[1];
				var cookieId = Cookies.get("cookieId");
				axios.post("/api/index.php/api/Personne/Quit",{
					admin_id: cookieId,
					gardent_id:this.gardent_id,
					post_id:this.post_id,
					start:start,
					end:end,
					search:this.input21
				}).then(({data})=>{
					this.EmployeeList=data.data;
					console.log(data,8888999911112222);
				})
			},
			//员工离职删除
			deletePosition(id){
				var cookieId = Cookies.get("cookieId");
				axios.post("/api/index.php/api/Personne/del_quit",{
					admin_id: cookieId,
					staff_id:id
				}).then(({data})=>{
					console.log(data,88889999);
				})
			},
			
   },
   created(){
   	this.getGraden();
   	this.EmployeeLeave();
   }
}
</script>

<style scoped lang="scss">
  	 /*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.departure{
  		width: 1200px;
  		margin: 0 auto;
  		position:relative;
  		.departureContent{
  			width:912px;
  			position:absolute;
  			top:0;
  			left:285px;
  			.departureTable{
  				width: 100%;
  				margin-top: 15px;
  				margin-bottom: 15px;
  				overflow-x:scroll;
  				table{
  					width:915px;
  					margin-left: 15px;
  				}
  			}
  		}
  	}
</style>
<style>
	.distribution li{
		cursor: pointer;
	}
	.sharingTablecolor_one span{
		cursor: pointer;
	}
	.departure .el-date-editor--daterange{
		height: 32px;
		margin-top: 10px;
	}
	.departure .el-input{
		width: 180px;
		height: 32px;
	}
	.departure .el-input__inner{
		height: 32px;
	}
	.departure .el-button{
		padding: 5px 10px;
		height: 32px;
	}
	.departure .departureStyle{
		margin-left: 45px;
	}
</style>