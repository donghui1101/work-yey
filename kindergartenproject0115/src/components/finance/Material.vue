<template>
	<div class="material">
		<div class="materialContent">		
			<div class="sharingTitle">
				<h3>园所经营</h3>				
			</div>
			<div class="sharingcontent">
				<div class="sharingcontentTitle">
					<h3>物资保障</h3>	
					<div class="sharingLink">
						<el-button type="text" @click="dialogFormVisible = true">填写物资</el-button>
						<el-dialog title="添加物资" :visible.sync="dialogFormVisible">
							<div class="demo-input-suffix">
								<span>物资名称:</span>
								<el-input v-model="input1" placeholder="请输入内容"></el-input>
							</div>
							<div class="demo-input-suffix">
								<span>出入库情况</span>
								<select name="" v-model="status">
									<option value="1">出库</option>
									<option value="2">入库</option>
								</select>
							</div>
							<div class="demo-input-suffix">
								<span>填写数量：</span>
								<el-input v-model="input2" placeholder="请输入内容"></el-input>
							</div>					
  							<div slot="footer" class="dialog-footer">
    							<el-button @click="dialogFormVisible = false">取 消</el-button>
    							<el-button type="primary"  v-model="garenId" @click="dialogFormVisible = false;save()">确 定</el-button>
  							</div>
						</el-dialog>
					</div>
				</div>
				<div class="distribution">
					<ul class="park" >
						<h3>所属园区:</h3>
						<li class="style">全部</li>
						<li v-for="items in list1 " :key="items.id">{{items.name}}</li>
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
								    v-model="input21">
								</el-input>
								<el-button class="departureStyle" @click="getLista">搜索</el-button>
							</el-row>
						</div>
					</div>
				</div>
			
				<div class="materialTable">
					<table class="sharingTable">
						<tr>
							<th>时间</th>
							<th>凭证号/名称</th>
							<th>入库</th>
							<th>出库</th>
							<th>操作人</th>
            </tr>
						<tr class="sharingTablecolor_one" v-for="item in list" :key="item.id" >
							<td>{{item.addtime}}</td>
							<td>{{item.name}}</td>
              <td>{{item.status == 1?item.number:""}}</td>
              <td>{{item.status == 0?item.number:""}}</td>
							<td>{{item.user_name}}</td>
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
    		input21:'',
    		input1:'',
    		input2:'',
    		status:'',
    		garenId:'',
    		pickerOptions2: {
	          		shortcuts: [{
	    				onClick(picker) {
				      		const end = new Date();
				     		const start = new Date();
				     		start.setTime(start.getTime() - 3600 * 1000 * 24 * 7);
				     		picker.$emit('pick', [start, end]);
			    		}
			  		}, {
					    onClick(picker) {
					      	const end = new Date();
					      	const start = new Date();
					      	start.setTime(start.getTime() - 3600 * 1000 * 24 * 30);
					      	picker.$emit('pick', [start, end]);
					    }
					}, {
	    				onClick(picker) {
	      					const end = new Date();
	      					const start = new Date();
	     		 			start.setTime(start.getTime() - 3600 * 1000 * 24 * 90);
	      					picker.$emit('pick', [start, end]);
	    				}
	  				}]
			},
			value6: '',
        list:[],
        list1:[],
			dialogTableVisible: false,
        	dialogFormVisible: false,	
    	}
  	},
    created(){
      this.getLista(),
      this.getListb()
    },
    methods:{
      getLista() {
        var cookieId = Cookies.get("cookieId");
        axios.post("api/index.php/api/Custody/custs", {
          name:this.input21,
          start:this.value6[0],
          end:this.value6[1],
          admin_id: cookieId,
        })
          .then((
            body
          ) => {
            this.list = body.data.data;
            console.log(body)

          })
      },
      getListb()
      {
        var cookieId = Cookies.get("cookieId");
        axios.post("api/index.php/api/Detailed/Company", {
          admin_id: cookieId,
        })
          .then((
            body
          ) => {
            this.list1 = body.data.data.garden;
						this.list1.map((current,index) => {
    				this.garenId=current.id
    				console.log(this.garenId,911111);
    			})

            console.log(body)

          })
      },
      save(){
      	alert(1111);
      	var cookieId = Cookies.get("cookieId");
      	axios.post("api/index.php/api/custody/index",{
      		admin_id: cookieId, 
      		name:this.input1,
      		status:this.input2,
      		userID:this.garenId
      	}).then(({data})=>{
      		console.log(data);
      	})
      }
    }
}
</script>
<style scoped lang="scss">
  	 /*引入 基础 样式*/
  	@import '../../assets/sass/base.scss';
  	.material{
  		width: 1200px;
  		margin: 0 auto;
  		position: relative;
  		.materialContent{
			width: 912px;
			position: absolute;
			top: 0;
			left: 285px;
			.materialTable{
				width: 100%;
				margin-top: 15px;
				margin-bottom: 15px;
				overflow-x: scroll;
				table{
					width:1018px;					
				}
			}
		}
  	}
</style>
<style>
	.material .el-button--text{
		color: #9BC248;
		font-size: 18px;
	}
	.material .el-date-editor--daterange{
		height: 32px;
		margin-top: 10px;
	}
	.material .el-input{
		width: 180px;
		height: 32px;
	}
	.material .el-input__inner{
		height: 32px;
	}
	.material .el-button{
		padding: 5px 10px;
		height: 32px;
	}
	.material .departureStyle{
		margin-left: 45px;
	}
	.material .el-dialog__header{
		text-align: center;
		font-weight: 600;
		padding: 0;
	}
	.material .demo-input-suffix{
		width:500px;
		margin: 0 auto;
	}
	.demo-input-suffix select{
		width:180px;
		height:32px;
		border: 1px solid #dcdfe6;
		color: #606266;
		padding:0 15px;
	}
	.material .el-dialog__body{
		padding: 0;
	}
	.material .dialog-footer{
		text-align: center;
	}
</style>
