@extends('frontend.layouts.main')

@section('title', 'Tieu de cua webside Giang')

@section('sidebar')
    111
    @parent
    222

    <p>Nội dung của view con sẽ thêm vào master layout sidebar</p>
@endsection

@section('content')
    <p>Nội dung body của trang</p>
@endsection