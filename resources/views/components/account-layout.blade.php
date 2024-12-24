<html>
    <head>
        @vite('resources/css/app.css')
    </head>
    <body class="flex flex-col lg:flex-row">
        <x-account-nav-bar></x-account-nav-bar>
        @if(session('role')=="admin")
            <div class="h-screen w-full bg-[#F8F8F8] relative basis-[100%] lg:ml-[20vw] px-10 pt-5  flex justify-center lg:items-center">
                <img src="/assets/backdropAdmin.png" class="fixed bottom-0 right-0 opacity-20" alt="">
                <div class="flex flex-col w-full z-2 relative basis-[100%]">
                        <x-account-header>{{ $header }}</x-account-header>
                        {{ $slot }}
                    </div>
                </div>
            </div>
        @else
            <div class="h-screen w-full relative basis-[100%] lg:ml-[20vw] px-10 pt-5  flex justify-center lg:items-center" style="background-image: url('/assets/AccountBG.png'); background-size:cover;">
                    <div class="relative rounded-[50px] pb-10  p-5 px-10 flex flex-col w-[90%]">
                    <div class="absolute inset-0 bg-[#F5F5F5] rounded-[50px] opacity-80 z-0"></div>
                    <div class="relative z-10">
                        <x-account-header>{{ $header }}</x-account-header>
                        {{ $slot }}
                    </div>
                </div>
            </div>
        @endif
    </body>
</html>