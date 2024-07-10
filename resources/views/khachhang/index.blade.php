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
                    <a href="{{route('khachhangs.create')}}" class="btn btn-primary float-end">them</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>

            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Ma KH</th>
                        <th>Ten KH</th>
                        <th>Ngay Sinh</th>
                        <th>Gioi Tinh</th>
                        <th>Dia Chi</th>
                        <th>SDT</th>
                        <th>Thao tac</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($khachhangs as $kh)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$kh->MaKH}}</td>
                        <td>{{$kh->HoTen}}</td>
                        <td>{{$kh->NgaySinh}}</td>
                        <td>{{$kh->GioiTinh}}</td>
                        <td>{{$kh->DiaChi}}</td>
                        <td>{{$kh->SoDT}}</td>
                        <td>   
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>

@endsection