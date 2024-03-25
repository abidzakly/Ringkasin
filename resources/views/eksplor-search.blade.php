<x-app-layout>
    <!-- Content -->
    <article class="max-w-screen-xl mx-auto py-6 px-4">
        <p class="font-semibold md:text-4xl my-4">Biografi</p>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-x-5">
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
        </div>
    </article>
    <!-- Content -->
</x-app-layout>