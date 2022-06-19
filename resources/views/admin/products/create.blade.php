@extends('admin.layouts.app')
@section('title','Create Products')
@section('admin_content')
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item" aria-current="page">Products</li>
                <li class="breadcrumb-item active" aria-current="page">Create A New Products</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <a href="{{ route('admin.manage-products.index') }}" class="btn btn-primary">Go Back</a>
        </div>
    </div>
</div>
<!--end breadcrumb-->
<div class="card">
    <div class="card-body">
        <div class="card-title">
            <h4 class="mb-0">Product Add Form</h4>
        </div>
        <hr/>
        <div class="row">
            <div class="col-xl-10 mx-auto">
               
                <div class="card border-top border-0 border-4 border-primary">
                    <div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                            </div>
                            <h5 class="mb-0 text-primary">Add your product information</h5>
                        </div>
                        <hr>
                        <form class="row g-3" action="{{ route('admin.manage-products.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <label for="inputFirstName" class="form-label">Product Name</label>
                                <input type="text" placeholder="Product Name" class="form-control" id="inputFirstName" name="product_name">
                            </div>
                            <div class="col-md-6">
                                <label for="inputCat" class="form-label">Product Category</label>
                                <select id="inputCat" class="form-select">
                                    <option value="">Choose Category...</option>
                                    @foreach($getCategory as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputBrand" class="form-label">Product Brand</label>
                                <select id="inputBrand" class="form-select">
                                    <option  value="">Choose Brand Name...</option>
                                    @foreach($getBrandsName as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputTags" class="form-label">Product Tags</label>
                                <select class="multiple-select"  data-placeholder="Choose Tags" multiple="multiple">
                                    <option value="">Choose Tags...</option>
                                    @foreach($getTags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->tag_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="inputqty" class="form-label">Product Quantity</label>
                                <input type="number" min="0" placeholder="Product Quantity" class="form-control" id="inputqty" name="qty">
                            </div>
                            <div class="col-md-3">
                                <label for="inputrp" class="form-label">Product Regular Price</label>
                                <input type="number" min="0" placeholder="Regular or Buying Price" class="form-control" id="inputrp" name="regular_price">
                            </div>
                            <div class="col-md-3">
                                <label for="inputd" class="form-label">Price Dicount in (%)</label>
                                <input type="number" min="0"  placeholder="Dicount (optional)" class="form-control" id="inputd" name="discount">
                                <span class="text-primary">If you add dicount product price will consider with dicounted price</span>
                            </div>
                            <div class="col-md-3">
                                <label for="inputsp" class="form-label">Selling Price</label>
                                <input type="number" min="0"  placeholder="Selling Price" class="form-control" id="inputsp" name="selling_price">
                            </div>
                           
                            <div class="col-12">
                                <div class="card radius-15">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h4 class="mb-0">Upload Product Thumbnail</h4>
                                        </div>
                                        <hr/>
                                        <form>
                                            <input id="image-uploadify" type="file" accept="image/*" multiple>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary px-5">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer_scripts')
<script>
    $('.multiple-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
</script>
<script>
    $('#fancy-file-upload').FancyFileUpload({
        params: {
            action: 'fileuploader'
        },
        maxfilesize: 1000000
    });
</script>
<script>
    $(document).ready(function () {
        $('#image-uploadify').imageuploadify();
    })
</script>
@endsection