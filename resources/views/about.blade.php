@extends ('layout.app2')

@section('content')

<!-- Top Image -->
<section class="w-full min-h-[50vh] bg-[url('/public/img/second-image.webp')] bg-no-repeat bg-center bg-cover">
    <div class="font-jakarta text-white flex flex-col gap-[20px] justify-center items-center w-full min-h-[50vh]">
        <a class="font-medium text-2xl text-white/50">Ketahui Lebih Lanjut</a>
        <h2 class="text-5xl font-extrabold">Tentang Kami</h2>
    </div>
</section>

 <!-- Description -->

<section class="m-20">
    <div class="flex flex-row gap-[75px]">
        <img src="{{ asset('img/Foto.png') }}" class="w-[460px] h-[400px]">

        <div class="font-jakarta flex flex-col gap-[50px] justify-center items-center">
            <a class="font-extrabold text-6xl">Mewujudkan Perjalanan yang Nyaman & Berkesan</a>

            <div class="flex flex-col gap-[32px] font-jakarta">
                <a>GOLDEN TOUR 'n TRAVEL adalah perusahaan yang bergerak di bidang tour maupun travel di dalam dan juga luar kota. Terdapat juga penyewaan armada, baik armada reguler seperti Innova, Avanza, Hiace Commuter/Premio maupun armada Premium Class seperti Alphard, Pajero, Fortuner, Hiace Luxury.</a>
                <a>Perusahaan telah berdiri semenjak tahun 2017 kemudian merambah ke bidang usaha Tour Travel semenjak bulan Januari 2018, dan resmi berbadan hukum sejak bulan Juli 2020, dengan nama CV. GOLDEN INDORAYA</a>
            </div>
        </div>
    </div>
</section>
<!-- Description End -->

<!-- Carousel -->
<section>
    <a class="font-jakarta font-semibold text-xl flex justify-center">Klien kami yang berharga:</a>

    <div class="flex overflow-hidden my-10">
        <div class="flex w-max shrink-0 animate-carousel gap-20">
            <div class="flex shrink-0 items-center gap-20">
                <img src="{{ asset('img/carousel1/images (1).png') }}" class="h-[60px] w-auto">
                <img src="{{ asset('img/carousel1/buminet_prakarsa_logo.jpg') }}" class="h-[60px] w-auto">
                <img src="{{ asset('img/carousel1/gaji_pt_indofood_ec8512800b.webp') }}" class="h-[60px] w-auto">
                <img src="{{ asset('img/carousel1/logo-btn-1 (1).png') }}" class="h-[60px] w-auto">
                <img src="{{ asset('img/carousel1/State_University_of_Surabaya_logo.png') }}" class="h-[60px] w-auto">
                <img src="{{ asset('img/carousel1/logofavicon.png') }}" class="h-[60px] w-auto">
                <img src="{{ asset('img/carousel1/logo-begawan.png') }}" class="h-[60px] w-auto">
                <img src="{{ asset('img/carousel1/images (12).jpg') }}" class="h-[60px] w-auto">
                <img src="{{ asset('img/carousel1/Sun-Motor-Group-Logo-rmev5zyyb7hw8nl7kyh3ypzz5k9d712uu4u24d62ew.jpg') }}" class="h-[60px] w-auto">
            </div>

            <div class="flex shrink-0 items-center gap-20">
                <img src="{{ asset('img/carousel1/images (1).png') }}" class="h-[60px] w-auto">
                <img src="{{ asset('img/carousel1/buminet_prakarsa_logo.jpg') }}" class="h-[60px] w-auto">
                <img src="{{ asset('img/carousel1/gaji_pt_indofood_ec8512800b.webp') }}" class="h-[60px] w-auto">
                <img src="{{ asset('img/carousel1/logo-btn-1 (1).png') }}" class="h-[60px] w-auto">
                <img src="{{ asset('img/carousel1/State_University_of_Surabaya_logo.png') }}" class="h-[60px] w-auto">
                <img src="{{ asset('img/carousel1/logofavicon.png') }}" class="h-[60px] w-auto">
                <img src="{{ asset('img/carousel1/logo-begawan.png') }}" class="h-[60px] w-auto">
                <img src="{{ asset('img/carousel1/images (12).jpg') }}" class="h-[60px] w-auto">
                <img src="{{ asset('img/carousel1/Sun-Motor-Group-Logo-rmev5zyyb7hw8nl7kyh3ypzz5k9d712uu4u24d62ew.jpg') }}" class="h-[60px] w-auto">
            </div>
        </div>
    </div>
</section>
<!-- Carousel -->

<!-- Footer -->
 <section class="w-full min-h-screen bg-[url('/public/img/main-image3.webp')] bg-no-repeat bg-center bg-cover mt-20">
     <div class="flex items-center w-full min-h-screen">
          <div class="bg-white flex flex-row py-15 px-18 mx-15 w-full justify-between">
               <div class="flex flex-col gap-15">
                    <div class="flex flex-col font-jakarta gap-[21px]">
                         <a class="font-extrabold text-5xl">Hubungi Kami</a>
                         <a class="w-[480px]">Siap merencanakan perjalananmu? Hubungi kami untuk konsultasi, informasi paket wisata, atau kebutuhan transportasi.</a>
                    </div>

                    <div>
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d246.96486999941783!2d112.65908963778828!3d-7.953615286759149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629e0b7f838e5%3A0xc9fb8cbc55a4ea7a!2sGolden%20Travel%20Wisata%20Malang%20(Agen%20Tour%20%26%20Travel%20Wisata%20ke%20Bromo%2C%20Batu%2C%20Malang%2C%20Jogja%2C%20Bali%2C%20dll)!5e0!3m2!1sid!2sid!4v1791381309403!5m2!1sid!2sid" width="550" height="220" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                    </div>
               </div>

               <div class="h-[400px] w-[500px]">

                    <div class="flex h-full flex-col justify-between">
                         <div class="flex flex-row gap-[200px]">
                              <div class="font-jakarta flex flex-col gap-[32px]">
                                   <a class="text-2xl font-extrabold">Navigasi</a>
                                   <ul class="flex flex-col gap-[21px]">
                                        <li>
                                             <a href="" class="relative transition-all duration-300 inline-block font-medium after:content-[''] after:absolute after:left-0 after:bottom-[-4px] after:w-0 after:h-[2px] after:bg-[#C99A3E] hover:text-[#C99A3E] hover:after:w-full after:transition-all after:duration-300 after:ease-out">
                                                  Destinasi
                                             </a>
                                        </li>
                                        <li>
                                             <a href="" class="relative transition-all duration-300 inline-block font-medium after:content-[''] after:absolute after:left-0 after:bottom-[-4px] after:w-0 after:h-[2px] after:bg-[#C99A3E] hover:text-[#C99A3E] hover:after:w-full after:transition-all after:duration-300 after:ease-out">
                                                  Paket
                                             </a>
                                        </li>
                                        <li>
                                             <a href="/tentang" class="relative transition-all duration-300 inline-block font-medium after:content-[''] after:absolute after:left-0 after:bottom-[-4px] after:w-0 after:h-[2px] after:bg-[#C99A3E] hover:text-[#C99A3E] hover:after:w-full after:transition-all after:duration-300 after:ease-out">
                                                  Tentang
                                             </a>
                                        </li>
                                        <li>
                                             <a href="" class="relative transition-all duration-300 inline-block font-medium after:content-[''] after:absolute after:left-0 after:bottom-[-4px] after:w-0 after:h-[2px] after:bg-[#C99A3E] hover:text-[#C99A3E] hover:after:w-full after:transition-all after:duration-300 after:ease-out">
                                                  Galeri
                                             </a>
                                        </li>
                                   </ul>
                              </div>

                              <div>
                                   <div class="font-jakarta flex flex-col gap-[32px]">
                                        <a class="text-2xl font-extrabold">Kontak</a>
                                        <ul class="flex flex-col gap-[21px]">
                                             <li>
                                                  <a href="" class="relative transition-all duration-300 inline-block font-medium after:content-[''] after:absolute after:left-0 after:bottom-[-4px] after:w-0 after:h-[2px] after:bg-[#C99A3E] hover:text-[#C99A3E] hover:after:w-full after:transition-all after:duration-300 after:ease-out">
                                                       Instagram
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="" class="relative transition-all duration-300 inline-block font-medium after:content-[''] after:absolute after:left-0 after:bottom-[-4px] after:w-0 after:h-[2px] after:bg-[#C99A3E] hover:text-[#C99A3E] hover:after:w-full after:transition-all after:duration-300 after:ease-out">
                                                       TikTok
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="" class="relative transition-all duration-300 inline-block font-medium after:content-[''] after:absolute after:left-0 after:bottom-[-4px] after:w-0 after:h-[2px] after:bg-[#C99A3E] hover:text-[#C99A3E] hover:after:w-full after:transition-all after:duration-300 after:ease-out">
                                                       Facebook
                                                  </a>
                                             </li>
                                        </ul>
                                   </div>
                              </div>

                         </div>

                         <div class="flex flex-row w-full justify-between">
                              <div class="flex flex-row gap-[22px]">
                                   <x-g-button class="h-[50px]">
                                        <img height="22" width="22" src="{{ asset('img/menu/instagram.png') }}">
                                   </x-g-button>
                                   <x-g-button class="h-[50px]">
                                        <img height="22" width="22" src="{{ asset('img/menu/tiktok.png') }}">
                                   </x-g-button>
                                   <x-g-button class="h-[50px]">
                                        <img height="22" width="22" src="{{ asset('img/menu/facebook.png') }}">
                                   </x-g-button>
                              </div>
                              <x-g-button class="flex flex-row gap-[12px] h-[50px items-center">
                                   Pesan Sekarang <img height="22" width="22" src="{{ asset('img/menu/whatsapp.webp') }}">
                              </x-g-button>
                         </div>

                    </div>          
               </div>
          </div>          
     </div>
</section>
@endsection