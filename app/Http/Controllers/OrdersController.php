<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\NewOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Requests\GetOrdersRequest;
use Exception;
use Carbon\Carbon;
use App\Order;
class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GetOrdersRequest $r)
    {
            $result=$r->user()->orders()->orderBy('created_at','desc');

            if( $r->input('from') ){
                $from = Carbon::createFromFormat('d-m-Y',$r->input('from') )->format('Y-m-d H:i:s');
                $result = $result->whereDate('created_at','>',$from);
            }
            if( $r->input('to') ){
                $to = Carbon::createFromFormat('d-m-Y',$r->input('to') )->format('Y-m-d H:i:s');
                $result = $result->whereDate('created_at','<',$to);
            }
            return ['status'=>'ok','result'=>$result->get()];
       
    }


    /**
     * Store a newly created resource in storage.
     *                                                          
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewOrderRequest $request)
    {

            //Before Accepting the order, checking if pickup and delivery directions can be retrieved
            $newOrder = new Order;
            $newOrder->fill($request->all());
            $eta = $newOrder->getEta();
            
            $createdOrder = $request->user()->orders()->create( $request->all() );
            $createdOrder->updateEta();

            

            return [
                'status'=>'ok',
                'result'=>[
                        'reference_id'=> $createdOrder->id,
                        'eta'         => $createdOrder->eta
                ]

            ];
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $order = $this->getOrderById($id,$request);

        return ['status'=>'ok','result'=>$order];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, $id)
    {
        $order = $this->getOrderById($id,$request);

        $order->fill($request->all());
        $order->updateEta();
        $order->save();
        return ['status'=>'ok','result'=>$order];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        $order = $this->getOrderById($id,$request);

        if($order->delete()){
            return ['status'=>'ok'];
        }
    }


     /**
     * Gets order by ID or Throws and excpetion;
     *
     * @param  int  $id
     * @param   \Illuminate\Http\Request  $request
     * @return App\Order 
     * @throws Exception
     */
    private function getOrderById($id=null,$request){
        $order = $request->user()->orders()->find($id);
        if( !$order ){
            abort(404,'Can not find an order with id '.$id);
        }
        return $order;
    }
}
