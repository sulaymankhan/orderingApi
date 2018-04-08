<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\User;
class CreateVendorTest extends TestCase
{
    /**
     * New Vendor Test
     *
     * @return void
     */
    public function testCreateVendor()
    {
        $user = factory(User::class)->create();
  	
        $apiToken = $user->createToken('TestApi')->accessToken;
    
    	$request=[
    		'company_name'=>'ABC COMPANY',
    		'average_processing_time'=>3000,
    	
    	];
    	$response = $this->withHeaders([
    		'Authorization'=>'Bearer '.$apiToken
    	])->json('POST','/api/v1/vendors',$request);
    	
    
        $response->assertStatus(200)->assertJson([
        	'status'=>'ok',
        	'result'=>[
        			'company_name'=>'ABC COMPANY'
        	]

        ]);
    }
}
