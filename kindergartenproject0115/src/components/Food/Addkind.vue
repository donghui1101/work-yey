<template>
  <div class="Addkind" >
    <div class="addKind">
      <div class="sharingTitle">
        <h3>菜品管理</h3>
      </div>
      <div class="addKind_header">
        <h3>添加菜品</h3>
      </div>
      <div class="content">
        <div class="top">
          <div class="data">333</div>
        </div>
        <div class="change">
          <ul>
            <li>星期一</li>
            <li>星期二</li>
            <li>星期三</li>
            <li>星期四</li>
            <li>星期五</li>
          </ul>
          <div class="addkind">
            <div class="title">
              <h2>早餐食谱</h2>
            </div>
            <div class="kind">
              <div class="choose" v-for="item in lista" :key="item.id">
                <div class="choose1">
                  <span>{{item.name}}:</span>
                </div>
                <select name="" class="choice">
                  <option value="1">选择食材1</option>

                  <option :value="ite.id" v-for="ite in listb" :key="ite.id">{{ite.name}}</option>
                </select>
                <select name="" class="choice">
                  <option value="2">选择食材2</option>
                  <option :value="ite.id" v-for="ite in listb" :key="ite.id">{{ite.name}}</option>

                </select>
                <select name="" class="choice">
                  <option value="3">选择食材3</option>
                  <option :value="ite.id" v-for="ite in listb" :key="ite.id">{{ite.name}}</option>

                </select>
                <div class="choose2">
                  <span>菜品上传图片:</span>
                </div>

                <img src="../../../static/img/food1.png">
              </div>

              <div class="kind1">

              </div>

            </div>
            <div class="title">
              <h2>早点食谱</h2>
            </div>
            <div class="kind">
              <div class="choose" v-for="item in lista" :key="item.id">
                <div class="choose1">
                  <span>{{item.name}}:</span>
                </div>
                <select name="" class="choice">
                  <option value="1">选择食材1</option>

                  <option :value="ite.id" v-for="ite in listb" :key="ite.id">{{ite.name}}</option>
                </select>
                <select name="" class="choice">
                  <option value="2">选择食材2</option>
                  <option :value="ite.id" v-for="ite in listb" :key="ite.id">{{ite.name}}</option>

                </select>
                <select name="" class="choice">
                  <option value="3">选择食材3</option>
                  <option :value="ite.id" v-for="ite in listb" :key="ite.id">{{ite.name}}</option>

                </select>
                <div class="choose2">
                  <span>菜品上传图片:</span>
                </div>

                <img src="../../../static/img/food1.png">
              </div>

              <div class="kind1">

              </div>

            </div>
            <div class="title">
              <h2>午餐食谱</h2>
            </div>
            <div class="kind">
              <div class="choose" v-for="item in lista" :key="item.id">
                <div class="choose1">
                  <span>{{item.name}}:</span>
                </div>
                <select name="" class="choice">
                  <option value="1">选择食材1</option>

                  <option :value="ite.id" v-for="ite in listb" :key="ite.id">{{ite.name}}</option>
                </select>
                <select name="" class="choice">
                  <option value="2">选择食材2</option>
                  <option :value="ite.id" v-for="ite in listb" :key="ite.id">{{ite.name}}</option>

                </select>
                <select name="" class="choice">
                  <option value="3">选择食材3</option>
                  <option :value="ite.id" v-for="ite in listb" :key="ite.id">{{ite.name}}</option>

                </select>
                <div class="choose2">
                  <span>菜品上传图片:</span>
                </div>

                <img src="../../../static/img/food1.png">
              </div>

              <!--<div class="kind1">

              </div>-->

            </div>
            <div class="title">
              <h2>晚餐食谱</h2>
            </div>
            <div class="kind">
              <div class="choose" v-for="item in lista" :key="item.id">
                <div class="choose1">
                  <span>{{item.name}}:</span>
                </div>
                <select name="" class="choice" v-model="kind">
                  <option value="1">选择食材1</option>

                  <option :value="ite.id" v-for="ite in listb" :key="ite.id" >{{ite.name}}</option>
                </select>
                <select name="" class="choice" v-model="kind">
                  <option value="2">选择食材2</option>
                  <option :value="ite.id" v-for="ite in listb" :key="ite.id">{{ite.name}}</option>

                </select>
                <select name="" class="choice" v-model="kind">
                  <option value="3">选择食材3</option>
                  <option :value="ite.id" v-for="ite in listb" :key="ite.id">{{ite.name}}</option>

                </select>
                <div class="choose2">
                  <span>菜品上传图片:</span>
                </div>

                <img src="../../../static/img/food1.png">
              </div>

              <div class="kind1">

              </div>

            </div>

            <div class="a">
              <a href="javascript:;">下一步</a>
            </div>

          </div>
        </div>

      </div>



    </div>
    <div>
      <a href="javascript:;">下一步</a>
    </div>

  </div>



</template>

<script>
  import axios from 'axios';
  export default {
    name: "add-kind",
    data() {
      return {
        lista: [],
        listb: []


      }

    },
    components: {
      //		Index
      //		Login
    },
    created() {
      this.getLista(),
        this.getListb()


    },
    methods: {
      getLista() {
        axios.post("/api/index.php/api/food/menu", {

        }).then((
          body
        ) => {
          this.lista = body.data.data.food_menu_type

        })
      },
      getListb() {
        axios.post("/api/index.php/api/food/menu", {

        }).then((
          body
        ) => {
          this.listb = body.data.data.food_cai

        })
      },
      addCai(){
      	axios.post("/api/index.php/api/food/menu", {
					
        }).then((
          body
        ) => {
          this.listb = body.data.data.food_cai

        })
      }

    },


  }
</script>
<style scoped lang="scss">
  /*引入 基础 样式*/
  @import '../../assets/sass/base.scss'
</style>
<style scoped>
  * {
    margin: 0;
    padding: 0;
  }

  .Addkind {
    width: 1200px;
    margin: 0 auto;
    position: relative;
    background: #FAFAFA;

  }

  .addKind {

    width: 914px;
    position: absolute;
    top: 0;
    left: 285px;
    /*border-radius: 10px;*/
    /*margin:0 auto;*/
    /*background: #cccccc;*/
  }

  .kind {

    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;

    padding-left: 15px;
    padding-right: 15px;
    background: #fcfff4;
  }




  .addKind_header {
    height: 40px;
    text-align: left;
    line-height: 40px;
    text-indent: 15px;
    margin-top: 20px;
    background: #cccccc;

  }

  .addKind_header h3 {
    height: 40px;
    line-height: 40px;
    color: #000000;
    /*background: red;*/
  }

  .content {

    background: #fcfff4;
  }

  .content .top {
    height: 35px;
    line-height: 35px;
    background: #A1CB46;
    text-align: left;
    text-indent: 15px;
  }

  .change ul {
    width: 912px;
    height: 35px;
    line-height: 35px;
    border: 1px solid #cccccc;
    display: flex;
    justify-content: space-around;
    align-items: center;
  }

  .change ul li {
    float: left;
    color: #000000;
    /*text-align: center;*/
    /*	margin-left:112px;*/
  }

  .addkind {
    width: 914px;
    height: 390px;
    background: #fcfff4;
    margin-top: 14px;
  }

  .addkind .title {
    /*width:100%;*/
    height: 40px;
    line-height: 40px;
    /*background: red;*/
  }

  .addkind .title h2 {
    width: 100%;
    height: 40px;
    /*background: blue;*/
    /*float: left;*/
    text-align: left;
    border-bottom: 1px solid #e7f3cc;
    text-indent: 15px;
  }

  .choose {
    width: 165px;
    height: 309px;

    background: #FFFFFF;
    margin-top: 10px;
  }

  .kind1 {
    width: 165px;
    height: 309px;
  }

  .choose1 {
    width: 100%;
    height: 40px;
    line-height: 40px;
    /*background: red;*/
    text-align: left;
    color: #2a2a2a;
    font-size: 18px;
    text-indent: 10px;
  }

  .choose img {
    width: 144px;
    height: 124px;
  }

  .choose2 {
    width: 100%;
    height: 40px;
    line-height: 40px;
    text-align: left;
    margin-top: 10px;
    text-indent: 10px;
  }

  .choice {
    width: 157px;
    height: 25px;
    display: block;
    border-radius: 10px;
    margin-top: 15px;
    border: 1px solid #a7ce52;
    text-indent: 15px;
    font-size: 16px;
    color: #8D8D8D;

  }

  .a {

    width: 141px;
    height: 38px;

    text-decoration: none;
    text-align: center;
    line-height: 38px;
    color: #ffffff;
    background: #A1CB46;
    border-radius: 10px;
    margin-top: 20px;
  }
</style>
GO
