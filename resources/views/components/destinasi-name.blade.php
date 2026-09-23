<div 
     {{
          $attributes->merge([
               'class' => 'absolute bottom-[26px] left-[26px] text-white flex flex-col font-jakarta'
               ])
     }}>
     {{ $slot }}
</div>