<?php
namespace App\Filters;

use App\Models\Property;

class PropertyFilters extends Filters {

      protected $filters = [
         "name",         
         "minprice",
         "maxprice",
         "bedroom",
         "bathroom",
         "storey",
         "garage"
      ];


      protected function name($value) {
         return $this->builder->where('name', 'like', '%' . $value . '%');
      }

      protected function minprice($value) {      
         return $this->builder->where('price', '>=', $value);
      }

      protected function maxprice($value) {      
         return $this->builder->where('price', '<=', $value);
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