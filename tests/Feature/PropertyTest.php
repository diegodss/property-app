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
    	$results = $this->getJson("/api/property/search?name={$name}")->json();
        $this->assertCount(2, $results["properties"]);
    }

    public function test_search_property_by_bathroom()
    {

    	$bathroom = "2";
    	$propertyFound = factory(Property::class, 10)->create();
    	$total = Property::where('bathroom', $bathroom)->count();
    	$results = $this->getJson("/api/property/search?bathroom={$bathroom}")->json();
        $this->assertCount($total, $results["properties"]);
    }

    public function test_search_property_by_bedroom()
    {

    	$bedroom = "2";
    	$propertyFound = factory(Property::class, 10)->create();
    	$total = Property::where('bedroom', $bedroom)->count();
    	$results = $this->getJson("/api/property/search?bedroom={$bedroom}")->json();
        $this->assertCount($total, $results["properties"]);
    }

    public function test_search_property_by_storey()
    {

    	$storey = "2";
    	$propertyFound = factory(Property::class, 10)->create();
    	$total = Property::where('storey', $storey)->count();
    	$results = $this->getJson("/api/property/search?storey={$storey}")->json();
        $this->assertCount($total, $results["properties"]);
    }

    public function test_search_property_by_garage()
    {

    	$garage = "2";
    	$propertyFound = factory(Property::class, 10)->create();
    	$total = Property::where('garage', $garage)->count();
    	$results = $this->getJson("/api/property/search?garage={$garage}")->json();
        $this->assertCount($total, $results["properties"]);
    }

    public function test_search_property_by_price()
    {
        
        $minprice = "500";
        $maxprice = "600";

        $propertyFound = factory(Property::class, 10)->create();
        $total = Property::whereBetween('price', [$minprice, $maxprice])->count();

        $results = $this->getJson("/api/property/search?minprice={$minprice}&maxprice={$maxprice}")->json();
        $this->assertCount($total, $results["properties"]);
    }   
    public function test_search_property_by_combined_filters()
    {

    	$bedroom  = "2";
		$bathroom = "2";
		$garage   = "2";
        $minprice = "500";
        $maxprice = "600";

    	$propertyFound = factory(Property::class, 10)->create();
    	$total = Property::whereBetween('price', [$minprice, $maxprice])->where('bedroom', $bedroom)->where('bathroom', $bathroom)->where('garage', $garage)->count();

    	$results = $this->getJson("/api/property/search?minprice={$minprice}&maxprice={$maxprice}&bedroom={$bedroom}&bathroom={$bathroom}&garage={$garage}")->json();
        $this->assertCount($total, $results["properties"]);
    }                

}
