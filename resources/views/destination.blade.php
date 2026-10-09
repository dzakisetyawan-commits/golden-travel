@extends ('layout.app2')

<section class="w-full min-h-[50vh] bg-[url('/public/img/second-image.webp')] bg-no-repeat bg-center bg-cover">
    <div class="font-jakarta text-white flex flex-col gap-[20px] justify-center items-center w-full min-h-[50vh]">
        <a class="font-medium text-2xl text-white/50">Pelayanan</a>
        <h2 class="text-5xl font-extrabold">Wisata</h2>
        <a>Jelajahi berbagai destinasi pilihan bersama kami.</a>
    </div>
</section>

<section class="mt-10">
     <div class="flex flex-row justify-between w-full items-center px-15">
          <a class="font-jakarta font-extrabold text-2xl">Wisata Tujuan</a>
          <div class="flex items-center gap-4">

          <button type="button" class="cursor-pointer group flex size-10 items-center justify-center rounded-full border-4 border-[#C8A060] bg-white text-[#C8A060] transition-all hover:bg-[#C8A060] hover:text-white">
               <svg class="size-6 shrink-0 transition-transform" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7"/>
               </svg>
          </button>

          <button type="button" class="cursor-pointer group flex size-10 items-center justify-center rounded-full border-4 border-[#C8A060] bg-white text-[#C8A060] transition-all hover:bg-[#C8A060] hover:text-white">
               <svg class="size-6 shrink-0 transition-transform" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"/>
               </svg>
          </button>

          </div>
     </div>

     <!-- CARD -->

     <div class="overflow-x-auto">
          <div class="flex flex-row gap-[38px] pl-15 my-6">
               <div class="relative w-[261px] h-[306px] overflow-hidden rounded-[25px] shrink-0">
                    <img src="{{ asset('/img/card/card-bromo.webp') }}" loading="lazy" alt="Bromo" class="absolute inset-0 h-full w-full object-cover">

                    <div class="absolute bottom-[26px] left-[26px] text-white flex flex-col font-jakarta">
                         <p class="text-[20px] font-bold">Bromo</p>
                         <p class="text-[20px]">Jawa TImur</p>
                    </div>

                    <button class="absolute bottom-[26px] right-[26px] flex h-[56px] w-[56px] cursor-pointer items-center justify-center rounded-xl bg-[#D9A72E] bg-[#d4a342] text-[#1e1e1e] transition-all duration-200  hover:bg-[#b88a32]" aria-label="Panah ke atas">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                         </svg>
                    </button>
               </div>

               <!--  -->

               <div class="relative w-[261px] h-[306px] overflow-hidden rounded-[25px] shrink-0">
                    <img src="{{ asset('/img/card/card-bali.webp') }}" loading="lazy" alt="Bromo" class="absolute inset-0 h-full w-full object-cover">

                    <div class="absolute bottom-[26px] left-[26px] text-white flex flex-col font-jakarta">
                         <p class="text-[20px] font-bold">Bali</p>
                         <p class="text-[20px]">Indonesia</p>
                    </div>

                    <button class="absolute bottom-[26px] right-[26px] flex h-[56px] w-[56px] cursor-pointer items-center justify-center rounded-xl bg-[#D9A72E] bg-[#d4a342] text-[#1e1e1e] transition-all duration-200  hover:bg-[#b88a32]" aria-label="Panah ke atas">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                         </svg>
                    </button>
               </div>

               <!--  -->

               <div class="relative w-[261px] h-[306px] overflow-hidden rounded-[25px] shrink-0">
                    <img src="{{ asset('/img/card/card-bandung.webp') }}" loading="lazy" alt="Bandung" class="absolute inset-0 h-full w-full object-cover">

                    <div class="absolute bottom-[26px] left-[26px] text-white flex flex-col font-jakarta">
                         <p class="text-[20px] font-bold">Bandung</p>
                         <p class="text-[20px]">Jawa Barat</p>
                    </div>

                    <button class="absolute bottom-[26px] right-[26px] flex h-[56px] w-[56px] cursor-pointer items-center justify-center rounded-xl bg-[#D9A72E] bg-[#d4a342] text-[#1e1e1e] transition-all duration-200  hover:bg-[#b88a32]" aria-label="Panah ke atas">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                         </svg>
                    </button>
               </div>

               <!--  -->

               <div class="relative w-[261px] h-[306px] overflow-hidden rounded-[25px] shrink-0">
                    <img src="{{ asset('/img/card/card-surakarta.webp') }}" loading="lazy" alt="Surakarta" class="absolute inset-0 h-full w-full object-cover">

                    <div class="absolute bottom-[26px] left-[26px] text-white flex flex-col font-jakarta">
                         <p class="text-[20px] font-bold">Surakarta</p>
                         <p class="text-[20px]">Jawa Tengah</p>
                    </div>

                    <button class="absolute bottom-[26px] right-[26px] flex h-[56px] w-[56px] cursor-pointer items-center justify-center rounded-xl bg-[#D9A72E] bg-[#d4a342] text-[#1e1e1e] transition-all duration-200  hover:bg-[#b88a32]" aria-label="Panah ke atas">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                         </svg>
                    </button>
               </div>

               <!--  -->

               <div class="relative w-[261px] h-[306px] overflow-hidden rounded-[25px] shrink-0">
                    <img src="{{ asset('/img/card/card-malang.webp') }}" loading="lazy" alt="Malang" class="absolute inset-0 h-full w-full object-cover">

                    <div class="absolute bottom-[26px] left-[26px] text-white flex flex-col font-jakarta">
                         <p class="text-[20px] font-bold">Malang</p>
                         <p class="text-[20px]">Jawa Timur</p>
                    </div>

                    <button class="absolute bottom-[26px] right-[26px] flex h-[56px] w-[56px] cursor-pointer items-center justify-center rounded-xl bg-[#D9A72E] bg-[#d4a342] text-[#1e1e1e] transition-all duration-200  hover:bg-[#b88a32]" aria-label="Panah ke atas">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                         </svg>
                    </button>
               </div>
          </div>
     </div>
 </section>

 <section class="mt-10">
     <div class="flex flex-row justify-between w-full items-center px-15">
          <a class="font-jakarta font-extrabold text-2xl">Alam dan Petualangan</a>
          <div class="flex items-center gap-4">

          <button type="button" class="cursor-pointer group flex size-10 items-center justify-center rounded-full border-4 border-[#C8A060] bg-white text-[#C8A060] transition-all hover:bg-[#C8A060] hover:text-white">
               <svg class="size-6 shrink-0 transition-transform" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7"/>
               </svg>
          </button>

          <button type="button" class="cursor-pointer group flex size-10 items-center justify-center rounded-full border-4 border-[#C8A060] bg-white text-[#C8A060] transition-all hover:bg-[#C8A060] hover:text-white">
               <svg class="size-6 shrink-0 transition-transform" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"/>
               </svg>
          </button>

          </div>
     </div>

     <!-- CARD -->

     <div class="overflow-x-auto">
          <div class="flex flex-row gap-[38px] pl-15 my-6">

               <div class="relative w-[261px] h-[306px] overflow-hidden rounded-[25px] shrink-0">
                    <img src="{{ asset('/img/card/card-bandung.webp') }}" loading="lazy" alt="Bandung" class="absolute inset-0 h-full w-full object-cover">

                    <div class="absolute bottom-[26px] left-[26px] text-white flex flex-col font-jakarta">
                         <p class="text-[20px] font-bold">Bandung</p>
                         <p class="text-[20px]">Jawa Barat</p>
                    </div>

                    <button class="absolute bottom-[26px] right-[26px] flex h-[56px] w-[56px] cursor-pointer items-center justify-center rounded-xl bg-[#D9A72E] bg-[#d4a342] text-[#1e1e1e] transition-all duration-200  hover:bg-[#b88a32]" aria-label="Panah ke atas">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                         </svg>
                    </button>
               </div>

               <!--  -->

               <div class="relative w-[261px] h-[306px] overflow-hidden rounded-[25px] shrink-0">
                    <img src="{{ asset('/img/card/card-surakarta.webp') }}" loading="lazy" alt="Surakarta" class="absolute inset-0 h-full w-full object-cover">

                    <div class="absolute bottom-[26px] left-[26px] text-white flex flex-col font-jakarta">
                         <p class="text-[20px] font-bold">Surakarta</p>
                         <p class="text-[20px]">Jawa Tengah</p>
                    </div>

                    <button class="absolute bottom-[26px] right-[26px] flex h-[56px] w-[56px] cursor-pointer items-center justify-center rounded-xl bg-[#D9A72E] bg-[#d4a342] text-[#1e1e1e] transition-all duration-200  hover:bg-[#b88a32]" aria-label="Panah ke atas">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                         </svg>
                    </button>
               </div>

               <!--  -->

               <div class="relative w-[261px] h-[306px] overflow-hidden rounded-[25px] shrink-0">
                    <img src="{{ asset('/img/card/card-malang.webp') }}" loading="lazy" alt="Malang" class="absolute inset-0 h-full w-full object-cover">

                    <div class="absolute bottom-[26px] left-[26px] text-white flex flex-col font-jakarta">
                         <p class="text-[20px] font-bold">Malang</p>
                         <p class="text-[20px]">Jawa Timur</p>
                    </div>

                    <button class="absolute bottom-[26px] right-[26px] flex h-[56px] w-[56px] cursor-pointer items-center justify-center rounded-xl bg-[#D9A72E] bg-[#d4a342] text-[#1e1e1e] transition-all duration-200  hover:bg-[#b88a32]" aria-label="Panah ke atas">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                         </svg>
                    </button>
               </div>
          </div>
     </div>
 </section>

<section class="mt-10 px-15">
     <a class="font-jakarta font-extrabold text-2xl">City Tour</a>

     <div class="flex flex-row gap-15 mt-6 mb-15">
          <img src="{{ asset('img/Rectangle 59.png') }}" class="w-[435px] h-[305px]">

          <div class="flex flex-col justify-between">
               <div class="flex flex-col gap-6">
                    <a class="font-jakarta font-extrabold text-2xl">Jelajahi Kota</a>

                    <a>Jelajahi berbagai destinasi menarik bersama Golden Tour ’n Travel dan nikmati pengalaman perjalanan yang nyaman dan menyenangkan. Mulai dari wisata alam yang memukau, tempat ikonik di berbagai kota, hingga wisata kuliner khas daerah, kami siap menemani setiap perjalanan Anda. Ciptakan momen berharga dan temukan cerita baru di setiap destinasi bersama kami.</a>
               </div>

               <x-g-button class="w-[200px] h-auto">Pesan Sekarang →</x-g-button>
          </div>
     </div>
</section>

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
                                             <a href="/destinasi" class="relative transition-all duration-300 inline-block font-medium after:content-[''] after:absolute after:left-0 after:bottom-[-4px] after:w-0 after:h-[2px] after:bg-[#C99A3E] hover:text-[#C99A3E] hover:after:w-full after:transition-all after:duration-300 after:ease-out">
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
                                             <a href="{{ url('/#galeri') }}" class="relative transition-all duration-300 inline-block font-medium after:content-[''] after:absolute after:left-0 after:bottom-[-4px] after:w-0 after:h-[2px] after:bg-[#C99A3E] hover:text-[#C99A3E] hover:after:w-full after:transition-all after:duration-300 after:ease-out">
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
@section('content')