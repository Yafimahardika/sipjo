@extends('layouts.app')

@section('content')

<x-btn_back href="{{ route('home') }}" text="Kembali" />

<x-title_pages
    ptitle="Jadwal Tahapan Pemilu 2029"
    pinfo="Gambar jadwal tahapan"
/>

<x-img_viewer
    infografis="{{ asset('images/grafis/infografis_1.png') }}"
/>

@endsection
