<html>
    <head>
        @vite(['resources/css/app.css', 'resources/css/login-register.css'])

    </head>
    <body>
        @if(session('error'))
            <script>
                alert("{{ session('error') }}");
            </script>
        @endif
        <div class="w-full relative h-full flex justify-center items-center"  style="background-image: url('/assets/HomeBG.png'); background-size:cover;">
            <div class="bg-[#262515] z-1 w-screen h-screen  opacity-50 absolute  z-0"></div>
            <div id="containerLR" class="absolute z-2 relative p-5  justify-center flex px-10 ">
                
                <div class="absolute inset-0 bg-[#505E00] opacity-80 rounded-[20px] z-4"></div>
                <div class="relative w-[400px] justify-center z-10">
                    {{ $slot }}
                </div>
            </div>
            
        </div>
        
    </body>
</html>