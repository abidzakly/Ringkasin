<x-app-layout>
    <x-slot name="title">- Info Buku</x-slot>
    <section class="max-w-screen-xl mx-auto p-4">
        <!-- Informasi Buku & Rekomendasi-->
        <a href="{{ route('eksplor') }} " class="my-2"><span class="text-black">&#60;</span> Kembali ke Eksplor</a>
        <article class="flex my-4 w-full justify-between">
            <x-card-info-buku kelas='bg-blue-400/50' source='normal-people.svg'>
                <x-slot name="title">Normal People</x-slot>
                <x-slot name="author">Sally Rooney</x-slot>
                <x-slot name="pub_year">2018</x-slot>
                <x-slot name="isbn">978-1984822178</x-slot>
                <x-slot name="genre">Romansa</x-slot>
            </x-card-info-buku>
            <div
                class="hidden lg:block overflow-y-scroll h-56 bg-transparent border-2 border-active rounded-lg pt-3 pl-3 w-1/3">
                <p class="text-lg font-semibold">Dalam Kategori yang sama</p>
                <x-book-recomend-aside kelas='bg-orange-700/50'>
                    <x-slot name="title">The Graham Effect</x-slot>
                </x-book-recomend-aside>
                <x-book-recomend-aside kelas='bg-yellow-200/50'>
                    <x-slot name="title">Filosofi Teras</x-slot>
                </x-book-recomend-aside>
                <x-book-recomend-aside kelas='bg-red-100'>
                    <x-slot name="title">Beach Read</x-slot>
                </x-book-recomend-aside>
                <x-book-recomend-aside kelas='bg-green-400/50'>
                    <x-slot name="title">The Seven Husband of Evelyn Hugo</x-slot>
                </x-book-recomend-aside>
            </div>
        </article>
        <!-- Informasi Buku & Rekomendasi-->

        <!-- Sekilas Pandang dan List Penulis -->
        <article class="flex flex-col lg:flex-row my-4 lg:mt-10 w-full justify-between">
            <div
                class="flex overflow-x-scroll my-2 lg:block lg:overflow-y-scroll lg:h-56 lg:bg-transparent lg:border-2 lg:border-active rounded-lg lg:pt-3 lg:pl-3 lg:w-1/3 lg:order-last">
                <x-list-peringkas-free>
                    <x-slot name="nama">Rafi Abdillah</x-slot>
                </x-list-peringkas-free>
                <x-list-peringkas>
                    <x-slot name="nama">Ahmad Abid</x-slot>
                </x-list-peringkas>
                <x-list-peringkas>
                    <x-slot name="nama">Amru Kurniawan</x-slot>
                </x-list-peringkas>
                <x-list-peringkas-free>
                    <x-slot name="nama">Nabila Hermawan</x-slot>
                </x-list-peringkas-free>
            </div>
            <div class="block bg-book-card rounded-lg shadow w-full px-4 pt-5 pb-4 lg:mr-10">
                <h5 class="font-semibold text-lg md:text-lg lg:text-2xl mb-5">Sekilas Pandang</h5>
                <p class="whitespace-normal line-clamp-6">Connell dan Marianne adalah teman sekolah yang berpura-pura
                    tidak mengenal satu sama lain. Dia populer dan mudah menyesuaikan diri, bintang tim sepak bola
                    sekolah, sementara dia kesepian, bangga, dan sangat tertutup. Namun ketika Connell datang menjemput
                    ibunya dari pekerjaannya di rumah Marianne, sebuah hubungan aneh dan tak terhapuskan tumbuh di
                    antara kedua remaja tersebut—hubungan yang ingin mereka sembunyikan.
                    Setahun kemudian, mereka berdua belajar di Trinity College di...</p>
            </div>
        </article>
        <!-- Sekilas Pandang dan List Penulis -->

        <!-- Button Lanjut Baca -->
        <article class="lg:w-3/4 flex justify-end">
            <button
                class="bg-read-btn rounded-full text-white font-semibold lg:font-bold text-sm lg:text-lg px-4 py-2 lg:mr-10">Lanjut
                Baca</button>
        </article>
        <!-- Button Lanjut Baca -->

        <!-- Rekomendasi Buku < lg -->
        <article class="lg:hidden mt-4">
            <h2 class="font-semibold text-lg">Dalam kategori yang sama</h2>
            <div class="flex overflow-x-scroll">
                <x-book-recomend-bottom source="graham-effect.svg">
                    <x-slot name="title">The Graham Effect</x-slot>
                </x-book-recomend-bottom>
                <x-book-recomend-bottom source="filosofi-teras.svg">
                    <x-slot name="title">Filosofi Teras</x-slot>
                </x-book-recomend-bottom>
                <x-book-recomend-bottom source="graham-effect.svg">
                    <x-slot name="title">The Graham Effect</x-slot>
                </x-book-recomend-bottom>
                <x-book-recomend-bottom source="graham-effect.svg">
                    <x-slot name="title">The Graham Effect</x-slot>
                </x-book-recomend-bottom>
            </div>
        </article>
        <!-- Rekomendasi Buku < lg -->

    </section>

</x-app-layout>
