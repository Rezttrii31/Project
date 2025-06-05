{{-- @extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <h1>Selamat Datang di Laravel</h1>
    <p>Ini adalah halaman berada.</p>
    <h1 style="font-size: 2.5rem; color: #6C63FF; text-align: center;">Tomorrow X Together (TXT)</h1>

<p style="font-size: 1.2rem; color: #444; max-width: 800px; margin: 1rem auto; text-align: center;">
    <strong>Tomorrow X Together</strong>, atau disingkat TXT, adalah boy group asal Korea Selatan yang dibentuk oleh BigHit Music. 
    Grup ini terdiri dari lima anggota karismatik: Soobin, Yeonjun, Beomgyu, Taehyun, dan Huening Kai. 
    Mereka debut pada tahun 2019 dan langsung mencuri perhatian dengan konsep musik yang unik, visual menawan, dan pesan yang menyentuh hati anak muda.
</p>

<div style="display: flex; justify-content: center; margin-top: 2rem;">
    <img src="{{ asset('images/txt.jpeg') }}" 
         alt="TXT Group" 
         style="width: 80%; border-radius: 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
</div>
<h2 style="margin-top: 2.5rem; color: #333; text-align: center;">Kenalan dengan Member TXT</h2>
<div style="max-width: 800px; margin: 3rem auto;">
    <!-- Soobin -->
    <div style="display: flex; align-items: center; margin-bottom: 2rem;">
        <img src="{{ asset('images/Soobin.jpeg') }}" alt="Soobin" style="width: 200px; border-radius: 12px; margin-right: 20px;">
        <div>
            <h4>Soobin</h4>
            <p>Leader yang tenang dengan suara lembut dan pesona yang menenangkan.</p>
        </div>
    </div>

    <!-- Yeonjun -->
    <div style="display: flex; align-items: center; margin-bottom: 2rem;">
        <img src="{{ asset('images/Yeonjun.jpeg') }}" alt="Yeonjun" style="width: 200px; border-radius: 12px; margin-right: 20px;">
        <div>
            <h4>Yeonjun</h4>
            <p>Dancer utama dan rapper yang penuh karisma serta ekspresi panggung yang kuat.</p>
        </div>
    </div>

    <!-- Beomgyu -->
    <div style="display: flex; align-items: center; margin-bottom: 2rem;">
        <img src="{{ asset('images/Beomgyu.jpeg') }}" alt="Beomgyu" style="width: 200px; border-radius: 12px; margin-right: 20px;">
        <div>
            <h4>Beomgyu</h4>
            <p>Vokalis berbakat yang juga dikenal sebagai mood booster dan storyteller grup.</p>
        </div>
    </div>

    <!-- Taehyun -->
    <div style="display: flex; align-items: center; margin-bottom: 2rem;">
        <img src="{{ asset('images/Taehyun.jpeg') }}" alt="Taehyun" style="width: 200px; border-radius: 12px; margin-right: 20px;">
        <div>
            <h4>Taehyun</h4>
            <p>Vokalis kuat dengan teknik vokal luar biasa dan kemampuan menyampaikan emosi.</p>
        </div>
    </div>

    <!-- Huening Kai -->
    <div style="display: flex; align-items: center; margin-bottom: 2rem;">
        <img src="{{ asset('images/Hueningkai.jpeg') }}" alt="Huening Kai" style="width: 200px; border-radius: 12px; margin-right: 20px;">
        <div>
            <h4>Huening Kai</h4>
            <p>Maknae yang penuh pesona, dikenal dengan kepribadian ceria dan bakat multinasional.</p>
        </div>
    </div>
</div>

</ul>

<p style="text-align: center; font-size: 1.1rem; color: #444;">
    TXT dikenal dengan lagu-lagu populer seperti <em>"CROWN"</em>, <em>"Blue Hour"</em>, dan <em>"Sugar Rush Ride"</em>. 
    Mereka aktif di berbagai media sosial dan sering berinteraksi dengan penggemar melalui platform seperti Weverse dan YouTube.
</p>

<div style="text-align: center; margin-top: 2rem;">
    <a href="https://www.youtube.com/@TXT_bighit" target="_blank" 
       style="padding: 10px 25px; background-color: #6C63FF; color: white; border-radius: 10px; text-decoration: none; font-size: 1rem;">
       🎬 Lihat Video Mereka di YouTube
    </a>
</div>



@endsection --}}
@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<!-- Hero section -->
<div class="container mx-auto px-4 mt-6">
    <div class="bg-green-100 shadow-md p-6 rounded-lg text-center">
        <h1 class="text-3xl md:text-4xl font-bold text-green-800 mb-4">
            Selamat Datang di <span class="text-green-500">Sampahbijak</span>
        </h1>
        <p class="text-gray-700 text-base md:text-lg">
            Mari bersama kita wujudkan lingkungan bersih dan sehat melalui pengelolaan sampah yang bijak dan berkelanjutan.
        </p>
        <button class="mt-6 inline-flex items-center bg-green-700 text-white px-6 py-2 rounded hover:bg-green-600 transition duration-200">
            Pelajari Cara Daur Ulang
        </button>
    </div>
</div>

<!-- Mengapa Pengelolaan Itu Penting -->
<div class="container mx-auto px-4 mt-8">
    <section class="bg-white shadow-md p-6 rounded-lg">
        <h2 class="text-2xl font-semibold text-green-700 mb-3">Mengapa Pengelolaan Sampah Itu Penting?</h2>
        <p class="text-gray-700 text-justify">
            Pengelolaan sampah yang baik dapat mengurangi pencemaran lingkungan, menjaga kesehatan masyarakat,
            serta mendukung ekonomi sirkular melalui kegiatan daur ulang dan pengurangan sampah.
        </p>
    </section>
</div>
<!-- Jenis Sampah -->
<div class="container mx-auto px-4 mt-10">
    <section class="bg-green-50 shadow-md p-6 rounded-lg">
        <h2 class="text-2xl font-semibold text-green-700 mb-4 text-center">Jenis Sampah & Cara Mengolahnya</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            
            <div class="bg-white p-4 rounded shadow text-center">
                <h3 class="font-bold text-green-600 mb-2">Sampah Organik</h3>
                <p class="text-sm text-gray-700">Dapat dijadikan kompos atau bahan biogas alami.</p>
            </div>

            <div class="bg-white p-4 rounded shadow text-center">
                <h3 class="font-bold text-green-600 mb-2">Sampah Anorganik</h3>
                <p class="text-sm text-gray-700">Bisa didaur ulang menjadi barang baru dan bermanfaat.</p>
            </div>

            <div class="bg-white p-4 rounded shadow text-center">
                <h3 class="font-bold text-green-600 mb-2">Sampah B3</h3>
                <p class="text-sm text-gray-700">Perlu penanganan khusus karena bersifat berbahaya.</p>
            </div>

        </div>
    </section>
</div>

<!-- Komunitas -->
<div class="container mx-auto px-4 mt-10">
    <section class="bg-white shadow-md p-6 rounded-lg text-center">
        <h2 class="text-2xl font-semibold text-green-700 mb-3">Bergabung Bersama Komunitas</h2>
        <p class="text-gray-700 mb-4 text-base">
            Ikut serta dalam gerakan peduli sampah dan menjadi bagian dari perubahan lingkungan yang lebih baik.
        </p>
        <button class="bg-green-700 text-white px-6 py-2 rounded hover:bg-green-600 transition duration-200">
            Daftar Sekarang
        </button>
    </section>
</div>

@endsection


