<x-app-layout>
    <section class="max-w-screen-xl mx-auto p-4">
        <a href="{{ route('perpustakaan') }} " class="my-2"><span class="text-black">&#60;</span> Kembali ke
            Perpustakaan</a>

        <div class="flex justify-between">
            <!-- Bacaan -->
            <div id="default-tab-content" class="flex flex-col w-full">
                <!-- Judul -->
                <p class="font-semibold text-lg lg:text-2xl my-6 w-full">Judul Buku Disini</p>
                <!-- Konten -->
                <div class="hidden p-4 rounded-lg border-2 mr-4" id="topik1" role="tabpanel"
                    aria-labelledby="topik1-tab">
                    <!-- Topik -->
                    <p class="text-center font-medium text-lg border-b-2 border-gray-900 py-2">Judul Topik Disini</p>
                    <p class="indent-10 text-md py-4 tracking-wide">This is some placeholder content the Konten Topik 1.
                        Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript
                        swaps
                        classes to control the content visibility and styling.</p>
                </div>
                <div class="hidden p-4 rounded-lg border-2 mr-4" id="topik2" role="tabpanel"
                    aria-labelledby="topik2-tab">
                    <!-- Topik -->
                    <p class="text-center font-medium text-lg border-b-2 border-gray-900 py-2">Judul Topik Disini</p>
                    <p class="indent-10 text-md py-4 tracking-wide">This is some placeholder content the Konten Topik 2.
                        Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript
                        swaps
                        classes to control the content visibility and styling.</p>
                </div>
                <div class="hidden p-4 rounded-lg border-2 mr-4" id="topik3" role="tabpanel"
                    aria-labelledby="topik3-tab">
                    <!-- Topik -->
                    <p class="text-center font-medium text-lg border-b-2 border-gray-900 py-2">Judul Topik Disini</p>
                    <p class="indent-10 text-md py-4 tracking-wide">This is some placeholder content the Konten Topik 3.
                        Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript
                        swaps
                        classes to control the content visibility and styling.</p>
                </div>
                <div class="hidden p-4 rounded-lg border-2 mr-4" id="topik4" role="tabpanel"
                    aria-labelledby="topik4-tab">
                    <!-- Topik -->
                    <p class="text-center font-medium text-lg border-b-2 border-gray-900 py-2">Judul Topik Disini</p>
                    <p class="indent-10 text-md py-4 tracking-wide">This is some placeholder content the Konten Topik 4.
                        Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript
                        swaps
                        classes to control the content visibility and styling.</p>
                </div>

                <!-- Pagination -->
                <div class="flex justify-between mb-auto mt-4">
                    <a href="#"
                        class="p-3 text-sm font-regular text-gray-500 rounded-lg hover:bg-gray-100 hover:text-gray-700">&#60;
                        Sebelumnya</a>
                    <a href="#"
                        class="p-3 text-sm font-regular mr-4 text-gray-500 rounded-lg hover:bg-gray-100 hover:text-gray-700">Selanjutnya
                        &#62;</a>
                </div>
            </div>

            <div class="flex flex-col">
                <div class="hidden lg:flex flex-col overflow-hidden p-4 lg:mt-20 lg:mb-4 border-2 rounded-lg border-gray-200">
                    <p class="font-semibold text-md lg:text-xl">Gaya Tulisan</p>
                    <div class="grid-cols-3 my-2">
                        <button class="bg-gray-300 lg:rounded-md lg:py-1 lg:px-2">Poppins</button>
                        <button class="bg-gray-300 lg:rounded-md lg:py-1 lg:px-2">Roboto</button>
                        <button class="bg-gray-300 lg:rounded-md lg:py-1 lg:px-2">Inter</button>
                    </div>
                    <p class="font-semibold text-md lg:text-xl lg:mb-2 ">Ukuran Tulisan</p>
                    <div class="flex items-center">
                        <select name="font" id="font" class="rounded-md w-1/2">
                            <option value="1">16</option>
                            <option value="1">20</option>
                            <option value="1">24</option>
                            <option value="1">26</option>
                        </select>
                        <button class="bg-gray-300 lg:rounded-md lg:py-1 lg:px-2 mx-2">OK</button>
                    </div>
                </div>
                <!-- List Topik -->
                <div class="hidden lg:flex flex-col overflow-hidden p-4 border-2 rounded-lg border-gray-200">
                    <p class="font-semibold text-md lg:text-xl">Topik</p>
                    <ul class="text-md font-medium" id="default-tab" data-tabs-toggle="#default-tab-content"
                        role="tablist">
                        <li class="ms-2" role="presentation">
                            <button class="pt-4 rounded-t-lg text-left " id="topik1-tab" data-tabs-target="#topik1"
                                type="button" role="tab" aria-controls="topik1" aria-selected="false">Topik 1 sdfdgn
                                dgdsg
                                dgsd dg dh d dg d g </button>
                        </li>
                        <li class="ms-2" role="presentation">
                            <button class="pt-4 rounded-t-lg text-left " id="topik2-tab" data-tabs-target="#topik2"
                                type="button" role="tab" aria-controls="topik2" aria-selected="false">Topik 2 </button>
                        </li>
                        <li class="ms-2" role="presentation">
                            <button class="pt-4 rounded-t-lg text-left " id="topik3-tab" data-tabs-target="#topik3"
                                type="button" role="tab" aria-controls="topik3" aria-selected="false">Topik 3 </button>
                        </li>
                        <li class="ms-2" role="presentation">
                            <button class="pt-4 rounded-t-lg text-left " id="topik4-tab" data-tabs-target="#topik4"
                                type="button" role="tab" aria-controls="topik4" aria-selected="false">Topik 4 </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>