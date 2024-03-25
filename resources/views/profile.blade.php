<x-app-layout>
    <section class="max-w-screen-xl mx-auto p-4">
        <form method="POST" action="{{ route('user.edit') }}" class="flex flex-col mt-8 w-full">
            @csrf
            <!-- Foto Profile -->
            <div class="flex flex-col justify-center items-center">
                <img class="w-36 h-36 rounded-full object-cover" src="@if(empty($user->profile_logo)) {{ asset('/assets/profilePictures/ProfileDummy1.png') }}
                 @else /storage/{{ $user->profile_logo }} @endif" alt="Avatar Anda">
                <x-primary-button type="submit" class="px-4 my-4 text-sm">EDIT FOTO</x-primary-button>
            </div>

            <div class="flex flex-col md:mx-laptop my-4">
                <h2 class="font-semibold">DATA DIRI</h2>

                <x-input-label for="fullname" :value="__('Nama Lengkap')" class="mt-4 mb-2 text-base" />
                <x-text-input id="fullname" class="block mt-1 w-full border-gray-300" type="text" name="fullname"
                    :value="old('fullname')" autocomplete="fullname" value="{{ $user->fullname }}" />

                <x-input-label for="username" :value="__('Username')" class="mt-4 mb-2 text-base" />
                <x-text-input id="username" class="block mt-1 w-full border-gray-300" type="text" name="username"
                    :value="old('username')" autocomplete="username" value="{{ $user->username }}" />

                <x-input-label for="email" :value="__('Email')" class="mt-4 mb-2 text-base" />
                <x-text-input id="email" class="block mt-1 w-full border-gray-300" type="email" name="email"
                    :value="old('email')" autocomplete="email" value="{{ $user->email }}" />
            </div>

            <div class="flex flex-col md:mx-laptop my-4">
                <h2 class="font-semibold">DATA KEUANGAN (OPTIONAL)</h2>

                <x-input-label for="account_number" :value="__('Nomor Rekening')" class="mt-4 mb-2 text-base" />
                <x-text-input id="account_number" class="block mt-1 w-full border-gray-300" type="text" name="account_number"
                    :value="old('account_number')" autocomplete="account_number" value="{{ $user->account_number }}" />

                <x-input-label for="bank" :value="__('Bank')" class="mt-4 mb-2 text-base" />
                <select name="bank" id="bank" class="mt-1 w-full border-gray-400 rounded-lg" value="{{ $user->bank }}">
                    <option value="bri" @if($user->bank == 'bri') selected @endif>Bank BRI</option>
                    <option value="bni" @if($user->bank == 'bni') selected @endif>Bank BNI</option>
                    <option value="mandiri" @if($user->bank == 'mandiri') selected @endif>Bank Mandiri</option>
                </select>

                <x-primary-button type="submit"
                    class="px-4 my-4 font-semibold text-[15px] w-32">SIMPAN</x-primary-button>
            </div>
        </form>
        <div class="flex flex-col md:mx-laptop my-4">
            <h2 class="font-semibold">HAPUS AKUN</h2>
            <p>Setelah akun Anda dihapus, semua sumber daya dan datanya akan dihapus secara permanen. Sebelum menghapus
                akun Anda, harap unduh data atau informasi apa pun yang ingin Anda simpan.</p>

            <a href="{{ route('user.delete') }}">
                <x-primary-button type="submit"
                    class="px-4 my-4 font-semibold text-[15px] w-32 bg-red-600">HAPUS</x-primary-button>
            </a>
        </div>
    </section>
</x-app-layout>