@extends('layouts.app')

@section('content')

<x-btn_back/>

<x-title_pages
    ptitle="Paduan cek Daftar Pemilih Tetap (DPT)."
    pinfo="Gambar paduan"
/>

<x-img_viewer
    infografis="{{ asset('images/grafis/infografis_2.png') }}"
/>

@endsection
