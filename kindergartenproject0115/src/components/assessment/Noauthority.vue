<template>
	<div class="Noauthority">
		<div class="NoauthorityContent">
			<h1>你没有权限访问</h1>
		</div>
	</div>
</template>

<script>
	export default{
		name:"Noauthority"
	}
</script>

<style>
	.Noauthority{
		width:1200px;
		margin: 0 auto;
		position: relative;
		.NoauthorityContent{
			width: 912px;
			position: absolute;
			top: 0;
			left: 285px;
		}
	}
</style>