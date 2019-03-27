<template>	
	<div class="assetdetails">
		<div class="assetdetailsContent">
			<div class="sharingTitle">
				<h3>园所经营</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>资产明细统计</h3>
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
				</div>
				<div class="assetdetailsTable">
					<table class="sharingTable">
						<tr for="quan">
							<th><input id="quan" type="checkbox" @click="checkAll($event)">全选</th>
							<th>部门</th>
							<th>责任人</th>
							<th>购置时间</th>
							<th>资产</th>
							<th>数量</th>
							<th>单价</th>
							<th>核销数量</th>
						</tr>
						<tr class="sharingTablecolor_one" v-for="item in list" :key="item.id" :id="item.id" @change="getid(item.id)">
							<td><input class="checkItem" type="checkbox" :value="item.id" v-model="checkData"></td>
							<td>{{item.garden_name}}->{{item.class_name}}</td>
							<td>{{item.user_name}}</td>
							<td>{{item.addtime}}</td>
							<td>{{item.name}}</td>
							<td>{{item.number}}</td>
							<td>{{item.price}}</td>
							<td>
                <input type="text"  v-model="rq=item.real_quantity"/>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="assetdetailsSubmission">
				<button @click="getListb">提交审核</button>
			</div>
		</div>	
	</div>
</template>
<script>
  import Cookies from 'js-cookie'
  import axios from 'axios';
	export default{
		name:"assetdetails",
		data () {
    	return {
				id666:"",
				current:0,
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
	    				}
	  				}]
				},
				value6: '',
        garden_id:'',
        class_id:'',
        start:'',
        end:'',
        list:[],
        list1:[],
        list2:[],
        rq:"",
        id:'',
        activeList:[],
      	gardenList:[],
      	classList:[],
      	checkData: [],
//      arr:[],
    }
  	},
    created(){
        this.getLista()
        this.ActiveList();
     		this.ClassList();
    },
watch: {
			checkData: { // 监视双向绑定的数组变化
				handler() {
					if(this.checkData.length == this.list.length) {
						document.querySelector('#quan').checked = true;
					} else {
						document.querySelector('#quan').checked = false;
					}
				},
				deep: true
			}
		},
methods:{
  getLista() {
    var cookieId = Cookies.get("cookieId");
    axios.post("api/index.php/api/money/property_statistics", {
      garden_id: this.garden_id,
      class_id: this.class_id,
      start: this.value6[0],
      end: this.value6[1],
      admin_id: cookieId,
    })
      .then((
        body
      ) => {
        this.list = body.data.data;
				console.log(body);
        console.log(this.value6)
      })
  },
	getid(id){
      this.id=id
      console.log(id);
	},
getListb(id) {
//	var arr=[];
//	for(var i in this.list){
//		this.arr.push(this.list[i].id);
//		console.log(this.arr,6666);
//	}
		console.log(this.list,99999);
    var cookieId = Cookies.get("cookieId");
    axios.post("api/index.php/api/money/real_quantity_add", {
      real_quantity:this.rq,
			id:this.id,
      admin_id: cookieId
    })
      .then((
        body
      ) =>{
        this.list1 = body.data.data.garden;
        this.list2 = body.data.data.class;
        console.log(this.rq)
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
    	checkAll(e) { // 点击全选事件
				if(e.target.checked) {
					this.list.forEach((el, i) => {
						// 数组里没有这一个value才push，防止重复push
						if(this.checkData.indexOf(el.value) == '-1') {
							this.checkData.push(el.value);
						}
					});
				} else { // 全不选选则清空绑定的数组
					this.checkData = [];
				}
			}
	}
}
</script>

<style scoped lang="scss">
  	 /*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.assetdetails{
  		width: 1200px;
  		margin: 0 auto;
  		position: relative;
  		.assetdetailsContent{
  			width:912px;
  			position:absolute;
  			top:0;
  			left:285px;
  			.assetdetailsTable{
  				width: 100%;
  				table{
  					width:880px;
  					margin: 15px auto;
  					.assetdetailsInput{
  						width:80px;
  						height:25px;
  						border:1px solid #dcdcdc;
  						border-radius:5px;
  					}
  				}
  			}
  			.assetdetailsSubmission{
  				width: 100%;
  				text-align: center;
  				button{
  					width:120px;
  					height:38px;
  					margin-top: 40px;
  					border: none;
  					background: #4395FF;
  					color: #fff;
  					font-size: 16px;
  					border-radius: 5px;
  				}
  			}
  		}
  	}
</style>
<style>
	.distribution li{
		cursor: pointer;
	}
	.budget .el-button--text{
		color: #9BC248;
		font-size: 18px;
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

