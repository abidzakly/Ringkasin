<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Ringkasin - Landing</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('logo.ico') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    @vite('resources/css/app.css')
    <style>
        .gradient2 {
            background-image: linear-gradient(0deg,
                    rgba(255, 255, 255, 1) 20%,
                    rgba(225, 224, 255, 1) 70%);
            z-index: -2;
        }
    </style>
</head>

<body>
    <!--Nav-->
    <nav id="header" class="bg-transparent fixed top-0 left-0 right-0 z-40">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('assets/SVGs/ringkasinLogo.svg') }}" class="h-16" alt="Ringkasin Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Ringkasin</span>
            </a>
            <div class="flex space-x-[10px] items-center md:order-2">
                <ul class="flex lg:items-center content-center font-bold">
                    <li class="mr-3">
                        <button data-modal-target="login-modal" data-modal-toggle="login-modal" type="button"
                            class="rounded-lg border-2 border-darkblue px-2 md:px-5 py-2 font-bold text-darkblue shadow md:hover:bg-darkblue md:hover:text-white hover:duration-300 ease-out">Sign
                            In</button>
                    </li>
                    <li>
                        <a href="{{ url('register') }}"
                            class="hover:bg-white hover:text-black hover:duration-300 hover:border-white rounded-lg px-2 py-2 md:px-5 bg-darkblue text-white shadow ease-out border-2 border-darkblue">Sign
                            Up</a>
                    </li>
                </ul>
                <button data-collapse-toggle="nav-links" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-black rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-darkblue "
                    aria-controls="navbar-language" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="hidden w-full md:flex md:w-auto " id="nav-links">
                <ul
                    class="block bg-white rounded-lg md:bg-transparent md:flex flex-col font-medium text-[24px] p-4 md:p-0 mt-4 md:space-x-8 lg:space-x-[100px] rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 shadow md:shadow-none border-2 border-darkblue">
                    <li class="">
                        <a href="#section-2"
                            class="block py-2 px-3 text-black md:font-semibold hover:bg-gray-100 rounded md:bg-transparent md:hover:bg-transparent md:p-0 md:hover:text-active"
                            aria-current="page">Populer</a>
                    </li>
                    <li>
                        <a href="#section-3"
                            class="block py-2 px-3 md:p-0 text-black rounded md:font-semibold hover:bg-gray-100 md:hover:bg-transparent md:hover:text-active">FAQ</a>
                    </li>
                    <li>
                        <a href="#section-4"
                            class="block py-2 px-3 md:p-0 text-black rounded md:font-semibold hover:bg-gray-100 md:hover:bg-transparent md:hover:text-active">Hubungi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="mx-auto h-screen w-full">
        <section class="bg-gradient flex flex-col justify-center h-full relative" id="section-1">
            <div class="max-w-screen-xl my-auto items-center justify-center mx-auto p-2">
                <article class="sm: px-[50px] xl:px-[10rem]">
                    <h1 class="font-bold text-3xl md:px-0 text-center md:text-5xl">
                        Informasi dalam genggamanmu tanpa menghabiskan waktu.
                    </h1>
                    <p class="text-black my-8 font-semibold text-xl md:text-[24px] md:px-[5rem] text-center">
                        Cari semua rangkuman yang ingin kamu
                        <span class="text-highlight">dapatkan</span>,
                        <span class="text-highlight">bagikan</span> dan temukan
                        <span class="italic">trend </span><span class="text-highlight">baru</span> setiap
                        minggunya.
                    </p>
                </article>
                <button
                    class="hover:bg-white hover:text-black bg-black text-white mx-auto rounded-lg md:px-8 py-2 md:py-4 w-[100px] md:w-[200px] font-bold shadow-lg hover:duration-200 hover:ease-in-out md:mx-0 ease-out flex justify-center">
                    Mulai
                </button>
            </div>
            <x-fake-wave id="section-2"></x-fake-wave>
            <x-wave color="#E1E0FF" addon="bottom-0 left-0 right-0 "></x-wave>
        </section>
        <section class="bg-lightpurple">
            <div
                class="max-w-screen-xl flex flex-wrap items-center self-center justify-center md:justify-between mx-auto md:p-[32px] xl:p-[8px]">
                <article>
                    <x-heading-title class="mb-[35px]">Ringkasan Terpopuler Minggu Ini</x-heading-title>
                    <div class="container" id="book-card">
                        <ul class="md:flex md:space-x-[20px] lg:space-x-defaultx">
                            @foreach ($books as $title => $src)
                                <li class="flex justify-center flex-col">
                                    <img src="assets/images/books/{{ $src }}" alt="{{ $src }}"
                                        class="rounded-lg flex self-center justify-center items-center md:w-[120px] lg:w-[140px] lg:h-[210px] xl:w-[180px] xl:h-[270px] shadow">
                                    <p
                                        class="font-normal md:text-[18px] lg:text-[20px] xl:text-[26px] mt-[20px] text-center">
                                        {{ $title }}</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </article>
                <article class="md:mt-[60px] lg:mt-[33.5px]">
                    <x-heading-title class="mb-[35px]">Peringkas Terpopuler Minggu Ini</x-heading-title>
                    <div class="container">
                        <ul class="space-y-defaulty">
                            @foreach ($users as $name => $src)
                                <li class="flex space-x-[30px] items-center">
                                    <img src="assets/profilePictures/{{ $src }}" alt="profile-picture"
                                        class= "rounded-full, md:w-[47.5px] md:h-[47.5px] xl:w-[57.5px] xl:h-[57.5px]">
                                    <p class="font-normal md:text-[18px] lg:text-[20px] xl:text-[26px]">
                                        {{ $name }}</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </article>
            </div>
        </section>
        <section class="bg-lightpurple flex justify-center h-full" id="section-3">
            <div class="container flex space-x-[120px] items-center justify-center">
                <article class="space-y-defaulty">
                    <x-heading-title>Frequently Asked Question</x-heading-title>
                    @foreach ($faqs as $question => $answer)
                        <div class="w-[717px] bg-white rounded-e-lg rounded-s-lg flex justify-between"
                            id="question-1">
                            <p class="py-[15px] pl-[28px] text-[20px]">{{ $question }}</p>
                            <a class="self-center mr-8 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="15"
                                    viewBox="0 0 32 15" fill="none">
                                    <line x1="1.13306" y1="2.35192" x2="17.1331" y2="13.3519"
                                        stroke="#4A4A4A" stroke-width="4" />
                                    <line x1="14.8669" y1="13.3519" x2="30.8669" y2="2.35192"
                                        stroke="#4A4A4A" stroke-width="4" />
                                </svg>
                            </a>
                        </div>
                    @endforeach
                </article>
                <img src="assets/SVGs/personFAQ.svg" alt="vector">
            </div>
        </section>
        <section class="gradient2 flex flex-col justify-center h-full relative items-center" id='section-4'>
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
                <article>
                    <x-heading-title class="mb-[30px]">Hubungi Kami</x-heading-title>
                    <x-form-input-box placeholder="Nama" name="Nama" addon="w-[410px]"><img
                            src="assets/SVGs/TwentyFourH.svg" alt="blob"
                            class="absolute translate-x-[37rem] -translate-y-[4rem] z-[0]"></x-form-input-box>
                    <x-form-input-box placeholder="Email" name="Email" addon="w-[410px]"></x-form-input-box>
                    <x-textareas name="message" placeholder="Pesan" addon="border-[3px] border-darkblue mb-[10px]">
                    </x-textareas>
                    <x-primary-button class="w-[120px]">Kirim</x-primary-button>
                </article>
            </div>
            <x-wave color="#E1E0FF" addon="bottom-0 left-0 right-0"></x-wave>
        </section>
        @include('layouts.footer');
    </main>
    @include('layouts.sign-in');
</body>

</html>
