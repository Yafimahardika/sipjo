@extends('layouts.app')

@section('content')

<x-btn_back/>

<x-title_pages
    ptitle="Ini Infografis Tentang"
    pinfo="Preview desain grafis"
/>

<x-img_viewer
    infografis="{{ asset('images/grafis/infografis_1.png') }}"
/>

@endsection
