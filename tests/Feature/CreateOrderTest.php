<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Order;
class CreateOrderTest extends TestCase
{

    /**                                                                                                                                                                                                                                                                                                                           
     * Test Create Order
     *
     * @return void
     */
    public function testCreateOrder()
    {
    	
        $user = factory(User::class)->create();
        $apiToken = $user->createToken('TestApi')->accessToken;
    	$request=[
    		'pickup_address_1'=>'283 Alfred Street',
    		'pickup_suburb'=>'North Sydney',
    		'pickup_postcode'=>'2060',
    		'delivery_address_1'=>'143 Pitt Street',
    		'delivery_suburb'=>'Sydney',
    		'delivery_postcode'=>'2000',
            'vendor_id'=>1
    	];
    	$response = $this->withHeaders([
    		'Authorization'=>'Bearer '.$apiToken
    	])->json('POST','/api/v1/orders',$request);
    	
    	
        $response->assertStatus(200)->assertJson([
        	'status'=>'ok'
        ]);
    }
}
