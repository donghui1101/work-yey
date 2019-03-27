// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import Login from './Login'
import router from './router'
import base from "@/assets/sass/base.scss"
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-chalk/index.css'
window.echarts = require('echarts');
// 引入echarts
import echarts from 'echarts'
Vue.prototype.$bus=new Vue()
Vue.prototype.$echarts = echarts 
import { Datetime, Group } from 'vux'
Vue.component(Datetime.name, Datetime);
Vue.component(Group.name, Group);
Vue.use(ElementUI)
Vue.config.productionTip = false
new Vue({
	
  el: '#app',
  data(){
	return{
		show:localStorage.state ? true : false
	}
  },
  router,
  components: {Login,App},
	mounted(){
		this.$bus.$on('show',e=>{
			console.log(this.show);
			this.show=e;
		})
//		console.log(state);
	},
	template: `<components :is="this.show?'App':'Login'"/>`,
})
