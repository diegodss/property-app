<?php
namespace App\Filters;

use App\Models\Property;

class PropertyFilters extends Filters {

      protected $filters = [
         "name",         
         "price",
         "bedroom",
         "bathroom",
         "storey",
         "garage"
      ];


      protected function name($value) {
         return $this->builder->where('name', 'like', '%' . $value . '%');
      }

   	protected function price($value) {

   		$priceBetween = explode("-", $value);
   		$min_price = $priceBetween[0];
   		$max_price = $priceBetween[1];
   		return $this->builder->whereBetween('price', [$min_price, $max_price]);
   	}

   	protected function bedroom($value) {
   		return $this->builder->where('bedroom', $value);   		
   	}

   	protected function bathroom($value) {
   		return $this->builder->where('bathroom', $value);
   	}

   	protected function storey($value) {
   		return $this->builder->where('storey', $value);   		
   	}

   	protected function garage($value) {
   		return $this->builder->where('garage', $value);
   	}

}