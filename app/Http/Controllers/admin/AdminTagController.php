<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ProductTag;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class AdminTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $get_tags = ProductTag::orderBy('id','DESC')->get();
        return view('admin.tag.index', compact('get_tags'));
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
        //
        $request->validate([
            'tag_name' => 'required|string|max:255|unique:product_tags'
        ]);
        try{
            $create = ProductTag::create([
                'tag_name' => $request->tag_name,
                'tag_slug' => Str::slug($request->tag_name),
            ]);
            return back()->with('success', 'Tag has been added successfully.');
        }catch(Exception $e){
            return back()->with('error','Error while adding this category');
        }
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
        $find = ProductTag::find($id);
        if($find == null){
            return abort(404);
        }

        $find->tag_name = $request->tag_name;
        $find->tag_slug = Str::slug($request->tag_name);
        $find->save();
        return back()->with('success', 'Tag has been updated successfully');
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
        $find = ProductTag::find($id);
        if($find == null){
            return abort(404);
        }
        $find->delete();
        return back()->with('success', 'Tag has been deleted successfully');
    }
    public function status($id){
        $find_tag = ProductTag::find($id);
        if($find_tag == null){
            return abort(404);
        }
        if($find_tag->status == 1){
            $find_tag->status = 0;
            $find_tag->save();
            return back()->with('success', 'Status Updated');
        }else{
            $find_tag->status = 1;
            $find_tag->save();
            return back()->with('success', 'Status Updated');
        }
    }
}
