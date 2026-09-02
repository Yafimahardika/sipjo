@extends('layouts.app')

@section('content')

<x-btn_back/>

<div class="flex flex-1 justify-center items-center">
    <div class="flex flex-col justify-center items-center w-5/6">
        <img src="{{ asset('/images/logo/logo-kpu.png') }}" alt="" srcset="" class="h-32 mb-2">

        <h2>KPU Kabupaten Jombang</h2>
        <span class="mb-10 text-center font-medium">Alamat: Jl. KH. Romli Tamim, Sumber Mulyo, Sumbermulyo, Kec. Jogoroto, Kabupaten Jombang, Jawa Timur 61485</span>

        <div class="bg-red-800 mb-6 flex-1 text-white p-4 rounded-lg w-full">
            <h3 class="text-center font-bold mb-2">Visi</h3>
            <p>
                Terwujudnya Komisi Pemilihan Umum sebagai penyelenggara Pemilihan Umum 
                yang memiliki integritas, profesional, mandiri, transparan dan akuntabel, demi 
                terciptanya demokrasi Indonesia yang berkualitas berdasarkan Pancasila dan UUD 1945 
                dalam wadah Negara Kesatuan Republik Indonesia!
            </p>
        </div>

        <div class="bg-red-800 mb-6 flex-1 text-white p-4 rounded-lg w-full">
            <h3 class="text-center font-bold mb-2">Misi</h3>
            <p>
                Membangun lembaga penyelenggara Pemilihan Umum yang memiliki kompetensi, kredibilitas dan kapabilitas 
                dalam menyelenggarakan Pemilihan Umum; Menyelenggarakan Pemilihan Umum untuk memilih Anggota Dewan Perwakilan Rakyat, Dewan 
                Perwakilan Daerah, Dewan Perwakilan Rakyat Daerah, Presiden dan Wakil Presiden serta Kepala Daerah dan Wakil 
                Kepala Daerah secara langsung, umum, bebas, rahasia, jujur, adil, akuntabel, edukatif dan beradab; Meningkatkan kualitas penyelenggaraan 
                Pemilihan Umum yang bersih, efisien dan efektif; Melayani dan memperlakukan setiap peserta Pemilihan Umum secara adil dan setara, 
                serta menegakkan peraturan Pemilihan Umum secara konsisten sesuai dengan peraturan perundang-undangan yang berlaku; 
                Meningkatkan kesadaran politik rakyat untuk berpartisipasi aktif dalam Pemilihan Umum demi terwujudnya 
                cita-cita masyarakat Indonesia yang demokratis.
            </p>
        </div>


    </div>
</div>

@endsection