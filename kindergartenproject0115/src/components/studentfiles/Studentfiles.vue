<template>
	<div class="studentfiles">
		<div class="studentfilesContent">
			<div class="sharingTitle">
				<h3>学生管理</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>学生档案</h3>
					<div class="studentfilesPopup">
						<el-button type="text" @click="dialogFormVisible = true">缴费记录</el-button>
						<el-dialog title="缴费记录" :visible.sync="dialogFormVisible">
							<div class="demo-input-suffix">
								时间
								<el-input placeholder="请输入内容" v-model="input10" clearable></el-input>
								~
								<el-input placeholder="请输入内容" v-model="input11" clearable></el-input>
							</div>
							<div class="sharingcontentPopup_one">
									<table class="sharingTable">
										<tr>
											<th></th>
											<th></th>
											<th>联系方式</th>
											<th>所在园区</th>
											<th>所在班级</th>
											<th>缴费记录</th>
										</tr>
										<tr class="sharingTablecolor_one">
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
										</tr>
										<tr class="sharingTablecolor_two">
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
										</tr>
										<tr class="sharingTablecolor_one">
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
										</tr>
										<tr class="sharingTablecolor_two">
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
										</tr>
									</table>
							</div>
							<div slot="footer" class="dialog-footer">
    							<el-button type="primary" @click="dialogFormVisible = false">确 定</el-button>
  							</div>
						</el-dialog>
						<el-button type="text" @click="dialogFormVisibleOne = true">出勤记录</el-button>
						<el-dialog title="缴费记录" :visible.sync="dialogFormVisibleOne">
							<div class="demo-input-suffix">
								时间
								<el-input placeholder="请输入内容" v-model="input12" clearable></el-input>
								~
								<el-input placeholder="请输入内容" v-model="input13" clearable></el-input>
							</div>
							<div class="sharingcontentPopup_one">
									<table class="sharingTable">
										<tr>
											<th>姓名</th>
											<th>性别</th>
											<th>联系方式</th>
											<th>所在园区</th>
											<th>所在班级</th>
											<th>出勤记录</th>
										</tr>
										<tr class="sharingTablecolor_one">
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
										</tr>
										<tr class="sharingTablecolor_two">
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
										</tr>
										<tr class="sharingTablecolor_one">
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
										</tr>
										<tr class="sharingTablecolor_two">
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
											<td>Data</td>
										</tr>
									</table>
							</div>
							<div slot="footer" class="dialog-footer">
    							<el-button type="primary" @click="dialogFormVisibleOne = false">确 定</el-button>
  							</div>
						</el-dialog>
					</div>
				</div>
				<div class="distribution" >
					<ul class="park" >
						<h3>所属园区:</h3>
						<li class="style" >全部</li>
						<li v-for="item in gardenList" @click="ClassList(item.id)">{{item.name}}</li>
					</ul>
					<ul class="park">
						<h3>所属职位:</h3>
						<li class="style">全部</li>
						<li v-for="items in classList">{{items.name}}</li>
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
							<el-button class="departureStyle">搜索</el-button>
						</el-row>
					</div>
				</div>
				<div class="studentfilesTable" >
					<table class="sharingTable">
						<tr>
							<th><input type="radio" name="" id="" value="" /></th>
							<th>学生姓名</th>
							<th>性别</th>
							<th>家长联系方式</th>
							<th>所在园区</th>
							<th>所在班级</th>
							<th>特长</th>
							<th>收费情况</th>
							<th>操作</th>
							<th>学生状态</th>
						</tr>
						<tr class="sharingTablecolor_one" v-for="item in studentList">
							<td><input type="radio" name="" id="" value="" /></td>
							<td>{{item.name}}</td>
							<td>{{item.sex}}</td>
							<td>{{item.tel}}</td>
							<td>{{item.garden_name}}</td>
							<td>{{item.class_name}}</td>
							<td>{{item.techang_name}}</td>
							<td>{{item.money}}</td>
							<td>
								<span class="details">特长</span>
								<span class="details">退园</span>
								<span class="details">毕业</span>
								<span class="details">催费</span>
								<span class="details">详情</span>
								<span class="departure">删除</span>
							</td>
							<td>{{['毕业','在校','退学'][item.status]}}</td>
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
      	studentList:[],
      	activeList:[],
      	gardenList:[],
      	classList:[],
      	input21: '',
      	input10: '',
      	input11: '',
      	input12: '',
      	input13: '',
      	dialogTableVisible: false,
        dialogFormVisible: false,
        dialogFormVisibleOne:false,
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
    	StudentList(){
//  		var _this=this;
    		var cookieId=Cookies.get("cookieId");
    		axios.post("/api/index.php/Api/Student/record",{
    			admin_id:cookieId
    		}).then(({data})=>{
    			this.studentList=data.data;
    			this.studentList.map((current,index)=>{
    				switch(current.status){
    					case '0':current.status='毕业'
    					  break
    					case '1':current.status='在校'
    					  break
    					case '2':current.status='退学'
    					  break
    				}
    			})
    			console.log(data);
//  			console.log(this.studentList);
    		})
    	},
    	ActiveList(){
    		var cookieId=Cookies.get("cookieId");
    		axios.post("/api/index.php/api/base/getJT",{
//  			garden_id:id,
    			admin_id:cookieId
    		}).then(({data})=>{
    			this.activeList=data.data.class;
    			this.gardenList=data.data.garden;
//  			console.log(data);
//  			console.log(data.data.class);
    		})
    	},
    	ClassList(id){
    		var cookieId=Cookies.get("cookieId");
    		axios.post("/api/index.php/api/base/getclass",{
    			garden_id:id,
    			admin_id:cookieId
    		}).then(({data})=>{
    			this.classList=data.data;
//  			console.log(data.data);
    		})
//  			
  
    	}
    },
    created(){
    	this.StudentList();
    	this.ActiveList();
//  	this.ClassList();
    },
    mounted(){
    	
    }
}
</script>

<style scoped lang="scss">
  	 /*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.studentfiles{
  		width: 1200px;
  		margin: 0 auto;
  		position:relative;
  		.studentfilesContent{
  			width:912px;
  			position:absolute;
  			top:0;
  			left:285px;
  			.sharingcontentTitle{
  				.studentfilesPopup{
  					float: right;
  					margin-right: 15px;
  				}
  			}
  			.sharingcontentPopup_one{
  				width: 100%;
  				table{
  					width: 90%;
  					margin: 0 auto;
  				}
  			}
  			.studentfilesTable{
  				width: 100%;
  				margin-top: 15px;
  				margin-bottom: 15px;
  				overflow-x:scroll;
  				table{
  					width:1088px;
  					margin-left: 15px;
  				}
  			}
  		}
  	}
</style>
<style>
	.studentfiles .el-button--text{
		color: #9BC248;
		font-size: 18px;
	}
	.studentfiles .el-date-editor--daterange{
		height: 32px;
		margin-top: 10px;
	}
	.studentfiles .el-input{
		width: 180px;
		height: 32px;
	}
	.studentfiles .el-input__inner{
		height: 32px;
	}
	.studentfiles .el-button{
		padding: 5px 10px;
		height: 32px;
	}
	.studentfiles .departureStyle{
		margin-left: 45px;
	}
	/*弹窗样式*/
	.studentfiles .el-dialog__header{
		text-align: center;
		font-weight: 600;
		padding: 0;
	}
	.studentfiles .demo-input-suffix{
		width:500px;
		margin-left: 20px;
	}
	.studentfiles .el-dialog__body{
		padding: 0;
	}
	.studentfiles .dialog-footer{
		text-align: center;
	} 
</style>