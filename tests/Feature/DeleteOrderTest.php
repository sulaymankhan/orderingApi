<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Vendor;
use App\Order;
class DeleteOrderTest extends TestCase
{ /**                                                                                                                                                                                                                                                                                                                           
     * Test Delete Order
     *
     * @return void
     */
    public function testDeleteOrder()
    {
  		$user = factory(User::class)->create();
  		$vendor = factory(Vendor::class)->create();
  		$order = factory(Order::class)->create(['vendor_id'=>$vendor->id,'user_id'=>$user->id]);
        $apiToken = $user->createToken('TestApi')->accessToken;

    	$response = $this->withHeaders([
    		'Authorization'=>'Bearer '.$apiToken
    	])->json("DELETE",'/api/v1/orders/'.$order->id);
    	
    	
        $response->assertStatus(200)->assertJson([
        	'status'=>'ok'
        ]);
    }
}
