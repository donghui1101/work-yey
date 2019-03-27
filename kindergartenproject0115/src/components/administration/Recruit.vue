<template>
	<div class="recruit">
		<div class="recruitContent">
			<div class="sharingTitle">
				<h3>人事管理</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>招聘统计</h3>
					<div class="sharingLink">
						<el-button type="text" @click="RecruitMarkDialogVisible = true">添加招聘</el-button>
						<el-dialog title="添加报表" :visible.sync="RecruitMarkDialogVisible">
							<div class="demo-input-suffix">
								<span>所在园区:</span>
								<select name="" @change="classDetail(gardenId)" v-model="gardenId">
									<option  v-for="item in list1" :key="item.id" :value="item.id">{{item.name}}</option>
								</select>
							</div>
							<div class="demo-input-suffix">
								<span>所在班级:</span>
								<select name="" @change="getPosition(classId)" v-model="classId">
									<option value="1" v-for="items in listdetail" :key="items.id" :value="items.id">{{items.name}}</option>
								</select>
							</div>
							<div class="demo-input-suffix">
								<span>面试者：</span>
								<el-input v-model="recruit_name" placeholder="请输入内容"></el-input>
							</div>
							<div class="demo-input-suffix">
								<span>面试时间:</span>
								<el-date-picker v-model="value2" type="date" placeholder="选择日期"></el-date-picker>
							</div>
							<div class="demo-input-suffix">
								<span>面试职位:</span>
								<select name="" v-model="zhiwei">
									<option  v-for="item in Positiondetail" :key="item.id" :value="item.id">{{item.name}}</option>
								</select>
							</div>	
							<div class="demo-input-suffix">
								<span>面试官:</span>
								<el-input v-model="interviewer" placeholder="请输入内容"></el-input>
							</div>	
							<div class="demo-input-suffix">
								<span>面试结果:</span>
								<select name="" v-model="recruit_status">
									<option value="1">待定</option>
									<option value="2">面试失败</option>
									<option value="3">面试成功</option>
								</select>
							</div>
							<div class="demo-input-suffix">
								<span>备注:</span>
								<textarea v-model="desc"></textarea>
							</div>	
  							<div slot="footer" class="dialog-footer">
    							<el-button @click="RecruitMarkDialogVisible = false">取 消</el-button>
    							<el-button type="primary" @click="RecruitMarkDialogVisible= false,AddRecruit()">确 定</el-button>
  							</div>
						</el-dialog>
					</div>
				</div>
				<div class="recruitTable">
					<table class="sharingTable">
						<tr>
							<th>面试人</th>
							<th>面试时间</th>
							<th>面试职位</th>
							<th>面试官</th>
							<th>面试结果</th>
							<th>备注</th>
						</tr>
						<tr class="sharingTablecolor_one" v-for="item in RecruitList">
							<td>{{item.recruit_name}}</td>
							<td>{{item.recruit_time}}</td>
							<td>{{item.cost_name}}</td>
							<td>{{item.interviewer}}</td>
							<td>
								<!--<select name="">-->
									{{['待定','面试成功','面试失败'][item.recruit_status]}}
								<!--</select>-->
							</td>
							<td><button @click="RecruitDialogVisible =true,ShowPosition(item.recruit_id)">详情</button></td>
						</tr>
					</table>
					<el-dialog title="报表展示及修改" :visible.sync="RecruitDialogVisible">
							<div class="demo-input-suffix">
								<span>备注:</span>
								<textarea v-for="item in showdetail">{{item.desc}}</textarea>
							</div>	
							<div slot="footer" class="dialog-footer">
  							<el-button @click="RecruitDialogVisible = false">取 消</el-button>
  							<el-button type="primary" v-model="UpdateId" :value="UpdateId" @click="RecruitDialogVisible= false,UpdatePosition(UpdateId)">确 定</el-button>
							</div>
						</el-dialog>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
import RecruitMark	from '@/components/studentfiles/RecruitMark'
import axios from 'axios';
import Cookies from 'js-cookie'
export default {
  	name: 'recruitmark',
  	components:{
  		RecruitMark
  	},
  	data(){
  		return{
  			RecruitMarkDialogVisible:false,
  			RecruitDialogVisible:false,
  			RecruitList:[],
  			CreateRecruit:[],
  			list1:[],
  			listdetail:[],
  			Positiondetail:[],
  			showdetail:[],
  			input1:'',
  			input2:'',
  			recruit_name:'',
  			interviewer:'',
  			recruit_status:'',
  			desc:'',
  			classId:'',
  			gardenId:'',
  			UpdateId:'',
  			zhiwei:'',
  			value1: '',
      	value2: '',
      	value3: '',
      	value4: '',
      	value5: '',
  			recruit:{
  				recruitName:'',
  				recruitDate:'',
  				recruitPosition:'',
  				recruitInterview:'',
  				InterviewResult:''
  			},
  			pickerOptions1: {
          		disabledDate(time) {
            		return time.getTime() > Date.now();
          		},
          		shortcuts: [{
            		text: '今天',
            		onClick(picker) {
              			picker.$emit('pick', new Date());
            		}
          		}, {
            		text: '昨天',
            		onClick(picker) {
              			const date = new Date();
              			date.setTime(date.getTime() - 3600 * 1000 * 24);
              			picker.$emit('pick', date);
            		}
          		}, {
            		text: '一周前',
            		onClick(picker) {
              			const date = new Date();
              			date.setTime(date.getTime() - 3600 * 1000 * 24 * 7);
              			picker.$emit('pick', date);
            		}
          		}]
        	}
  		}
  	},
  	methods:{
  		getListb(){
      var cookieId = Cookies.get("cookieId");
      axios.post("/api/index.php/api/base/getJT", {
        admin_id: cookieId
      })
        .then((
          body
        ) => {
          this.list1 = body.data.data.garden;
          this.list1.map((current,index) => {
    				this.gardenId=current.id
    				console.log(current,911111);
    			})
          console.log(this.gardenId,111111);


        })
    },
    classDetail(id){
//  	alert();
    	alert(id);
    	var cookieId = Cookies.get("cookieId");
    	axios.post("/api/index.php/api/base/getclass",{
    		admin_id: cookieId,
    		garden_id:id
    	}).then(({data})=>{
    		this.listdetail=data.data;
    		this.listdetail.map((current,index) => {
    				this.classId=current.id
    				console.log(current,911111);
    			})
    		console.log(data,8888999);
    	})
    },
  		GetRecruit(){
  			var cookieId=Cookies.get("cookieId");
  			axios.post("/api/index.php/api/Staff/recruit",{
  				admin_id:cookieId	
  			}).then(({data})=>{
  				this.RecruitList=data;
  				this.RecruitList.map((current,index) => {
    				switch(current.status){
    					case '0':current.status='待定'
    					  break
    					case '1':current.status='面试成功'
    					  break
    					case '2':current.status='面试失败'
    					  break
    				}
    			})
  				console.log(data);
  			})
  		},
  		AddRecruit(){
  			alert(11111);
  			var cookieId=Cookies.get("cookieId");
  			axios.post("/api/index.php/api/Staff/createRecruit",{
  				admin_id:cookieId,
  				recruit_name:this.recruit_name,
  				interviewer:this.interviewer,
  				position_id:this.zhiwei,
  				recruit_status:this.recruit_status,
  				desc:this.desc,
  				recruit_time:this.value2,
  			}).then(({data})=>{
  				this.CreateRecruit=data;
//				this.RecruitList.map((current,index) => {
//  				switch(current.status){
//  					case '0':current.status='待定'
//  					  break
//  					case '1':current.status='面试成功'
//  					  break
//  					case '2':current.status='面试失败'
//  					  break
//  				}
//  			})
  				console.log(data);
  			})
  	},
  	//获取面试职位
  	getPosition(classId){
  		var cookieId = Cookies.get("cookieId");
    	axios.post("/api/index.php/api/Staff/ajaxPost",{
    		admin_id: cookieId,
    		garden_id:this.gardenId,
    		class_id:this.classId
    	}).then(({data})=>{
    		this.Positiondetail=data;
    		console.log(data,888899900000);
    	})
  		},
  		//展示备注
  		ShowPosition(id){
  			alert(id);
  		var cookieId = Cookies.get("cookieId");
    	axios.post("/api/index.php/api/Staff/recruitRemarks",{
    		admin_id: cookieId,
    		recruit_id:id
    	}).then(({data})=>{
    		this.showdetail=data;
    		this.showdetail.map((current,index) => {
    				this.UpdateId=current.recruit_id;
    		})
    		console.log(this.UpdateId,888899900000);
    	})
  		},
  		//修改
  		UpdatePosition(id){
  			alert(id);
  		var cookieId = Cookies.get("cookieId");
    	axios.post("/api/index.php/api/Staff/updateRemarks",{
    		admin_id: cookieId,
    		recruit_id:id
    	}).then(({data})=>{
    		this.showdetail=data;
    		console.log(data,888899900000);
    	})
  		},
  	},
  	created(){
	    this.getListb();
  		this.GetRecruit();
  		this.getPosition();
  	}
}
</script>

<style scoped lang="scss">
  	 /*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.recruit{
  		width:1200px;
  		margin: 0 auto;
  		position:relative;
  		.recruitContent{
  			width:912px;
  			position:absolute;
  			top:0;
  			left:285px;
  			.recruitTable{
  				width: 100%;
  				table{
  					width:912px;
  					td{
						width: 100px;
						height:40px;
						padding: 2px;
						input{
							width:100%;
							height:100%;
							border: 0;
						}
					}
  					select{
  						border:none;
  						outline: none;
  						font-size: 16px;
  						color: #333;	
  					}
  				}
  			}
  		}
  	}
	
</style>
<style>
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