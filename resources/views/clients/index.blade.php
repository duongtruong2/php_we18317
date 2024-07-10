{{-- extends dùng để kế thừa mastes layout --}}
@extends('layouts.client')

@section('title')
{{-- hiển thị dữ liệu trong blade --}}
{{$title}}
@endsection

@section('css')
    {{-- những thư viện hoặc file css dùng riêng cho trang mới được đặt vàn đây --}}
    <style>
        /* .content {
            background-color: rgb(101, 45, 136);
        } */
    </style>
    <link rel="stylesheet" href="{{ asset('assets/clients/css/index.css' ) }}">
@endsection



{{-- section định nghĩa nội dung của section --}}
@section('content')
<h1 class="text-danger">{{$text}}</h1>
<p> chào mường đến với bình nguyên vô tận</p>
{{-- phiên dịch html --}}
<h1>{!! $content !!}</h1>
<button onclick="onSubmit()"> submit</button>



{{-- các cấu trúc trong blade wied --}}
@php 
$flag = true;
@endphp

{{-- cấu trúc vòng lặp for --}}
@for($i=1;$i<=3;$i++)
<p>index :{{$i}}</p>
@endfor


{{-- vòng lặp foreach --}}
@foreach($dataArr as $item)
<p> phần tử :{{$item}}</p>
@endforeach

{{-- forelse trong blade --}}
@forelse($dataArr as $item) 
<p>Phần tử {{ $item}}</p>
    @empty
    <p>k có bần tư</p>
@endforelse

{{-- cấu trúc rẽ nhánh --}}

{{-- cấu trúc if else --}}

 {{-- Câu điều kiện if --}}
 @if ($flag)
 <p>Điều kiện đúng</p>
@endif
{{-- Câu điều kiện if else--}}
@if ($flag)
 <p>Điều kiện đúng</p>
@else
 <p>Điều kiện sai</p>
@endif
{{-- Câu điều kiện if elseif --}}
{{-- @if ($dk1)
 Công việc 1
$elseif ($dk2)
công việc 2
@elseif ($dk3)
cong viec 3
@endif --}}
@endsection


@section('js')
<script>
    function onSubmit() {
        alert('12345');
    }
    
</script>
@endsection
