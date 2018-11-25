<template>
	<div>
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h1 class="display-4 text-center">Property Search</h1>
				<p class="lead  text-center">This App has as it main objective to search our database for your favorite property</p>
				<property-search v-on:success="update"></property-search>
			</div>
		</div>		
		<div class="container" v-if="properties.length > 0">
			<div class="alert alert-success" role="alert" v-if="search">
			  Your search returned <strong> {{ properties.length }}</strong> results.
			</div>
			<div class="mb-4" v-for="(property, index) in properties">
				<property-item :properties-data="property" :index="index"></property-item>
			</div>
		</div>
		<div class="container" v-else>
			<div class="alert alert-danger" role="alert" >
				Sorry, your search did not find any results
			</div>
		</div>

	</div>
</template>

<script>

import PropertySearch from './PropertySearch.vue';
import PropertyItem from './PropertyItem.vue';

export default {
	components: {
		PropertySearch,
		PropertyItem
	},
	props: ['propertiesData'],
	data() {
		return {
			properties: this.propertiesData,
			search: false,
		}
	},
	methods: {
		update(data){
			this.properties = []; // Clear the current view
			data.properties.forEach((property, index) => {
				this.properties.push(property);
			});
			this.search = true;
		} 
	},
	mounted() {
	}
}

</script>