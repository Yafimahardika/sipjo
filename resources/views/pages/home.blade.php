@extends('layouts.app')

@section('content')

<div class="flex flex-1 flex-col justify-center items-center">

        <x-title_pages
            ptitle="Layanan pemilu kini di ujung jari anda."
            pinfo="Pilih salah satu menu di bawah untuk mengakses informasi tahapan pemilu, hasil resmi, status partai, dan layanan pengaduan secara mandiri."
        />
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center w-5/6">
            
            <x-btn_card 
                link="{{ route('umum.menu') }}"
                img="{{ asset('images/icon/building-column.svg') }}"
                alt="Icon Umum"
                btntitle="Umum"
                btninformation="Sejarah, visi misi, alamat & kontak resmi KPU." />

            <x-btn_card
                link="{{ route('tahapan') }}"
                img="{{ asset('images/icon/calendar-days.svg') }}"
                alt="Icon Tahapan"
                btntitle="Tahapan Pemilu"
                btninformation="Jadwal tahapan pemilu serentak 2029" />

            <x-btn_card
                link="{{ route('hasil-pemilu.menu') }}"
                img="{{ asset('images/icon/box-archive.svg') }}"
                alt="Icon Hasil Pemilu"
                btntitle="Hasil Pemilu"
                btninformation="Hasil pemilu dan pilkada 2024" />

            <x-btn_card
                link="{{ route('pelayanan.menu') }}"
                img="{{ asset('images/icon/circle-info.svg') }}"
                alt="Ikon Pelayanan"
                btntitle="Pelayanan"
                btninformation="Cek DPT, dan Informasi pengaduan" />

        </div>
    </div>    

@endsection
