<div class="header_main">
    <div class="mobile_menu">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="container-fluid">
                <div class="logo">
                    <img src="../images/logo.png" alt="#404" />
                </div>
                <h2 class="judul">SISTEM INFORMASI SATPOL<br>KOTA TASIKMALAYA</h2>
                <div class="menu_main">
                    <ul>
                        <li class="active"><a href={{ url('homepage') }}>Beranda</a></li>

                        <li class="nav-item dropdown dropdown-profil">
                            <div class="nav-link dropdown-toggle" href="#" id="navbarDropdownProfil"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil
                            </div>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownProfil">
                                <a class="dropdown-item" href={{ url('sejarah') }}>Sejarah</a>
                                <a class="dropdown-item" href={{ url('struktur_organisasi') }}>Struktur Organisasi</a>
                                <a class="dropdown-item" href={{ url('tupoksi') }}>Tugas Pokok dan Fungsi</a>
                                <a class="dropdown-item" href={{ url('susunan_organisasi') }}>Susunan Organisasi</a>
                            </div>
                        </li>

                        <li class="active"><a href={{ url('berita') }}>Berita</a></li>

                        <li class="active"><a href={{ url('galeri') }}>Galeri</a></li>

                        <li class="nav-item dropdown dropdown-layanan-publik">
                            <div class="nav-link dropdown-toggle" href="#" id="navbarDropdownLayananPublik"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Layanan
                                Publik</div>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownLayananPublik">
                                <a class="dropdown-item" href={{ url('permohonan_informasi') }}>Permohonan Informasi</a>
                                <a class="dropdown-item" href={{ url('permohonan_keberatan') }}>Permohonan Keberatan</a>
                            </div>
                        </li>

                        @if (Route::has('login'))
                            @auth

                                <li> <x-app-layout>
                                    </x-app-layout>

                                </li>

                                <li><a href="{{ url('my_post') }}">My Pose</a></li>

                                <li><a href="{{ url('create_post') }}">Create Post</a></li>
                            @else
                                {{-- <li><a href="{{ route('login') }}">Login</a></li>

                                <li><a href="{{ route('register') }}">Register</a></li> --}}

                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
    </div>
