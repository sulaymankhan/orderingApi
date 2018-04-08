<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Vendor;
use App\User;
class DeleteVendorTest extends TestCase
{
    
    /**
     * DELETE Vendor Test
     *
     * @return void
     */
    public function testDeleteVendor()
    {
        $user = factory(User::class)->create();
        $vendor = factory(Vendor::class)->create();
  	
        $apiToken = $user->createToken('TestApi')->accessToken;
    
    	$response = $this->withHeaders([
    		'Authorization'=>'Bearer '.$apiToken
    	])->json('DELETE','/api/v1/vendors/'.$vendor->id);
    	
    
        $response->assertStatus(200)->assertJson([
        	'status'=>'ok',
        

        ]);
    }
}
