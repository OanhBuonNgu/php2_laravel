@extends('layouts.main')
@section('title', "Thêm Mới Hành Khách")
@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Thêm Mới Laptops</h3>
            </div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" ">
                    </div>
                    <div class="form-group">
                        <label for="">Logo </label>
                        <input type="file" name="logo" class="form-control" ">
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" name="address"  class="form-control" ">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-sm btn-primary">Thêm Laptop</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection