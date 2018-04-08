<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewVendorRequest;
use App\Http\Requests\UpdateVendorRequest;
use App\Vendor;
class VendorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = Vendor::orderBy('created_at')->get();

        return ['status'=>'ok','result'=>$vendors];
    }

  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewVendorRequest $request)
    {
         $newVendor = Vendor::create($request->all());
        
        return [
                'status'=>'ok',
                'result'=>$newVendor
            ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vendor = Vendor::find($id);
        if( !$vendor ){
            abort(404,"Can not find a service provider having $id !");
        }

        return [
                'status'=>'ok',
                'result'=>$vendor
            ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVendorRequest $request, $id)
    {
  
        $vendor    = Vendor::find($id);
        if(!$vendor){
            abort(404,"Can not find a service provider having $id !");
        }

        $vendor->fill($request->all());

        $vendor->save();

        return ['status'=>'ok','result'=>$vendor];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vendor = $this->getVendorById($id);
        if($vendor->delete()){
            return ['status'=>'ok'];
        }
    }

     /**
     * Gets Vendor by ID or Throws and excpetion;
     *
     * @param  int  $id
     * @param   \Illuminate\Http\Request  $request
     * @return App\Order 
     * @throws Exception
     */
    private function getVendorById($id=null){
        $vendor = Vendor::find($id);
        if( !$vendor ){
            abort(404,'Can not find an vendor with id '.$id);
        }
        return $vendor;
    }


}
