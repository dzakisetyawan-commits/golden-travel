<button 
     {{
          $attributes->merge([
               'class' => 'font-jakarta text-white bg-[#C99A3E] rounded-full px-4 py-1 transition-all duration-300 hover:bg-[#B08738] cursor-pointer'
               ])
     }}>
     {{ $slot }}
</button>