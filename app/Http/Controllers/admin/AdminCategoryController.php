<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $get_categories = Category::orderBy('created_at', 'DESC')->get();
        return view('admin.category.index', compact('get_categories'));
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
            'category_name' => 'required|string|max:255|unique:categories'
        ]);
        try{
            $create = Category::create([
                'category_name' => $request->category_name,
                'category_slug' => Str::slug($request->category_name),
            ]);
            return back()->with('success', 'Category has been added successfully.');
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
        $find = Category::find($id);
        if($find == null){
            return abort(404);
        }

        $find->category_name = $request->category_name;
        $find->category_slug = Str::slug($request->category_name);
        $find->save();
        return back()->with('success', 'Category has been updated successfully');
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
        $find = Category::find($id);
        if($find == null){
            return abort(404);
        }
        $find->delete();
        return back()->with('success', 'category has been deleted successfully');
    }

    public function status($id){
        $find_cat = Category::find($id);
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
