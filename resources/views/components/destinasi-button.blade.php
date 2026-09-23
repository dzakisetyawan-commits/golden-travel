<button 
     {{
          $attributes->merge([
               'class' => 'absolute bottom-[26px] right-[26px] flex h-[56px] w-[56px] items-center justify-center rounded-xl bg-[#D9A72E] bg-[#d4a342] text-[#1e1e1e] transition-all duration-200  hover:bg-[#b88a32]" aria-label="Panah ke atas'
               ])
     }}>
     {{ $slot }}
</button>