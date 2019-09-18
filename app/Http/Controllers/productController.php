<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\category;

use View;
class productController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products= products::paginate('5');
        
        return View::make('Backend.products.listproducts',['products'=>$products,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= category::all();
        return view('Backend.products.createproducts',['categories'=>$categories,]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
          'product' =>'required|string',
          'description'=>'string',
          'imagecover'=>'required|file',
          'type'=>'required|string',
          'quantity'=>'required',
          'price'=>'required',

        ]);

        $data = $request->except('_token', '_method');
        $data['imagecover'] = $request->file('imagecover')->store('products', ['disk' => 'public']);
        $data['productname'] = $request->input('product');
        $data['productprice'] = $request->input('price');
        $data['productdescription'] = $request->input('description');
        $data['categoryid'] = $request->input('type');
        $products = new products($data);
        $products->save();

        return redirect()->route('admin.products.index')->with('success','product added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
