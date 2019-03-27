import axios from 'axios';
import Vue from 'vue';
var vue=new Vue();
export default{
	state:{
		admin_id:localStorage.admin_id||null,
		username:localStorage.username||null
	},
	mutations:{
		CHANGE_ADMININFO(state,info){
			state.adminId=localStorage.admin_id=info.admin_id;
			state.username=localStorage.username=info.username;
		}
	},
	actions:{
		login({commit,state,getter},{adminName,adminPass,success,error}){
			axios.post('/api/index.php/api/admin/login',{
			            	username:this.loginForm.adminName,
			            	password:md5(this.loginForm.adminPass),
							key:md5(this.loginForm.adminName+md5(this.loginForm.adminPass)+'yey')
			            }).then(({data}) => {
			                    console.log(data);
			                    console.log(this);
			                    if(data.state==1){
//			                    	 console.log(this.state);
			                    	 this.$router.push("/index");
			                 		console.log(1111);
			                    }
//			                    console.log(username,password);
			                })
			                .catch(err => {
			                    console.log(err);
			            })
			}
	}
	
}
