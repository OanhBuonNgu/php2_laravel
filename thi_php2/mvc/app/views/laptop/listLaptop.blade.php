@extends('layouts.main')
@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <form action="" method="get">
                <div class="row">
                    <div class="col-md-4">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" name="keyword" value="{{$keyword}}">
                            <span class="input-group-append">
                              <button type="submit" class="btn btn-info btn-flat">Tìm!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="car-body">
            <table class="table table-hover" border="1">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>image</th>
                    <th>Brand_id</th>
                    <th>Detail</th>
                    <th>Price</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th>
                        <a href="tao-lt">Add</a>
                    </th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach($laptops as $lt)
                        <tr>
                            <td>{{$lt->id}}</td>
                            <td>{{$lt->name}}</td>
                            <td>
                                <img src="{{ BASE_URL . $lt->image}}" width="70">
                            </td>
                            <td>{{$lt->brand_id}}</td>
                            <td>
                                {{$lt->detail}}
                            </td>
                            <td>
                                {{$lt->price}}
                            </td>
                            <td>{{$lt->created_at}}</td>
                            <td>{{$lt->updated_at}}</td>
                            <td>
                                <a class="btn btn-sm btn-info" href="sua-lt/{{ $lt->id }}">Sửa</a>
                            </td>
                            <td><a class="btn btn-sm btn-danger btn-remove" href="xoa-lt/{{ $lt->id }}">Xóa</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('page-script')
<script>
    $(document).ready(function(){
        $('.btn-remove').click(function(){
            alert('Bạn thực sự muốn xóa?');
        });
    });
</script>
@endsection