<template>
	<div class="Caigou">
			<div class="caigou">
				<div class="sharingTitle">
					<h3>菜品管理</h3>
				</div>
				<div class="caigou_bottom">
					<div class="caigou_header">
					<h3>采购清单</h3>
					</div>
				<table>
					<tr>
						<th colspan="4" class="t1">周清单</th>
						<th colspan="4" class="t1">日清单</th>
					</tr>
					<tr>
						<th>食材</th>
						<th class="t1">所需重量</th>
						<th>食材</th>
						<th class="t1">所需重量</th>
						<th>食材</th>
						<th class="t1">所需重量</th>
						<th>食材</th>
						<th class="t1">所需重量</th>
					</tr>
					<tr>
						<td>西红柿</td>
						<td class="t1">100g</td>
						<td>西红柿</td>
						<td class="t1">100g</td>
						<td>西红柿</td>
						<td class="t1">100g</td>
						<td>西红柿</td>
						<td class="t1">100g</td>
					</tr>
					<tr>
						<td>西红柿</td>
						<td class="t1">100g</td>
						<td>西红柿</td>
						<td class="t1">100g</td>
						<td>西红柿</td>
						<td class="t1">100g</td>
						<td>西红柿</td>
						<td class="t1">100g</td>
					</tr>
					<tr>
						<td>西红柿</td>
						<td class="t1">100g</td>
						<td>西红柿</td>
						<td class="t1">100g</td>
						<td>西红柿</td>
						<td class="t1">100g</td>
						<td>西红柿</td>
						<td class="t1">100g</td>
					</tr>
					<tr>
						<td>西红柿</td>
						<td class="t1">100g</td>
						<td>西红柿</td>
						<td class="t1">100g</td>
						<td>西红柿</td>
						<td class="t1">100g</td>
						<td>西红柿</td>
						<td class="t1">100g</td>
					</tr>
				</table>
				</div>
			</div>
		</div>
</template>

<script>
	export default{
		name:"Caigou"
	}
</script>

<style scoped>
	*{
		margin:0;
		padding:0;
	}
	.Caigou{
		width: 1200px;
		margin: 0 auto;
		position: relative;
		background: #f2f5f5;
		
	}

	.caigou{
		height:951px;
		width:912px;
		position: absolute;
		top: 0;
		left: 285px;
		/*margin:0 auto;*/
		/*background: #cccccc;*/
		
	}
	.caigou_bottom{
		height:500px;
		border:1px solid #CCCCCC;
		border-radius: 10px;
		margin-top:20px;
	}
	.caigou_header{
		width:911px;
		height:68px;
		border-bottom:1px solid #CCCCCC ;
	}
	.caigou_header h3{
		line-height: 68px;
		font-size:30px;
		color:#353535;
		font-family: "MicrosoftYaHeiLight";
		padding-left:30px;
		margin-top:15px;
		text-align: left;
	}
	table{
		width:900px;
		/*height:300px;*/
		/*border:1px solid #CCCCCC;*/
		margin:0 auto;
		margin-top:20px;
		text-align: center;
		border-collapse: collapse;
	}
	table tr{
		width:900px;
		height:35px;
		line-height: 35px;
	}
	table th{
		border:1px solid #CCCCCC;
	}
	table td{
		border:1px solid #CCCCCC;
	}
	table .t1{
		background: #faffee;
	}
</style>