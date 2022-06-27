<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\ProductBrand;
use App\Models\ProductImages;
use App\Models\Products;
use App\Models\ProductSpecification;
use App\Models\ProductTag;
use App\Models\ProductTagTable;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $getBrandsName = ProductBrand::where('status',1)->orderBy('brand_name','ASC')->get();
        $getCategory = Category::where('status',1)->orderBy('category_name','ASC')->get();
        $getTags = ProductTag::where('status',1)->orderBy('tag_name','ASC')->get();
        // dd($getBrandsName);
        return view('admin.products.create',compact('getBrandsName','getCategory', 'getTags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        //
    //  dd($request->all());
       try{
            $discount_price = ($request->discount * $request->regular_price) / 100;
            $discounted = $request->regular_price - $discount_price;
            $sku = rand(11111111,99999999);
            $last_id = Products::insertGetId([
                'category_id' => $request->category,
                'brand_id' => $request->brand,
                'sku' => $sku,
                'product_name' => $request->product_name,
                'slug' => Str::slug($request->product_name),
                'qty' => $request->qty,
                'discount' => $request->discount,
                'discounted_price' => $discounted,
                'stock_alert' => 5,
                'regular_price' => $request->regular_price,
                'selling_price' => $request->selling_price,
                'description' => $request->short_des,
                'created_at' => Carbon::now()
            ]);
            if($last_id){
                if($request->product_thumbnail){
                    $request->validate([
                        'product_thumbnail' => 'mimes:jpg,png,jpeg'
                    ]);
                    $extension = $request->product_thumbnail->getClientOriginalExtension();
                    $imageName = $last_id.'.'.$extension;
                    // $image_path = public_path('uploads/properties/'.$properties_id->product_thumbnail);
                    // if (file_exists($image_path)) {
                    //     unlink($image_path);
                    // }
                    $prp = Products::find($last_id);
                    $prp->thumbnail = $imageName;
                    $prp->save();
                    $request->product_thumbnail->move(public_path('uploads/products/thumbnails/'), $imageName);
                }
                if($request->product_images)
                {
        
                    foreach($request->product_images as $image)
                    {
                        $extension = $image->getClientOriginalExtension();
                        $name = rand(11111,99999).'.'.$extension;
                        $image->move(public_path().'/uploads/products/images/', $name);
                        
                        ProductImages::create([
                            'product_id' => $last_id,
                            'image' => $name
                        ]);
                    }
                }
                if($request->tags){
                    foreach($request->tags as $tag){
                        ProductTagTable::create([
                            'product_id' => $last_id,
                            'tag_id' => $tag
                        ]);
                    }
                }

                ProductSpecification::create([
                    'product_id' => $last_id,
                    'os' => $request->os,
                    'processor' => $request->pcsr,
                    'processor_tech' => $request->pcsrt,
                    'graphics' => $request->graphics,
                    'memory' => $request->memory,
                    'hard_drive' => $request->hard_drive,
                    'wireless' => $request->wl,
                    'power_supply' => $request->ps,
                    'battery' => $request->battery,
                    'back_cemara' => $request->bc,
                    'front_cemara' => $request->fc,
                    'fingerprint' => $request->fingerprint,
                    'sensor' => $request->sensor,
                    'bluetooth' => $request->blth,
                    'other' => $request->other,
                ]);
               
            }
            return back()->with('success','Product has been added successfully');
        }catch(Exception){
            return back()->with('error','Something wrong');
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
