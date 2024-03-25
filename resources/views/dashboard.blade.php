<x-app-layout>
    <x-slot name="title">- Landing</x-slot>
    <div class="py-2 md:py-5">
        <div class="max-w-screen-xl mx-auto p-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <!-- Carousel -->
                <div id="indicators-carousel" class="relative max-w-screen-xl mx-auto mb-8" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-20 overflow-hidden rounded-lg md:h-60 mt-3 mb-4 md:mb-0">
                        <!-- Item 1 -->
                        <div class="duration-700 ease-in-out" data-carousel-item="active">
                            <img src="{{ asset('/images/Carousel.svg') }}"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="..." />
                        </div>
                        <!-- Item 2 -->
                        <div class=" duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('/images/Carousel.svg') }}"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="..." />
                        </div>
                        <!-- Item 3 -->
                        <div class=" duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('/images/Carousel.svg') }}"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="..." />
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-40 flex -translate-x-1/2 space-x-3 bottom-2 md:bottom-12 left-1/2">
                        <button type="button" class="w-2 h-2 md:w-3 md:h-3 rounded-full bg-indicator-light"
                            aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-2 h-2 md:w-3 md:h-3 rounded-full bg-indicator-dark"
                            aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-2 h-2 md:w-3 md:h-3 rounded-full bg-indicator-dark"
                            aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    </div>
                </div>
                <div class="mx-auto">
                    <!-- Ringkasan Terakhir Dibaca -->
                    @foreach ($booksRead as $book)
                    @if ($book->title == null)
                    <div class="text-[50px]">Anda belum memiliki riwayat bacaan.</div>
                    @else
                    <div>
                        <h2 class="font-semibold text-lg md:text-[30px] my-3">Terakhir Dibaca</h2>
                        <div class="grid grid-cols-3 gap-4">
                            <x-last-read-card source="educated.svg">
                                <x-slot name="title">Educated - A Memoir</x-slot>
                                <x-slot name="author">Tara Westover</x-slot>
                                <x-slot name="peringkas">Muhammad Andre</x-slot>
                            </x-last-read-card>
                            <x-last-read-card source="berani-tidak.svg">
                                <x-slot name="title">Berani Tidak Disukai</x-slot>
                                <x-slot name="author">Ichiro Kishimi, Fumitake Koga</x-slot>
                                <x-slot name="peringkas">Siti Fadzila</x-slot>
                            </x-last-read-card>
                            <x-last-read-card source="normal-people.svg">
                                <x-slot name="title">Normal People</x-slot>
                                <x-slot name="author">Sally Rooney</x-slot>
                                <x-slot name="peringkas">Rafi Ibadillah</x-slot>
                            </x-last-read-card>
                        </div>
                        <div class="flex justify-end mt-6">
                            <button type="button"
                                class="mt-auto text-gray-900 bg-white border border-indicator-dark focus:outline-none hover:bg-gray-100 focus:ring-2 focus:ring-gray-200 font-medium rounded-xl text-sm px-5 py-1 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Tampilkan
                                semua</button>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <!-- Ringkasan Gratis -->
                    <h2 class="font-semibold text-lg md:text-[30px] mb-4 mt-8">Ringkasan Gratis</h2>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-x-8">
                        <x-vertical-card kelas='bg-red-50' source='midnight-library.svg'>
                            <x-slot name="title">The Midnight Library</x-slot>
                            <x-slot name="author">Matt Haig</x-slot>
                            <x-slot name="genre">Fiksi</x-slot>
                        </x-vertical-card>
                        <x-vertical-card kelas='bg-yellow-50' source='filosofi-teras.svg'>
                            <x-slot name="title">Filosofi Teras</x-slot>
                            <x-slot name="author">Henry Manampiring</x-slot>
                            <x-slot name="genre">Pengembangan Diri</x-slot>
                        </x-vertical-card>
                        <x-vertical-card kelas='bg-orange-100' source='calculus.svg'>
                            <x-slot name="title">Calculus</x-slot>
                            <x-slot name="author">Earl W. Swokowski, Michael Olinick, Dennis D. Pence</x-slot>
                            <x-slot name="genre">Edukasi</x-slot>
                        </x-vertical-card>

                    </div>
                    <h2 class="font-semibold text-lg md:text-[30px] mb-4 mt-16">Ringkasan Terpopuler Minggu Ini</h2>
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-8">
                        <x-vertical-card kelas='bg-red-400/50' source='educated.svg'>
                            <x-slot name="title">Educated - A Memoir</x-slot>
                            <x-slot name="author">Tara Westover</x-slot>
                            <x-slot name="genre">Biografi</x-slot>
                        </x-vertical-card>
                        <x-vertical-card kelas='bg-green-100' source='mantappu-jiwa.svg'>
                            <x-slot name="title">Mantappu Jiwa</x-slot>
                            <x-slot name="author">Jerome Polin Sijabat</x-slot>
                            <x-slot name="genre">Biografi</x-slot>
                        </x-vertical-card>
                        <x-vertical-card kelas='bg-blue-300/50' source='normal-people.svg'>
                            <x-slot name="title">Normal People</x-slot>
                            <x-slot name="author">Sally Rooney</x-slot>
                            <x-slot name="genre">Romansa</x-slot>
                        </x-vertical-card>
                        <x-vertical-card kelas='bg-red-400/50' source='berani-tidak.svg'>
                            <x-slot name="title">Berani Tidak Disukai</x-slot>
                            <x-slot name="author">Ichiro Kishimi, Fumitake Koga</x-slot>
                            <x-slot name="genre">Pengembangan Diri</x-slot>
                        </x-vertical-card>
                    </div>
                    <div class="flex justify-end">
                        <button type="button"
                            class="text-gray-900 bg-white border border-indicator-dark focus:outline-none hover:bg-gray-100 focus:ring-8 focus:ring-gray-200 font-medium rounded-xl text-sm px-5 py-1 my-4 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Tampilkan
                            semua</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>