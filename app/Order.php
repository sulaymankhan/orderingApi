<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\GoogleDirections;
use Carbon\Carbon;
use App\Vendor;
class Order extends Model
{
   protected $fillable=[
   		'pickup_address_1',
   		'pickup_address_2',
   		'pickup_suburb',
   		'pickup_postcode',
   		'delivery_address_1',
   		'delivery_address_2',
   		'delivery_suburb',
   		'delivery_postcode',
      'vendor_id'
   ];


   /* Gets Order Eta Including processing time
     *
     * @return Carbon Datetime
     *@throws \Exception
   */
   public function getEta(){
      $deliveryEta=GoogleDirections::getEstimatedTimeOfArrival( $this->getPickupAddress(),$this->getDeliveryAddress() );


      if( $deliveryEta == false){
             abort(400,'We are not able to delivery to this address! Please check that you have entered a valid pickup or delivery address!');
      }

      //Including vendor's average order processing time
      $etaIncludingProcessingTime = $deliveryEta->addSeconds( $this->getVendorAverageProcessingTime() );

     return $etaIncludingProcessingTime;
   }


   /* Update Eta field in orders table 
      @return void
    */


    public function updateEta(){
      $eta = $this->getEta();

      $this->eta = $eta;
      $this->save();
    }

   /* Get Pickup Address
     *
     * @return String
     */
   public function getPickupAddress(){
      return $this->pickup_address_1." ".$this->pickup_address_2." ".$this->pickup_suburb." ".$this->pickup_postcode." Australia";
   }

   /* Get Delivery Address
     *
     * @return String
     */
   public function getDeliveryAddress(){
      return $this->delivery_address_1." ".$this->delivery_address_2." ".$this->delivery_suburb." ".$this->delivery_postcode." Australia";
   }

   /* Gets and formats the attribute of Eta
     *
     * @return String
   */

   public function getEtaAttribute($value){
      if( !$value ){
         return "Sorry! we can find the estimated time of arrival for your order :( Our Customer's Service will contact you shortly";
      }

      return Carbon::createFromFormat('Y-m-d H:i:s',$value)->diffForHumans($this->created_at,true);
   }



   public function vendor(){
      return $this->belongsTo(Vendor::class);
   }
  /* Gets this order vendor's average processing time in seconds
     *
     * @return Integer 
   */
   public function getVendorAverageProcessingTime(){
      $vendor = $this->vendor()->first();
      if($vendor){
        return $vendor->average_processing_time;
      }

      return false;
   }
}
