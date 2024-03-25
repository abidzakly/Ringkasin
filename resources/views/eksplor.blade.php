<x-app-layout>
    <!-- Write Button -->
    <div class="w-full bg-lightpurple">
        <div class="max-w-screen-xl mx-auto py-6 flex justify-between px-4 items-center">
            <p class="font-medium md:text-[22px]">Mulai tulis rangkumanmu</p>
            <button
                class="bg-darkblue rounded-lg text-white font-bold md:text-lg hover:opacity-90 px-4 py-2 tracking-tight">Mulai
                Tulis</button>
        </div>
    </div>
    <!-- Write Button -->

    <!-- Content -->
    <div class="max-w-screen-xl mx-auto py-6 px-4">
        <!-- Search Bar -->
        <div class="flex justify-center">
            <div
                class="flex items-center w-full md:w-3/4 my-10 p-1 text-sm text-gray-900 border-[3px] border-darkblue rounded-xl">
                <input type="text"
                    class="w-full p-0 text-base text-black border-transparent focus:border-transparent focus:ring-transparent"
                    placeholder="Cari judul, penulis, atau peringkas">
                <a href="#"
                    class="mr-6 hover:bg-blue-800 hover:duration-200 inline-block rounded-full px-1 py-1 bg-darkblue shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6">
                        <path fill-rule="evenodd"
                            d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
        <!-- Search Bar -->
        <!-- Kategori -->
        <section class="my-5">
            <p class="font-semibold text-2xl mb-5">Kategori</p>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-x-20">
                @foreach ($categories as $category)
                <x-categories><x-slot name="categories">{{ $category['name'] }}</x-slot></x-categories>
                @endforeach
            </div>
        </section>
        <!-- Kategori -->

        <!-- Ringkasan -->
        <section class="my-5">
            <p class="font-semibold text-2xl mb-5">Ringkasan</p>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-x-5 md:gap-x-12 md:gap-y-5">
                @foreach ($summaries as $summary)
                <x-vertical-card kelas='bg-green-100' source='{{ $summary->cover }}'>
                    <x-slot name="title">{{ $summary['title'] }}</x-slot>
                    <x-slot name="author">{{ $summary['author'] }}</x-slot>
                    <x-slot name="genre">{{ $summary['name'] }}</x-slot>
                </x-vertical-card>
                @endforeach
            </div>
            <div class="flex justify-end">
                <button type="button"
                    class="text-gray-900 bg-white border border-indicator-dark focus:outline-none hover:bg-gray-100 focus:ring-8 focus:ring-gray-200 font-medium rounded-xl text-sm px-5 py-1 my-4 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Tampilkan
                    lebih banyak
                </button>
            </div>
        </section>
        <!-- Ringkasan -->

        <!-- Peringkas Terpopuler -->
        <section class="my-5">
            <p class="font-semibold text-2xl mb-5">Peringkas Terpopuler</p>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-x-20 gap-y-4">
                @foreach ($popularAuthors as $popularAuthor)
                <div class="flex space-x-[20px] items-center break-all md:break-words">
                    <x-profile-picture src='{{ $popularAuthor->profile_logo }}'></x-profile-picture>
                    <x-user-name>{{ $popularAuthor->fullname }}</x-user-name>
                </div>
               @endforeach
            </div>
        </section>
        <!-- Peringkas Terpopuler -->
    </div>
    <!-- Content -->
</x-app-layout>