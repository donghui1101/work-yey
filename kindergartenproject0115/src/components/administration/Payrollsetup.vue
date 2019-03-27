<template>
	<div class="payrollsetup">
		<div class="payrollsetupContent">
			<div class="sharingTitle">
				<h3>设置</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>工资表设置</h3>
					<div class="sharingLink">
						<span>计算公式</span>
					</div>
				</div>
				<div class="payrollsetupTable">
					<table class="sharingTable">
						<tr >
							<th>岗位级别</th>
							<th>薪酬级别</th>
							<th v-for="items in Speciality">{{items.pay_name}}</th>
							<th>工资分布</th>
						</tr>
						<!--<tr class="sharingTablecolor_one" v-for="item in SpecialityList">
							<td>{{item.o_id}}</td>
							<td>{{item.ji_id}}</td>
							<td>Data</td>
							<td v-for="item in multipleList">{{item}}</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
							<td>Data</td>
						</tr>-->
						<tr class="sharingTablecolor_one" v-for="item in SpecialityList">
							<td>{{item.o_id}}</td>
							<td>{{item.jibie_id}}</td>
							<td v-for="item1 in item.multiple">{{item1}}</td>
							<!--<td v-for="item2 in this.multipleList.length">&nbsp;</td>-->
							<td>{{item.qj}}</td>
						</tr>
					</table>
					<table class="sharingTable">
						<tr >
							<th>岗位级别</th>
							<th>薪酬级别</th>
							<th v-for="items in Speciality">{{items.pay_name}}</th>
							<th>工资分布</th>
						</tr>
						<tr class="sharingTablecolor_one" v-for="item in SpecialityList">
							<td>{{item.o_id}}</td>
							<td>{{item.jibie_id}}</td>
							<td v-for="(item1,index) in item.price">{{item1}}</td>
							<td v-for="item2 in 10-item.price.length">&nbsp;</td>
							<td>{{item.qj}}</td>
						</tr>
					</table>
				</div>
				<div class="payrollsetupSave">
					<button>保存</button>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
import axios from 'axios';
import Cookies from 'js-cookie'
export default {
  	name: 'payrollsetup',
  	data(){
  		return {
  			SpecialityList:[],
  			timeList:[],
  			Speciality:[],
//			priceList:[],
			multipleList:[],
  			price:[]
  		}
  	},
  	methods:{
  		Manage(){
    		var cookieId=Cookies.get("cookieId");
    		axios.post("/api/index.php/api/pay/info",{
    			admin_id:cookieId
    		}).then(({data})=>{
    			console.log(data.data)
//  			this.list = data.data;
    			this.SpecialityList=data.data;
//  			this.timeList=data.data;
//  			for(var i=0;i<this.SpecialityList.length;i++){
//  				this.priceList = this.SpecialityList[i].price
//						this.multipleList = this.SpecialityList[i].multiple
//  			}
//  			console.log(this.priceList)
//  			console.log(this.multipleList)
//  			for(var i=0;i<this.multipleList.length;i++){
//  				console.log(this.multipleList[i])
//  			}
//  			this.multiple=data.data.data.multiple;
//  			this.timeList=data.data[0].time;
//  			console.log(this.timeList,9999);
					
//  			console.log(data.data.class);
    		})
    	},
    	Manage1(){
    		var cookieId=Cookies.get("cookieId");
    		axios.post("/api/index.php/api/pay/dang",{
    			admin_id:cookieId
    		}).then((data)=>{
    			this.Speciality=data.data.data;
//  			this.timeList=data.data[0].time;
//  			console.log(this.timeList,9999);
//  			console.log(data,3333666);
    			console.log(this.Speciality);
    		})
    	},
  	},
  	created(){
  		this.Manage();
  		this.Manage1();
  	}
}
</script>

<style scoped lang="scss">
  	 /*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.payrollsetup{
  		width:1200px;
  		margin: 0 auto;
  		position:relative;
  		.payrollsetupContent{
  			width:912px;
  			position:absolute;
  			top:0;
  			left:285px;
  			.payrollsetupTable{
  				width:100%;
  				overflow-x: scroll;
  				table{
  					width:1200px;
  					margin-top: 15px;
  				}
  			}
  			.payrollsetupSave{
  				width: 912px;
  				text-align: center;
  				button{
  					width: 150px;
  					height: 38px;
  					margin: 30px auto;
  					background: #9BC248;
  					color: #fff;
  					font-size: 18px;
  					border: none; 
  					border-radius: 6px;					
  				}
  			}
  		}
  	}
</style>