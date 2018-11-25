<template>
	<div class="container">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title"> {{property.name }}</h5>
				<h6 class="cart-subtitle"> {{ formatPrice (property.price) }}</h6>
				<p class="card-text">
					Bedroom: {{ property.bedroom }}<br />
					Bathroom: {{ property.bathroom }} <br />
					garage: {{ property.garage }}<br />
					Storey: {{ property.storey }}<br />
				</p>
			</div>
		</div>
	</div>
</template>
<script>
export default{
	props: ['propertiesData'],
	data(){
		return {
			property: this.propertiesData
		}
	},
	mounted() {
		console.log("Property Item Mounted");
	},
	methods: {
		formatPrice(value) {
	        let val = (value/1).toFixed(2).replace('.', ',')
	        return "$ " + val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
	    }
	}
}	
</script>