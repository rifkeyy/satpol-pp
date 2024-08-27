<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.homecss')
</head>

<body>

    <style type="text/css">
        *,
        header {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .bg-light {
            background-color: transparent !important;
        }

        .mobile_menu {
            width: 100%;
            display: flex;
        }

        .navbar-light .navbar-nav .nav-link {
            font-size: 16px;
            text-transform: uppercase;
            color: #fff;
            font-family: "Georgia", serif;
        }

        .navbar-nav {
            align-items: center;
        }

        .btn:not(:disabled):not(.disabled) {
            cursor: pointer;
            border-radius: 20px;
            border: 2px solid #fff;
            color: #fff;
            font-family: "Georgia", serif;
        }

        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: 20px;
            padding-left: 20px;
        }

        .nav-item {
            position: relative;
        }

        .menu_main {
            -ms-flex-direction: column;
            flex-direction: column;
            list-style: none;
            width: 100%;
            text-align: center;
            font-family: "Georgia", serif;
            padding: 20px;
            padding-left: 100px;
        }

        .menu_main ul {
            margin: 0px;
            align-items: center;
            list-style: none;
            display: inline-flex;
            font-family: "Georgia", serif;
        }

        .menu_main li {
            padding-left: 10px;
            padding-right: 10px;
            font-family: "Georgia", serif;
            font-size: 16px;
            text-transform: uppercase;
            padding-top: 10px;
            padding-bottom: 10px;
            color: #fff;
            border-radius: 40px;
        }

        .logo {
            width: 100px;
            margin-left: 5rem;
        }

        .judul {
            float: right;
            font-family: "Georgia", serif;
            font-size: 12px;
            font-weight: bold;
            color: #fff;
            margin-left: 1rem;
            margin-top: 1rem;
        }

        .menu_main li a {
            color: #fff;
            padding: 10px 20px;
            border-radius: 10px;
        }

        .menu_main li a:hover {
            color: #fff;
            background-color: #432ff5;
            border-radius: 7px;
        }

        .mb-lg-0,
        .my-lg-0 {
            margin-bottom: 0 !important;
            width: 20%;
            float: center;
        }

        .header_main {
            width: 100%;
            background-image: url(../images/banner2.jpg);
            background-size: 100%;
            padding: 10px 0px 0px 0px;
        }

        /* choose sejarah */
        .layout_padding {
            width: 100%;
            font-size: 36px;
            color: #000;
            font-weight: bold;
            text-align: left;
            font-family: "Garamond", serif;
        }

        .table-striped {
            width: auto;
            font-size: 16px;
            color: #000;
            font-weight: normal;
            text-align: justify;
            font-family: "Arial", sans-serif;
        }

        .layout_padding {
            margin-top: auto;
        }
    </style>

    <div class="header_section">
        @include('home.header')

    </div>

    @foreach ($sejarah as $post)
        <div class="choose_section layout_padding">
            <div class="container">
                <table class="table table-striped">
                    <thead class="title-judul">Sejarah</thead>
                    <tbody>
                        <tr>
                            <td colspan="4">
                                <table class="title-isi">
                                    <p>
                                        {{ $post->description }}
                                    </p>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="choose_section layout_padding">
                <div class="container">
                    <table class="table table-striped">
                        <thead class="title-judul">Dasar Hukum</thead>
                        <tbody>
                            <tr>
                                <td colspan="4">
                                    <table class="title-isi">1. Undang-Undang Nomor 23 tahun 2004 tentang Pemerintahan
                                        Daerah.<br>2. Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi
                                        Publik.<br>3. Peraturan Pemerintah Nomor 61 Tahun 2010 tentang Pelaksanaan
                                        Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik.<br>4.
                                        Peraturan Menteri Dalam Negeri Nomor 3 Tahun 2017 tentang Pedoman Pengelolaan
                                        Informasi dan Dokumentasi pada Kementerian Dalam Negeri dan Pemerintah
                                        Daerah.<br>5. </5>Peraturan Komisi Informasi Nomor 1 Tahun 2021 tentang Standar
                                        Layanan Informasi.<br>6. Peraturan Wali Kota Tasikmalaya Nomor 103 Tahun 2020
                                        tentang Pedoman Pengelolaan Pelayanan Informasi dan Dokumentasi Di Kota
                                        Tasikmalaya.</table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    @endforeach
    <!-- choose section end -->
    <!-- footer section start -->
    <style type="text/css">
        .text-bg {
            width: 100%;
            font-size: 16px;
            font-family: "Georgia", serif;
            color: #ffffff;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .lin-bg {
            width: 100%;
            font-size: 16px;
            font-family: "Georgia", serif;
            color: #ffffff;
            font-weight: bold;
            font-weight: normal;
            margin-bottom: 8px;
        }
    </style>

    <div class="footer_section layout_padding">
        <div class="container">

            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h4 class="text-bg">Informasi</h4>
                            <ul>
                                <li class="lin-bg"><a href="">Alamat</a></li>
                                <li class="lin-bg"><a href="">Telepon</a></li>
                                <li class="lin-bg"><a href="">Email</a></li>
                                <li class="lin-bg"><a href="">Twitter</a></li>
                                <li class="lin-bg"><a href="">Facebook</a></li>
                                <li class="lin-bg"><a href="">Instagram</a></li>
                                <li class="lin-bg"><a href="">You Tube</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h4 class="text-bg">Tentang Kami</h4>
                            <ul>
                                <li class="lin-bg"><a href={{ url('sejarah') }}>Profil</a></li>
                                <li class="lin-bg"><a href={{ url('struktur_organisasi') }}>Struktur Organisasi</a></li>
                                <li class="lin-bg"><a href={{ url('tupoksi') }}>Tupoksi</a></li>
                                <li class="lin-bg"><a href={{ url('susunan_organisasi') }}>Susunan Organisasi</a></li>
                                <li class="lin-bg"><a href={{ url('permohonan_informasi') }}>Permohonan Informasi</a>
                                </li>
                                <li class="lin-bg"><a href={{ url('permohonan_keberatan') }}>Permohonan Keberatan</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h4 class="text-bg">Maps</h4>
                            <iframe src="https://www.google.com/maps/embed/v1/place?key=YOUR_API_KEY&q=-6.1751,106.8650"
                                width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
    </div>

    <div class="copyright_section">
        <div class="container">
            <div class="copyright_section">
                <div class="container">
                    <p class="copyright_text">Copyright &copy; 2024 | Powered by <a href="https://html.design">STT
                            Cipasung</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>

    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>

    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
