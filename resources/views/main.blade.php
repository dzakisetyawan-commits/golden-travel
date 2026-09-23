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
          <div>
               <img src="{{ asset('/img/card/card-innova.webp') }}">
          </div>
     </div>
 </section>
@endsection