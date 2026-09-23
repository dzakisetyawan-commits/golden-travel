<button 
     {{
          $attributes->merge([
               'class' => 'flex flex-row items-center gap-3 p-3 border border-2 border-gray-300 transition-all duration-300 hover:border-black rounded-3xl cursor-pointer'
               ])
     }}>
     {{ $slot }}
</button>