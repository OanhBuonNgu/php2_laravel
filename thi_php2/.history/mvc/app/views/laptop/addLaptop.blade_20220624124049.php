@extends('layouts.main')
@section('title', "Thêm Mới Hành Khách")
@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Thêm Mới Hành Khách</h3>
            </div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" ">
                    </div>
                    <div class="form-group">
                        <label for="">Train_id</label>
                        <input type="text" name="train_id" class="form-control" ">
                    </div>
                    <div class="form-group">
                        <label for="">Avatar </label>
                        <input type="file" name="avatar" class="form-control" ">
                    </div>
                    <div class="form-group">
                        <label for="">Gender</label>
                        <input type="text" name="gender"  class="form-control" ">
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="number" name="phone"  class="form-control" ">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-sm btn-primary">Thêm Hành Khách</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection