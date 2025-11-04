@extends('layouts.public')

@section('content')
@include('pages.produk._header')
@include('pages.produk._produklist')
@include('pages.produk._paginate')
@include('pages.produk._cta-order')
@endsection