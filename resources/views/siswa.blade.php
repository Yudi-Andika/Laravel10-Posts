@extends('layouts.main')
@section('content')
<style>
 .col-2 img {
    width: 190px; /* Sesuaikan dengan ukuran yang Anda inginkan */
    height: 190px; /* Sesuaikan dengan ukuran yang Anda inginkan */
    object-fit: cover; /* Menjaga aspek rasio gambar */
  }
</style>

<div class="max-w-xs flex flex-col">
    <!-- <div class="container mx-auto"> -->
        <h1>Daftar Kriminal XI RPL C😱</h1>
            <div class="row justify-content-center ">
                <div class="col-2">
                    <div class="card ">
                    <img src="{{ asset('images/Nikolas.jpg') }}" class="card-img " alt="">
                        <div class="card-body">
                            <h6 class="card-title">Nikolas Maulana A</h6>
                            <h6 class="card-subtitle  text-body-secondary">Nis: 1011</h6>
                            <p class="card-text">Alamat: Suruh </p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card">
                    <img src="{{ asset('images/Dito.jpg') }}" class="card-img" alt="">
                        <div class="card-body">
                            <h6 class="card-title">Nandito Bagus</h6>
                            <h6 class="card-subtitle  text-body-secondary">Nis: 1001</h6>
                            <p class="card-text">Alamat: Kerjo</p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card">
                    <img src="{{ asset('images/Nizz.jpg') }}" class="card-img" alt="">
                        <div class="card-body">
                            <h6 class="card-title">Rifandi Ahmad K</h6>
                            <h6 class="card-subtitle  text-body-secondary">Nis: 1002</h6>
                            <p class="card-text">Alamat: Pule</p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card">
                    <img src="{{ asset('images/Pras.jpg') }}" class="card-img" alt="">
                        <div class="card-body">
                            <h6 class="card-title">Prasetya Kurnia A</h6>
                            <h6 class="card-subtitle  text-body-secondary">Nis: 1003</h6>
                            <p class="card-text">Alamat: Nglinggis</p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card">
                    <img src="{{ asset('images/Mimig.jpg') }}" class="card-img" alt="">
                        <div class="card-body">
                            <h6 class="card-title">Samuel Mige H</h6>
                            <h6 class="card-subtitle  text-body-secondary">Nis: 1004</h6>
                            <p class="card-text">Alamat: Karangan</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-2">
                    <div class="card ">
                    <img src="{{ asset('images/PIPIK.jpg') }}" class="card-img" alt="">
                        <div class="card-body">
                            <h6 class="card-title">Vicky Dwi Septiansah</h6>
                            <h6 class="card-subtitle  text-body-secondary">Nis: 1006</h6>
                            <p class="card-text">Alamt: Kediri </p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card">
                    <img src="{{ asset('images/Gw.jpg') }}" class="card-img" alt="">
                        <div class="card-body">
                            <h6 class="card-title">Yudi Andika</h6>
                            <h6 class="card-subtitle  text-body-secondary">Nis: 1207</h6>
                            <p class="card-text">Alamat: Prambon</p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card">
                    <img src="{{ asset('images/Pipin.jpg') }}" class="card-img" alt="">
                        <div class="card-body">
                            <h6 class="card-title">Novian Nur Firdaus</h6>
                            <h6 class="card-subtitle  text-body-secondary">Nis: 008</h6>
                            <p class="card-text">Alamat: Prambon</p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card">
                    <img src="{{ asset('images/Bobot.png') }}" class="card-img" alt="">
                        <div class="card-body">
                            <h6 class="card-title">Satrio Bobot</h6>
                            <h6 class="card-subtitle  text-body-secondary">Nis: 1209</h6>
                            <p class="card-text">Alamat: Trenggalek</p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card">
                    <img src="{{ asset('images/Dobleh.jpg') }}" class="card-img" alt="">
                        <div class="card-body">
                            <h6 class="card-title">Wanabel Aqila Kesya</h6>
                            <h6 class="card-subtitle  text-body-secondary">Nis: 1110</h6>
                            <p class="card-text">Alamat: Sumber</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>

    </div>
    @endsection
    </body>

    </html>