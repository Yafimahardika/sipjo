@extends('layouts.app')

@section('content')

<x-btn_back/>

<x-title_pages
    ptitle="Paduan cek partai anggota partai politik"
    pinfo="Gambar paduan"
/>

<x-img_viewer
    infografis="{{ asset('images/grafis/infografis_2.png') }}"
/>

@endsection
