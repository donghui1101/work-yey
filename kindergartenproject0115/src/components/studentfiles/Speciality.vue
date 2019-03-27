<template>
	<div class="speciality">
		<div class="specialityContent">
			<div class="sharingTitle">
				<h3>学生档案</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>特长管理</h3>
				</div>
				<div class="specialityTable">
					<table class="sharingTable">
						<tr>
							<th>名称</th>
							<th>授课人</th>
							<th>课程费用</th>
							<th>收入比例</th>
							<th>支出比例</th>
							<th>月课时</th>
							<th>配课老师</th>
							<th>课时一</th>
						</tr>
						<tr class="sharingTablecolor_one" v-for="item in SpecialityList">
							<td>{{item.name}}</td>
							<td>{{item.ren_name}}</td>
							<td>{{item.money}}</td>
							<td>{{item.Incomep}}</td>
							<td>{{item.spendp}}</td>
							<td>{{item.class_num}}</td>
							<td>{{item.ren_name2}}</td>
							<td v-for="items in timeList">{{items.time}}</td>
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
  	name: 'speciality',
  	data(){
  		return {
  			SpecialityList:[],
  			timeList:[]
  		}
  	},
  	methods:{
  		SpecialityManage(){
    		var cookieId=Cookies.get("cookieId");
    		axios.post("/api/index.php/api/Speciality/index",{
    			admin_id:cookieId
    		}).then(({data})=>{
    			this.SpecialityList=data.data;
    			for(let i=0;i<this.SpecialityList.length;i++){
    				this.timeList=this.SpecialityList[i].time;
    			}
    			console.log(this.SpecialityList.length,66666);
    			console.log(this.timeList,9999);
    			console.log(data,3333);
//  			console.log(data.data.class);
    		})
    	},
  	},
  	created(){
  		this.SpecialityManage();
  	}
}
</script>

<style scoped lang="scss">
  	 /*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.speciality{
  		width: 1200px;
  		margin: 0 auto;
  		position:relative;
  		.specialityContent{
  			width:912px;
  			position:absolute;
  			top:0;
  			left:285px;
  			.specialityTable{
  				width: 100%;
  				margin-bottom: 15px;
  				overflow-x:scroll;
  				table{
  					width:1247px;
  				}
  			}
  			
  		}
  	}
</style>