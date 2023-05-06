@extends('admin.layout.master')
@section('body')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Unit module</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Unit </li>
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
            <h5 class="mb-4">Unit Edit Form</h5>
            <form action="{{route('admin-unit.update',['id'=>$unit->id])}}" method="post">
                @csrf
                <div class="row mb-3">
                    <label for="input49" class="col-sm-3 col-form-label">Unit Name</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                            <input type="text" name="name" value="{{$unit->name}}" value="{{old('name')}}" class="form-control" id="input49" placeholder="Unit Name">
                        </div>
                        <div class="text-danger">  @error('name'){{$message}}@enderror</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="input52" class="col-sm-3 col-form-label">Unit Code</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                            <input type="text" name="code" value="{{$unit->code}}" value="{{old('code')}}" class="form-control" id="input52" placeholder="Unit Code">
                        </div>
                        <div class="text-danger">  @error('code'){{$message}}@enderror</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="input50" class="col-sm-3 col-form-label">Unit Discription</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <textarea class="form-control"  name="description" value="{{old('description')}}" id="input50" placeholder="Unit Description" >{{$unit->description}}</textarea>
                        </div>
                        <div class="text-danger">  @error('description'){{$message}}@enderror</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-9">
                        <div class="form-check">
                            <div class="form-check">
                                <input class="form-check-input" {{$unit->status==1?'checked':''}} name="status" value="1" type="radio"  id="flexRadioDefault1" >
                                <label class="form-check-label" for="flexRadioDefault1">Published</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" {{$unit->status==0?'checked':''}} name="status" value="0" type="radio" id="flexRadioDefault2" >
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


