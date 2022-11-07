@extends('layouts.main')
@section('title', "Sửa Chuyến Tàu")
@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Sửa Computer</h3>
            </div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" value="{{$laptops->name}}">
                    </div>
                    <div class="form-group">
                        <label for="">Brand_id</label>
                        <input type="text" name="brand_id" class="form-control" value="{{$laptops->brand_id}}">
                    </div>
                    <div class="form-group">
                            <div class="row">
                                <div class="col-6 offset-3">
                                    <img src="{{BASE_URL . $laptops->logo}}" class="img-thumbnail">
                                </div>
                            </div>
                            <label for="">Logo</label>
                            <input type="file" name="logo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Detail</label>
                        <input type="text" name="detail" class="form-control" value="{{$laptops->detail}}">
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="number" name="price" class="form-control" value="{{$laptops->price}}">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-sm btn-primary">Sửa Laptop</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection