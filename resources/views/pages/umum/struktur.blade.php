@extends('layouts.app')

@section('content')

<x-btn_back/>

<x-title_pages
    ptitle="Struktur Organisasi KPU Kabupaten Jombang"
    pinfo="Gambar struktur kpu"
/>

<x-img_viewer
    infografis="{{ asset('images/grafis/struktur-kpu.png') }}"
/>

@endsection
