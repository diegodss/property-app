<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Property;


class PropertyTest extends TestCase
{

	use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_search_property_by_name()
    {

    	$name = "Como";
    	$propertyNotFound = factory(Property::class, 5)->create();
    	$propertyFound2 = factory(Property::class)->create(['name' => 'Comodore']);    	
    	$propertyFound1 = factory(Property::class)->create(['name' => 'The Como']);
    	$results = $this->getJson("/property/search?name={$name}")->json();
        $this->assertCount(2, $results["properties"]);
    }

    public function test_search_property_by_bathroom()
    {

    	$bathroom = "2";
    	$propertyFound = factory(Property::class, 10)->create();
    	$total = Property::where('bathroom', $bathroom)->count();
    	$results = $this->getJson("/property/search?bathroom={$bathroom}")->json();
        $this->assertCount($total, $results["properties"]);
    }

    public function test_search_property_by_bedroom()
    {

    	$bedroom = "2";
    	$propertyFound = factory(Property::class, 10)->create();
    	$total = Property::where('bedroom', $bedroom)->count();
    	$results = $this->getJson("/property/search?bedroom={$bedroom}")->json();
        $this->assertCount($total, $results["properties"]);
    }

    public function test_search_property_by_storey()
    {

    	$storey = "2";
    	$propertyFound = factory(Property::class, 10)->create();
    	$total = Property::where('storey', $storey)->count();
    	$results = $this->getJson("/property/search?storey={$storey}")->json();
        $this->assertCount($total, $results["properties"]);
    }

    public function test_search_property_by_garage()
    {

    	$garage = "2";
    	$propertyFound = factory(Property::class, 10)->create();
    	$total = Property::where('garage', $garage)->count();
    	$results = $this->getJson("/property/search?garage={$garage}")->json();
        $this->assertCount($total, $results["properties"]);
    }

    public function test_search_property_by_combined_filters()
    {

    	$bedroom = "2";
		$bathroom = "2";
		$garage = "2";
		$price = "500-600";

		$priceBetween = explode("-", $price);
   		$min_price = $priceBetween[0];
   		$max_price = $priceBetween[1];

    	$propertyFound = factory(Property::class, 10)->create();
    	$total = Property::whereBetween('price', [$min_price, $max_price])->where('bedroom', $bedroom)->where('bathroom', $bathroom)->where('garage', $garage)->count();

    	$results = $this->getJson("/property/search?price={$price}&bedroom={$bedroom}&bathroom={$bathroom}&garage={$garage}")->json();
        $this->assertCount($total, $results["properties"]);
    }                

}
