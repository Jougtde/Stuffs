<?php
namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use App\Image;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class ImageController
 *
 * @author  The scaffold-interface created at 2016-02-25 05:37:40pm
 * @link  https://github.com/amranidev/scaffold-interfac
 */
class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::all();
        return view('image.index',compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('image.create'
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

        $image = new Image();

        
        $image->url = $input['url'];

        
        
        $image->save();

        return redirect('image');
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
            return URL::to('image/'.$id);
        }

        $image = Image::findOrfail($id);
        return view('image.show',compact('image'));
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
            return URL::to('image/'. $id . '/edit');
        }

        
        $image = Image::findOrfail($id);
        return view('image.edit',compact('image'
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

        $image = Image::findOrfail($id);
    	
        $image->url = $input['url'];
        
        
        $image->save();

        return redirect('image');
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
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/image/'. $id . '/delete/');

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
     	$image = Image::findOrfail($id);
     	$image->delete();
        return URL::to('image');
    }

}
