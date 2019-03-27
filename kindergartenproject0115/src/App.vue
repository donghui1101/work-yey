<template>
	<div id="app">
		<el-button type="primary" style="width: 100%;"@click="enterLogin()">退出登录</el-button>
	  <div class="index">
	  	<div class="logo">
			<img src="../static/img/logo1.png" alt="" />
		</div>
		<ul class="cd-accordion-menu animated" >
			<li class="has-children" v-for="(item,index) in list" >
				<input type="checkbox" name ="group-1" :id="getIndex(item.id)">
				<label :for="getIndex(item.id)" @click=" menuId(item.id,item)">{{item.name}}{{item.id}}</label>
				<ul>
					<li class="has-children" v-for="(items,inde) in item.son" :key="inde">
						<input type="checkbox" name ="sub-group-1" :id="getindex(items.id)">
						<label :for="getindex(items.id)" @click="menuId(items.id,items)">{{items.name}}{{items.id}}</label>
						<ul>
							<li class="has-children" v-for="(itemss,ind) in items.son" :key="ind">
								<input type="checkbox" name ="sub-group-level-1" :id="getInd(itemss.id)">
								<label :for="getInd(itemss.id)" @click="menuId(itemss.id,itemss)">{{itemss.name}}{{itemss.id}}</label>
								<ul v-for="itemsss in itemss.son">
									<li @click="menuId(itemsss.id,itemsss)"style="padding-left: 80px;color: #fff;"><a href="#"></a>{{itemsss.name}}</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>	
			</li>
		</ul>
	  </div>
	  <div>
	  <router-view></router-view>
	  </div>
  </div>
</template>

<script>
import Cookies from 'js-cookie' 
import axios from 'axios';
export default {
  name: 'App',
  data(){
  	return{
  		list:[],
  		id:'',
  		for:''
  	}
  	
  },
components:{
},
methods:{
	getList(){
//		console.log(cookieId);
			axios.post("/api/index.php/api/admin/getMenu",{
			}).then(({data})=>{
//				console.log(1111);
//				console.log(data.data);
				this.list=data.data;
//				console.log();
			})
	},
	menuId(id,item,items,itemss,itemsss){
//		Cookies.get("cookieName");
		var cookieId=Cookies.get("cookieId");
		axios.post("/api/index.php/api/base/node",{
			menu_id:id,
			admin_id:cookieId
		}).then(data=>{
			console.log(data.data.state);
			if(data.data.state==1){
				this.$router.push({path:item.route});
//				this.$router.push({path:items.route});
//				this.$router.push({path:itemss.route});
//				this.$router.push({path:itemsss.route});
			}else{
				this.$router.push("/Noauthority");
			}
		})
	},
	getIndex(index){
		return "group-"+index
	},
	getindex(inde){
		return "sub-group-"+inde
	},
	getInd(ind){
		return "sub-group-level-"+ind
	},
	getIn(Index){
		return Index;
	},
//	hanlderRouter(item){
//		this.$router.push({path:item.route})
//		console.log(1111);
//	},
	enterLogin(state){
		localStorage.clear(state);
		this.$router.go(0);
	}

},
created(){
	this.getList();
},
mounted(){
	
}
}
</script>
body{margin: 0 0 0 0;}
*{
	margin: 0;
	padding: 0;
	list-style: none;
}
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  background: white;
  
}
</style>
<style scoped lang="scss">
  	 /*引入 基础 样式*/
  	@import './assets/sass/base.scss';
	.index{
		float:left;
		width:270px;		
		.cd-accordion-menu{
			width: 270px;
			box-shadow: none;
			background:#9bc248;
			height:800px;
			overflow-x:hidden;
			overflow-y:scroll;
			.has-children{
				width: 100%;
				text-align: left;
				line-height: 60px;
				background:#9bc248;
				text-indent: 15px;
			}
		}
	}
	.el-dialog .el-dialog--center{
		width:400px !important;
		height:650px !important;
		padding: 0;
	}
	.el-dialog{
		margin-top:34vh;
	}
	.el-dialog__body{
		font-size:26px !important;
		padding: 0 !important;
	}
</style>