@extends('admin.layout.master')
@section('body')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Brand module</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add Brand </li>
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
            <h5 class="mb-4">Brand Add Form</h5>
            <form action="{{route('admin-brand.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="input49" class="col-sm-3 col-form-label">Brand Name</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                            <input type="text" name="name" value="{{old('name')}}" class="form-control" id="input49" placeholder="Brand Name">
                        </div>
                        <div class="text-danger">  @error('name'){{$message}}@enderror</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="input50" class="col-sm-3 col-form-label">Brand Discription</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <textarea class="form-control"  name="description" value="{{old('description')}}" id="input50" placeholder="Brand Description" ></textarea>
                        </div>
                        <div class="text-danger">  @error('description'){{$message}}@enderror</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="input51" class="col-sm-3 col-form-label">Image</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-mic-fill"></i></span>
                            <input type="file" name="image" value="{{old('image')}}" class="form-control" id="input51" placeholder="Phone No">
                        </div>
                        <div class="text-danger">  @error('image'){{$message}}@enderror</div>

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


