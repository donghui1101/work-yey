<template>
	<div class="studyFile">
		<div class="studyfile">
			<div class="sharingTitle">
					<h3>学生档案</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>目标生源</h3>
					<div class="sharingLink">
						<span>目标生源</span>
						<div class="sharingLink">
						<el-button type="text" @click="addSourcedialogFormVisible = true">添加生源</el-button>
						<el-dialog :visible.sync="addSourcedialogFormVisible">
							<div class="top" style="display: flex;">
									<span>信息来源 :</span>
									<div class="MessageSource">
										<ul id="AddSourceOne">
											<li class="one">全部</li>
											<li v-for="items in studentsList" :key="items.id">{{items.name}}</li>						
										</ul>
									</div>
								</div>
								<!-----收费标准------------>
								<div class="standard">
									<span>收费标准 :</span>
									<div class="MessageSource">
										<ul>
											<li style="margin-top:0;"><span>托费标准</span><input type="text" class="span2"/></li>
											<li><span>餐费标准</span><input type="text" class="span2"/></li>
											<li><span>校车标准</span><input type="text" class="span2" /></li>
											<li><span>其他标准</span><input type="text" class="span2" /></li>
										</ul>
										<ul>
											<li style="margin-top:0;"><span>托费标准</span><input type="text" class="span2" v-model="AddList.tuo_zhou"/></li>
											<li><span>餐费标准</span><input type="text" class="span2" v-model="AddList.can_zhou"/></li>
											<li><span>校车标准</span><input type="text" class="span2" v-model="AddList.xiao_zhou"/></li>
											<li><span>其他标准</span><input type="text" class="span2" v-model="AddList.qi_zhou"/></li>
										</ul>
									</div>
								</div>
								<!------家长信息------>
								<div class="parent">
									<span>家长信息  :</span>
									<div>
										<table class="tb">
											<tr>
												<th>姓名</th>
												<th>学生关系</th>
												<th>单位</th>
												<th>学历</th>
												<th>电话</th>
												<th>微信</th>
											</tr>
											<tr>
												<td><input type="text" v-model="AddList.parent_name"/></td>
												<td><input type="text" v-model="AddList.relation"/></td>
												<td ref="addParent"><input type="text" v-model="AddList.unit"/></td>
												<td ref="addParent"><input type="text" v-model="AddList.xueli"/></td>
												<td ref="addParent"><input type="text" v-model="AddList.tel"/></td>
												<td ref="addParent"><input type="text" v-model="AddList.wechat"/></td>
											</tr>
										</table>
									</div>
								</div>
								<!------学生信息------>
								<div class="parent">
									<span>学生信息 :</span>
									<div>
										<table class="tb">
											<tr>
												<th>姓名</th>
												<th>性别</th>
												<th>出生日期</th>
												<th>籍贯</th>
												<th>家庭住址</th>
												<th>曾在园所</th>
											</tr>
											<tr>
												<td><input type="text" v-model="AddList.sname"></td>
												<td><input type="text" v-model="AddList.sex"/></td>
												<td><input type="text" v-model="AddList.birthday"></td>
												<td><input type="text" v-model="AddList.home"/></td>
												<td><input type="text" v-model="AddList.place"/></td>
												<td><input type="text" v-model="AddList.once_garden"/></td>
											</tr>
										</table>
									</div>
								</div>
						</el-dialog>
					</div>
					</div>					
				</div>
				<div class="distribution">
					<ul class="park">
						<h3>所属园区:</h3>
						<li class="style">全部</li>
						<li v-for="item in gardenList" :garden_id="item.id" @click="ClassList(item.id)">{{item.name}}</li>
					</ul>
					<ul class="park">
						<h3>所属班级:</h3>
						<li class="style">全部</li>
						<li v-for="items in classList" :class_id="items.id">{{items.name}}</li>
					</ul>
					<div class="sharingTime">
						<div class="sharingInput">
							<el-row>
								<el-input
								    placeholder="请输入内容"
								    prefix-icon="el-icon-search"
								    v-model="input21">
								</el-input>
								<el-button class="departureStyle" @click="targetAddsource">搜索</el-button>
							</el-row>
						</div>
					</div>
				</div>
				<div class="Studyfiletable">
					<table class="sharingTable">
						<tr>
							<th><input type="radio" /></th>
							<th>学生姓名</th>
							<th>性别</th>
							<th>幼儿年龄</th>
							<th>家长姓名</th>
							<th>家长联系方式</th>
							<th>入园经历</th>
							<th>入园意向</th>
							<th>信息来源</th>
							<th>跟进痕迹</th>
						</tr>
						<tr v-for="item in StudyfileData">
							<td><input type="radio" /></td>
							<td>{{item.name}}</td>
							<td>{{item.sex == 1 ? '男' : '女'}}</td>
							<td>{{item.birthday}}</td>
							<td>{{item.family_name}}</td>
							<td>{{item.tle}}</td>
							<td>{{item.status == 1 ? '有' : '无'}}</td>
							<td>{{item.idea_name}}</td>
							<td>{{item.source_name}}</td>
							<td>
								<el-row>
								  	<el-button size="mini" round @click="centerDialogVisible = true,getId(item.id)">填写</el-button>
								  	<el-button size="mini" round @click="FllowRecordDialogVisible = true,seeFllow(item.id)">查看</el-button>
								  	<el-button size="mini" round @click="deletes(item.id)">删除</el-button>
								</el-row>
							</td>
						</tr>
					</table>
				</div>
				<FllowRecord :FllowRecordDialogVisible.sync="FllowRecordDialogVisible"></FllowRecord>
			</div>			
		</div>
		<el-dialog
	  :visible.sync="centerDialogVisible"
	  center
	   width="365px"
	   height="380px"
	   show-close:false
	   >
	    <div class="marks">
			<h3>跟进痕迹</h3>
			<div class="manage">
				<span>负责人:</span>
				<input type="text" v-model="fuzeren"/>
			</div>
			<div class="enter">入园意向</div>
			<select name="" v-model="status">
				<option value="1">强烈</option>
				<option value="2">正常</option>
				<option value="3">放弃园所</option>
			</select>
			<h4>备注</h4>
			<div class="Remarks">
				<textarea v-model="desc" style="margin-left:90px;"></textarea>
			</div>
			<span slot="footer" class="dialog-footer">
		    <el-button @click="centerDialogVisible=false">取 消</el-button>
		    <el-button type="primary" @click="centerDialogVisible=false;addFllow()">确 定</el-button>
		</span>
	</div>
</el-dialog>
<el-dialog
	  :visible.sync="FllowRecordDialogVisible"
	  center
	   width="500px"
	   height="240px">
			<h4>跟进记录</h4>
			<div class="markss" v-for="item in seeFllowList">
			<div>
				<div class="responses">
				<span>负责人 ：</span>
				<span>{{item.fuzeren}}</span>
			</div>
			<div class="contents">
				<span>跟进记录</span>
				<div class="contents_left">
					<span>意向 ：</span>
					<span>{{item.status}}</span>
				</div>
				<div class="date">
					{{item.time}}
				</div>
				<div class="txt">{{item.desc}}</div>
			</div>
			</div>
	</div>
</el-dialog>
	</div>
</template>

<script>
	import FllowMark from '@/components/studentfiles/FllowMark'
	import FllowRecord from '@/components/studentfiles/FllowRecord'
	import axios from 'axios';
	import Cookies from 'js-cookie'
	export default{
		name:"studyfile",
		components:{
			FllowMark,
			FllowRecord
		},
		data() {
	      	return {
	      		input21:'',
	      		centerDialogVisible: false,
	      		FllowRecordDialogVisible: false,
	      		addSourcedialogFormVisible:false,
	      		StudyfileData:[],
	      		studentsList:[],
	      		activeList:[],
		      	gardenList:[],
		      	classList:[],
		      	seeFllowList:[],
		      	id:'',
		      	garden_id:'',
		      	class_id:'',
		      	fuzeren:'',
		      	status:'',
		      	desc:'',
		      	AddList:{
		      		name:'',
							relation:'',
							unit:'',
							xueli:'',
							tel:'',
							wechat:'',
							family_id:'',
							source_id:'',
							tuo:'',
							tuo_zhou:'',
							parentName:'',
							sex:'',
							place:'',
							home:'',
							once_garden:'',
							state:''
		      	}
	      	}
	   },
	   methods:{
	   	getId(id){
	   		this.id=id;
	   		console.log(id,89)
	   	},
	   	targetAddsource(){
	   		var cookieId=Cookies.get("cookieId");
	   		axios.post("api/index.php/api/StuManagement/aims_stu",{
					admin_id:cookieId,
					garden_id:this.garden_id,
					class_id:this.class_id,
					name:this.input21
	   		}).then(({data})=>{
	   			console.log(this.garden_id,66666);
				this.StudyfileData=data.data;
	   			console.log(data,8888);
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
    			console.log(data);
    			console.log(data.data.class);
    		})
    	},
    	ClassList(id){
    		var cookieId=Cookies.get("cookieId");
    		axios.post("/api/index.php/api/base/getclass",{
    			garden_id:id,
    			admin_id:cookieId
    		}).then(({data})=>{
    			this.classList=data.data;
    		})
    	},
    	addFllow(id){
//  		alert(11111);
    		var cookieId=Cookies.get("cookieId");
    		axios.post("/api/index.php/api/StuManagement/mark",{
    			admin_id:cookieId,
    			s_id:this.id,
    			fuzeren:this.fuzeren,
    			status:this.status,
    			desc:this.desc
    		}).then(({data})=>{
    			console.log(data,9999);
    		})
    	},
    	seeFllow(id){
    		alert(11111);
    		var cookieId=Cookies.get("cookieId");
    		axios.post("/api/index.php/api/StuManagement/see_mark",{
    			admin_id:cookieId,
    			id:id
    		}).then(({data})=>{
    			this.seeFllowList=data.data;
    			console.log(data,99998888);
    		})
    	},
    	deletes(id){
    		var cookieId=Cookies.get("cookieId");
    		axios.post("/api/index.php/api/StuManagement/del",{
    			admin_id:cookieId,
    			id:id
    		}).then(({data})=>{
    			
    			console.log(data,99998888);
    		})
    	},
    	getStudent(){
			var cookieId=Cookies.get("cookieId");
			axios.post("/api/index.php/Api/Student/student_get",{
				admin_id:cookieId
			}).then(({data})=>{
				this.studentsList=data.data;
				console.log(data.data);
			})
		}
	   },
	   created(){
	   	this.ActiveList();
	   	this.targetAddsource();
	   	this.getStudent();
	   }
	}
</script>


<style scoped lang="scss">
  	 /*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.studyFile{
  		width: 1200px;
  		margin: 0 auto;
  		position: relative;
  		.studyfile{
  			width:912px;
  			position:absolute;
  			top:0;
  			left:285px;
  			.Studyfiletable{
  				width: 100%;
  				margin-top: 20px;
  				table{
  					width:885px;
  					margin: 0 auto 15px;
  				}
  			}
  		}
  	}
</style>
<style>
	.studyFile .el-button--text{
		color: #9BC248;
		font-size: 18px;
	}
	.studyFile .el-date-editor--daterange{
		height: 32px;
		margin-top: 10px;
	}
	.studyFile .el-input{
		width: 180px;
		height: 32px;
	}
	.studyFile .el-input__inner{
		height: 32px;
	}
	.studyFile .el-button{
		padding: 5px 10px;
		height: 32px;
	}
	.studyFile .departureStyle{
		margin-left: 45px;
	}
	.distribution li{
		cursor: pointer;
	}
	.marks{
		width:365px;
		height:380px;
		border-radius: 5px;
		box-sizing: content-box;
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
		font-size:22px;
		color:#222222;
	}
	.marks select{
		font-size:20px;
		color:#363636;
		height:30px;
		line-height: 30px;
		margin-left: 100px;
		/*background: orange;*/
		/*padding-left:30px;*/
	}
	/*.marks ul li{
		float: left;
		margin-left:30px;
	}*/
	.marks h4{
		height:35px;
		padding-left:30px;
		font-size:22px;
		color:#222222;
		font-weight: 100;
	}
	.Remarks{
		margin-left:98px;
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
	.manage{
		height:50px;
		line-height: 50px;
	}
	.manage span{
		font-size: 22px;
    color: #363636;
    height: 40px;
    line-height: 40px;
    padding-left: 30px;
	}
	.manage input{
		height:25px;
	}
	
	
	
	
	
	.markss{
		width:500px;
		height:240px;
		border-radius: 5px;
		padding-left:70px;
	}
	h4{
		/*text-align: center;*/
		height:60px;
		line-height: 60px;
		/*background: blue;*/
		font-size:25px;
	}
	.markss .response{
		height:30px;
		line-height: 30px;
		/*background: blue;*/
		padding-left:60px;
		font-size:16px;
		color:#222222;
	}
	.contents{
		height:158px;
		/*background: orange;*/
		line-height: 50px;
		padding-left:60px;
		/*background: #00BFFF;*/
	}
	.contents>span{
		width:60px;
		/*background: #0E050B;*/
		float: left;
		margin-right:20px;
	}
	.contents_left{
		width:120px;
		/*background: red;*/
		float: left;
		margin-left:30px;
	}
	.date{
		/*background: #157EFB;*/
		/*width:120px;*/
		float: left;
	}
	.contents .txt{
		display: inline-block;
		width:320px;
		height:85px;
		border:1px solid #606266;
		margin-left:5px;
	}
	.markss h4{
		height:35px;
		padding-left:30px;
		font-size:26px;
		color:#222222;
		font-weight: 100;
	}
	
</style>
<style>
.top{
		height:40px;
		display: flex;
		line-height: 40px;
		padding-left:15px;
		margin:15px 0;
	}
.top span{
		float: left;
		font-size:22px;
		margin-top: -9px;
	}
	#AddSourceOne{
		display: flex;
	}
	#AddSourceOne  ul{
		display: flex;
		margin-top:25px;
	}
	#AddSourceOne li{
		float: left;
		width:113px;
		height:24px;
		text-align: center;
		line-height: 24px;
		border-radius: 5px;
	}
	#AddSourceOne .one{
		color:#ffffff;
		background: #9BC248;
	}
	.standard{
		height:150px;
		padding-left:15px;
	}
	.standard>span{
		float: left;
		font-size:22px;
	}
	.standard ul{
		float: left;
		margin-left:31px;
	}
	.standard ul li{
		height:26px;
		line-height: 26px;
		margin-top:10px;
	}
	.standard ul li span{
		display: inline-block;
		float: left;
		height:26px;
		color:#353535;
	}
	.standard ul li .span2{
		display: inline-block;
		width:76px;
		height:26px;
		border-radius: 5px;
		border:1px solid #9BC248;
		margin-left:10px;
	}
	.addsource .parent{
		margin-top:20px;
		padding-left:15px;
	}
	.parent span{
		float: left;
		font-size:22px;
		margin-right:20px;
	}
	.parent table{
		text-align: center;
		width:550px;
		border-collapse: collapse;
		margin-left:15px;
	}
	.parent .tb th{
		padding: 5px 0;
		border:1px solid #9BC248;
		vertical-align:middle;
	}
	.parent .tb td{
		height:35px;
		border:1px solid #9BC248;
	}
	.parent .tb td input{
		width: 100%;
		line-height:35px;
		border: none;
		text-align: center;
		font-size:15px;
	}
</style>