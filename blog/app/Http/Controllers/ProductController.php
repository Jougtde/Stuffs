<?php
namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use App\Product;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class ProductController
 *
 * @author  The scaffold-interface created at 2016-02-25 01:55:06pm
 * @link  https://github.com/amranidev/scaffold-interfac
 */
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('product.create'
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

        $product = new Product();

        
        $product->title = $input['title'];

        
        $product->content = $input['content'];

        
        
        $product->save();

        return redirect('product');
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
            return URL::to('product/'.$id);
        }

        $product = Product::findOrfail($id);
        return view('product.show',compact('product'));
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
            return URL::to('product/'. $id . '/edit');
        }

        
        $product = Product::findOrfail($id);
        return view('product.edit',compact('product'
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

        $product = Product::findOrfail($id);
    	
        $product->title = $input['title'];
        
        $product->content = $input['content'];
        
        
        $product->save();

        return redirect('product');
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
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/product/'. $id . '/delete/');

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
     	$product = Product::findOrfail($id);
     	$product->delete();
        return URL::to('product');
    }

}
