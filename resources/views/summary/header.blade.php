<x-app-layout>
    <section class="max-w-screen-xl mx-auto p-4">
        <a href="/library" class="my-2"><span class="text-black">&#60;</span> Kembali ke
            Perpustakaan</a>
        <form action="{{ route('summary.header') }}" method="post" class="mx-auto w-full max-w-lg flex flex-col justify-center">
            @csrf
            <div class="flex flex-col my-4">
                <label for="title" class="w-full text-lg font-medium">Judul Buku</label>
                <select name="book-id" class="rounded-lg my-2 border-gray-400 border-2" required>
                    @foreach ($books as $title => $id)
                    <option value="{{ $id }}" data-book-id="{{ $id }}">{{ $title }}</option>
                    @endforeach
                </select>
                <p>Judul yang kamu cari tidak ada? <a href="/book" class="text-blue-800">Tambahkan disini</a></p>
            </div>

            <div class="flex flex-col my-4">
                <label for="price" class="w-full text-lg font-medium">Harga</label>
                <p class=" opacity-50">Dihitung berdasarkan jumlah kata. Maksimal harga Rp 5.000,-</p>
                <x-text-input id="harga" class="rounded-lg my-2 border-gray-400 border-2" type="text" name="price" required
                    placeholder="Contoh : 5000" />
            </div>

            <button type="submit"
                class="bg-darkblue text-white font-bold text-lg rounded-lg py-1 px-2 w-fit self-center">
                Tambah Ringkasan
            </button>
        </form>
    </section>
</x-app-layout>