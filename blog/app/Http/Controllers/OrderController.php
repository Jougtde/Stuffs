<?php
namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use App\Order;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Client;


/**
 * Class OrderController
 *
 * @author  The scaffold-interface created at 2016-02-25 01:58:40pm
 * @link  https://github.com/amranidev/scaffold-interfac
 */
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('order.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        $clients = Client::all()->lists('first_name','id');
        
        return view('order.create'
                ,compact(
                'clients'
                )
                );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = Request::except('_token');

        $order = new Order();

        
        $order->title = $input['title'];

        
        
        $order->client_id = $input['client_id'];

        
        $order->save();

        return redirect('order');
    }

    /**
     * Display the specified resource.
     *
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Request::ajax())
        {
            return URL::to('order/'.$id);
        }

        $order = Order::findOrfail($id);
        return view('order.show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Request::ajax())
        {
            return URL::to('order/'. $id . '/edit');
        }

        
        $clients = Client::all()->lists('first_name','id');

        
        $order = Order::findOrfail($id);
        return view('order.edit',compact('order'
                ,
                'clients'
                        )
                );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id)
    {
        $input = Request::except('_token');

        $order = Order::findOrfail($id);
    	
        $order->title = $input['title'];
        
        
        $order->client_id = $input['client_id'];

        
        $order->save();

        return redirect('order');
    }

    /**
     * Delete confirmation message by Ajaxis
     *
     * @link  https://github.com/amranidev/ajaxis
     *
     * @return  String
     */
    public function DeleteMsg($id)
    {
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/order/'. $id . '/delete/');

        if(Request::ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$order = Order::findOrfail($id);
     	$order->delete();
        return URL::to('order');
    }

}
