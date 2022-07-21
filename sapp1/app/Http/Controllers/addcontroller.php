<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addmodel;
class addcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("auth.add");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'catname'=>"required",
            'catdesc'=>"required"
            ]);

            $data=[
                'catname'=>$request->catname,
                'catdesc'=>$request->catdesc
            ];
            addmodel::create($data);
            return redirect("/add")->with('success','Thanks for Contact with us We get Mail also our  admin will contact with You Soon!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=addmodel::all();
        return view('auth.manage',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edcat=addmodel::where('id',$id)->first();
        return view('auth.edit',['edcat'=>$edcat])->with('del','Category deleted successfully');
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
        $edcat=[

            'catname'=>$request->catname,
            'catdesc'=>$request->catdesc 
        ];
        addmodel::where('id',$id)->update($edcat);
        return redirect('/manage')->with('success','Your Category Updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        addmodel::where('id',$id)->delete();
        return redirect('/manage')->with('del','Category deleted successfully');
    }
}
