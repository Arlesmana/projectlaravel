@extends('layouts.app')

@section('title', 'Pesanan Detail')

@section('content')
<div class="container">
    <h1>Pesanan Detail</h1>
    <p><strong>Nama:</strong> {{ $pesanan->nama }}</p>
    <p><strong>Email:</strong> {{ $pesanan->email }}</p>
    <p><strong>No Telepon:</strong> {{ $pesanan->no_telepon }}</p>
    <p><strong>Layanan:</strong> {{ $pesanan->layanan }}</p>
    <p><strong>Status:</strong> {{ $pesanan->status }}</p>
    <p><strong>Order Date:</strong> {{ $pesanan->order_date }}</p>

    
</div>
@endsection
