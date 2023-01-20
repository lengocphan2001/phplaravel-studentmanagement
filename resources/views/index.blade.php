@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Quản lí sinh viên</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('student.create')}}" class="btn btn-primary float-end">Thêm mới</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if (Session::has('thongbao'))
                    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 8000)" x-show="show">
                        <div class="alert alert-success">
                            {{Session::get('thongbao')}}
                        </div>    
                    </div>                
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã sinh viên</th>
                            <th>Họ tên</th>
                            <th>Ngày sinh</th>
                            <th>Giới tính</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($student)
                            @foreach ($student as $item)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$item->MaSV}}</td>
                                <td>{{$item->HoTen}}</td>
                                <td>{{$item->NgaySinh}}</td>
                                <td>{{$item->GioiTinh}}</td>
                                <td>{{$item->DiaChi}}</td>
                                <td>{{$item->SDT}}</td>
                                <td>
                                    <form action="{{route('student.destroy', $item->id)}}" method="POST">
                                        <a href="{{route('student.edit', $item->id)}}" class="btn btn-info">Sửa</a>
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection