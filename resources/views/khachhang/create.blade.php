@extends('layout')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Quản lý khách hàng</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('khachhangs.index')}}" class="btn btn-primary float-end">dang sach</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('khachhangs.strore')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Ma KH</strong>
                            <input type="text" name="MaKH" class="form-control">
                        </div>
                        <div class="form-groug">
                            <strong>ho ten</strong>
                            <input type="text" name="HoTen" class="form-control" placeholder="Nhap ho ten">
                        </div>
                        <div class="form-groug">
                            <strong>ngay sinh</strong>
                            <input type="text" name="NgaySinh" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="GioiTinh">Giới tính:</label>
                            <select name="GioiTinh" id="GioiTinh" class="form-control">
                                <option value="">Chọn giới tính</option>
                                <option value="male">Nam</option>
                                <option value="female">Nữ</option>
                                <option value="other">Khác</option>
                            </select>
                        </div>
                        <div class="form-groug">
                            <strong>Dia chi</strong>
                            <input type="text" name="DiaChi" class="form-control"  placeholder="Nhap dia chi">
                        </div>
                        <div class="form-groug">
                            <strong>SDT</strong>
                            <input type="text" name="SoDT" class="form-control" placeholder="Nhap SDT">
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Lưu</button>
                            </div
            </form>
        </div>
    </div>
</div>

</div>

@endsection