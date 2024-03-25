<a href="{{ route('book-detail') }}" class="flex flex-col bg-book-card rounded-lg shadow lg:flex-row hover:bg-gray-100 p-2 md:p-5">
    <img class="rounded-t-lg h-36 w-48 md:h-48 md:rounded-none md:rounded-s-lg p-2 md:p-2" src="/images/{{ $source }}" alt="">
    <div class="flex flex-col justify-between md:break-words">
        <h5 class="mb-2 text-base md:text-[20px] font-semibold tracking-tight text-gray-900">{{ $title }}</h5>
        <p class="mb-3 font-regular text-gray-700 dark:text-gray-400">{{ $author }}</p>
        <p class="mt-auto mb-3 font-regular text-gray-700 ">{{ $peringkas }}</p>
    </div>
</a>
