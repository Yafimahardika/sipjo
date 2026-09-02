@extends('layouts.app')

@section('content')

    <x-btn_back href="{{ route('home') }}" text="Kembali" />

    <x-title_pages
        ptitle="Hasil Pemilu"
        pinfo="Kumpulan Hasil Pemilu Kab. Jombang"/>

    <div class="flex justify-center items-center">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center w-5/6">

            <x-btn_card
                link="{{ route('hasil-pemilu.ppwp') }}"
                img="{{ asset('images/logo/logo-ppwp.svg') }}"
                alt="Logo PPWP"
                btntitle="PPWP"
                btninformation=""/>

            <x-btn_card
                link="{{ route('hasil-pemilu.dpr-ri') }}"
                img="{{ asset('images/logo/logo-dpr-ri.png') }}"
                alt="Logo DPR RI"
                btntitle="DPR RI"
                btninformation=""/>

            <x-btn_card
                link="{{ route('hasil-pemilu.dpd-ri') }}"
                img="{{ asset('images/logo/logo-dpd-ri.svg') }}"
                alt="Logo DPD RI"
                btntitle="DPD RI"
                btninformation=""/>

            <x-btn_card
                link="{{ route('hasil-pemilu.dprd-prov') }}"
                img="{{ asset('images/logo/logo-dprd-jatim.png') }}"
                alt="Logo DPRD JATIM"
                btntitle="DPRD JATIM"
                btninformation=""/>
                
            <x-btn_card
                link="{{ route('hasil-pemilu.dprd-kab') }}"
                img="{{ asset('images/logo/logo-dprd-jombang.png') }}"
                alt="Logo DPRD Jombang"
                btntitle="DPRD JOMBANG"
                btninformation=""/>
                
            <x-btn_card
                link="{{ route('hasil-pemilu.pilgub') }}"
                img="{{ asset('images/logo/logo-jatim.webp') }}"
                alt="Logo Provinsi Jatim"
                btntitle="PILGUB JATIM"
                btninformation=""/>

            <x-btn_card
                link="{{ route('hasil-pemilu.pilkada') }}"
                img="{{ asset('images/logo/logo-jombang.png') }}"
                alt="Logo Kabupaten Jombang"
                btntitle="PILKADA JOMBANG"
                btninformation=""/>

        </div>
    </div>

@endsection