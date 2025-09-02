@extends('layouts.public')

@section('content')
<x-banner-section
    title="Pengalaman Kami"
    subtitle=""
    image="https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=1600&q=80"
    height="h-80 lg:h-[30vh]" />
@include('pages.pengalaman._header')
@include('pages.pengalaman._content')
@include('pages.pengalaman._pagination')
@endsection