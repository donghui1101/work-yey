<template>
	<div class="reservefund">
		<div class="reservefundContent">		
			<div class="sharingTitle">
				<h3>园所经营</h3>
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>园所备用金</h3>
							<div class="sharingLink">
							<form ref="addReservefund">
							<el-button type="text" @click="addReservefundcenterVisible = true">园所备用金添加</el-button>
							<el-dialog  title="添加备用金" :visible.sync="addReservefundcenterVisible">
								<div class="demo-input-suffix">
									<span>前台备用金：</span>
									<el-input v-model="addReservefund.input1" placeholder="请输入内容" name="chu_money"></el-input>
								</div>
								<div class="demo-input-suffix">
									<span>现金收入:</span>
									<el-input v-model="addReservefund.input2" placeholder="请输入内容" name="cash"></el-input>
								</div>
								<div class="demo-input-suffix">
									<span>刷卡收入:</span>
									<el-input v-model="addReservefund.input3" placeholder="请输入内容" name="card"></el-input>
								</div>			
								<div class="demo-input-suffix">
									<span>支付宝缴费:</span>
									<el-input v-model="addReservefund.input4" placeholder="请输入内容" name="alipay"></el-input>
								</div>			
								<div class="demo-input-suffix">
									<span>银行卡批扣:</span>
									<el-input v-model="addReservefund.input5" placeholder="请输入内容" name="deduction"></el-input>
								</div>
								<div class="demo-input-suffix">
									<span>银行通收入:</span>
									<el-input v-model="addReservefund.input6" placeholder="请输入内容" name="silver"></el-input>
								</div>			
								<div class="demo-input-suffix">
									<span>微信收入:</span>
									<el-input v-model="addReservefund.input7" placeholder="请输入内容" name="weixin"></el-input>
								</div>
								<div class="demo-input-suffix">
									<span>现金支出:</span>
									<el-input v-model="addReservefund.input8" placeholder="请输入内容" ></el-input>
								</div>
								<div class="demo-input-suffix">
									<span>银行转账给集团:</span>
									<el-input v-model="addReservefund.input9" placeholder="请输入内容"></el-input>
								</div>
								<div class="demo-input-suffix">
									<span>前台备用金现金结余:</span>
									<el-input v-model="addReservefund.input10" placeholder="请输入内容" name="yu_money"></el-input>
								</div>
	  							<div slot="footer" class="dialog-footer">
	    							<el-button @click="addReservefundcenterVisible = false">取 消</el-button>
	    							<el-button type="primary" @click="addReservefundcenterVisible= false;addreservefund()">确 定</el-button>
	  							</div>
							</el-dialog>
							</form>
						</div>
				</div>
				<div class="distribution">
					<ul class="park">
						<h3>所属园区:</h3>
						<li class="style">全部</li>
            <li v-for="(item,index) in list1" :key="item.id" @click="classDetail(item.id)">{{item.name}}</li>
					</ul>
					<ul class="park">
						<h3>所属班级:</h3>
						<li class="style">全部</li>
            <li v-for="item in listdetail" :key="item.id">{{item.name}}</li>
					</ul>							
				</div>
				<div class="reservefundTable">
					<table class="sharingTable">
						<tr>
							<th>日期</th>
							<th>前台备用现金</th>
							<th>现金收入</th>
							<th>刷卡收入</th>
							<th>支付宝缴费</th>
							<th>银行卡批扣</th>
							<th>银校通收入</th>
							<th>微信收入</th>
							<th>现金支出</th>
							<th>银行转账给集团</th>
							<th>前台备用现金结余<br/>（不含刷卡收入）</th>
						</tr>
						<tr class="sharingTablecolor_one" v-for="item in list" :key="item.id">
							<td>{{item.addtime}}</td>
							<td>{{item.chu_money}}</td>
							<td>{{item.cash}}</td>
							<td>{{item.card}}</td>
							<td>{{item.alipay}}</td>
							<td>{{item.deduction}}</td>
							<td>{{item.silver}}</td>
							<td>{{item.weixin}}</td>
							<td>{{item.chu_money}}</td>
							<td>{{item.transfer}}</td>
							<td>{{item.yu_money}}</td>
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
  name: 'reservefund',
  data () {
    return {
      list:[],
      list1:[],
      list2:[],
      listdetail:[],
      addReservefund:{
      	input1:'',
	      input2:'',
	      input3:'',
	      input4:'',
	      input5:'',
	      input6:'',
	      input7:'',
	      input8:'',
	      input9:'',
	      input10:''
      },
      addReservefundcenterVisible:false
    }
  },
  methods:{
    getLista(){
      var cookieId = Cookies.get("cookieId");
      axios.post("api/index.php/api/Spare/index", {
        admin_id: cookieId,
      })
        .then((
          body
        ) => {
          this.list = body.data.data.data;
          console.log(body)
        })
    },
    getListb(){
      var cookieId = Cookies.get("cookieId");
      axios.post("/api/index.php/api/Spare/getlistdata", {
        admin_id: cookieId
      })
        .then((
          body
        ) => {
          this.list1 = body.data.data.ji;
          console.log(body.data.data,888888)


        })
    },
    classDetail(id){
    	var cookieId = Cookies.get("cookieId");
    	axios.post("/api/index.php/api/base/getclass",{
    		admin_id: cookieId,
    		garden_id:id
    	}).then(({data})=>{
    		this.listdetail=data.data;
    		console.log(data,8888999);
    	})
    },
    addreservefund(){
    	alert(1111);
    	var cookieId = Cookies.get("cookieId");
    	var formData = new FormData(this.$refs.addReservefund);
    	axios.post("/api/index.php/api/Spare/create",{
    			chu_money:this.input1,
    			cash:this.addReservefund.input2,
    			card:this.addReservefund.input3,
    			alipay:this.addReservefund.input4,
    			deduction:this.addReservefund.input5,
    			silver:this.addReservefund.input6,
    			weixin:this.addReservefund.input7,
    			expend:this.addReservefund.input8,
    			transfer:this.addReservefund.input9,
    			yu_money:this.addReservefund.input10,
    			admin_id: cookieId
    	}).then(({data})=>{
    		console.log(data,66666)
    	})
    }
  },
  created(){
    this.getLista();
    this.getListb();
    this.classDetail();

  },
}


</script>

<style scoped lang="scss">
  	 /*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.reservefund{
  		width: 1200px;
  		/*margin: 0 auto;*/
  		position: relative;
  		.reservefundContent{
  			width:912px;
  			position:absolute;
  			top:0;
  			left:285px;
  			.reservefundTable{
  				width: 100%;
  				margin-top: 15px;
  				margin-bottom: 15px;
  				overflow-x:scroll;
  				table{
  					width:1255px;
  				}
  			}
  		}
  	}
  	.distribution li{
  		cursor: pointer;
  	}
</style>
