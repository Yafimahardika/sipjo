@extends('layouts.app')

@section('content')
    <x-btn_back href="{{ route('home') }}" text="Kembali" />   

    <x-title_pages
        ptitle="Pelayanan"
        pinfo="Paduan dan informasi KPU Jombang"
    />

    <div class="flex justify-center items-center">
        <div class="grid grid-cols-2 md:grid-cols-3 gap-6 text-center w-5/6">
            <x-btn_card
                link="{{ route('pelayanan.cek-dpt') }}"
                img="{{ asset('images/icon/information-100.png') }}"
                alt="Icon DPT"
                btntitle="Cek DPT"
                btninformation="Paduan cek Daftar Pemilih Tetap (DPT)"/>

            <x-btn_card
                link="{{ route('pelayanan.cek-partai') }}"
                img="{{ asset('images/icon/information-100.png') }}"
                alt="Icon Terdaftar Partai"
                btntitle="Cek Terdaftar Partai"
                btninformation="Paduan cek anggota partai politik"/>

            <x-btn_card
                link="{{ route('pelayanan.informasi') }}"
                img="{{ asset('images/icon/information-100.png') }}"
                alt="Icon Informasi"
                btntitle="Pelayanan"
                btninformation="Informasi Pelayanan KPU Kab. Jombang"/>
        </div>    
    </div>    
@endsection