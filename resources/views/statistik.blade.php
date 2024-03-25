<x-app-layout>
    <!-- Section Bacaan -->
    <section class="max-w-screen-xl mx-auto px-2 flex flex-col lg:flex-row justify-between px-8">
        <article class="my-4 lg:order-2 lg:ml-4">
            <p class="font-semibold text-3xl my-4">Penghasilan</p>
            <p class="font-regular text-base my-4">Status : Belum dicairkan</p>
            <div class=" bg-book-card rounded-lg flex justify-center items-center w-80 h-20">
                <p class="font-semibold text-2xl">Rp 132.492</p>
            </div>
            <p class="font-regular text-sm my-4 whitespace-pre-line">*Minimal jumlah penghasilan untuk melakukan
                penarikan adalah Rp50.000,-</p>
            <div class="flex lg:justify-center items-center">
                <x-primary-button class="rounded-lg font-semibold">Cairkan</x-primary-button>
            </div>
        </article>
        <article class="my-4">
            <p class="font-semibold text-3xl my-4">Statistik saya</p>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-x-8">
                <x-card-book-balance kelas='bg-red-50' source='midnight-library.svg'>
                    <x-slot name="title">The Midnight Library</x-slot>
                    <x-slot name="reader">5</x-slot>
                </x-card-book-balance>
            </div>
        </article>
    </section>
    <!-- Section Bacaan -->
</x-app-layout>