<template>
	<div class="container">

		<div v-if="processing" class="form_loading"></div>
		<form role="form" method="POST" @submit.prevent="onSubmit">
			<div class="form-row">
				<div class="form-group col-md-10">
					<label for="bedroom">Propery Search</label>
					<input type="text" name="name" v-model="form.name" class="form-control"/>
				</div>
				<div class="form-group col-md-2">
					<label for="bedroom">&nbsp;</label>					
					<button type="submit" class="btn btn-primary col-md-12">Search</button>
				</div>
			</div>

			<div class="form-row" v-if="showFilters">
				<!-- BEDROOM -->
				<div class="form-group col-md-2">
				  <label for="bedroom">Bedrooms</label>
				  <select id="bedroom" class="form-control form-control-sm" v-model="form.bedroom">
				    <option value="" selected>Any</option>
				    <option v-for="n in 10" :value="n">{{n}}</option>
				  </select>
				</div>

				<!-- BATHROOM -->
				<div class="form-group col-md-2">
				  <label for="bathroom">Bathrooms</label>
				  <select id="bathdroom" class="form-control form-control-sm" v-model="form.bathroom">
				    <option value="" selected>Any</option>
				    <option v-for="n in 10" :value="n">{{n}}</option>
				  </select>
				</div>

				<!-- STOREYS -->
				<div class="form-group col-md-2">
				  <label for="storey">Storeys</label>
				  <select id="storey" class="form-control form-control-sm" v-model="form.storey">
				    <option value="" selected>Any</option>
				    <option v-for="n in 10" :value="n">{{n}}</option>
				  </select>
				</div>

				<!-- GARAGE -->
				<div class="form-group col-md-2">
				  <label for="garage">Garage</label>
				  <select id="garage" class="form-control form-control-sm" v-model="form.garage">
				    <option value="" selected>Any</option>
				    <option v-for="n in 10" :value="n">{{n}}</option>
				  </select>
				</div>

				<!-- PRICE RANGE -->
				<div class="form-group col-md-2">	  
				  <label for="minprice">Min Price</label>
				  <select id="minprice" class="form-control form-control-sm" v-model="form.minprice">
				    <option value="" selected>Any</option>
				    <option v-for="n in pricerange" :value="n">$ {{ formatPrice(n) }}</option>
				  </select>
				</div>
				<div class="form-group col-md-2">
				  <label for="maxprice">Max Price</label>
				  <select id="maxprice" class="form-control form-control-sm" v-model="form.maxprice">
				    <option value="" selected>Any</option>
				    <option v-for="n in pricerange" :value="n">$ {{ formatPrice(n)}}</option>
				  </select>
				</div>

			</div>
			<div class="form-row">				
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-secondary btn-sm" @click="showFilters = !showFilters" v-if="showFilters">Hide filters bar</button>
					<button type="button" class="btn btn-secondary btn-sm" @click="showFilters = !showFilters" v-if="!showFilters">Show filters bar</button>
					<a href="/" class="btn btn-secondary btn-sm">Reset Filters</a>
				</div>
			</div>

		</form>
	</div>
</template>
<script>

import axios from 'axios';
axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest',
    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
};

export default {
	data(){
		return {
			form: {
				name	: "",
			   	maxprice: "",
			   	minprice: "",
			   	price	: "",			   	
			   	bedroom	: "",
			   	bathroom: "",
			   	storey	: "",
			   	garage	: ""
			},
			pricerange: [200000, 300000, 400000, 500000, 600000],
			processing: false,
			showFilters: true
			
		}
	},
	mounted() {
	},
	methods: {
		onSubmit() {
			this.processing = true;
			this.$emit('success', {properties: []});
			axios.post('/api/property/search', this.form)
				.then(response => {					
					this.$emit('success', {properties: response.data.properties });
					this.processing = false;					
				});
		},
		formatPrice(value) {
	        let val = (value/1).toFixed(2).replace('.', ',')
	        return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
	    }
	}
}	
</script>