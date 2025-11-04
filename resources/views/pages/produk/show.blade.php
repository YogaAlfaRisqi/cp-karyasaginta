@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $produk->nama }}</h1>

    @if($produk->image)
    <img src="{{ asset('storage/'.$produk->image) }}" alt="{{ $produk->nama }}" class="img-fluid mb-3" width="300">
    @endif

    <p><strong>Harga:</strong> Rp{{ number_format($produk->harga, 0, ',', '.') }}</p>
    <p><strong>Deskripsi:</strong> {{ $produk->deskripsi }}</p>

    <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection