<template>
	<div class="specialtystatistics">
		<div class="specialtystatisticsContent">
			<div class="sharingTitle">
				<h3>学生档案</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>特长统计</h3>
					<div class="sharingLink">
						<el-button type="text" @click="addSpecialitycenterVisible = true">特长统计添加</el-button>
						<el-dialog title="上传特长" :visible.sync="addSpecialitycenterVisible">
							<div class="demo-input-suffix">
									<span>特长名称：</span>
								<el-input v-model="input1" placeholder="请输入内容"></el-input>
							</div>
							<div class="demo-input-suffix">
									<span>特长编号：</span>
									<el-input v-model="number" placeholder="请输入内容" readonly="readonly"></el-input>
							</div>			
							<div class="demo-input-suffix">
									<span>授课人：</span>
								<el-input v-model="input3" placeholder="请输入内容"></el-input>
							</div>
							<div class="demo-input-suffix">
									<span>课程费用：</span>
								<el-input v-model="input4" placeholder="请输入内容"></el-input>
							</div>
							<div class="demo-input-suffix">
									<span>支出比例：</span>
								<el-input v-model="input5" placeholder="请输入小数"></el-input>
							</div>
							<div class="demo-input-suffix">
									<span>收入比例：</span>
								<el-input v-model="input6" placeholder="请输入小数"></el-input>
							</div>
							<div class="demo-input-suffix">
									<span>配课老师：</span>
								<el-input v-model="input7" placeholder="请输入内容"></el-input>
							</div>
							<div class="demo-input-suffix">
									<span>月课时：</span>
								<el-input v-model="input8" placeholder="请输入内容"></el-input>
							</div>
							<div class="demo-input-suffix">
									<span>课时展示：</span>
									<div>
										上午:<span v-for="item in MoringtimeList"><input type="checkbox"/>{{item.time}}</span>
									</div>
									<div>
										下午:<span v-for="item in AftertimeList"><input type="checkbox"/>{{item.time}}</span>
									</div>
							</div>
  							<div slot="footer" class="dialog-footer">
    							<el-button @click="addSpecialitycenterVisible = false">取 消</el-button>
    							<el-button type="primary" @click="addSpecialitycenterVisible= false,addSpeciality()">确 定</el-button>
  							</div>
						</el-dialog>
					</div>
				</div>
				<div class="distribution">
					<ul class="park">
						<h3>所属园区:</h3>
						<li class="style">全部</li>
						<li v-for="item in garendList" @click="getClass(item.id)">{{item.name}}</li>
					</ul>
					<ul class="park">
						<h3>所属班级:</h3>
						<li class="style">全部</li>
						<li v-for="items in classList">{{items.name}}</li>
					</ul>
					<ul class="park">
						<h3>所属类别:</h3>
						<li class="style">全部</li>
						<li v-for="item in specialityList">{{item.name}}</li>
					</ul>
					<div class="specialtystatisticsTotal" v-for="item in countList">
						<span >合计人数：<i>{{item.psum}}</i></span>
						<span>合计金额：<i>{{item.msum}}</i></span>
						<span>合计收入：<i>{{item.isum}}</i></span>
						<span>合计支出：<i>{{item.sSum}}</i></span>
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
				</div>
				<div class="specialtystatisticsTable">
					<table class="sharingTable">
						<tr>
							<th>特长名称</th>
							<th>金额</th>
							<th>收入比例</th>
							<th>支出比例</th>
							<th>学习人数</th>
							<th>金额</th>
							<th>收入</th>
							<th>支出</th>
						</tr>
						<tr class="sharingTablecolor_one" v-for="item in specialityShow">
							<td>{{item.name}}</td>
							<td>{{item.money}}</td>
							<td>{{item.Incomep}}</td>
							<td>{{item.spendp}}</td>
							<td>{{item.peoplesum}}</td>
							<td>{{item.moneysum}}</td>
							<td>{{item.shouru}}</td>
							<td>{{item.zhichu}}</td>
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
  	name: 'specialtystatistics',
  	data () {
    	return {
    		input21: '',
    		input1:'',
    		input2:'',
    		input3:'',
    		input4:'',
    		input5:'',
    		input6:'',
    		input7:'',
    		input8:'',
    		number:'',
    		garendList:[],
    		classList:[],
    		specialityList:[],
    		specialityShow:[],
    		MoringtimeList:[],
    		AftertimeList:[],
    		countList:[],
    		arr:[],
    		addSpecialitycenterVisible:false,
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
  		menuShow(){
  			var cookieId=Cookies.get("cookieId");
  			axios.post("/api/index.php/api/base/getJT",{
  				admin_id:cookieId
  			}).then(({data})=>{
  				this.garendList=data.data.garden;
					this.classList=data.data.class;
  				console.log(data,8888);
  			})
  		},
  		getClass(id){
  			alert(id);
  			var cookieId=Cookies.get("cookieId");
  			axios.post("/api/index.php/api/base/getclass",{
  				admin_id:cookieId,
  				garden_id:id
  			}).then(({data})=>{
  				this.classList=data.data;
  				console.log(data,888889999);
  			})
  		},
  		//特长类别
  		getSpeciality(){
  			var cookieId=Cookies.get("cookieId");
  			axios.post("/api/index.php/api/Speciality/getGarden",{
  				admin_id:cookieId
  			}).then(({data})=>{
  				this.specialityList=data.data.name
  				console.log(this.specialityList,888889999);
  			})
  		},
  		//特长展示
  		SpecialityShow(){
  			var cookieId=Cookies.get("cookieId");
  			axios.post("/api/index.php/api/Speciality/show",{
  				admin_id:cookieId
  			}).then(({data})=>{
  				this.specialityShow=data.data;
  				this.countList=data.data.count;
  				console.log(data,888889999111111);
  			})
  		},
  		//获取时间/编号
  		getTime(){
  			var cookieId=Cookies.get("cookieId");
  			axios.post("/api/index.php/api/Speciality/getTime",{
  				admin_id:cookieId
  			}).then(({data})=>{
  				this.number=data.data.number;
  				this.MoringtimeList=data.data.morning;
  				this.AftertimeList=data.data.afternone;
  				console.log(data,88888999911111122222);
  			})
  		},
  		//添加特长
  		addSpeciality(){
			for(var i in this.MoringtimeList){
				this.arr.push(this.MoringtimeList[i].id);
				console.log(this.arr,6666);
			}
			for(var i in this.MoringtimeList){
				this.arr.push(this.AftertimeList[i].id);
			}
  			var cookieId=Cookies.get("cookieId");
  			axios.post("/api/index.php/api/Speciality/create",{
  				admin_id:cookieId,
  				name:this.input1,
  				time:this.arr,
  				ren_name:this.input3,
  				money:this.input4,
  				class_num:this.input8,
  				ren_name2:this.input7,
  				Incomep:this.input6,
  				spendp:this.input5
  			}).then(({data})=>{
  				
  				console.log(data,888889999111111);
  			})
  		}
  	},
  	mounted(){
  		this.menuShow();
  		this.getSpeciality();
  		this.SpecialityShow();
  		this.getTime();
  	}
}
</script>

<style scoped lang="scss">
  	 /*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.specialtystatistics{
  		width: 1200px;
  		margin: 0 auto;
  		position:relative;
  		.specialtystatisticsContent{
  			width:912px;
  			position:absolute;
  			top:0;
  			left:285px;
  			.specialtystatisticsTable{
  				width: 100%;
  				margin-bottom: 15px;
  				overflow-x:scroll;
  				table{
  					width:1030px;
  				}
  			}
  			.specialtystatisticsTotal{
  				width: 100%;
  				text-align: right;
  				line-height: 24px;
  				span{
  					margin-right: 35px;
  				}
  			}
  		}
  	}
</style>
<style>
	.distribution li{
		cursor: pointer;
	}
	.specialtystatistics .el-button--text{
		color: #9BC248;
		font-size: 18px;
	}
	.specialtystatistics .el-date-editor--daterange{
		height: 32px;
		margin-top: 10px;
	}
	.specialtystatistics .el-input{
		width: 180px;
		height: 32px;
	}
	.specialtystatistics .el-input__inner{
		height: 32px;
	}
	.specialtystatistics .el-button{
		padding: 5px 10px;
		height: 32px;
	}
	.specialtystatistics .departureStyle{
		margin-left: 45px;
	}
</style>