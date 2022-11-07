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
                    <th>brand_id</th>
                    <th>Birth_date</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th>
                        <a href="tao-hk">Add</a>
                    </th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach($passengers as $ps)
                        <tr>
                            <td>{{$ps->id}}</td>
                            <td>{{$ps->name}}</td>
                            <td>{{$ps->train_id}}</td>
                            <td>
                                <img src="{{ BASE_URL . $ps->avatar}}" width="70">
                            </td>
                            <td>{{$ps->birth_date}}</td>
                            <td>
                                {{$ps->gender}}
                            </td>
                            <td>
                                {{$ps->phone}}
                            </td>
                            <td>{{$ps->created_at}}</td>
                            <td>{{$ps->updated_at}}</td>
                            <td>
                                <a class="btn btn-sm btn-info" href="sua-hk/{{ $ps->id }}">Sửa</a>
                            </td>
                            <td><a class="btn btn-sm btn-danger btn-remove" href="xoa-hk/{{ $ps->id }}">Xóa</a></td>
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