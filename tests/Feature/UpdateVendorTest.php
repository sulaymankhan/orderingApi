<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Vendor;
use App\User;
class UpdateVendorTest extends TestCase
{
     
    /**
     * Update Vendor Test
     *
     * @return void
     */
    public function testUpdateVendor()
    {
        $user = factory(User::class)->create();
        $vendor = factory(Vendor::class)->create();
  	
        $apiToken = $user->createToken('TestApi')->accessToken;
    	$request=[
    		'company_name'=>'New Company Name'
    	];

    	$response = $this->withHeaders([
    		'Authorization'=>'Bearer '.$apiToken
    	])->json('PUT','/api/v1/vendors/'.$vendor->id,$request);
    	
    
        $response->assertStatus(200)->assertJson([
        	'status'=>'ok',
        	'result'=>[
        			'company_name'=>'New Company Name'
        	]
        

        ]);
    }
}
