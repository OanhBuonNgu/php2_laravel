@extends('layouts.main')
@section('title', "Sửa Chuyến Tàu")
@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Sửa Vé Tàu</h3>
            </div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" value="{{$laptops->name}}">
                    </div>
                    <div class="form-group">
                        <label for="">Brand_id</label>
                        <input type="text" name="name" class="form-control" value="{{$laptops->brand_id}}">
                    </div>
                    <div class="form-group">
                            <div class="row">
                                <div class="col-6 offset-3">
                                    <img src="{{BASE_URL . $laptops->image}}" class="img-thumbnail">
                                </div>
                            </div>
                            <label for="">Image</label>
                            <input type="file" name="avatar" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Gender</label>
                        <input type="text" name="gender" class="form-control" value="{{$laptops->gender}}">
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="number" name="phone" class="form-control" value="{{$laptops->phone}}">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-sm btn-primary">Sửa Vé Tàu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection