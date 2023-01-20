@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Sửa sinh viên</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('student.index')}}" class="btn btn-primary float-end">Danh sách sinh viên</a>
                    </div>
                </div>s
            </div>
            <div class="card-body">
                
                <form action="{{route('student.update', $student->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Mã sinh viên</strong>
                                <input type="text" name="MaSV" class="form-control" placeholder="Nhập mã sinh viên" value="{{$student->MaSV}}">
                            </div>
                            <div class="form-group">
                                <strong>Họ tên</strong>
                                <input type="text" name="HoTen" class="form-control" placeholder="Nhập họ và tên" value="{{$student->HoTen}}">
                            </div>
                            <div class="form-group">
                                <strong>Ngày sinh</strong>
                                <input type="date" name="NgaySinh" class="form-control" placeholder="Nhập ngày sinh" value="{{$student->NgaySinh}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Giới tính</strong>
                                <select name="GioiTinh" class="form-select">
                                    <option selected>Chọn giới tính</option>
                                    <option value="Nam" {{$student->GioiTinh == "Nam"? 'selected': ''}}>Nam</option>
                                    <option value="Nữ" {{$student->GioiTinh == "Nữ"? 'selected': ''}}>Nữ</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <strong>Địa chỉ</strong>
                                <input type="text" name="DiaChi" class="form-control" placeholder="Nhập địa chỉ" value="{{$student->DiaChi}}">
                            </div>
                            <div class="form-group">
                                <strong>Số điện thoại</strong>
                                <input type="text" name="SDT" class="form-control" placeholder="Nhập số điện thoại" value="{{$student->SDT}}">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
@endsection