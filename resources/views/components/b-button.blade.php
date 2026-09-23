<button 
     {{
          $attributes->merge([
               'class' => 'font-jakarta text-white rounded-full border border-white border-2 px-4 py-1 transition-all duration-300 hover:bg-white hover:text-black cursor-pointer'
               ])
     }}>
     {{ $slot }}
</button>