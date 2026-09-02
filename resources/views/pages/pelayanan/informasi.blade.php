@extends('layouts.app')

@section('content')

<x-btn_back/>

<x-title_pages
    ptitle="Informasi Pelayanan KPU Kab. Jombang"
    pinfo="Gambar informasi pelayanan"
/>

<x-img_viewer
    infografis="{{ asset('images/grafis/infografis_2.png') }}"
/>

@endsection
