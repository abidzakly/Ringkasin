<a href=""
    class="h-fit hover:bg-gray-100 bg-book-card border my-2 border-gray-200 rounded-lg items-center justify-center shadow">
    <div class="h-fit rounded-t-lg {{ $kelas }}">
        <img class="mx-auto rounded-xl h-28 md:h-32 md:rounded-none md:rounded-s-lg p-2" src="/storage/{{ $source }}"
            alt="Cover Buku">
    </div>
    <div class="flex-col flex h-26 p-3 text-center">
        <h5 class="flex flex-col justify-between text-lg md:text-xl font-medium tracking-tight text-gray-900 break-all">
            {{ $title }}
        </h5>
        <p class="line-clamp-1 font-regular text-gray-700">{{ $author }}</p>
        <p class="font-regular mt-5 text-gray-700 break-all">{{ $genre }}</p>
    </div>
</a>
