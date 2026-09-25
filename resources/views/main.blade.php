@extends ('layout.app')

@section('content')

<!-- Hero -->
<section class="w-full min-h-screen bg-[url('/public/img/main-image.webp')] bg-no-repeat bg-center bg-cover">

     <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/70"></div>

     <div class="relative flex flex-col min-h-screen justify-center px-15 w-xl gap-7">     
          <p class="font-jakarta text-white font-extrabold text-5xl">Temukan Destinasi Ciptakan Cerita</p>
          <p class="font-jakarta text-white text-lg">Jelajahi destinasi pilihan dan ciptakan momen perjalanan yang berkesan.</p>

          <div class="font-jakarta flex flex-row gap-2">
               <x-b-button>Jelajahi Destinasi</x-b-button>
               <x-g-button class="border-[#C99A3E] border-2 hover:border-[#B08738]">Pesan Sekarang →</x-g-button>
          </div>
     </div>
</section>
<!-- End Hero -->

<!-- Pelayanan -->
<section class="relative z-10 -mt-16 mx-auto w-4/5 rounded-2xl bg-white shadow-lg">
     <div class="flex flex-col gap-4 p-8">
          <div>
               <a class="font-jakarta font-extrabold text-2xl">Pelayanan</a>
          </div>

          <div class="flex flex-col gap-5">
               <div class="grid md:grid-cols-3 gap-15">
                    <x-pelayanan-card>
                         <img class="w-12 h-12" src="{{ asset('img/menu/wisata.png') }}">
                         <p class="font-jakarta">Wisata</p>
                    </x-pelayanan-card>
                    <x-pelayanan-card>
                         <img class="w-12 h-12" src="{{ asset('img/menu/rental.png') }}">
                         <p class="font-jakarta">Sewa Kendaraan</p>
                    </x-pelayanan-card>
                    <x-pelayanan-card>
                         <img class="w-12 h-12" src="{{ asset('img/menu/villa.png') }}">
                         <p class="font-jakarta">Sewa Villa</p>
                    </x-pelayanan-card>
               </div>

               <div class="grid md:grid-cols-3 gap-15">
                    <x-pelayanan-card>
                         <img class="w-12 h-12" src="{{ asset('img/menu/gathering.png') }}">
                         <p class="font-jakarta">Gathering & Outbond</p>
                    </x-pelayanan-card>
                    <x-pelayanan-card>
                         <img class="w-12 h-12" src="{{ asset('img/menu/religi.png') }}">
                         <p class="font-jakarta">Wisata Religi & Edukasi</p>
                    </x-pelayanan-card>
                    <x-pelayanan-card>
                         <img class="w-12 h-12" src="{{ asset('img/menu/business.png') }}">
                         <p class="font-jakarta">Perjalanan Bisnis</p>
                    </x-pelayanan-card>
               </div>
          </div>
     </div>
</section>
<!-- End Pelayanan -->

<!-- Destinasi -->
 <section class="mt-10">
     <div class="flex flex-row justify-between w-full items-center px-15">
          <a class="font-jakarta font-extrabold text-2xl">Destinasi Unggulan</a>
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
 <!-- End Destinasi -->

 <!-- Persewaan -->
 <section class="mt-7">
     <div class="px-15">
          <a class="font-jakarta font-extrabold text-2xl">Persewaan Kendaraan</a>

          <!-- CARD -->
          <div class="grid md:grid-cols-2 mt-6 gap-8">
               <div>
                    <div class="flex flex-row gap-[20px] border border-2 border-black rounded-4xl">
                         <img src="{{ asset('/img/card/card-alphard.webp') }}" loading="lazy" alt="Bandung" class="w-[279px] h-[240px]">
                         
                         <div class="font-jakarta flex flex-col gap-[16px] mt-3">
                              <a class="font-extrabold text-[20px]">Kendaraan Premium</a>

                              <ul class="flex flex-col gap-[16px]">
                                   <li class="text-[20px]">1. Toyota Alphard</li>
                                   <li class="text-[20px]">2. Mitsubishi Pajero</li>
                                   <li class="text-[20px]">3. Toyota Fortuner</li>
                                   <li class="text-[20px]">4. Hiace </li>
                              </ul>
                         </div>
                    </div>
                    <div class="mt-4 flex justify-end">
                         <x-g-button>
                              Pesan Sekarang →
                         </x-g-button>
                    </div>
               </div>
               <!--  -->
               <div>
                    <div class="flex flex-row gap-[20px] border border-2 border-black rounded-4xl">
                         <img src="{{ asset('/img/card/card-innova.webp') }}" loading="lazy" alt="Bandung" class="w-[279px] h-[240px]">
                         
                         <div class="font-jakarta flex flex-col gap-[16px] mt-3">
                              <a class="font-extrabold text-[20px]">Kendaraan Regular</a>

                              <ul class="flex flex-col gap-[16px]">
                                   <li class="text-[20px]">1. Toyota Innova</li>
                                   <li class="text-[20px]">2. Toyota Avanza</li>
                                   <li class="text-[20px]">3. Hiace Commuter</li>
                              </ul>
                         </div>
                    </div>
                    <div class="mt-4 flex justify-end">
                         <x-g-button>
                              Pesan Sekarang →
                         </x-g-button>
                    </div>
               </div>
          </div>
     </div>
 </section>
 <!-- End Persewaan -->

 <!-- Paket -->
<section class="w-full min-h-screen bg-[url('/public/img/main-image2.webp')] bg-no-repeat bg-center bg-cover mt-10">

     <div class="px-15 py-18">
          <a class="font-jakarta font-extrabold text-2xl">Paket Wisata</a>
     </div>

     <div class="mx-15">
          <div class="grid md:grid-cols-2 gap-14">
               <div class="bg-white font-jakarta flex flex-col gap-[36px] p-8 rounded-3xl">
                    <a class="font-extrabold text-2xl">City Tour Malang</a>
                    <a class="font-extrabold text-5xl">4D3N</a>
                    <div class="flex flex-col gap-[18px] font-medium">
                         <a>• 11 Destinasi</a>
                         <a>• Makan 9 kali</a>
                         <a>• Sarapan Hotel 4 kali</a>
                         <a>• Hotel 3 Malam</a>
                         <a class="text-gray-400">Dan sebagainya...</a>
                    </div>
                    <x-g-button>Lihat Paket</x-g-button>
               </div>

               <div class="bg-white font-jakarta flex flex-col gap-[36px] p-8 rounded-3xl">
                    <a class="font-extrabold text-2xl">City Tour Malang</a>
                    <a class="font-extrabold text-5xl">3D2N</a>
                    <div class="flex flex-col gap-[18px] font-medium">
                         <a>• 7 Destinasi</a>
                         <a>• Makan 6 kali</a>
                         <a>• Sarapan Hotel 2 kali</a>
                         <a>• Hotel 2 Malam</a>
                         <a class="text-gray-400">Dan sebagainya...</a>
                    </div>
                    <x-g-button>Lihat Paket</x-g-button>
               </div>
          </div>
     </div>
</section>
<!-- End Paket -->

<!-- Why us -->
<section>
     <div class="grid md:grid-cols-2 font-jakarta p-15 justify-between gap-[70px]">
          <a class="font-extrabold text-5xl">Mengapa harus kami?</a>

          <div class="font-medium flex flex-col gap-2 text-lg">
               <a>Golden Travel menghadirkan perjalanan yang nyaman, aman, fleksibel, dan berkesan di Malang, Batu, Bromo, serta berbagai destinasi Jawa Timur.</a>
               <ul>
                    <li>1. Berpengalaman & Paham Destinasi</li>
                    <li>2. Pelayanan Personal</li>
                    <li>3. Paket Fleksibel</li>
                    <li>4. Nyaman & Terencana</li>
                    <li>5. Untuk Berbagai Kebutuhan</li>
                    <li>6. Transparan & Profesional</li>
               </ul>
          </div>
     </div>

     <div class="grid md:grid-cols-4 px-15 gap-[200px]">
          <div class="flex flex-col font-jakarta">
               <a class="font-extrabold text-5xl text-[#C99A3E]">1.000+</a>
               <a class="text-gray-400 font-medium text-lg">Wisatawan Dilayani</a>
          </div>
          <div class="flex flex-col font-jakarta">
               <a class="font-extrabold text-5xl text-[#C99A3E]">100+</a>
               <a class="text-gray-400 font-medium text-lg">Perjalanan</a>
          </div>
          <div class="flex flex-col font-jakarta">
               <a class="font-extrabold text-5xl text-[#C99A3E]">50+</a>
               <a class="text-gray-400 font-medium text-lg">Destinasi</a>
          </div>
          <div class="flex flex-col font-jakarta">
               <a class="font-extrabold text-5xl text-[#C99A3E]">9+</a>
               <a class="text-gray-400 font-medium text-lg">Tahun Pengalaman</a>
          </div>
     </div>
</section>
<!-- End Why us -->

<!-- Gallery -->
<section class="px-15 mt-15">
     <div class="font-jakarta flex flex-col">
          <a class="font-extrabold text-2xl">Ciptakan Momenmu</a>
          <a>Bukan sekedar perjalanan, tetapi pengalaman yang akan kamu bawa pulang.</a>
     </div>
</section>
@endsection