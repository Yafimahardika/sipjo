@extends('layouts.app')

@section('content')
    <x-btn_back href="{{ route('home') }}" text="Kembali" />

    <x-title_pages
        ptitle="UMUM"
        pinfo="Profil & Informasi umum KPU Kabupaten Jombang"
    />

    <div class="flex justify-center items-center">
        <div class="grid grid-cols-2 md:grid-cols-3 gap-6 text-center w-5/6">
            <x-btn_card
                link="{{ route('umum.profil') }}"
                img="{{ asset('images/icon/book.svg') }}"
                alt="Icon Profil"
                btntitle="Profil KPU"
                btninformation="Visi, Misi, dan Alamat KPU"/>

            <x-btn_card
                link="{{ route('umum.struktur') }}"
                img="{{ asset('images/icon/sitemap.svg') }}"
                alt="Icon Struktur"
                btntitle="Struktur Organisasi"
                btninformation="Struktur Organisasi dan Sekretariat KPU"/>

            <x-btn_card
                link="#"
                img="{{ asset('images/icon/bullhorn.svg') }}"
                alt="Icon Pengumuman"
                btntitle="Pengumuman"
                btninformation="Pengumuman Terkait Pemilihan"/>
        </div>    
    </div>    
@endsection