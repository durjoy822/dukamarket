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
                    <li class="breadcrumb-item active" aria-current="page">Product Add </li>
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

    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Product Add Form</h5>
            <form action="{{route('admin-product.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="input1" class="col-sm-3 col-form-label">Category Name</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-flag-fill"></i></span>
                            <select class="form-select" name="category_id" onchange="getSubcategory(this.value)" id="input1">
                                <option selected>---Select Category---</option>
                                @foreach($categories as $category )
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="input2" class="col-sm-3 col-form-label">Sub Category Name</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-flag-fill"></i></span>
                            <select class="form-select" name="sub_category_id" id="subCategoryId">
                                <option selected>--Select Sub-Category--</option>
                                @foreach($sub_categories as $sub_category )
                                    <option value="{{$sub_category->id}}">{{$sub_category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="input3" class="col-sm-3 col-form-label">Brand Name</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-flag-fill"></i></span>
                            <select class="form-select" name="brand_id" id="input3">
                                <option selected>--Select Brand--</option>
                                @foreach($brands as $brand )
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="input4" class="col-sm-3 col-form-label">Unit Name</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-flag-fill"></i></span>
                            <select class="form-select" name="unit_id" id="input4">
                                <option selected>--Select Unit--</option>
                                @foreach($units as $unit)
                                    <option value="{{$unit->id}}">{{$unit->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="input5" class="col-sm-3 col-form-label">Product Name</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                            <input type="text" name="name" value="{{old('name')}}" class="form-control" id="input5" placeholder="Product Name">
                        </div>
                        <div class="text-danger">  @error('name'){{$message}}@enderror</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="input6" class="col-sm-3 col-form-label">Product code</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                            <input type="text" name="code" value="{{old('code')}}" class="form-control" id="input6" placeholder="Product Code">
                        </div>
                        <div class="text-danger">  @error('code'){{$message}}@enderror</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="input7" class="col-sm-3 col-form-label">Short Discription</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <textarea class="form-control"  name="short_description" rows="5" cols="5" value="{{old('short_description')}}" id="input7" placeholder="Short Description" ></textarea>
                        </div>
                        <div class="text-danger">  @error('short_description'){{$message}}@enderror</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="input8" class="col-sm-3 col-form-label " >Long Description</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <textarea class="form-control summernote"  name="long_description" rows="5" cols="5" value="{{old('long_description')}}" id="input8" placeholder="Long Description" ></textarea>
                        </div>
                        <div class="text-danger">  @error('long_description'){{$message}}@enderror</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="input9" class="col-sm-3 col-form-label">Product Regular Price</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                            <input type="number" name="regular_price" value="{{old('regular_price')}}" class="form-control" id="input9" placeholder="Product Regular price">
                        </div>
                        <div class="text-danger">  @error('regular_price'){{$message}}@enderror</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="input10" class="col-sm-3 col-form-label">Product Selling Price</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                            <input type="number" name="selling_price" value="{{old('selling_price')}}" class="form-control" id="input10" placeholder="Product Selling Price">
                        </div>
                        <div class="text-danger">  @error('selling_price'){{$message}}@enderror</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="input11" class="col-sm-3 col-form-label">Product Discount</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                            <input type="number" name="discount" value="{{old('discount')}}" class="form-control" id="input11" placeholder="Product Discount">
                        </div>
                        <div class="text-danger">  @error('discount'){{$message}}@enderror</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="input12" class="col-sm-3 col-form-label">Product Stock Amount</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                            <input type="number" name="stock_amount" value="{{old('stock_amount')}}" class="form-control" id="input12" placeholder="Product Stock Amount">
                        </div>
                        <div class="text-danger">  @error('stock_amount'){{$message}}@enderror</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="input13" class="col-sm-3 col-form-label">Product Features Image</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-mic-fill"></i></span>
                            <input type="file" name="image" value="{{old('image')}}" class="form-control" id="input13" placeholder="Phone No">
                        </div>
                        <div class="text-danger">  @error('image'){{$message}}@enderror</div>

                    </div>
                </div>
                <div class="row mb-3">
                    <label for="input51" class="col-sm-3 col-form-label">Product Other Image</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-mic-fill"></i></span>
                            <input type="file" name="other_image[]" multiple value="{{old('other_image')}}" class="form-control" id="input51" placeholder="Phone No">
                        </div>
                        <div class="text-danger">  @error('other_image'){{$message}}@enderror</div>

                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-9">
                        <div class="form-check">
                            <div class="form-check">
                                <input class="form-check-input" name="status" value="1" type="radio"  id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">Published</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="status" value="0" type="radio" id="flexRadioDefault2" >
                                <label class="form-check-label" for="flexRadioDefault2">Unpublished </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-9">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection


