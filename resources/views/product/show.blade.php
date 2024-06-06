@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $product->name }}</h1>
    <p>Giá: {{ $product->price }}</p>
    <p>Mô tả: {{ $product->description }}</p>
    <p>Hình ảnh: {{ $product->image}}</p>
</div>
@endsection