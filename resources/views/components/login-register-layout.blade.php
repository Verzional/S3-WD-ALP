<html>
    <head>
        @vite(['resources/css/app.css', 'resources/css/login-register.css', 'resources/css/font.css'])
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Vite -->
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    </head>
    <body class="overflow-x-hidden">
        <x-navbar></x-navbar>
        @if(session('error'))
            <script>
                alert("{{ session('error') }}");
            </script>
        @endif
        <div class="w-full relative h-full flex justify-center items-center"  style="background-image: url('/assets/HomeBG.png'); background-size:cover;">
        
            <div class="bg-[#262515] z-1 w-screen h-screen  opacity-50 absolute  z-0"></div>
            <div id="containerLR" class="absolute z-2 relative p-5  justify-center flex px-10 ">
                
                <div class="absolute inset-0 bg-white opacity-80 rounded-[20px] z-4"></div>
                <div class="relative w-[80vw] lg:w-[400px] justify-center z-10">
                    {{ $slot }}
                </div>
            </div>
            
        </div>
        
    </body>
</html>