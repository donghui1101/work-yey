<template>
	<div class="Login">
		<div class="bj">
			<img src="../static/img/bj.jpg" />
		</div>
		<div class="login">
			<el-form :model="loginForm" class="login-container" :rules="rules" ref="loginForm">
		<h3>AI园后台管理系统</h3>
		<el-form-item prop="adminName">
			<el-input type="text" v-model="loginForm.adminName" placeholder="请输入账号" ref="adminName"></el-input>
		</el-form-item>
		<el-form-item prop="adminPass">
			<el-input type="password" placeholder="密码" v-model="loginForm.adminPass"></el-input>
		</el-form-item>
		<el-form-item>
			<el-button type="primary" style="width: 100%;" :loading="isLoading" @click="login()">登录</el-button>
		</el-form-item>
	</el-form>
		</div>
	</div>
		
</template>

<script>
	import md5 from 'md5';
	import axios from 'axios';
	import Cookies from 'js-cookie'
//	Vue.prototype.$bus=new Vue()
	export default{
		name:"login",
		data(){
			var validatePass = (rule, value, callback) => {
				if(value.length<4||value.length>10){
					callback(new Error("请输入4-10位字符"));
				}else{
					callback();
				}
	      };
			return {
				adminName:'',
				adminPass:'',
				key:'',
				admin_id:'',
				user_name:'',
				isLoading:false,
				list:[],
				rules: {
		          adminName: [
		            { required: true, message: '请输入管理员账号', trigger: 'blur' }       
		          ],
		          adminPass: [
		            { required: true, message: '请输入您的密码', trigger: 'blur' },
	//				            { min: 3, max:10, message: '密码长度在 3 到 6 个字符', trigger: 'blur' }
					{ validator: validatePass, trigger: 'blur' }
		          ]
			     },
			     loginForm:{
			     	adminName:"",
			     	adminPass:""
			     }    
			}
		},
		methods: {
			login(){
				axios.post('/api/index.php/api/admin/login',{
			      username:this.loginForm.adminName,
			      password:md5(this.loginForm.adminPass),
			    		  key:md5(this.loginForm.adminName+md5(this.loginForm.adminPass)+'yey')
			            }).then(({data}) => {
//			            		this.$router.push('/');
//			            		console.log(sessionStorage.username);
			                    console.log(data);
//			                    console.log(this);
			            localStorage.state=data.state;
									Cookies.set("cookieName",data.data.user_name);
	     						Cookies.set("cookieId",data.data.admin_id);				                   
			                    if(data.state==1){
			                    	this.$bus.$emit('show','false');
			                    }
//			                    console.log(adminName,password);
			                })
			                .catch(err => {
			                    console.log(err);
			             })
			}

	   }
	}
</script>
<style scoped>
	.login-container{
		width:350px;
		margin-top:300px;
		margin:200px auto;
		border:2px solid deepskyblue;
		padding:35px 35px 15px 35px;
		box-shadow: 0 0 10px deepskyblue;
	}
	.login-container h3{
		height: 30px;
		text-align: center;
	}
	
</style>
<style>
	.login{
		position:absolute ;
		/*z-index: 999;*/
		top: 10%;
		left: 42%;
		margin:0 auto;
	}
	/*.el-form-item.is-error .el-input__inner{
		border-color:#83f9ff;
	}
	.el-input__inner{
		background-color: #83f9ff;
	}*/
	/*body,html{
		width:100%;
		height:100%;*/
		/*background-image: url(../static/img/bj.jpg);*/
	/*}*/
</style>