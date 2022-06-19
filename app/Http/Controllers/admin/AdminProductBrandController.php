<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ProductBrand;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminProductBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $get_brands = ProductBrand::orderBy('id','DESC')->get();
        return view('admin.brand.index', compact('get_brands'));
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
        //
        $request->validate([
            'brand_name' => 'required|string|max:255|unique:product_brands'
        ]);
        try{
            $create = ProductBrand::create([
                'brand_name' => $request->brand_name,
                'brand_slug' => Str::slug($request->brand_name),
            ]);
            return back()->with('success', 'Brand has been added successfully.');
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
        $find = ProductBrand::find($id);
        if($find == null){
            return abort(404);
        }

        $find->brand_name = $request->brand_name;
        $find->brand_slug = Str::slug($request->brand_name);
        $find->save();
        return back()->with('success', 'Brand has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $find = ProductBrand::find($id);
        if($find == null){
            return abort(404);
        }
        $find->delete();
        return back()->with('success', 'Brand has been deleted successfully');
    }

    public function status($id){
        $find_cat = ProductBrand::find($id);
        if($find_cat == null){
            return abort(404);
        }
        if($find_cat->status == 1){
            $find_cat->status = 0;
            $find_cat->save();
            return back()->with('success', 'Status Updated');
        }else{
            $find_cat->status = 1;
            $find_cat->save();
            return back()->with('success', 'Status Updated');
        }
    }
}
