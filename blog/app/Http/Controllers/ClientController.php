<?php
namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use App\Client;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class ClientController
 *
 * @author  The scaffold-interface created at 2016-02-25 01:54:43pm
 * @link  https://github.com/amranidev/scaffold-interfac
 */
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('client.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('client.create'
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

        $client = new Client();

        
        $client->first_name = $input['first_name'];

        
        $client->last_name = $input['last_name'];

        
        
        $client->save();

        return redirect('client');
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
            return URL::to('client/'.$id);
        }

        $client = Client::findOrfail($id);
        return view('client.show',compact('client'));
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
            return URL::to('client/'. $id . '/edit');
        }

        
        $client = Client::findOrfail($id);
        return view('client.edit',compact('client'
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

        $client = Client::findOrfail($id);
    	
        $client->first_name = $input['first_name'];
        
        $client->last_name = $input['last_name'];
        
        
        $client->save();

        return redirect('client');
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
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/client/'. $id . '/delete/');

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
     	$client = Client::findOrfail($id);
     	$client->delete();
        return URL::to('client');
    }

}
