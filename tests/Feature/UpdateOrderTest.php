<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Order;
use App\Vendor;
class UpdateOrderTest extends TestCase
{
    /**                                                                                                                                                                                                                                                                                                                           
     * Test Update Order
     *
     * @return void
     */
    public function testUpdateOrder()
    {
    	$user = factory(User::class)->create();
  		$vendor = factory(Vendor::class)->create();
  		$order = factory(Order::class)->create(['vendor_id'=>$vendor->id,'user_id'=>$user->id]);
        $apiToken = $user->createToken('TestApi')->accessToken;
    
    	$request=[
    		'pickup_suburb'=>'Melbourne',
    		'pickup_postcode'=>3000,
    	
    	];
    	$response = $this->withHeaders([
    		'Authorization'=>'Bearer '.$apiToken
    	])->json('PUT','/api/v1/orders/'.$order->id,$request);
    	
    
        $response->assertStatus(200)->assertJson([
        	'status'=>'ok',
        	'result'=>[
        			'pickup_suburb'=>'Melbourne'
        	]

        ]);
    }
}
