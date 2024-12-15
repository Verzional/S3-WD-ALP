<html>
    <head>
        @vite('resources/css/app.css')
    </head>
    <body class="flex flex-col lg:flex-row">
        <x-account-nav-bar></x-account-nav-bar>
        <div class="h-screen basis-full basis-[90%] lg:basis-[80%] flex justify-center items-center" style="background-image: url('/assets/AccountBG.png'); background-size:cover;">
            <div class="bg-[#F5F5F5] rounded-[50px] text-red-500 p-5 px-10 flex flex-col w-[90%]">
                <x-account-header>{{ $header }}</x-account-header>
                {{ $slot }}
            </div>
        </div>
    </body>
</html>