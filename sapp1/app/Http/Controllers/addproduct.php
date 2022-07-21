<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use DB;

class addproduct extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // $category=DB::table('tbl_addcategories')->pluck("catname","id");
    // return view('auth.addproduct',compact('category'));
    public function index()
    {
        $category=DB::table("addcat")->pluck("catname","id");
        return view("auth.addproduct",compact('category'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            "catname"=>'required',
            "pname"=>'required',
            "pimg"=>'required',
            "qty"=>'required',
            "price"=>'required',
            "pdesc"=>'required',
        ]);

        $imgname=rand().'.'.$request->pimg->getClientOriginalExtension(); 
        $request->pimg->move(public_path('uploads/products/'),$imgname);   

        $data=[
            "catid"=>$request->catname,
            "pname"=>$request->pname,
            "pimg"=>$imgname,
            "qty"=>$request->qty,
            "price"=>$request->price,
            "pdesc"=>$request->pdesc
        ];
        product::create($data);
        return redirect('/addproduct')->with('success','Your Products Added successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=DB::table("addproduct")->join("addcat","addproduct.catid",'=',"addcat.id")->select('addproduct.*','addcat.catname')->get();
        return view("auth.manageproduct",['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $edpro=product::where('id',$id)->first();
        return view('auth.editproduct',['edpro'=>$edpro])->with('del','Category deleted successfully');
   
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
        $imgname=rand().'.'.$request->pimg->getClientOriginalExtension(); 
        $request->pimg->move(public_path('uploads/products/'),$imgname);   

        $edpro=[
            "catid"=>$request->catname,
            "pname"=>$request->pname,
            "pimg"=>$imgname,
            "qty"=>$request->qty,
            "price"=>$request->price,
            "pdesc"=>$request->pdesc
        ];
        product::create('id',$id)->update($edpro);
        return redirect('/manageproduct')->with('success','Your Products Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        product::where('id',$id)->delete();
        return redirect('/manageproduct')->with('del','Product deleted successfully');

    }
}
