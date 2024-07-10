<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    public function index(){
        dd(" đây là trang SanPhamControllers");
        $title="Danh sach sản phảm";
        return view('sanpham.index',[ 'title'=>$title]);
    }
    //
}
