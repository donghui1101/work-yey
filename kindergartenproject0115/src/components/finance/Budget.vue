<template>
	<div class="budget">
		<div class="budgetContent">		
			<div class="sharingTitle">
				<h3>园所经营</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>明细账</h3>
				</div>
				<div class="distribution">
					<ul class="park">
						<h3>所属园区:</h3>
						<li class="style">全部</li>
						<li v-for="item in gardenList" @click="ClassList(item.id)" :key="item.id" >{{item.name}}</li>

					</ul>
					<ul class="park">
						<h3>所属班级:</h3>
						<li class="style">全部</li>
            <li v-for="items in classList" :key="items.id" >{{items.name}}</li>

					</ul>
					<ul class="park">
						<h3>资金渠道:</h3>
						<li class="style">全部</li>
						<li>微信</li>
						<li>支付宝</li>
						<li>现金</li>
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
								    v-model="input21" >
								</el-input>
								<el-button class="departureStyle" @click="getLista">搜索</el-button>
							</el-row>
						</div>
					</div>
				</div>
				<div class="budgetTable">
					<table class="sharingTable">
						<tr>
							<th v-model="start">时间</th>
							<th>园所</th>
							<th>操作人</th>
							<th>班级</th>
							<th>姓名</th>
							<th>收入</th>
							<th>支出</th>
							<th>摘要</th>
							<th>现金渠道</th>
							<th>结余</th>
						</tr>
						<tr class="sharingTablecolor_one" v-for="item in list" :key="item.id">
							<td>{{item.addtime}}</td>
							<td>{{item.garden_name}}</td>
							<td>{{item.principal}}</td>
							<td>{{item.class_name}}</td>
							<td>{{item.student_name}}</td>
							<td>{{item.ie_status == 0?item.money:""}}</td>
              <td>{{item.ie_status == 1?item.money:""}}</td>
              <td>{{item.cause_name}}</td>
              <td>{{item.channel==2?"xj":(item.channel==1?"zfb":"wx")}}</td>
              <td>{{item.principal}}</td>
						</tr>
					</table>
				</div>
			</div>
		
		</div>
	</div>
	
</template>

<script>
  import Cookies from 'js-cookie'
  import axios from 'axios';
export default {
  	name: 'budget',
  	data () {
  	
    	return {
    		input21: '',
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
	    				},

	  				}]
				},
				value6: '',
        class_id: '',
        payment:'',
        garden_id:'',
        js_id:'',
        channel:'',
        start:'',
        end:'',
      	list:[],
        list1:[],
        list2:[],
        time:"",
        activeList:[],
      	gardenList:[],
      	classList:[],

    	}


  	},
  created(){
  	 this.ActiveList();
     this.getLista();
     this.ClassList();
  },

 methods:{
    getLista() {
      var cookieId = Cookies.get("cookieId");
      axios.post("api/index.php/api/Detailed/Whole", {
      	admin_id:cookieId,
        class_id:this.class_id,
        garden_id:this.garden_id,
        js_id:this.js_id,
      })
      .then((
        body
      ) => {
      	console.log(body,88888)
        this.list = body.data.data;


console.log(this.value6[1])

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
//  			
  
    	}


  }
}
</script>

<style scoped lang="scss">
  	 /*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.budget{
  		width: 1200px;
  		margin: 0 auto;
  		position: relative;
  		.budgetContent{
  			width:912px;
  			position:absolute;
  			top:0;
  			left:285px;
  			.budgetTable{
  				width: 100%;
  				margin-top: 15px;
  				margin-bottom: 15px;
  				overflow-x: scroll;
  				table{
  					width:986px;
  				}
  			}
  		}
  	}
	
</style>
<style>
	.budget .el-button--text{
		color: #9BC248;
		font-size: 18px;
	}
	.sharingcontent li{
		cursor:pointer;
	}
	.budget .el-date-editor--daterange{
		height: 32px;
		margin-top: 10px;
	}
	.budget .el-input{
		width: 180px;
		height: 32px;
	}
	.budget .el-input__inner{
		height: 32px;
	}
	.budget .el-button{
		padding: 5px 10px;
		height: 32px;
	}
	.budget .departureStyle{
		margin-left: 45px;
	}
</style>
