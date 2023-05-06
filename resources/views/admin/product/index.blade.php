@extends('admin.layout.master')
@section('body')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Product module</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Product Index </li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-primary">Settings</button>
                <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
                    <a class="dropdown-item" href="javascript:;">Action</a>
                    <a class="dropdown-item" href="javascript:;">Another action</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                </div>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="product-count d-flex align-items-center gap-3 gap-lg-4 mb-4 fw-bold flex-wrap font-text1">
        <a href="javascript:;"><span class="me-1">All</span><span class="text-secondary">({{$products->count()}})</span></a>
        <a href="javascript:;"><span class="me-1">Published</span><span class="text-secondary">({{$productPublishCount->count()}})</span></a>
        <a href="javascript:;"><span class="me-1">Un-published</span><span class="text-secondary">({{$productUnPublishCount->count()}})</span></a>
        <a href="javascript:;"><span class="me-1">On Discount</span><span class="text-secondary">({{$productDiscount->count()}})</span></a>
    </div>

    <h6 class="mb-0 text-uppercase">All product Info</h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>SL No</th>
                        <th>Category Name</th>
                        <th>Sub Category Name</th>
                        <th>Product Name</th>
                        <th>Image</th>
                        <th>Selling Price</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($products->count())
                        @foreach($products as $product)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$product->category->name}}</td>
                                <td>{{$product->subCategory->name}}</td>
                                <td>{{$product->name}}</td>
                                <td><img src="{{asset($product->image)}}" class="img-fluid" style="width: 70px"></td>
                                <td>{{$product->selling_price}} </td>
                                <td>{{$product->status==1?'Publish':'Unpublish'}}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-light border dropdown-toggle dropdown-toggle-nocaret" type="button" data-bs-toggle="dropdown">
                                            <i class="fa-regular fa-pen-to-square"></i></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{route('admin-product.edit',['id'=>$product->id])}}">Edit</a></li>
                                            <li><a class="dropdown-item" href="{{route('admin-product.details',['id'=>$product->id])}}">view</a></li>
                                            <li><a class="dropdown-item" href="{{route('admin-subcategory.delete',['id'=>$product->id])}}">Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <td colspan="8" class="text-center text-danger ">No data found!</td>
                    @endif
                    </tbody>
                    <tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection

