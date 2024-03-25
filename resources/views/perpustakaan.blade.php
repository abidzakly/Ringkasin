<x-app-layout>
    <!-- Section Bacaan -->
    <section class="max-w-screen-xl mx-auto px-2">
        <div class="flex justify-between md:mb-3 md:pt-3">
            <p class="font-medium sm:text-2xl">Bacaanmu</p>
            <button
                class="hidden sm:block bg-darkblue rounded-full text-white font-bold md:text-sm hover:opacity-80 px-2 py-1 md:px-2">Tambah</button>
            <a href="{{ route('eksplor') }}" class="sm:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="w-6 h-6 hover:rounded-full hover:border-slate-200 hover:border-2">
                    <path fill-rule="evenodd"
                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-x-8 xl:gap-x-10 gap-y-4 my-2">
            <x-vertical-card kelas='bg-red-50' source='midnight-library.svg'>
                <x-slot name="title">The Midnight Library</x-slot>
                <x-slot name="author">Matt Haig</x-slot>
                <x-slot name="genre">Fiksi</x-slot>
            </x-vertical-card>
            <x-vertical-card kelas='bg-green-100' source='mantappu-jiwa.svg'>
                <x-slot name="title">Mantappu Jiwa</x-slot>
                <x-slot name="author">Jerome Polin Sijabat</x-slot>
                <x-slot name="genre">Biografi</x-slot>
            </x-vertical-card>
            <x-vertical-card kelas='bg-yellow-50' source='filosofi-teras.svg'>
                <x-slot name="title">Filosofi Teras</x-slot>
                <x-slot name="author">Henry Manampiring</x-slot>
                <x-slot name="genre">Pengembangan Diri</x-slot>
            </x-vertical-card>
            <x-vertical-card kelas='bg-red-400/50' source='berani-tidak.svg'>
                <x-slot name="title">Berani Tidak Disukai</x-slot>
                <x-slot name="author">Ichiro Kishimi, Fumitake Koga</x-slot>
                <x-slot name="genre">Pengembangan Diri</x-slot>
            </x-vertical-card>
            <x-vertical-card kelas='bg-orange-100' source='calculus.svg'>
                <x-slot name="title">Calculus</x-slot>
                <x-slot name="author">Earl W. Swokowski, Michael Olinick, Dennis D. Pence</x-slot>
                <x-slot name="genre">Edukasi</x-slot>
            </x-vertical-card>
        </div>
        <div class="flex justify-end">
            <button type="button"
                class="text-gray-900 bg-white border border-indicator-dark focus:outline-none hover:bg-gray-100 focus:ring-8 focus:ring-gray-200 font-medium rounded-xl text-sm px-5 py-1 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Tampilkan
                lebih banyak
            </button>
        </div>
    </section>
    <!-- Section Bacaan -->

    <!-- Section Ringkasan -->
    <section class="max-w-screen-xl mx-auto px-2">
        <div class="flex justify-between md:mb-3 md:pt-3">
            <p class="font-medium sm:text-2xl">Ringkasanmu</p>
            <button
                class="hidden sm:block bg-darkblue rounded-full text-white font-bold md:text-sm hover:opacity-80 px-2 py-1 md:px-2">Tambah</button>
            <a href="{{ route('eksplor') }}" class="sm:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="w-6 h-6 hover:rounded-full hover:border-slate-200 hover:border-2">
                    <path fill-rule="evenodd"
                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-x-8 xl:gap-x-10 gap-y-4 my-2">
            <x-vertical-card kelas='bg-red-50' source='midnight-library.svg'>
                <x-slot name="title">The Midnight Library</x-slot>
                <x-slot name="author">Matt Haig</x-slot>
                <x-slot name="genre">Fiksi</x-slot>
            </x-vertical-card>
            <x-vertical-card kelas='bg-green-100' source='mantappu-jiwa.svg'>
                <x-slot name="title">Mantappu Jiwa</x-slot>
                <x-slot name="author">Jerome Polin Sijabat</x-slot>
                <x-slot name="genre">Biografi</x-slot>
            </x-vertical-card>
            <x-vertical-card kelas='bg-yellow-50' source='filosofi-teras.svg'>
                <x-slot name="title">Filosofi Teras</x-slot>
                <x-slot name="author">Henry Manampiring</x-slot>
                <x-slot name="genre">Pengembangan Diri</x-slot>
            </x-vertical-card>
            <x-vertical-card kelas='bg-red-400/50' source='berani-tidak.svg'>
                <x-slot name="title">Berani Tidak Disukai</x-slot>
                <x-slot name="author">Ichiro Kishimi, Fumitake Koga</x-slot>
                <x-slot name="genre">Pengembangan Diri</x-slot>
            </x-vertical-card>
            <x-vertical-card kelas='bg-orange-100' source='calculus.svg'>
                <x-slot name="title">Calculus</x-slot>
                <x-slot name="author">Earl W. Swokowski, Michael Olinick, Dennis D. Pence</x-slot>
                <x-slot name="genre">Edukasi</x-slot>
            </x-vertical-card>
        </div>
        <div class="flex justify-end">
            <button type="button"
                class="text-gray-900 bg-white border border-indicator-dark focus:outline-none hover:bg-gray-100 focus:ring-8 focus:ring-gray-200 font-medium rounded-xl text-sm px-5 py-1 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Tampilkan
                lebih banyak
            </button>
        </div>
    </section>
    <!-- Section Ringkasan -->
</x-app-layout>