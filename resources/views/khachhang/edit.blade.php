<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <h5 class="alert alert-success">{{ session('status')}}</h5>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3>Create Student with Image <a href="{{ route('khachhang.all')}}"
                                class="btn btn-danger float-end">BACK</a></h3>

                    </div>
                    <div class="card-body">
                        <form action="{{ route('khachhang.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">Họ tên:</label>
                                <input type="text" name="ten_khach_hang" id="" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Địa chỉ:</label>
                                <input type="text" name="dia_chi" id="" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">SĐT:</label>
                                <input type="data" name="so_dien_thoai" id="" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email:</label>
                                <input type="text" name="email" id="" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Ngày sinh:</label>
                                <input type="data" name="ngay_sinh" id="" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="gioi_tinh">Giới tính:</label>
                                <select name="gioi_tinh" id="" class="form-control">
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                    <option value="Khác">Khác</option>
                                </select>
                            </div>


                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Lưu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>