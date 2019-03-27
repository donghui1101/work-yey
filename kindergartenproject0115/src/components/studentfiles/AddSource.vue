<template>
	<div class="AddSource">
		<div class="addsource">
		<div class="sharingTitle">
				<h3>学生管理</h3>
		</div>
		<div class="addsource_content">
		<div class="header">
			<h4>添加学生</h4>
		</div>
			<div class="top">
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
						<li style="margin-top:0;"><span>托费标准</span><input type="text" class="span2" v-model="AddList.tuo"/></li>
						<li><span>餐费标准</span><input type="text" class="span2" v-model="AddList.can"/></li>
						<li><span>校车标准</span><input type="text" class="span2" v-model="AddList.xiao"/></li>
						<li><span>其他标准</span><input type="text" class="span2" v-model="AddList.qi"/></li>
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
			<!---------学生状态--------->
			<div class="studystate">
				<span>学生状态 :</span>
				<el-radio v-model="AddList.state" label="0">试园</el-radio>
  				<el-radio v-model="AddList.state" label="1">借读</el-radio>
			</div>
			<!-------所属-------->
			<div class="belong">
				<span style="width:90px;height:45px;margin-left:65px;">所属 :</span>
				<div class="right">
					<div class="txt">
					招生老师<select>
							<option v-model="AddList.zhaoteacher"></option>
						</select>
					</div>
					<div class="txt">
						班主任<select>
							<option v-model="AddList.class_id"></option>
						</select>
					</div>
					<div class="txt">
						分配班级<select>
							<option v-model="AddList.branchClass"></option>
						</select>
					</div>
				</div>
			</div>
			<!--------生活描述-------->
			<div class="describe">
				<span>生活描述  :</span>
				<div class="textarea">
					<textarea v-model="AddList.life_desc"></textarea>
				</div>
			</div>
			<!--------兴趣爱好  -------->
			<div class="Hobby">
				<span>兴趣爱好 :</span>
				<div class="hobby" v-model="AddList.hobby">
					<div class="hobby1">
						<input type="text" value="玩具:"/>
						<input type="text" value="托马斯小火车" />
					</div>
					<div class="hobby1">
						<input type="text" value="玩具:"/>
						<input type="text" value="托马斯小火车" />
					</div>
					<div class="hobby1">
						<input type="text" value="玩具:"/>
						<input type="text" value="托马斯小火车" />
					</div>
					<div class="hobby1">
						<input type="text" value="玩具:"/>
						<input type="text" value="托马斯小火车" />
					</div>
					<div class="hobby1">
						<input type="text" value="玩具:"/>
						<input type="text" value="托马斯小火车" />
					</div>
					<div class="hobby1">
						<input type="text" value="玩具:"/>
						<input type="text" value="托马斯小火车" />
					</div>
				</div>
			</div>
			<!--------特长学习-------->
			<div class="speciality">
				<span>特长学习 :</span>
				<div>
					<table>
						<tr>
							<th>课程</th>
							<th>起始时间</th>
							<th>上课时间</th>
							<th>月课时</th>
							<th>收费标准</th>
						</tr>
						<tr>
							<td><input type="text" v-model="AddList.SpecialityName"/></td>
							<td><input type="text" v-model="AddList.SpecialityRelationship"/></td>
							<td><input type="text" v-model="AddList.SpecialityCompany"/></td>
							<td><input type="text" v-model="AddList.SpecialityEducation"/></td>
							<td><input type="text" v-model="AddList.SpecialityTel"/></td>
						</tr>
					</table>
				</div>
			</div>
			<!--------健康状况  -------->
			<div class="Health">
				<span>健康状况 :</span>
				<div class="health" v-model="AddList.MyHealth">
					<div class="health1">
						<input type="text" value="水痘："/>
						<input type="text" value="无" />
					</div>
					<div class="health1">
						<input type="text" value="水痘：" />
						<input type="text" value="无" />
					</div>
					<div class="health1">
						<input type="text" value="水痘：" />
						<input type="text" value="无" />
					</div>
				</div>
			</div>
			<!---------接送方式--------->
			<div class="way">
				<span>接送方式 :</span>				
				<el-radio v-model="AddList.Pickupmode" label="3">校车</el-radio>
  				<el-radio v-model="AddList.Pickupmode" label="4">自行接送</el-radio>
			</div>
			<!--------退园原因-------->
			<div class="reason">
				<span>退园原因 :</span>
				<div>
					<table>
						<tr>
							<th>搬家</th>
							<th>教学</th>
							<th>看护</th>
							<th>意外受伤</th>
							<th>收费</th>
							<th>更换教师</th>
						</tr>
						<tr>
							<td><input type="text" v-model="AddList.GardenMoving"/></td>
							<td><input type="text" v-model="AddList.GardenTeaching"/></td>
							<td><input type="text" v-model="AddList.GardenNurse"/></td>
							<td><input type="text" v-model="AddList.GardenInjured"/></td>
							<td><input type="text" v-model="AddList.GardenCharge"/></td>
							<td><input type="text" v-model="AddList.GardenReplace"/></td>
						</tr>
					</table>
				</div>
			</div>
			<!--------其他备注  -------->
			<div class="Health">
				<span>其他备注 :</span>
				<div class="health" v-model="AddList.Remarks">
					<div class="health1">
						<input type="text" value="水痘：" />
						<input type="text" value="无" />
					</div>
					<div class="health1">
						<input type="text" value="水痘：" />
						<input type="text" value="无" />
					</div>
					<div class="health1">
						<input type="text" value="水痘：" />
						<input type="text" value="无" />
					</div>
				</div>
			</div>	
			<div class="AddSubmission"><button @click="AddSource()">保存</button></div>
		</div>		
	</div>
	</div>
</template>

<script>
import axios from 'axios';
import Cookies from 'js-cookie'
export default{
	name:"addsource",
	data(){
		return{
			radio:'',
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
				parentName:'',
				sex:'',
				place:'',
				home:'',
				once_garden:'',
				state:'',
				Teacher:'',
				Headmaster:'',
				branchClass:'',
				Lifedescription:'',
				MyHobby:'',
				SpecialityName:'',
				SpecialityRelationship:'',
				SpecialityCompany:'',
				SpecialityEducation:'',
				SpecialityTel:'',
				SpecialityWeChat:'',
				MyHealth:'',
				Pickupmode:'',
				GardenMoving:'',
				GardenTeaching:'',
				GardenNurse:'',
				GardenInjured:'',
				GardenCharge:'',
				GardenReplace:'',
				Remarks:''
			},
			studentsList:[]
		}
	},
	mounted(){
    	this.AddSourceClick('AddSourceOne');
    	this.getStudent();
    	this.AddSource();
  	},
  	methods: {
  		AddSourceClick(ReportID){
			var One = document.getElementById(ReportID);
			var two = One.getElementsByTagName('li');
			for (var i=0; i < two.length; i++) {
				two[i].index = i;
				two[i].onclick = function () {
					for (var j=0; j < two.length; j++) {
						two[j].className = '0;'
					}
					two[this.index].className = 'one';
				}
			}
		},
		AddSource(){
			var cookieId=Cookies.get("cookieId");		
			axios.post("/api/index.php/api/Stu_management/add_student",{
				parent_name:this.AddList.parent_name,
				relation:this.AddList.relation,
				unit:this.AddList.unit,
				xueli:this.AddList.xueli,
				tel:this.AddList.tel,
				wechat:this.AddList.wechat,
				name:this.AddList.name,
				sex:this.AddList.sex,
				brithday:this.AddList.brithday,
				home:this.AddList.home,
				place:this.AddList.place,
				garden_id:this.AddList.garden_id,
				once_garden:this.AddList.once_garden,
				state:this.AddList.state,
				class_id:this.AddList.class_id,
				zhaoteacher:this.AddList.zhaoteacher,
				life_desc:this.AddList.life_desc,
				hobby:this.AddList.hobby,
				te_id:this.AddList.te_id,
				starttime:this.AddList.starttime,
				endtime:this.AddList.endtime,
				health_desc:this.AddList.health_desc,
				jie_state:this.AddList.jie_state,
				other_desc:this.AddList.other_desc,
				source_id:this.AddList.source_id,
				tuo:this.AddList.tuo,
				tuo_zhou:this.AddList.tuo_zhou,
				can:this.AddList.can,
				can_zhou:this.AddList.can_zhou,
				xiao:this.AddList.xiao,
				xiao_zhou:this.AddList.xiao_zhou,
				qi:this.AddList.qi,
				qi_zhou:this.AddList.qi_zhou,
				student_img:this.AddList.student_img,
				admin_id:cookieId
			}
				
//				
				
			).then((data)=>{
				console.log(this.AddList);
//				alert(1111);
				console.log(data);
//				console.log(this.$refs.addParent.value);
			})
		},
		getStudent(){
			var cookieId=Cookies.get("cookieId");
			axios.post("/api/index.php/Api/Student/student_get",{
				admin_id:cookieId
			}).then(({data})=>{
				this.studentsList=data.data;
//				console.log(data.data);
			})
		}
  },
  created(){
//	this.AddSource();
  	this.getStudent();
  }
}
</script>

<style scoped>
	*{
		margin:0;
		padding:0;
	}
	.AddSource{
		width: 1200px;
		margin: 0 auto;
		position: relative;
		background: #f2f5f5;		
	}
	.addsource{
		height:1300px;
		width:912px;
		position: absolute;
		top: 0;
		left: 285px;		
	}
	.addsource_content{
		width:912px;
		border:1px solid #dcdcdc;
		border-radius: 6px;
		margin-top:15px;
	}
	.addsource .header{
		width:912px;
		height:60px;
		border-bottom:1px solid #CCCCCC;
		text-align: left;
	}
	.addsource .header h4{
		line-height: 60px;
		font-size:26px;
		font-weight: normal;
		color:#353535;
		font-family: "MicrosoftYaHeiLight";
		padding-left:15px;
	}
	.addsource .top{
		height:40px;
		line-height: 40px;
		padding-left:15px;
		margin:15px 0;
	}
	.addsource .top span{
		float: left;
		font-size:22px;
	}
	.addsource .top ul{
		float: left;
		margin-top:10px;
	}
	.addsource .top ul li{
		float: left;
		margin-left:30px;
		width:113px;
		height:24px;
		text-align: center;
		line-height: 24px;
		border-radius: 5px;
	}
	.addsource .top .one{
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
	.parent table th{
		padding: 5px 0;
		border:1px solid #9BC248;
		vertical-align:middle;
	}
	.parent table td{
		height:35px;
		border:1px solid #9BC248;
	}
	.parent table td input{
		width: 100%;
		line-height:35px;
		border: none;
		text-align: center;
		font-size:15px;
	}
	.studystate{
		height:30px;
		line-height: 30px;
		margin-top:15px;
		padding-left:15px;
		text-align: left;
	}
	.studystate>span{
		float: left;
		font-size:22px;
		margin-right:20px;
	}
	.studystate input{
		margin-left:10px;
	}
	.belong{
		margin-top:15px;
		line-height: 45px;
	}
	.belong .right{
		width:750px;
		height:45px;
	}
	.belong>span{
		float: left;
		font-size:22px;
		width:90px;
	}
	.belong .txt{
		display: inline-block;
		margin-left:15px;
	}
	.belong .txt select{
		width:100px;
		height:25px;
		margin-left:10px;
		border:1px solid #9BC248;
	}
	.describe{
		height: 150px;
		margin-top:15px;
		padding-left:15px;
	}
	.describe span{
		float: left;
		font-size:22px;
		margin-right:15px;
	}
	.describe textarea{
		display: inline-block;
		width:548px;
		height:120px;
		float: left;
		resize:none;
	}
	.Hobby{
		min-height: 100px;
		height:100px !important;
		height:100px;
		padding-left:15px;
	}
	.Hobby>span{
		float: left;
		font-size:22px;
		margin-right:15px;
	}
	.hobby{
		width:550px;
		height:100px;
		float: left;
		border:1px solid #cccccc;
	}
	.hobby1{
		float: left;
		margin-right:20px;
	}
	.hobby1 input{
		font-size:15px;
		width:100px;
		text-align: center;
		height:25px;
		border:0;		
	}
	.speciality{
		height:80px;
		margin-top:20px;
		padding-left:15px;
	}
	.speciality span{
		float: left;
		font-size:22px;
		margin-right:15px;
	}
	.speciality table{
		text-align: center;
		width:550px;
		height:60px;
		border-collapse: collapse;
	}
	.speciality table th{
		border:1px solid #9BC248;
		padding: 5px 0;
		vertical-align:middle;
	}
	.speciality table td{
		border:1px solid #9BC248;		
	}
	.speciality table td input{
		width:100%;
		height:100%;
		border:none;
	}
	.Health{
		height:70px;
		padding-left: 15px;
	}
	.Health>span{
		float: left;
		font-size:22px;
		margin-right:15px;
	}
	.health{
		width:550px;
		height:68px;
		float: left;
		padding-left:15px;
		border:1px solid #cccccc;
	}
	.health1{
		float: left;
		margin-right:20px;
	}
	.health1 input{
		font-size:15px;
		width:70px;
		text-align: center;
		height:25px;
		border:0;
		
	}
	.way{
		height:30px;
		line-height: 30px;
		margin-top:15px;
		padding-left:15px;
		text-align: left;
	}
	.way>span{
		float: left;
		font-size:22px;
		margin-right:15px;
	}
	.way input{
		margin-left:10px;
	}	
	.reason{
		height:80px;
		padding-left:15px;
		margin-top:10px;
	}
	.reason span{
		float: left;
		font-size:22px;
		margin-right:15px;
	}
	.reason table{
		text-align: center;
		width:550px;
		height:60px;
		border-collapse: collapse;
	}
	.reason table th{
		padding: 5px 0;
		border:1px solid #9BC248;
		vertical-align:middle;
	}
	.reason table td{
		border:1px solid #9BC248;
	}
	.reason table td input{
		width: 100%;
		height: 100%;
		border: none;
	}
	.AddSubmission{
		width: 100%;
		text-align: center;
	}
	.AddSubmission button{
		width: 148px;
		height: 35px;
		background: #9BC248;
		line-height:35px;
		text-align: center;
		border-color: #9BC248;
		color: #fff;
		font-size: 16px;
		margin: 15px 0;
		border: 0;
		border-radius: 5px;
	}
</style>
<style>	
	.AddSource .el-radio__input.is-checked+.el-radio__label{
		color: #9BC248;
	}
	.AddSource .el-radio__input.is-checked .el-radio__inner{
		border-color:#9bc248;
		background: #9bc248;
	}
	.AddSource .el-radio__inner:hover {
     border-color: #9BC248; 
	}
</style>