@extends('admin.layouts.app')
@section('title','Manage Products')
@section('admin_content')
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item" aria-current="page">Products</li>
                <li class="breadcrumb-item active" aria-current="page">Manage Products</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <a href="{{ route('admin.manage-products.create') }}" class="btn btn-primary">Add new product</a>
        </div>
    </div>
</div>
<!--end breadcrumb-->
<div class="card">
    <div class="card-body">
        <div class="card-title">
            <h4 class="mb-0">Product Data</h4>
        </div>
        <hr/>
        <div class="table-responsive">
            <table id="example2" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Product</th>
                        <th>Image</th>
                        <th>Quantity</th>
                        <th>Selling Price</th>
                        <th>Regular Price</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $sl = 0;
                    @endphp
                    @foreach ($products as $item)
                        @php
                            $sl++;
                        @endphp
                    <tr>
                        <td>{{ $sl }}</td>
                        <td>{{ $item->product_name }}</td>
                        <td>
                            @if($item->thumbnail)
                                <img style="width: 100px;height: 50px;object-fit:cover;" src="{{ asset('uploads/products/thumbnails/'.$item->thumbnail) }}" alt="">
                            @else
                                <img style="width: 100px;height: 50px;object-fit:cover;" src="{{ asset('product.jpg') }}" alt="">
                            @endif
                        </td>
                        <td>{{ $item->qty }}</td>
                        <td>{{ $item->selling_price }}</td>
                        <td>{{ $item->regular_price }}</td>
                        <td>
                            @if($item->status == 1)
                                <a href="{{ route('admin.product.status',$item->id) }}" class="btn btn-success btn-sm">Active</a>
                            @else 
                                <a href="{{ route('admin.product.status',$item->id) }}" class="btn btn-secondary btn-sm">Deactive</a>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.manage-products.edit', $item->id) }}" class="btn btn-info btn-sm"><i class="fadeIn animated bx bx-edit-alt"></i></a>
                            <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-danger btn-sm"><i class="fadeIn animated bx bx-trash"></i></button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">Are You Sure. You can restore from trash bin .</div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <a href="{{ route('admin.product.trash', $item->id) }}" class="btn btn-primary">
                                                Delete
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                       
                    </tr>
                    @endforeach
                </tbody>
               
            </table>
        </div>
    </div>
</div>
@endsection
@section('footer_scripts')
<script>
    $(document).ready(function () {
        //Default data table
        $('#example').DataTable();
        var table = $('#example2').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
        });
        table.buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
    });
</script>
@if(Session::has('success'))
<script>
toastr.options =
{
    "closeButton" : true,
    "progressBar" : true
}
toastr.success("{{ session('success') }}");
    </script>
@endif

@if(Session::has('error'))
    <script>
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
        toastr.error("{{ session('error') }}");
    </script>
@endif
@endsection