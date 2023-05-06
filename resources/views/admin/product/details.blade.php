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
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Product details </li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{route('admin-product.index')}}"><button type="button" class="btn btn-primary">Back to Product Index </button></a>
                <a href="{{route('admin-product.edit',['id'=>$product->id])}}"><button type="button" class="btn btn-warning">Product Edit </button></a>
            </div>
        </div>
    </div>
    <h6 class="mb-0 text-uppercase">Product Details </h6>
    <hr>
    <div class="card">
        <div class="card-body">
          <table class="table table-bordered table-hover table-striped">
              <tr>
                  <th>Product Id</th>
                  <td>{{$product->id}}</td>
              </tr>
              <tr>
                  <th> Product Name</th>
                  <td>{{$product->name}}</td>
              </tr>
              <tr>
                  <th> Product Code</th>
                  <td>{{$product->code}}</td>
              </tr>
              <tr>
                  <th>Product Category</th>
                  <td>{{$product->category->name}}</td>
              </tr>
              <tr>
                  <th>Product Sub-category</th>
                  <td>{{$product->subCategory->name}}</td>
              </tr>
              <tr>
                  <th>Product Brand</th>
                  <td>{{$product->brand->name}}</td>
              </tr>
              <tr>
                  <th>Product Unit</th>
                  <td>{{$product->unit->name}}</td>
              </tr>
              <tr>
                  <th>Product Short Description</th>
                  <td>{!! $product->short_description !!}</td>
              </tr>
              <tr>
                  <th>Product Long Description</th>
                  <td>{!! $product->long_description !!}</td>
              </tr>
              <tr>
                  <th>Product Reguller Price</th>
                  <td>{{$product->regular_price}} Tk</td>
              </tr>
              <tr>
                  <th>Product  Selling Price </th>
                  <td>{{$product->selling_price}}</td>
              </tr>
              <tr>
                  <th>Product Discount</th>
                  <td>{{$product->discount}} %</td>
              </tr>
              <tr>
                  <th>Product stock Amout</th>
                  <td>{{$product->stock_amount}}</td>
              </tr>
              <tr>
                  <th>Product Total View</th>
                  <td>{{$product->hit_count}}</td>
              </tr>
              <tr>
                  <th>Product Total Sale</th>
                  <td>{{$product->sales_count}}</td>
              </tr>
              <tr>
                  <th>Product Feature Image</th>
                  <td> <img src="{{asset($product->image)}}" class="img-fluid" style="width: 100px"></td>
              </tr>
              <tr>
                  <th> Product Other Image</th>

                  <td>
                      @foreach($product->otherImages as $otherImage)
                      <img src="{{asset($otherImage->image)}}" class="img-fluid" style="width: 100px">
                      @endforeach
                  </td>

              </tr>
              <tr>
                  <th>Product Status</th>
                  <td>{{$product->status==1?'Published':'Unpublished'}}</td>
              </tr>
          </table>
        </div>
    </div>


@endsection


