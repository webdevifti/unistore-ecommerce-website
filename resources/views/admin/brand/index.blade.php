@extends('admin.layouts.app')
@section('title','Manage Brands')
@section('admin_content')
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item" aria-current="page">Product Brand</li>
            </ol>
        </nav>
    </div>
    {{-- <div class="ms-auto">
        <div class="btn-group">
            <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Add new category</a>
        </div>
    </div> --}}
  
</div>
<!--end breadcrumb-->
<div class="row">
    <div class="col-12 col-lg-4 d-flex">
        <div class="card radius-15 w-100">
            <div class="card-body">
                <div class="d-lg-flex align-items-center">
                    <div>
                        <h5 class="mb-4">Add Brands</h5>
                    </div>
                   
                </div>
                <form class="row g-3" action="{{ route('admin.product-brands.store') }}" method="POST">
                    @csrf
                    <div class="col-12">
                        <label for="inputCategoryName" class="form-label">Brand Name</label>
                        <input type="text" placeholder="Brand Name" autofocus class="form-control" id="inputCategoryName" name="brand_name">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary px-5">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-8 d-flex">
        <div class="card radius-15 w-100">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <div>
                        <h5 class="mb-0">Brands</h5>
                    </div>
                   
                </div>
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Brands</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($get_brands as $item)
                            <tr>
                               <td>{{ $item->brand_name }}</td>
                               <td>{{ $item->created_at->diffForHumans() }}</td>
                               <td>{{ $item->updated_at->diffForHumans() }}</td>
                               <td>
                                    @if($item->status == 1)
                                        <a href="{{ route('admin.brand.status', $item->id) }}" class="btn btn-success btn-sm">Active</a>
                                    @else 
                                        <a href="{{ route('admin.brand.status', $item->id) }}" class="btn btn-primary btn-sm">Deactive</a>
                                    @endif
                               </td>
                               <td>
                                <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#EditModal_{{ $item->id }}">Edit</button>
                                <div class="modal fade" id="EditModal_{{ $item->id }}" tabindex="-1" aria-labelledby="EditModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="EditModalLabel"></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="row g-3" action="{{ route('admin.product-brands.update', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="col-12">
                                                        <label for="inputCategoryName" class="form-label">Brand Name</label>
                                                        <input type="text" placeholder="Brand Name" class="form-control" value="{{ $item->brand_name }}" id="inputCategoryName" name="brand_name">
                                                    </div>
                                                   
                                               
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">
                                                    Update
                                                </button>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    {{-- <a href="" class="btn btn-danger btn-sm">Delete</a> --}}
                                   
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">Are You Sure. Because this action can not be undone.</div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <a href="{{ route('admin.brand.delete',$item->id) }}" class="btn btn-primary">
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
                        <tfoot>
                             <tr>
                                <th>Brand</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
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