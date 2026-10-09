@extends ('layout.app2')

@section('content')
<!-- Top Image -->
<section class="w-full min-h-[50vh] bg-[url('/public/img/second-image.webp')] bg-no-repeat bg-center bg-cover">
    <div class="font-jakarta text-white flex flex-col gap-[20px] justify-center items-center w-full min-h-[50vh]">
        <a class="font-medium text-2xl text-white/50">Pelayanan</a>
        <h2 class="text-5xl font-extrabold">Sewa Kendaraan</h2>
        <a>Jelajahi berbagai destinasi pilihan bersama kami.</a>
    </div>
</section>

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
          </div>
     </div>
 </section>

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
          </div>
     </div>
 </section>

 <div class="flex justify-center items-center my-15">
     <a href="#" class="text-lg text-black/50 font=semibold font-jakarta relative transition-all duration-300 inline-block font-medium after:content-[''] after:absolute after:left-0 after:bottom-[-4px] after:w-0 after:h-[2px] after:bg-[#C99A3E] hover:text-[#C99A3E] hover:after:w-full after:transition-all after:duration-300 after:ease-out cursor-pointer">Kembali ke atas</a>
 </div>
@endsection