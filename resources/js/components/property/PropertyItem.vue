<template>
	<div class="">
		<div class="card">
			<div class="card-body">
				<h3 class="card-title"> {{property.name }}</h3>
				<h4 class="cart-subtitle"> {{ formatPrice (property.price) }}</h4>
				<p class="card-text">
					<span title="Bedrooms"><font-awesome-icon icon="bed" /> {{ property.bedroom }}</span> &nbsp;&nbsp;
					<span title="Bathrooms"><font-awesome-icon icon="bath" /> {{ property.bathroom }}</span> &nbsp;&nbsp;
					<span title="Garage"><font-awesome-icon icon="car" /> {{ property.garage }}</span> &nbsp;&nbsp;
					<span title="Storeys"><font-awesome-icon icon="building" /> {{ property.storey }}</span>
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