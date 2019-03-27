<template>
	
</template>
<script>
export default {
  name: 'Index',
  data () {
    return {

    }
  }
//computed:{
//	Index
//}
}
</script>
<script>
//export default {
//  data() {
//    return {
////      tableData: Array(20).fill(item)
//    }
//  }
//};
</script>
<style>
	
	nav.top{
		width: 270px;
	}
	.logo{
		width: 270px;
		height: 77px;
	}
	.logo>img{
		width: 270px;
		height: 77px;
	}
	.aaa{
		width: 270px;
		/*height: 3044px;*/
		height: 800px;
		overflow-y: scroll;
		overflow-x:hidden;
		background: #9bc248;
		margin-top: 12px;
	}
	.el-header {
	    background-color: #B3C0D1;
	    color: #333;
	    line-height: 60px;
  	}
  
  	.el-aside {
    	color: #333;
  	}
	/*.el-submenu__icon-arrow{
		display:none;
	}*/
	.el-submenu__title{
		padding: 0;
	}
	.el-menu{
		background: #9BC248;
		border: none;
	}
	.el-submenu{
		width: 270px;
		text-align: left;
	}
	.el-menu-item:hover{
		background: #9BC248;
	}
	.el-submenu__title{
		font-size: 16px;
		color: #fff;
	}
	/*el-submenu__title*/
	.el-submenu__title:hover{
		background: #9BC248;
	}
	.el-submenu__title>i>img{
		margin-top: -10px;
	}
	.el-submenu__title i {
    	color: #fff;
	}
</style>
<style>
  	.index .el-header {
	    background-color: #B3C0D1;
	    color: #333;
	    line-height: 60px;
  	}  
 	.index .el-aside {
   	 	color: #333;
  	}
  	.index .el-menu-item{
  		font-size: 16px !important;
  		color: #fff;
  	}
  	.index .is-active{
  		font-size: 16px !important;
  	}
 	.index .el-menu-item.is-active {
 		color: #fff;
 		background: #9BC248;
 	}
 	.index .el-icon-arrow-down{
 		color: #fff;
 	}
 	.index .is-opened{
 		background: #9BC248;
 	}
 	.el-dialog__header{
		padding:0 !important;
	}
	.el-dialog__body{
			padding:0 !important;
	}
	.el-dialog__headerbtn .el-dialog__close{
		display: none !important;
	}
</style>